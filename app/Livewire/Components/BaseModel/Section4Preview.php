<?php

namespace App\Livewire\Components\BaseModel;

use App\Models\BaseModel;
use App\Models\Broker;
use Livewire\Component;

class Section4Preview extends Component
{
    public $section_4_bg_color;
    public $section_4_picture_link;
    public $section_4_line_1;
    public $section_4_line_1_font_color;
    public $section_4_line_1_font_name;
    public $section_4_line_1_font_weight;
    public $section_4_line_1_font_size;
    public $section_4_line_1_text_alignment;
    public $section_4_line_2;
    public $section_4_line_2_font_color;
    public $section_4_line_2_font_name;
    public $section_4_line_2_font_weight;
    public $section_4_line_2_font_size;
    public $section_4_line_2_text_alignment;
    public $section_4_button_link;
    public $section_4_button_1_text;
    public $section_4_button_1_bg_color;
    public $section_4_button_1_font_color;
    public $section_4_button_1_font_name;
    public $section_4_button_1_font_weight;
    public $section_4_button_1_font_size;
    public $section_4_button_1_text_alignment;
    public $section_4_button_1_icon_link;
    public $section_4_is_disabled;
    public $broker;

    public function mount($broker = null)
    {
        if (!$broker) {
            $this->broker = Broker::first();
        } else {
            $this->broker = is_numeric($broker) ? Broker::find($broker) : $broker;
        }

        $this->section_4_bg_color = BaseModel::getOptionValue('section_4_bg_color', '#ffffff');
        $this->section_4_picture_link = BaseModel::getOptionValue('section_4_picture_link');
        $this->section_4_line_1 = BaseModel::getOptionValue('section_4_line_1');
        $this->section_4_line_1_font_color = BaseModel::getOptionValue('section_4_line_1_font_color', '#000000');
        $this->section_4_line_1_font_name = BaseModel::getOptionValue('section_4_line_1_font_name', 'Arial');
        $this->section_4_line_1_font_weight = BaseModel::getOptionValue('section_4_line_1_font_weight', 'font-normal');
        $this->section_4_line_1_font_size = BaseModel::getOptionValue('section_4_line_1_font_size', 'text-base');
        $this->section_4_line_1_text_alignment = BaseModel::getOptionValue('section_4_line_1_text_alignment', 'text-left');
        $this->section_4_line_2 = BaseModel::getOptionValue('section_4_line_2');
        $this->section_4_line_2_font_color = BaseModel::getOptionValue('section_4_line_2_font_color', '#000000');
        $this->section_4_line_2_font_name = BaseModel::getOptionValue('section_4_line_2_font_name', 'Arial');
        $this->section_4_line_2_font_weight = BaseModel::getOptionValue('section_4_line_2_font_weight', 'font-normal');
        $this->section_4_line_2_font_size = BaseModel::getOptionValue('section_4_line_2_font_size', 'text-base');
        $this->section_4_line_2_text_alignment = BaseModel::getOptionValue('section_4_line_2_text_alignment', 'text-left');
        $this->section_4_button_link = BaseModel::getOptionValue('section_4_button_link');
        $this->section_4_button_1_text = BaseModel::getOptionValue('section_4_button_1_text');
        $this->section_4_button_1_bg_color = BaseModel::getOptionValue('section_4_button_1_bg_color', '#3b82f6');
        $this->section_4_button_1_font_color = BaseModel::getOptionValue('section_4_button_1_font_color', '#ffffff');
        $this->section_4_button_1_font_name = BaseModel::getOptionValue('section_4_button_1_font_name', 'Arial');
        $this->section_4_button_1_font_weight = BaseModel::getOptionValue('section_4_button_1_font_weight', 'font-normal');
        $this->section_4_button_1_font_size = BaseModel::getOptionValue('section_4_button_1_font_size', 'text-base');
        $this->section_4_button_1_text_alignment = BaseModel::getOptionValue('section_4_button_1_text_alignment', 'text-left');
        $this->section_4_button_1_icon_link = BaseModel::getOptionValue('section_4_button_1_icon_link');
        $this->section_4_is_disabled = BaseModel::getOptionValue('section_4_is_disabled', false);
    }

    public function render()
    {
        return view('livewire.components.base-model.section4-preview');
    }
}