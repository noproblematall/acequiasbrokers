<?php

namespace App\Livewire\Components\BaseModel;

use App\Constants\AppConstants;
use App\Models\BaseModel;
use Livewire\Component;

class Section8 extends Component
{
    public $section_8_is_disabled = false;
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

    public $fontFamilies;
    public $fontWeights;
    public $fontSizes;
    public $textAlignments;

    public function mount()
    {
        // Initialize Section 8
        $this->section_8_is_disabled = (bool) BaseModel::getOptionValue('section_8_is_disabled', 0);
        $this->section_8_bg_color = BaseModel::getOptionValue('section_8_bg_color', '#a7a9ac');
        
        // Rectangle 1
        $this->section_8_rect1_icon_url = BaseModel::getOptionValue('section_8_rect1_icon_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/8/connectico.png');
        $this->section_8_rect1_title = BaseModel::getOptionValue('section_8_rect1_title', '¿QUERÉS RECOMENDAR NUESTRA AYUDA?');
        $this->section_8_rect1_title_font_name = BaseModel::getOptionValue('section_8_rect1_title_font_name', AppConstants::FONT_FAMILIES[0]);
        $this->section_8_rect1_title_font_weight = BaseModel::getOptionValue('section_8_rect1_title_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_8_rect1_title_font_size = BaseModel::getOptionValue('section_8_rect1_title_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_8_rect1_title_font_color = BaseModel::getOptionValue('section_8_rect1_title_font_color', '#2d2926');
        $this->section_8_rect1_title_text_alignment = BaseModel::getOptionValue('section_8_rect1_title_text_alignment', AppConstants::TEXT_ALIGNMENT[0]);
        
        // Rectangle 2
        $this->section_8_rect2_title = BaseModel::getOptionValue('section_8_rect2_title', 'Elegí cómo compartir mi sitio con tus contactos');
        $this->section_8_rect2_title_font_name = BaseModel::getOptionValue('section_8_rect2_title_font_name', AppConstants::FONT_FAMILIES[2]);
        $this->section_8_rect2_title_font_weight = BaseModel::getOptionValue('section_8_rect2_title_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_8_rect2_title_font_size = BaseModel::getOptionValue('section_8_rect2_title_font_size', AppConstants::FONT_SIZES[1]);
        $this->section_8_rect2_title_font_color = BaseModel::getOptionValue('section_8_rect2_title_font_color', '#2d2926');
        $this->section_8_rect2_title_text_alignment = BaseModel::getOptionValue('section_8_rect2_title_text_alignment', AppConstants::TEXT_ALIGNMENT[0]);
        
        // Buttons Shared Style
        $this->section_8_button_bg_color = BaseModel::getOptionValue('section_8_button_bg_color', '#012169');
        $this->section_8_button_font_color = BaseModel::getOptionValue('section_8_button_font_color', '#ffffff');
        $this->section_8_button_font_name = BaseModel::getOptionValue('section_8_button_font_name', AppConstants::FONT_FAMILIES[2]);
        $this->section_8_button_font_weight = BaseModel::getOptionValue('section_8_button_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_8_button_font_size = BaseModel::getOptionValue('section_8_button_font_size', AppConstants::FONT_SIZES[0]);
        $this->section_8_button_text_alignment = BaseModel::getOptionValue('section_8_button_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        
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
        
        // Initialize font arrays
        $this->fontFamilies = AppConstants::FONT_FAMILIES;
        $this->fontWeights = AppConstants::FONT_WEIGHTS;
        $this->fontSizes = AppConstants::FONT_SIZES;
        $this->textAlignments = AppConstants::TEXT_ALIGNMENT;
    }

    public function updateSection8()
    {
        BaseModel::setOptionValue('section_8_is_disabled', $this->section_8_is_disabled);
        BaseModel::setOptionValue('section_8_bg_color', $this->section_8_bg_color);
        
        // Rectangle 1
        BaseModel::setOptionValue('section_8_rect1_icon_url', $this->section_8_rect1_icon_url);
        BaseModel::setOptionValue('section_8_rect1_title', $this->section_8_rect1_title);
        BaseModel::setOptionValue('section_8_rect1_title_font_name', $this->section_8_rect1_title_font_name);
        BaseModel::setOptionValue('section_8_rect1_title_font_weight', $this->section_8_rect1_title_font_weight);
        BaseModel::setOptionValue('section_8_rect1_title_font_size', $this->section_8_rect1_title_font_size);
        BaseModel::setOptionValue('section_8_rect1_title_font_color', $this->section_8_rect1_title_font_color);
        BaseModel::setOptionValue('section_8_rect1_title_text_alignment', $this->section_8_rect1_title_text_alignment);
        
        // Rectangle 2
        BaseModel::setOptionValue('section_8_rect2_title', $this->section_8_rect2_title);
        BaseModel::setOptionValue('section_8_rect2_title_font_name', $this->section_8_rect2_title_font_name);
        BaseModel::setOptionValue('section_8_rect2_title_font_weight', $this->section_8_rect2_title_font_weight);
        BaseModel::setOptionValue('section_8_rect2_title_font_size', $this->section_8_rect2_title_font_size);
        BaseModel::setOptionValue('section_8_rect2_title_font_color', $this->section_8_rect2_title_font_color);
        BaseModel::setOptionValue('section_8_rect2_title_text_alignment', $this->section_8_rect2_title_text_alignment);
        
        // Buttons Shared Style
        BaseModel::setOptionValue('section_8_button_bg_color', $this->section_8_button_bg_color);
        BaseModel::setOptionValue('section_8_button_font_color', $this->section_8_button_font_color);
        BaseModel::setOptionValue('section_8_button_font_name', $this->section_8_button_font_name);
        BaseModel::setOptionValue('section_8_button_font_weight', $this->section_8_button_font_weight);
        BaseModel::setOptionValue('section_8_button_font_size', $this->section_8_button_font_size);
        BaseModel::setOptionValue('section_8_button_text_alignment', $this->section_8_button_text_alignment);
        
        // Button 1 - WhatsApp
        BaseModel::setOptionValue('section_8_button1_text', $this->section_8_button1_text);
        BaseModel::setOptionValue('section_8_button1_link', $this->section_8_button1_link);
        BaseModel::setOptionValue('section_8_button1_icon_url', $this->section_8_button1_icon_url);
        
        // Button 2 - Facebook
        BaseModel::setOptionValue('section_8_button2_text', $this->section_8_button2_text);
        BaseModel::setOptionValue('section_8_button2_link', $this->section_8_button2_link);
        BaseModel::setOptionValue('section_8_button2_icon_url', $this->section_8_button2_icon_url);
        
        // Button 3 - LinkedIn
        BaseModel::setOptionValue('section_8_button3_text', $this->section_8_button3_text);
        BaseModel::setOptionValue('section_8_button3_link', $this->section_8_button3_link);
        BaseModel::setOptionValue('section_8_button3_icon_url', $this->section_8_button3_icon_url);
        
        // Button 4 - Email
        BaseModel::setOptionValue('section_8_button4_text', $this->section_8_button4_text);
        BaseModel::setOptionValue('section_8_button4_link', $this->section_8_button4_link);
        BaseModel::setOptionValue('section_8_button4_icon_url', $this->section_8_button4_icon_url);
        
        $this->dispatch('toast', message: 'Section 8 updated successfully!', type: 'success');
    }

    public function render()
    {
        return view('livewire.components.base-model.section8');
    }
}