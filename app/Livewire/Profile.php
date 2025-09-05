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
    public string $first_name;

    #[Validate('required|string|max:255')]
    public string $last_name;

    #[Validate('required|email|unique:users,email')]
    public string $email;

    #[Validate('nullable|image|max:2048')]
    public $profile_image;

    #[Validate('nullable|min:8|confirmed')]
    public string $password = '';

    #[Validate('nullable')]
    public string $password_confirmation = '';

    #[Validate('nullable')]
    public string $current_password = '';

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

    public function updateProfile()
    {
        $this->validate();

        $user = Auth::user();
        
        $updateData = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
        ];

        if ($this->profile_image) {
            // Delete old image if exists
            if ($user->profile_image) {
                Storage::disk('public')->delete($user->profile_image);
            }
            
            // Store new image
            $imagePath = $this->profile_image->store('profile-images', 'public');
            $updateData['profile_image'] = $imagePath;
        }

        // Handle password update
        if ($this->password) {
            // Verify current password if trying to change password
            if (!$this->current_password) {
                $this->addError('current_password', 'Current password is required to change password.');
                return;
            }
            
            if (!Hash::check($this->current_password, $user->password)) {
                $this->addError('current_password', 'The current password is incorrect.');
                return;
            }
            
            $updateData['password'] = Hash::make($this->password);
        }

        $user->update($updateData);

        $this->current_password = '';
        $this->password = '';
        $this->password_confirmation = '';
        $this->profile_image = null;

        session()->flash('message', 'Profile updated successfully!');
    }

    public function render()
    {
        return view('livewire.profile')->layout('components.layouts.app');
    }
}
