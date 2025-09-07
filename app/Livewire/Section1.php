<?php

namespace App\Livewire;

use App\Models\BaseModel;
use Livewire\Component;

class Section1 extends Component
{
    public $section_1_logo_link;
    public $section_1_logo_width;
    public $section_1_bg_color;
    public $section_1_is_disabled;

    public function mount()
    {
        $this->section_1_logo_link = BaseModel::getOptionValue('section_1_logo_link');
        $this->section_1_logo_width = BaseModel::getOptionValue('section_1_logo_width', '100');
        $this->section_1_bg_color = BaseModel::getOptionValue('section_1_bg_color', '#ffffff');
        $this->section_1_is_disabled = BaseModel::getOptionValue('section_1_is_disabled', false);
    }

    public function render()
    {
        return view('livewire.section1');
    }
}