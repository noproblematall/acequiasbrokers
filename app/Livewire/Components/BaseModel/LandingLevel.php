<?php

namespace App\Livewire\Components\BaseModel;

use App\Models\BaseModel;
use Livewire\Component;

class LandingLevel extends Component
{
    public $landing_bg_color;

    public function mount()
    {
        $this->landing_bg_color = BaseModel::getOptionValue('landing_bg_color', '#ffffff');
    }

    public function updateLandingLevel()
    {
        BaseModel::setOptionValue('landing_bg_color', $this->landing_bg_color);
        
        session()->flash('message', 'Landing level updated successfully!');
        $this->dispatch('toast', message: 'Landing level updated successfully!', type: 'success');
    }

    public function render()
    {
        return view('livewire.components.base-model.landing-level');
    }
}