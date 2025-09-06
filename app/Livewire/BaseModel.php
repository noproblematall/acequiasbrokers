<?php

namespace App\Livewire;

use Livewire\Component;

class BaseModel extends Component
{
    public function render()
    {
        return view('livewire.base-model')->layout('components.layouts.app');
    }
}