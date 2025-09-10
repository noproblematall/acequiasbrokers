<?php

namespace App\Livewire\Components\BaseModel;

use App\Constants\AppConstants;
use App\Models\BaseModel;
use Livewire\Component;

class Section10 extends Component
{
    public $section_10_is_disabled = false;
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

    public $fontFamilies;
    public $fontWeights;
    public $fontSizes;
    public $textAlignments;

    public function mount()
    {
        // Initialize Section 10
        $this->section_10_is_disabled = (bool) BaseModel::getOptionValue('section_10_is_disabled', 0);
        $this->section_10_bg_color = BaseModel::getOptionValue('section_10_bg_color', '#a7a9ac');
        
        // Rectangle 1
        $this->section_10_rect1_icon_url = BaseModel::getOptionValue('section_10_rect1_icon_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/10/seguimeico.png');
        $this->section_10_rect1_title = BaseModel::getOptionValue('section_10_rect1_title', 'SEGUIME EN REDES SOCIALES');
        $this->section_10_rect1_title_font_name = BaseModel::getOptionValue('section_10_rect1_title_font_name', AppConstants::FONT_FAMILIES[0]);
        $this->section_10_rect1_title_font_weight = BaseModel::getOptionValue('section_10_rect1_title_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_10_rect1_title_font_size = BaseModel::getOptionValue('section_10_rect1_title_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_10_rect1_title_font_color = BaseModel::getOptionValue('section_10_rect1_title_font_color', '#2d2926');
        $this->section_10_rect1_title_text_alignment = BaseModel::getOptionValue('section_10_rect1_title_text_alignment', AppConstants::TEXT_ALIGNMENT[0]);
        
        // Rectangle 2 - Icons
        $this->section_10_icon1_url = BaseModel::getOptionValue('section_10_icon1_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/10/instaico.png');
        $this->section_10_icon1_link = BaseModel::getOptionValue('section_10_icon1_link', '#');
        $this->section_10_icon2_url = BaseModel::getOptionValue('section_10_icon2_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/10/facebico.png');
        $this->section_10_icon2_link = BaseModel::getOptionValue('section_10_icon2_link', '#');
        $this->section_10_icon3_url = BaseModel::getOptionValue('section_10_icon3_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/10/linkdico.png');
        $this->section_10_icon3_link = BaseModel::getOptionValue('section_10_icon3_link', '#');
        
        // Initialize font arrays
        $this->fontFamilies = AppConstants::FONT_FAMILIES;
        $this->fontWeights = AppConstants::FONT_WEIGHTS;
        $this->fontSizes = AppConstants::FONT_SIZES;
        $this->textAlignments = AppConstants::TEXT_ALIGNMENT;
    }

    public function updateSection10()
    {
        BaseModel::setOptionValue('section_10_is_disabled', $this->section_10_is_disabled);
        BaseModel::setOptionValue('section_10_bg_color', $this->section_10_bg_color);
        
        // Rectangle 1
        BaseModel::setOptionValue('section_10_rect1_icon_url', $this->section_10_rect1_icon_url);
        BaseModel::setOptionValue('section_10_rect1_title', $this->section_10_rect1_title);
        BaseModel::setOptionValue('section_10_rect1_title_font_name', $this->section_10_rect1_title_font_name);
        BaseModel::setOptionValue('section_10_rect1_title_font_weight', $this->section_10_rect1_title_font_weight);
        BaseModel::setOptionValue('section_10_rect1_title_font_size', $this->section_10_rect1_title_font_size);
        BaseModel::setOptionValue('section_10_rect1_title_font_color', $this->section_10_rect1_title_font_color);
        BaseModel::setOptionValue('section_10_rect1_title_text_alignment', $this->section_10_rect1_title_text_alignment);
        
        // Rectangle 2 - Icons
        BaseModel::setOptionValue('section_10_icon1_url', $this->section_10_icon1_url);
        BaseModel::setOptionValue('section_10_icon1_link', $this->section_10_icon1_link);
        BaseModel::setOptionValue('section_10_icon2_url', $this->section_10_icon2_url);
        BaseModel::setOptionValue('section_10_icon2_link', $this->section_10_icon2_link);
        BaseModel::setOptionValue('section_10_icon3_url', $this->section_10_icon3_url);
        BaseModel::setOptionValue('section_10_icon3_link', $this->section_10_icon3_link);
        
        $this->dispatch('toast', message: 'Section 10 updated successfully!', type: 'success');
        $this->dispatch('refresh-preview-section-10');
    }

    public function render()
    {
        return view('livewire.components.base-model.section10');
    }
}