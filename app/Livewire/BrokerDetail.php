<?php

namespace App\Livewire;

use App\Models\Broker;
use Livewire\Component;

class BrokerDetail extends Component
{
    public Broker $broker;

    public function mount(Broker $broker)
    {
        $this->broker = $broker;
    }

    public function render()
    {
        return view('livewire.broker-detail')->layout('components.layouts.app');
    }
}