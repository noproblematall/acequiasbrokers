<?php

namespace App\Livewire\Components\Public;

use App\Models\BaseModel;
use App\Models\Broker;
use App\Models\Personalization;
use Livewire\Component;

class Section9 extends Component
{
    public $broker;
    
    // Section properties
    public $section_9_is_disabled;
    public $section_9_bg_color;
    
    // Rectangle 1
    public $section_9_rect1_icon_url;
    public $section_9_rect1_title;
    public $section_9_rect1_title_font_name;
    public $section_9_rect1_title_font_weight;
    public $section_9_rect1_title_font_size;
    public $section_9_rect1_title_font_color;
    public $section_9_rect1_title_text_alignment;
    
    // Rectangle 2
    public $section_9_rect2_image_url;
    public $section_9_rect2_text;
    public $section_9_rect2_text_font_name;
    public $section_9_rect2_text_font_weight;
    public $section_9_rect2_text_font_size;
    public $section_9_rect2_text_font_color;
    public $section_9_rect2_text_text_alignment;
    
    // Button
    public $section_9_button_bg_color;
    public $section_9_button_font_color;
    public $section_9_button_font_name;
    public $section_9_button_font_weight;
    public $section_9_button_font_size;
    public $section_9_button_text_alignment;
    public $section_9_button_text;

    //Button link
    public $section_9_button_link;

    public function mount($broker = null)
    {
        if (!$broker) {
            $this->broker = Broker::first();
        } else {
            $this->broker = is_numeric($broker) ? Broker::find($broker) : $broker;
        }
        
        // Load base model values
        $this->section_9_is_disabled = (bool) BaseModel::getOptionValue('section_9_is_disabled', 0);
        $this->section_9_bg_color = BaseModel::getOptionValue('section_9_bg_color', '#89d4e3');
        
        // Rectangle 1
        $this->section_9_rect1_icon_url = BaseModel::getOptionValue('section_9_rect1_icon_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/9/locationico.png');
        $this->section_9_rect1_title = BaseModel::getOptionValue('section_9_rect1_title', 'CONOCÉ NUESTRA OFICINA');
        $this->section_9_rect1_title_font_name = BaseModel::getOptionValue('section_9_rect1_title_font_name', 'Geometos');
        $this->section_9_rect1_title_font_weight = BaseModel::getOptionValue('section_9_rect1_title_font_weight', 'font-normal');
        $this->section_9_rect1_title_font_size = BaseModel::getOptionValue('section_9_rect1_title_font_size', 'text-lg');
        $this->section_9_rect1_title_font_color = BaseModel::getOptionValue('section_9_rect1_title_font_color', '#2d2926');
        $this->section_9_rect1_title_text_alignment = BaseModel::getOptionValue('section_9_rect1_title_text_alignment', 'text-left');
        
        // Rectangle 2
        $this->section_9_rect2_image_url = BaseModel::getOptionValue('section_9_rect2_image_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/9/OficinaPic.jpg');
        $this->section_9_rect2_text = BaseModel::getOptionValue('section_9_rect2_text', 'Santiago de Liniers 302');
        $this->section_9_rect2_text_font_name = BaseModel::getOptionValue('section_9_rect2_text_font_name', 'Ubuntu');
        $this->section_9_rect2_text_font_weight = BaseModel::getOptionValue('section_9_rect2_text_font_weight', 'font-normal');
        $this->section_9_rect2_text_font_size = BaseModel::getOptionValue('section_9_rect2_text_font_size', 'text-base');
        $this->section_9_rect2_text_font_color = BaseModel::getOptionValue('section_9_rect2_text_font_color', '#2d2926');
        $this->section_9_rect2_text_text_alignment = BaseModel::getOptionValue('section_9_rect2_text_text_alignment', 'text-left');
        
        // Button
        $this->section_9_button_bg_color = BaseModel::getOptionValue('section_9_button_bg_color', '#004de6');
        $this->section_9_button_font_color = BaseModel::getOptionValue('section_9_button_font_color', '#ffffff');
        $this->section_9_button_font_name = BaseModel::getOptionValue('section_9_button_font_name', 'Ubuntu');
        $this->section_9_button_font_weight = BaseModel::getOptionValue('section_9_button_font_weight', 'font-normal');
        $this->section_9_button_font_size = BaseModel::getOptionValue('section_9_button_font_size', 'text-base');
        $this->section_9_button_text_alignment = BaseModel::getOptionValue('section_9_button_text_alignment', 'text-center');
        $this->section_9_button_text = BaseModel::getOptionValue('section_9_button_text', '¿Cómo llego?');
        
        // Load personalization if broker exists
        if ($this->broker) {
            $personalization = Personalization::where('broker_id', $this->broker->id)->first();
            if ($personalization) {
                if ($personalization->section_9_button_link) {
                    $this->section_9_button_link = $personalization->section_9_button_link;
                }
            }
        }
    }

    public function render()
    {
        return view('livewire.components.public.section9');
    }
}