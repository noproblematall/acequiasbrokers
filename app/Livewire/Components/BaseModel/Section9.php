<?php

namespace App\Livewire\Components\BaseModel;

use App\Constants\AppConstants;
use App\Models\BaseModel;
use Livewire\Component;

class Section9 extends Component
{
    public $section_9_is_disabled = false;
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
    public $section_9_button_link;
    public $section_9_button_icon_url;

    public $fontFamilies;
    public $fontWeights;
    public $fontSizes;
    public $textAlignments;

    public function mount()
    {
        // Initialize Section 9
        $this->section_9_is_disabled = (bool) BaseModel::getOptionValue('section_9_is_disabled', 0);
        $this->section_9_bg_color = BaseModel::getOptionValue('section_9_bg_color', '#89d4e3');
        
        // Rectangle 1
        $this->section_9_rect1_icon_url = BaseModel::getOptionValue('section_9_rect1_icon_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/9/locationico.png');
        $this->section_9_rect1_title = BaseModel::getOptionValue('section_9_rect1_title', 'CONOCÉ NUESTRA OFICINA');
        $this->section_9_rect1_title_font_name = BaseModel::getOptionValue('section_9_rect1_title_font_name', AppConstants::FONT_FAMILIES[0]);
        $this->section_9_rect1_title_font_weight = BaseModel::getOptionValue('section_9_rect1_title_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_9_rect1_title_font_size = BaseModel::getOptionValue('section_9_rect1_title_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_9_rect1_title_font_color = BaseModel::getOptionValue('section_9_rect1_title_font_color', '#2d2926');
        $this->section_9_rect1_title_text_alignment = BaseModel::getOptionValue('section_9_rect1_title_text_alignment', AppConstants::TEXT_ALIGNMENT[0]);
        
        // Rectangle 2
        $this->section_9_rect2_image_url = BaseModel::getOptionValue('section_9_rect2_image_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/9/OficinaPic.jpg');
        $this->section_9_rect2_text = BaseModel::getOptionValue('section_9_rect2_text', 'Santiago de Liniers 302');
        $this->section_9_rect2_text_font_name = BaseModel::getOptionValue('section_9_rect2_text_font_name', AppConstants::FONT_FAMILIES[2]);
        $this->section_9_rect2_text_font_weight = BaseModel::getOptionValue('section_9_rect2_text_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_9_rect2_text_font_size = BaseModel::getOptionValue('section_9_rect2_text_font_size', AppConstants::FONT_SIZES[1]);
        $this->section_9_rect2_text_font_color = BaseModel::getOptionValue('section_9_rect2_text_font_color', '#2d2926');
        $this->section_9_rect2_text_text_alignment = BaseModel::getOptionValue('section_9_rect2_text_text_alignment', AppConstants::TEXT_ALIGNMENT[0]);
        
        // Button
        $this->section_9_button_bg_color = BaseModel::getOptionValue('section_9_button_bg_color', '#012169');
        $this->section_9_button_font_color = BaseModel::getOptionValue('section_9_button_font_color', '#ffffff');
        $this->section_9_button_font_name = BaseModel::getOptionValue('section_9_button_font_name', AppConstants::FONT_FAMILIES[2]);
        $this->section_9_button_font_weight = BaseModel::getOptionValue('section_9_button_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_9_button_font_size = BaseModel::getOptionValue('section_9_button_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_9_button_text_alignment = BaseModel::getOptionValue('section_9_button_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_9_button_text = BaseModel::getOptionValue('section_9_button_text', 'Ver ubicación');
        $this->section_9_button_link = BaseModel::getOptionValue('section_9_button_link', '#');
        $this->section_9_button_icon_url = BaseModel::getOptionValue('section_9_button_icon_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/9/mapico.png');
        
        // Initialize font arrays
        $this->fontFamilies = AppConstants::FONT_FAMILIES;
        $this->fontWeights = AppConstants::FONT_WEIGHTS;
        $this->fontSizes = AppConstants::FONT_SIZES;
        $this->textAlignments = AppConstants::TEXT_ALIGNMENT;
    }

    public function updateSection9()
    {
        BaseModel::setOptionValue('section_9_is_disabled', $this->section_9_is_disabled);
        BaseModel::setOptionValue('section_9_bg_color', $this->section_9_bg_color);
        
        // Rectangle 1
        BaseModel::setOptionValue('section_9_rect1_icon_url', $this->section_9_rect1_icon_url);
        BaseModel::setOptionValue('section_9_rect1_title', $this->section_9_rect1_title);
        BaseModel::setOptionValue('section_9_rect1_title_font_name', $this->section_9_rect1_title_font_name);
        BaseModel::setOptionValue('section_9_rect1_title_font_weight', $this->section_9_rect1_title_font_weight);
        BaseModel::setOptionValue('section_9_rect1_title_font_size', $this->section_9_rect1_title_font_size);
        BaseModel::setOptionValue('section_9_rect1_title_font_color', $this->section_9_rect1_title_font_color);
        BaseModel::setOptionValue('section_9_rect1_title_text_alignment', $this->section_9_rect1_title_text_alignment);
        
        // Rectangle 2
        BaseModel::setOptionValue('section_9_rect2_image_url', $this->section_9_rect2_image_url);
        BaseModel::setOptionValue('section_9_rect2_text', $this->section_9_rect2_text);
        BaseModel::setOptionValue('section_9_rect2_text_font_name', $this->section_9_rect2_text_font_name);
        BaseModel::setOptionValue('section_9_rect2_text_font_weight', $this->section_9_rect2_text_font_weight);
        BaseModel::setOptionValue('section_9_rect2_text_font_size', $this->section_9_rect2_text_font_size);
        BaseModel::setOptionValue('section_9_rect2_text_font_color', $this->section_9_rect2_text_font_color);
        BaseModel::setOptionValue('section_9_rect2_text_text_alignment', $this->section_9_rect2_text_text_alignment);
        
        // Button
        BaseModel::setOptionValue('section_9_button_bg_color', $this->section_9_button_bg_color);
        BaseModel::setOptionValue('section_9_button_font_color', $this->section_9_button_font_color);
        BaseModel::setOptionValue('section_9_button_font_name', $this->section_9_button_font_name);
        BaseModel::setOptionValue('section_9_button_font_weight', $this->section_9_button_font_weight);
        BaseModel::setOptionValue('section_9_button_font_size', $this->section_9_button_font_size);
        BaseModel::setOptionValue('section_9_button_text_alignment', $this->section_9_button_text_alignment);
        BaseModel::setOptionValue('section_9_button_text', $this->section_9_button_text);
        BaseModel::setOptionValue('section_9_button_link', $this->section_9_button_link);
        BaseModel::setOptionValue('section_9_button_icon_url', $this->section_9_button_icon_url);
        
        $this->dispatch('toast', message: 'Section 9 updated successfully!', type: 'success');
    }

    public function render()
    {
        return view('livewire.components.base-model.section9');
    }
}