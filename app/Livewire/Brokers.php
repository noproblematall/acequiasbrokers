<?php

namespace App\Livewire;

use App\Models\Broker;
use Livewire\Component;

class Brokers extends Component
{
    
    public function render()
    {
        return view('livewire.brokers', [
            'brokers' => Broker::latest()->get()
        ])->layout('components.layouts.app');
    }
}
