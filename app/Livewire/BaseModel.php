<?php

namespace App\Livewire;

use App\Models\BaseModel as BaseModelModel;
use Livewire\Component;

class BaseModel extends Component
{
    public $landing_bg_color = '#ffffff';

    public function mount()
    {
        $this->landing_bg_color = BaseModelModel::getOptionValue('landing_bg_color', '#ffffff');
    }

    public function updateBaseModel()
    {
        BaseModelModel::setOptionValue('landing_bg_color', $this->landing_bg_color);
        
        session()->flash('message', 'Base model settings updated successfully!');
    }

    public function render()
    {
        return view('livewire.base-model')->layout('components.layouts.app');
    }
}