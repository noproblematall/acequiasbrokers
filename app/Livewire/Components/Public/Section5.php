<?php

namespace App\Livewire\Components\Public;

use App\Models\BaseModel;
use App\Models\Broker;
use App\Models\Personalization;
use Livewire\Component;

class Section5 extends Component
{
    public $broker;
    public $section_5_bg_color;
    public $section_5_is_disabled;
    public $section_5_button_link;
    
    // Rectangle 1
    public $section_5_rect1_icon_link;
    public $section_5_rect1_title;
    public $section_5_rect1_title_font_name;
    public $section_5_rect1_title_font_weight;
    public $section_5_rect1_title_font_size;
    public $section_5_rect1_title_font_color;
    public $section_5_rect1_title_text_alignment;
    
    // Rectangle 2
    public $section_5_rect2_image_link;
    public $section_5_rect2_title;
    public $section_5_rect2_title_font_name;
    public $section_5_rect2_title_font_weight;
    public $section_5_rect2_title_font_size;
    public $section_5_rect2_title_font_color;
    public $section_5_rect2_title_text_alignment;
    
    public $section_5_rect2_text;
    public $section_5_rect2_text_font_name;
    public $section_5_rect2_text_font_weight;
    public $section_5_rect2_text_font_size;
    public $section_5_rect2_text_font_color;
    public $section_5_rect2_text_text_alignment;
    
    // Button styling
    public $section_5_button_bg_color;
    public $section_5_button_font_color;
    public $section_5_button_font_name;
    public $section_5_button_font_weight;
    public $section_5_button_font_size;
    public $section_5_button_text_alignment;
    public $section_5_button_text;
    public $section_5_button_icon_link;

    public function mount($broker = null)
    {
        if (!$broker) {
            $this->broker = Broker::first();
        } else {
            $this->broker = is_numeric($broker) ? Broker::find($broker) : $broker;
        }
        
        $this->section_5_bg_color = BaseModel::getOptionValue('section_5_bg_color', '#31cbfc');
        $this->section_5_is_disabled = BaseModel::getOptionValue('section_5_is_disabled', false);
        
        // Rectangle 1
        $this->section_5_rect1_icon_link = BaseModel::getOptionValue('section_5_rect1_icon_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/5/ventaico.png');
        $this->section_5_rect1_title = BaseModel::getOptionValue('section_5_rect1_title', '¡QUIERO VENDER UN INMUEBLE!');
        $this->section_5_rect1_title_font_name = BaseModel::getOptionValue('section_5_rect1_title_font_name', 'Geometos');
        $this->section_5_rect1_title_font_weight = BaseModel::getOptionValue('section_5_rect1_title_font_weight', 'font-bold');
        $this->section_5_rect1_title_font_size = BaseModel::getOptionValue('section_5_rect1_title_font_size', 'text-lg');
        $this->section_5_rect1_title_font_color = BaseModel::getOptionValue('section_5_rect1_title_font_color', '#2d2926');
        $this->section_5_rect1_title_text_alignment = BaseModel::getOptionValue('section_5_rect1_title_text_alignment', 'text-left');
        
        // Rectangle 2
        $this->section_5_rect2_image_link = BaseModel::getOptionValue('section_5_rect2_image_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/5/ventapic.png');
        $this->section_5_rect2_title = BaseModel::getOptionValue('section_5_rect2_title', 'PUBLICAMOS TU INMUEBLE CON RECORRIDOS VIRTUALES 360°');
        $this->section_5_rect2_title_font_name = BaseModel::getOptionValue('section_5_rect2_title_font_name', 'Geometos');
        $this->section_5_rect2_title_font_weight = BaseModel::getOptionValue('section_5_rect2_title_font_weight', 'font-bold');
        $this->section_5_rect2_title_font_size = BaseModel::getOptionValue('section_5_rect2_title_font_size', 'text-lg');
        $this->section_5_rect2_title_font_color = BaseModel::getOptionValue('section_5_rect2_title_font_color', '#2d2926');
        $this->section_5_rect2_title_text_alignment = BaseModel::getOptionValue('section_5_rect2_title_text_alignment', 'text-center');
        
        $this->section_5_rect2_text = BaseModel::getOptionValue('section_5_rect2_text', 'Con un sistema único que integra recorridos virtuales 360° y visitas presenciales, atraemos más compradores calificados y reducimos los tiempos de venta.');
        $this->section_5_rect2_text_font_name = BaseModel::getOptionValue('section_5_rect2_text_font_name', 'Ubuntu');
        $this->section_5_rect2_text_font_weight = BaseModel::getOptionValue('section_5_rect2_text_font_weight', 'font-normal');
        $this->section_5_rect2_text_font_size = BaseModel::getOptionValue('section_5_rect2_text_font_size', 'text-base');
        $this->section_5_rect2_text_font_color = BaseModel::getOptionValue('section_5_rect2_text_font_color', '#2d2926');
        $this->section_5_rect2_text_text_alignment = BaseModel::getOptionValue('section_5_rect2_text_text_alignment', 'text-center');
        
        // Button
        $this->section_5_button_bg_color = BaseModel::getOptionValue('section_5_button_bg_color', '#004de6');
        $this->section_5_button_font_color = BaseModel::getOptionValue('section_5_button_font_color', '#ffffff');
        $this->section_5_button_font_name = BaseModel::getOptionValue('section_5_button_font_name', 'Ubuntu');
        $this->section_5_button_font_weight = BaseModel::getOptionValue('section_5_button_font_weight', 'font-normal');
        $this->section_5_button_font_size = BaseModel::getOptionValue('section_5_button_font_size', 'text-base');
        $this->section_5_button_text_alignment = BaseModel::getOptionValue('section_5_button_text_alignment', 'text-center');
        $this->section_5_button_text = BaseModel::getOptionValue('section_5_button_text', 'Clic para saber más');
        $this->section_5_button_icon_link = BaseModel::getOptionValue('section_5_button_icon_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/5/informationico.png');
        
        // Override with broker personalization if exists
        if ($this->broker) {
            $personalization = Personalization::where('broker_id', $this->broker->id)->first();
            if ($personalization && $personalization->section_5_button_link) {
                $this->section_5_button_link = $personalization->section_5_button_link;
            }
        }
    }

    public function render()
    {
        return view('livewire.components.public.section5');
    }
}