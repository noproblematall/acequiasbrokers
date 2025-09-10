<?php

namespace App\Livewire\Components\Public;

use App\Models\BaseModel;
use App\Models\Broker;
use App\Models\Personalization;
use Livewire\Component;

class Section10 extends Component
{
    public $broker;
    
    // Section properties
    public $section_10_is_disabled;
    public $section_10_bg_color;
    
    // Rectangle 1
    public $section_10_rect1_icon_url;
    public $section_10_rect1_title;
    public $section_10_rect1_title_font_name;
    public $section_10_rect1_title_font_weight;
    public $section_10_rect1_title_font_size;
    public $section_10_rect1_title_font_color;
    public $section_10_rect1_title_text_alignment;
    
    // Rectangle 2 - Icons
    public $section_10_icon1_url;
    public $section_10_icon1_link;
    public $section_10_icon2_url;
    public $section_10_icon2_link;
    public $section_10_icon3_url;
    public $section_10_icon3_link;

    public function mount($broker = null)
    {
        if (!$broker) {
            $this->broker = Broker::first();
        } else {
            $this->broker = is_numeric($broker) ? Broker::find($broker) : $broker;
        }
        
        // Load base model values
        $this->section_10_is_disabled = (bool) BaseModel::getOptionValue('section_10_is_disabled', 0);
        $this->section_10_bg_color = BaseModel::getOptionValue('section_10_bg_color', '#a7a9ac');
        
        // Rectangle 1
        $this->section_10_rect1_icon_url = BaseModel::getOptionValue('section_10_rect1_icon_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/10/seguimeico.png');
        $this->section_10_rect1_title = BaseModel::getOptionValue('section_10_rect1_title', 'SEGUIME EN REDES SOCIALES');
        $this->section_10_rect1_title_font_name = BaseModel::getOptionValue('section_10_rect1_title_font_name', 'Geometos');
        $this->section_10_rect1_title_font_weight = BaseModel::getOptionValue('section_10_rect1_title_font_weight', 'font-normal');
        $this->section_10_rect1_title_font_size = BaseModel::getOptionValue('section_10_rect1_title_font_size', 'text-lg');
        $this->section_10_rect1_title_font_color = BaseModel::getOptionValue('section_10_rect1_title_font_color', '#2d2926');
        $this->section_10_rect1_title_text_alignment = BaseModel::getOptionValue('section_10_rect1_title_text_alignment', 'text-left');
        
        // Rectangle 2 - Icons
        $this->section_10_icon1_url = BaseModel::getOptionValue('section_10_icon1_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/10/instaico.png');
        $this->section_10_icon1_link = BaseModel::getOptionValue('section_10_icon1_link', '#');
        $this->section_10_icon2_url = BaseModel::getOptionValue('section_10_icon2_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/10/facebico.png');
        $this->section_10_icon2_link = BaseModel::getOptionValue('section_10_icon2_link', '#');
        $this->section_10_icon3_url = BaseModel::getOptionValue('section_10_icon3_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/10/linkdico.png');
        $this->section_10_icon3_link = BaseModel::getOptionValue('section_10_icon3_link', '#');
        
        // Load personalization if broker exists
        if ($this->broker) {
            $personalization = Personalization::where('broker_id', $this->broker->id)->first();
            if ($personalization) {
                if ($personalization->section_10_icon1_link) {
                    $this->section_10_icon1_link = $personalization->section_10_icon1_link;
                }
                if ($personalization->section_10_icon2_link) {
                    $this->section_10_icon2_link = $personalization->section_10_icon2_link;
                }
                if ($personalization->section_10_icon3_link) {
                    $this->section_10_icon3_link = $personalization->section_10_icon3_link;
                }
            }
        }
    }

    public function render()
    {
        return view('livewire.components.public.section10');
    }
}