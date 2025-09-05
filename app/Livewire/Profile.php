<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    #[Validate('required|string|max:255')]
    public string $first_name = '';

    #[Validate('required|string|max:255')]
    public string $last_name = '';

    #[Validate('required|email|unique:users,email')]
    public string $email = '';

    #[Validate('nullable|image|max:2048')]
    public $profile_image;

    #[Validate('nullable|min:8|confirmed')]
    public string $password = '';

    #[Validate('nullable')]
    public string $password_confirmation = '';

    #[Validate('nullable')]
    public string $current_password = '';

    public function clearProfileImage()
    {
        $this->profile_image = null;
    }

    public function removeProfileImage()
    {
        $user = Auth::user();
        
        if ($user->profile_image) {
            // Delete the file from storage
            Storage::disk('public')->delete($user->profile_image);
            
            // Update user record
            $user->update(['profile_image' => null]);
            
            session()->flash('message', 'Profile image removed successfully!');
        }
    }

    public function updatedProfileImage()
    {
        // This runs when profile_image is updated
        if ($this->profile_image) {
            // Additional server-side validation
            $this->validate([
                'profile_image' => 'image|mimes:jpeg,jpg,png,gif|max:2048'
            ]);
        }
    }

    public function mount()
    {
        $user = Auth::user();
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->email = $user->email;
    }

    protected function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'profile_image' => 'nullable|image|max:2048',
            'password' => 'nullable|min:8|confirmed',
        ];
    }

    public function updateUserInfo()
    {
        $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'profile_image' => 'nullable|image|max:2048',
        ]);

        $user = Auth::user();
        
        $updateData = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
        ];

        if ($this->profile_image) {
            // Delete old image if exists
            if ($user->profile_image) {
                Storage::disk('public')->delete($user->profile_image);
            }
            
            // Store new image in user-specific directory
            $userDirectory = 'uploads/users/' . $user->id;
            $filename = 'profile_image_' . time() . '.' . $this->profile_image->getClientOriginalExtension();
            $imagePath = $this->profile_image->storeAs($userDirectory, $filename, 'public');
            $updateData['profile_image'] = $imagePath;
        }

        $user->update($updateData);

        $this->profile_image = null;

        session()->flash('message', 'Personal information updated successfully!');
    }

    public function updateEmail()
    {
        $this->validate([
            'email' => 'required|email|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->update(['email' => $this->email]);

        session()->flash('message', 'Email address updated successfully!');
    }

    public function updatePassword()
    {
        $this->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($this->current_password, $user->password)) {
            $this->addError('current_password', 'The current password is incorrect.');
            return;
        }

        $user->update(['password' => Hash::make($this->password)]);

        $this->current_password = '';
        $this->password = '';
        $this->password_confirmation = '';

        session()->flash('message', 'Password updated successfully!');
    }

    public function render()
    {
        return view('livewire.profile')->layout('components.layouts.app');
    }
}
