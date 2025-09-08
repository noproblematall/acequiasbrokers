<?php

namespace App\Livewire\Components\Public;

use App\Models\BaseModel;
use App\Models\Broker;
use App\Models\Personalization;
use Livewire\Component;

class Section4 extends Component
{
    public $broker;
    public $section_4_bg_color;
    public $section_4_is_disabled;
    public $section_4_picture_link;
    public $section_4_button_link;
    
    // Line 1 styling
    public $section_4_line_1;
    public $section_4_line_1_font_name;
    public $section_4_line_1_font_weight;
    public $section_4_line_1_font_size;
    public $section_4_line_1_font_color;
    public $section_4_line_1_text_alignment;
    
    // Line 2 styling
    public $section_4_line_2;
    public $section_4_line_2_font_name;
    public $section_4_line_2_font_weight;
    public $section_4_line_2_font_size;
    public $section_4_line_2_font_color;
    public $section_4_line_2_text_alignment;
    
    // Button styling
    public $section_4_button_1_bg_color;
    public $section_4_button_1_font_name;
    public $section_4_button_1_font_weight;
    public $section_4_button_1_font_size;
    public $section_4_button_1_font_color;
    public $section_4_button_1_text_alignment;
    public $section_4_button_1_icon_link;

    public function mount($broker = null)
    {
        $this->broker = $broker;
        
        $this->section_4_bg_color = BaseModel::getOptionValue('section_4_bg_color', '#63666a');
        $this->section_4_is_disabled = BaseModel::getOptionValue('section_4_is_disabled', false);
        $this->section_4_picture_link = BaseModel::getOptionValue('section_4_picture_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/4/section4pic.png');
        
        // Get styling options
        $this->section_4_line_1 = BaseModel::getOptionValue('section_4_line_1');
        $this->section_4_line_1_font_name = BaseModel::getOptionValue('section_4_line_1_font_name', 'Helvetica Neue');
        $this->section_4_line_1_font_weight = BaseModel::getOptionValue('section_4_line_1_font_weight', 'font-normal');
        $this->section_4_line_1_font_size = BaseModel::getOptionValue('section_4_line_1_font_size', 'text-2xl');
        $this->section_4_line_1_font_color = BaseModel::getOptionValue('section_4_line_1_font_color', '#ffffff');
        $this->section_4_line_1_text_alignment = BaseModel::getOptionValue('section_4_line_1_text_alignment', 'text-center');
        
        $this->section_4_line_2 = BaseModel::getOptionValue('section_4_line_2');
        $this->section_4_line_2_font_name = BaseModel::getOptionValue('section_4_line_2_font_name', 'Helvetica Neue');
        $this->section_4_line_2_font_weight = BaseModel::getOptionValue('section_4_line_2_font_weight', 'font-normal');
        $this->section_4_line_2_font_size = BaseModel::getOptionValue('section_4_line_2_font_size', 'text-lg');
        $this->section_4_line_2_font_color = BaseModel::getOptionValue('section_4_line_2_font_color', '#ffffff');
        $this->section_4_line_2_text_alignment = BaseModel::getOptionValue('section_4_line_2_text_alignment', 'text-center');
        
        $this->section_4_button_1_bg_color = BaseModel::getOptionValue('section_4_button_1_bg_color', '#004de6');
        $this->section_4_button_1_font_name = BaseModel::getOptionValue('section_4_button_1_font_name', 'Ubuntu');
        $this->section_4_button_1_font_weight = BaseModel::getOptionValue('section_4_button_1_font_weight', 'font-normal');
        $this->section_4_button_1_font_size = BaseModel::getOptionValue('section_4_button_1_font_size', 'text-base');
        $this->section_4_button_1_font_color = BaseModel::getOptionValue('section_4_button_1_font_color', '#ffffff');
        $this->section_4_button_1_text_alignment = BaseModel::getOptionValue('section_4_button_1_text_alignment', 'text-center');
        $this->section_4_button_1_icon_link = BaseModel::getOptionValue('section_4_button_1_icon_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/4/calendaricon.png');
        
        // Override with broker personalization if exists
        if ($this->broker) {
            $personalization = Personalization::where('broker_id', $this->broker->id)->first();
            if ($personalization && $personalization->section_4_button_link) {
                $this->section_4_button_link = $personalization->section_4_button_link;
            }
        }
    }

    public function render()
    {
        return view('livewire.components.public.section4');
    }
}