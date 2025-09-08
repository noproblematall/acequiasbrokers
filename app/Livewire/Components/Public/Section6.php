<?php

namespace App\Livewire\Components\Public;

use App\Models\BaseModel;
use App\Models\Broker;
use App\Models\Personalization;
use Livewire\Component;

class Section6 extends Component
{
    public $broker;
    
    // Section properties
    public $section_6_is_disabled;
    public $section_6_bg_color;
    
    // Rectangle 1
    public $section_6_rect1_icon_link;
    public $section_6_rect1_title;
    public $section_6_rect1_title_font_name;
    public $section_6_rect1_title_font_weight;
    public $section_6_rect1_title_font_size;
    public $section_6_rect1_title_font_color;
    public $section_6_rect1_title_text_alignment;
    
    // Rectangle 2
    public $section_6_rect2_image_link;
    public $section_6_rect2_title;
    public $section_6_rect2_title_font_name;
    public $section_6_rect2_title_font_weight;
    public $section_6_rect2_title_font_size;
    public $section_6_rect2_title_font_color;
    public $section_6_rect2_title_text_alignment;
    
    public $section_6_rect2_text;
    public $section_6_rect2_text_font_name;
    public $section_6_rect2_text_font_weight;
    public $section_6_rect2_text_font_size;
    public $section_6_rect2_text_font_color;
    public $section_6_rect2_text_text_alignment;
    
    // Button
    public $section_6_button_bg_color;
    public $section_6_button_font_color;
    public $section_6_button_font_name;
    public $section_6_button_font_weight;
    public $section_6_button_font_size;
    public $section_6_button_text_alignment;
    public $section_6_button_text;
    public $section_6_button_icon_link;
    public $section_6_button_link;

    public function mount($broker = null)
    {
        $this->broker = $broker;
        
        // Load base model values
        $this->section_6_is_disabled = (bool) BaseModel::getOptionValue('section_6_is_disabled', 0);
        $this->section_6_bg_color = BaseModel::getOptionValue('section_6_bg_color', '#01c8c5');
        
        // Rectangle 1
        $this->section_6_rect1_icon_link = BaseModel::getOptionValue('section_6_rect1_icon_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/6/compraico.png');
        $this->section_6_rect1_title = BaseModel::getOptionValue('section_6_rect1_title', '¡QUIERO COMPRAR UN INMUEBLE!');
        $this->section_6_rect1_title_font_name = BaseModel::getOptionValue('section_6_rect1_title_font_name', 'Arial');
        $this->section_6_rect1_title_font_weight = BaseModel::getOptionValue('section_6_rect1_title_font_weight', 'font-bold');
        $this->section_6_rect1_title_font_size = BaseModel::getOptionValue('section_6_rect1_title_font_size', 'text-lg');
        $this->section_6_rect1_title_font_color = BaseModel::getOptionValue('section_6_rect1_title_font_color', '#2d2926');
        $this->section_6_rect1_title_text_alignment = BaseModel::getOptionValue('section_6_rect1_title_text_alignment', 'text-left');
        
        // Rectangle 2
        $this->section_6_rect2_image_link = BaseModel::getOptionValue('section_6_rect2_image_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/6/comprapic.png');
        $this->section_6_rect2_title = BaseModel::getOptionValue('section_6_rect2_title', 'TU ESPACIO PERFECTO ESTÁ MÁS CERCA DE LO QUE IMAGINÁS');
        $this->section_6_rect2_title_font_name = BaseModel::getOptionValue('section_6_rect2_title_font_name', 'Arial');
        $this->section_6_rect2_title_font_weight = BaseModel::getOptionValue('section_6_rect2_title_font_weight', 'font-bold');
        $this->section_6_rect2_title_font_size = BaseModel::getOptionValue('section_6_rect2_title_font_size', 'text-lg');
        $this->section_6_rect2_title_font_color = BaseModel::getOptionValue('section_6_rect2_title_font_color', '#2d2926');
        $this->section_6_rect2_title_text_alignment = BaseModel::getOptionValue('section_6_rect2_title_text_alignment', 'text-center');
        
        $this->section_6_rect2_text = BaseModel::getOptionValue('section_6_rect2_text', 'Nuestro método exclusivo permite recorrer inmuebles virtualmente y en detalle antes de visitarlos. Ahorrás tiempo, elegís mejor y accedés antes a oportunidades.');
        $this->section_6_rect2_text_font_name = BaseModel::getOptionValue('section_6_rect2_text_font_name', 'Inter');
        $this->section_6_rect2_text_font_weight = BaseModel::getOptionValue('section_6_rect2_text_font_weight', 'font-bold');
        $this->section_6_rect2_text_font_size = BaseModel::getOptionValue('section_6_rect2_text_font_size', 'text-base');
        $this->section_6_rect2_text_font_color = BaseModel::getOptionValue('section_6_rect2_text_font_color', '#2d2926');
        $this->section_6_rect2_text_text_alignment = BaseModel::getOptionValue('section_6_rect2_text_text_alignment', 'text-center');
        
        // Button
        $this->section_6_button_bg_color = BaseModel::getOptionValue('section_6_button_bg_color', '#004de6');
        $this->section_6_button_font_color = BaseModel::getOptionValue('section_6_button_font_color', '#ffffff');
        $this->section_6_button_font_name = BaseModel::getOptionValue('section_6_button_font_name', 'Inter');
        $this->section_6_button_font_weight = BaseModel::getOptionValue('section_6_button_font_weight', 'font-bold');
        $this->section_6_button_font_size = BaseModel::getOptionValue('section_6_button_font_size', 'text-lg');
        $this->section_6_button_text_alignment = BaseModel::getOptionValue('section_6_button_text_alignment', 'text-center');
        $this->section_6_button_text = BaseModel::getOptionValue('section_6_button_text', 'Clic para saber más');
        $this->section_6_button_icon_link = BaseModel::getOptionValue('section_6_button_icon_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/6/informationico.png');
        
        // Load personalization if broker exists
        if ($this->broker) {
            $personalization = Personalization::where('broker_id', $this->broker->id)->first();
            if ($personalization && $personalization->section_6_button_link) {
                $this->section_6_button_link = $personalization->section_6_button_link;
            }
        }
    }

    public function render()
    {
        return view('livewire.components.public.section6');
    }
}