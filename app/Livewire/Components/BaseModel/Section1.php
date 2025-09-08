<?php

namespace App\Livewire\Components\BaseModel;

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

    public function updateSection1()
    {
        BaseModel::setOptionValue('section_1_logo_link', $this->section_1_logo_link);
        BaseModel::setOptionValue('section_1_logo_width', $this->section_1_logo_width);
        BaseModel::setOptionValue('section_1_bg_color', $this->section_1_bg_color);
        BaseModel::setOptionValue('section_1_is_disabled', $this->section_1_is_disabled);
        
        session()->flash('message', 'Section 1 updated successfully!');
    }

    public function render()
    {
        return view('livewire.components.base-model.section1');
    }
}