<?php

namespace App\Livewire;

use App\Models\Broker;
use Livewire\Component;

class Brokers extends Component
{
    public $showModal = false;
    public $selectedBrokerId = null;
    
    public $first_name = '';
    public $last_name = '';
    public $url = '';
    public $email = '';
    
    public $showDeleteModal = false;

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'url' => 'required|string|max:255|unique:brokers,url',
        'email' => 'nullable|email|max:255|unique:brokers,email',
    ];


    public function openModal($brokerId = null)
    {
        $this->selectedBrokerId = $brokerId;
        
        if ($brokerId) {
            $broker = Broker::find($brokerId);
            if ($broker) {
                $this->first_name = $broker->first_name;
                $this->last_name = $broker->last_name;
                $this->url = $broker->url;
                $this->email = $broker->email;
            }
        } else {
            $this->reset(['first_name', 'last_name', 'url', 'email']);
        }
        
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->reset(['first_name', 'last_name', 'url', 'email', 'selectedBrokerId']);
        $this->resetValidation();
    }

    public function saveBroker()
    {
        $rules = $this->rules;
        if ($this->selectedBrokerId) {
            $rules['url'] = 'required|string|max:255|unique:brokers,url,' . $this->selectedBrokerId;
            $rules['email'] = 'nullable|email|max:255|unique:brokers,email,' . $this->selectedBrokerId;
        }

        $this->validate($rules);

        $data = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'url' => $this->url,
            'email' => $this->email,
        ];

        if ($this->selectedBrokerId) {
            Broker::find($this->selectedBrokerId)->update($data);
            session()->flash('message', 'Broker updated successfully!');
        } else {
            Broker::create($data);
            session()->flash('message', 'Broker added successfully!');
        }

        $this->closeModal();
    }

    public function confirmDelete($brokerId)
    {
        $this->selectedBrokerId = $brokerId;
        $this->showDeleteModal = true;
    }

    public function deleteBroker()
    {
        if ($this->selectedBrokerId) {
            Broker::find($this->selectedBrokerId)->delete();
            session()->flash('message', 'Broker deleted successfully!');
        }
        
        $this->showDeleteModal = false;
        $this->selectedBrokerId = null;
    }

    public function cancelDelete()
    {
        $this->showDeleteModal = false;
        $this->selectedBrokerId = null;
    }

    public function getSelectedBrokerProperty()
    {
        return $this->selectedBrokerId ? Broker::find($this->selectedBrokerId) : null;
    }
    
    public function render()
    {
        return view('livewire.brokers', [
            'brokers' => Broker::latest()->get()
        ])->layout('components.layouts.app');
    }
}
