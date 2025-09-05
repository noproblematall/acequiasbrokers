<?php

namespace App\Livewire;

use App\Models\Broker;
use Livewire\Component;

class BrokerPublic extends Component
{
    public Broker $broker;

    public function mount($url)
    {
        $this->broker = Broker::where('url', $url)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.broker-public')->layout('components.layouts.guest');
    }
}