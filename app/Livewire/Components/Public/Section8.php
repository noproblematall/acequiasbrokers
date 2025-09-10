<?php

namespace App\Livewire\Components\Public;

use App\Models\BaseModel;
use App\Models\Broker;
use Livewire\Component;

class Section8 extends Component
{
    protected $listeners = ['refresh-preview-section-8' => 'refreshPreview'];
    public $broker;
    
    // Section properties
    public $section_8_is_disabled;
    public $section_8_bg_color;
    
    // Rectangle 1
    public $section_8_rect1_icon_url;
    public $section_8_rect1_title;
    public $section_8_rect1_title_font_name;
    public $section_8_rect1_title_font_weight;
    public $section_8_rect1_title_font_size;
    public $section_8_rect1_title_font_color;
    public $section_8_rect1_title_text_alignment;
    
    // Rectangle 2
    public $section_8_rect2_title;
    public $section_8_rect2_title_font_name;
    public $section_8_rect2_title_font_weight;
    public $section_8_rect2_title_font_size;
    public $section_8_rect2_title_font_color;
    public $section_8_rect2_title_text_alignment;
    
    // Buttons
    public $section_8_button_bg_color;
    public $section_8_button_font_color;
    public $section_8_button_font_name;
    public $section_8_button_font_weight;
    public $section_8_button_font_size;
    public $section_8_button_text_alignment;
    
    // Button 1 - WhatsApp
    public $section_8_button1_text;
    public $section_8_button1_link;
    public $section_8_button1_icon_url;
    
    // Button 2 - Facebook
    public $section_8_button2_text;
    public $section_8_button2_link;
    public $section_8_button2_icon_url;
    
    // Button 3 - LinkedIn
    public $section_8_button3_text;
    public $section_8_button3_link;
    public $section_8_button3_icon_url;
    
    // Button 4 - Email
    public $section_8_button4_text;
    public $section_8_button4_link;
    public $section_8_button4_icon_url;

    public function mount($broker = null)
    {
        if (!$broker) {
            $this->broker = Broker::first();
        } else {
            $this->broker = is_numeric($broker) ? Broker::find($broker) : $broker;
        }
        
        // Load base model values
        $this->section_8_is_disabled = (bool) BaseModel::getOptionValue('section_8_is_disabled', 0);
        $this->section_8_bg_color = BaseModel::getOptionValue('section_8_bg_color', '#a7a9ac');
        
        // Rectangle 1
        $this->section_8_rect1_icon_url = BaseModel::getOptionValue('section_8_rect1_icon_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/8/connectico.png');
        $this->section_8_rect1_title = BaseModel::getOptionValue('section_8_rect1_title', '¿QUERÉS RECOMENDAR NUESTRA AYUDA?');
        $this->section_8_rect1_title_font_name = BaseModel::getOptionValue('section_8_rect1_title_font_name', 'Geometos');
        $this->section_8_rect1_title_font_weight = BaseModel::getOptionValue('section_8_rect1_title_font_weight', 'font-normal');
        $this->section_8_rect1_title_font_size = BaseModel::getOptionValue('section_8_rect1_title_font_size', 'text-lg');
        $this->section_8_rect1_title_font_color = BaseModel::getOptionValue('section_8_rect1_title_font_color', '#2d2926');
        $this->section_8_rect1_title_text_alignment = BaseModel::getOptionValue('section_8_rect1_title_text_alignment', 'text-left');
        
        // Rectangle 2
        $this->section_8_rect2_title = BaseModel::getOptionValue('section_8_rect2_title', 'Elegí cómo compartir mi sitio con tus contactos');
        $this->section_8_rect2_title_font_name = BaseModel::getOptionValue('section_8_rect2_title_font_name', 'Ubuntu');
        $this->section_8_rect2_title_font_weight = BaseModel::getOptionValue('section_8_rect2_title_font_weight', 'font-normal');
        $this->section_8_rect2_title_font_size = BaseModel::getOptionValue('section_8_rect2_title_font_size', 'text-base');
        $this->section_8_rect2_title_font_color = BaseModel::getOptionValue('section_8_rect2_title_font_color', '#2d2926');
        $this->section_8_rect2_title_text_alignment = BaseModel::getOptionValue('section_8_rect2_title_text_alignment', 'text-left');
        
        // Buttons Shared Style
        $this->section_8_button_bg_color = BaseModel::getOptionValue('section_8_button_bg_color', '#012169');
        $this->section_8_button_font_color = BaseModel::getOptionValue('section_8_button_font_color', '#ffffff');
        $this->section_8_button_font_name = BaseModel::getOptionValue('section_8_button_font_name', 'Ubuntu');
        $this->section_8_button_font_weight = BaseModel::getOptionValue('section_8_button_font_weight', 'font-normal');
        $this->section_8_button_font_size = BaseModel::getOptionValue('section_8_button_font_size', 'text-sm');
        $this->section_8_button_text_alignment = BaseModel::getOptionValue('section_8_button_text_alignment', 'text-center');
        
        // Button 1 - WhatsApp
        $this->section_8_button1_text = BaseModel::getOptionValue('section_8_button1_text', 'Compartir en');
        $this->section_8_button1_link = BaseModel::getOptionValue('section_8_button1_link', 'https://api.whatsapp.com/send?text=[THIS_LANDING_PAGE_URL]');
        $this->section_8_button1_icon_url = BaseModel::getOptionValue('section_8_button1_icon_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/8/WA%2Bicon%2BT.png');
        
        // Button 2 - Facebook
        $this->section_8_button2_text = BaseModel::getOptionValue('section_8_button2_text', 'Compartir en');
        $this->section_8_button2_link = BaseModel::getOptionValue('section_8_button2_link', 'https://www.facebook.com/sharer/sharer.php?u=[THIS_LANDING_PAGE_URL]');
        $this->section_8_button2_icon_url = BaseModel::getOptionValue('section_8_button2_icon_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/8/facebook.png');
        
        // Button 3 - LinkedIn
        $this->section_8_button3_text = BaseModel::getOptionValue('section_8_button3_text', 'Compartir en');
        $this->section_8_button3_link = BaseModel::getOptionValue('section_8_button3_link', 'https://www.linkedin.com/sharing/share-offsite/?url={URL_ENCODED}');
        $this->section_8_button3_icon_url = BaseModel::getOptionValue('section_8_button3_icon_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/8/Linkedin.png');
        
        // Button 4 - Email
        $this->section_8_button4_text = BaseModel::getOptionValue('section_8_button4_text', 'Compartir en');
        $this->section_8_button4_link = BaseModel::getOptionValue('section_8_button4_link', 'mailto:?subject=Mira%20esto&body=Te%20env%C3%ADo%20este%20enlace:%20[THIS_LANDING_PAGE_URL]');
        $this->section_8_button4_icon_url = BaseModel::getOptionValue('section_8_button4_icon_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/8/email.png');
    }

    public function refreshPreview()
    {
        $this->mount($this->broker);
    }

    public function render()
    {
        return view('livewire.components.public.section8');
    }
}