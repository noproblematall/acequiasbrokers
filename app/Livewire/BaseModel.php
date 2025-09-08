<?php

namespace App\Livewire;

use App\Constants\AppConstants;
use App\Models\BaseModel as BaseModelModel;
use Livewire\Component;

class BaseModel extends Component
{
    public $landing_bg_color;
    
    // New Section 1 properties
    public $section_1_is_disabled = false;
    public $section_1_logo_link;
    public $section_1_logo_width;
    public $section_1_bg_color;
    
    // Section 2 properties (formerly section 1)
    public $section_2_is_disabled = false;
    public $section_2_bg_color;
    public $section_2_line_1_font_name;
    public $section_2_line_1_font_weight;
    public $section_2_line_1_font_size;
    public $section_2_line_1_font_color;
    public $section_2_line_1_text_alignment;
    public $section_2_line_2_font_name;
    public $section_2_line_2_font_weight;
    public $section_2_line_2_font_size;
    public $section_2_line_2_font_color;
    public $section_2_line_2_text_alignment;
    public $section_2_paragraph_3_font_name;
    public $section_2_paragraph_3_font_weight;
    public $section_2_paragraph_3_font_size;
    public $section_2_paragraph_3_font_color;
    public $section_2_paragraph_3_text_alignment;
    public $section_2_button_1_bg_color;
    public $section_2_button_1_font_name;
    public $section_2_button_1_font_weight;
    public $section_2_button_1_font_size;
    public $section_2_button_1_font_color;
    public $section_2_button_1_text_alignment;
    public $section_2_button_1_icon_link;
    
    // Section 4 properties
    public $section_4_is_disabled = false;
    public $section_4_bg_color;
    public $section_4_picture_link;
    public $section_4_line_1;
    public $section_4_line_1_font_name;
    public $section_4_line_1_font_weight;
    public $section_4_line_1_font_size;
    public $section_4_line_1_font_color;
    public $section_4_line_1_text_alignment;    
    public $section_4_line_2;
    public $section_4_line_2_font_name;
    public $section_4_line_2_font_weight;
    public $section_4_line_2_font_size;
    public $section_4_line_2_font_color;
    public $section_4_line_2_text_alignment;
    public $section_4_button_1_bg_color;
    public $section_4_button_1_font_name;
    public $section_4_button_1_font_weight;
    public $section_4_button_1_font_size;
    public $section_4_button_1_font_color;
    public $section_4_button_1_text_alignment;
    public $section_4_button_1_icon_link;

    // Constants for frontend use
    public $fontFamilies;
    public $fontWeights;
    public $fontSizes;
    public $textAlignments;

    public function mount()
    {
        // Initialize constants for frontend
        $this->fontFamilies = AppConstants::FONT_FAMILIES;
        $this->fontWeights = AppConstants::FONT_WEIGHTS;
        $this->fontSizes = AppConstants::FONT_SIZES;
        $this->textAlignments = AppConstants::TEXT_ALIGNMENT;

        $this->landing_bg_color = BaseModelModel::getOptionValue('landing_bg_color', '#f9f9f9');
        
        // Initialize Section 1 (new)
        $this->section_1_is_disabled = (bool) BaseModelModel::getOptionValue('section_1_is_disabled', 0);
        $this->section_1_logo_link = BaseModelModel::getOptionValue('section_1_logo_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/logomodel.png');
        $this->section_1_logo_width = BaseModelModel::getOptionValue('section_1_logo_width', 45);
        $this->section_1_bg_color = BaseModelModel::getOptionValue('section_1_bg_color', '#f9f9f9');
        
        // Initialize Section 2 (formerly section 1)
        $this->section_2_is_disabled = (bool) BaseModelModel::getOptionValue('section_2_is_disabled', 0);
        $this->section_2_bg_color = BaseModelModel::getOptionValue('section_2_bg_color', '#418fde');
        $this->section_2_line_1_font_name = BaseModelModel::getOptionValue('section_2_line_1_font_name', AppConstants::FONT_FAMILIES[0]);
        $this->section_2_line_1_font_weight = BaseModelModel::getOptionValue('section_2_line_1_font_weight', AppConstants::FONT_WEIGHTS[6]);
        $this->section_2_line_1_font_size = BaseModelModel::getOptionValue('section_2_line_1_font_size', AppConstants::FONT_SIZES[4]);
        $this->section_2_line_1_font_color = BaseModelModel::getOptionValue('section_2_line_1_font_color', '#ffffff');
        $this->section_2_line_1_text_alignment = BaseModelModel::getOptionValue('section_2_line_1_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_2_line_2_font_name = BaseModelModel::getOptionValue('section_2_line_2_font_name', AppConstants::FONT_FAMILIES[1]);
        $this->section_2_line_2_font_weight = BaseModelModel::getOptionValue('section_2_line_2_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_2_line_2_font_size = BaseModelModel::getOptionValue('section_2_line_2_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_2_line_2_font_color = BaseModelModel::getOptionValue('section_2_line_2_font_color', '#ffffff');
        $this->section_2_line_2_text_alignment = BaseModelModel::getOptionValue('section_2_line_2_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_2_paragraph_3_font_name = BaseModelModel::getOptionValue('section_2_paragraph_3_font_name', AppConstants::FONT_FAMILIES[1]);
        $this->section_2_paragraph_3_font_weight = BaseModelModel::getOptionValue('section_2_paragraph_3_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_2_paragraph_3_font_size = BaseModelModel::getOptionValue('section_2_paragraph_3_font_size', AppConstants::FONT_SIZES[1]);
        $this->section_2_paragraph_3_font_color = BaseModelModel::getOptionValue('section_2_paragraph_3_font_color', '#ffffff');
        $this->section_2_paragraph_3_text_alignment = BaseModelModel::getOptionValue('section_2_paragraph_3_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_2_button_1_bg_color = BaseModelModel::getOptionValue('section_2_button_1_bg_color', '#3c4b72');
        $this->section_2_button_1_font_name = BaseModelModel::getOptionValue('section_2_button_1_font_name', AppConstants::FONT_FAMILIES[2]);
        $this->section_2_button_1_font_weight = BaseModelModel::getOptionValue('section_2_button_1_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_2_button_1_font_size = BaseModelModel::getOptionValue('section_2_button_1_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_2_button_1_font_color = BaseModelModel::getOptionValue('section_2_button_1_font_color', '#ffffff');
        $this->section_2_button_1_text_alignment = BaseModelModel::getOptionValue('section_2_button_1_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_2_button_1_icon_link = BaseModelModel::getOptionValue('section_2_button_1_icon_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/2/WA%2Bicon%2BT.png');
        
        // Initialize Section 4
        $this->section_4_is_disabled = (bool) BaseModelModel::getOptionValue('section_4_is_disabled', 0);
        $this->section_4_bg_color = BaseModelModel::getOptionValue('section_4_bg_color', '#63666a');
        $this->section_4_picture_link = BaseModelModel::getOptionValue('section_4_picture_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/4/section4pic.png');
        $this->section_4_line_1 = BaseModelModel::getOptionValue('section_4_line_1', "");
        $this->section_4_line_1_font_name = BaseModelModel::getOptionValue('section_4_line_1_font_name', AppConstants::FONT_FAMILIES[3]);
        $this->section_4_line_1_font_weight = BaseModelModel::getOptionValue('section_4_line_1_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_4_line_1_font_size = BaseModelModel::getOptionValue('section_4_line_1_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_4_line_1_font_color = BaseModelModel::getOptionValue('section_4_line_1_font_color', '#ffffff');
        $this->section_4_line_1_text_alignment = BaseModelModel::getOptionValue('section_4_line_1_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_4_line_2 = BaseModelModel::getOptionValue('section_4_line_2', "");
        $this->section_4_line_2_font_name = BaseModelModel::getOptionValue('section_4_line_2_font_name', AppConstants::FONT_FAMILIES[3]);
        $this->section_4_line_2_font_weight = BaseModelModel::getOptionValue('section_4_line_2_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_4_line_2_font_size = BaseModelModel::getOptionValue('section_4_line_2_font_size', AppConstants::FONT_SIZES[1]);
        $this->section_4_line_2_font_color = BaseModelModel::getOptionValue('section_4_line_2_font_color', '#ffffff');
        $this->section_4_line_2_text_alignment = BaseModelModel::getOptionValue('section_4_line_2_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_4_button_1_bg_color = BaseModelModel::getOptionValue('section_4_button_1_bg_color', '#004de6');
        $this->section_4_button_1_font_name = BaseModelModel::getOptionValue('section_4_button_1_font_name', AppConstants::FONT_FAMILIES[2]);
        $this->section_4_button_1_font_weight = BaseModelModel::getOptionValue('section_4_button_1_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_4_button_1_font_size = BaseModelModel::getOptionValue('section_4_button_1_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_4_button_1_font_color = BaseModelModel::getOptionValue('section_4_button_1_font_color', '#ffffff');
        $this->section_4_button_1_text_alignment = BaseModelModel::getOptionValue('section_4_button_1_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_4_button_1_icon_link = BaseModelModel::getOptionValue('section_4_button_1_icon_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/4/calendaricon.png');
    }

    public function updateLandingLevel()
    {
        BaseModelModel::setOptionValue('landing_bg_color', $this->landing_bg_color);
        
        $this->js('window.toast("Landing level settings updated successfully!", "success")');
    }

    public function updateSection1()
    {
        BaseModelModel::setOptionValue('section_1_is_disabled', $this->section_1_is_disabled);
        BaseModelModel::setOptionValue('section_1_logo_link', $this->section_1_logo_link);
        BaseModelModel::setOptionValue('section_1_logo_width', $this->section_1_logo_width);
        BaseModelModel::setOptionValue('section_1_bg_color', $this->section_1_bg_color);
        
        $this->js('window.toast("Section 1 settings updated successfully!", "success")');
    }

    public function updateSection2()
    {
        BaseModelModel::setOptionValue('section_2_is_disabled', $this->section_2_is_disabled);
        BaseModelModel::setOptionValue('section_2_bg_color', $this->section_2_bg_color);
        BaseModelModel::setOptionValue('section_2_line_1_font_name', $this->section_2_line_1_font_name);
        BaseModelModel::setOptionValue('section_2_line_1_font_weight', $this->section_2_line_1_font_weight);
        BaseModelModel::setOptionValue('section_2_line_1_font_size', $this->section_2_line_1_font_size);
        BaseModelModel::setOptionValue('section_2_line_1_font_color', $this->section_2_line_1_font_color);
        BaseModelModel::setOptionValue('section_2_line_1_text_alignment', $this->section_2_line_1_text_alignment);
        BaseModelModel::setOptionValue('section_2_line_2_font_name', $this->section_2_line_2_font_name);
        BaseModelModel::setOptionValue('section_2_line_2_font_weight', $this->section_2_line_2_font_weight);
        BaseModelModel::setOptionValue('section_2_line_2_font_size', $this->section_2_line_2_font_size);
        BaseModelModel::setOptionValue('section_2_line_2_font_color', $this->section_2_line_2_font_color);
        BaseModelModel::setOptionValue('section_2_line_2_text_alignment', $this->section_2_line_2_text_alignment);
        BaseModelModel::setOptionValue('section_2_paragraph_3_font_name', $this->section_2_paragraph_3_font_name);
        BaseModelModel::setOptionValue('section_2_paragraph_3_font_weight', $this->section_2_paragraph_3_font_weight);
        BaseModelModel::setOptionValue('section_2_paragraph_3_font_size', $this->section_2_paragraph_3_font_size);
        BaseModelModel::setOptionValue('section_2_paragraph_3_font_color', $this->section_2_paragraph_3_font_color);
        BaseModelModel::setOptionValue('section_2_paragraph_3_text_alignment', $this->section_2_paragraph_3_text_alignment);
        BaseModelModel::setOptionValue('section_2_button_1_bg_color', $this->section_2_button_1_bg_color);
        BaseModelModel::setOptionValue('section_2_button_1_font_name', $this->section_2_button_1_font_name);
        BaseModelModel::setOptionValue('section_2_button_1_font_weight', $this->section_2_button_1_font_weight);
        BaseModelModel::setOptionValue('section_2_button_1_font_size', $this->section_2_button_1_font_size);
        BaseModelModel::setOptionValue('section_2_button_1_font_color', $this->section_2_button_1_font_color);
        BaseModelModel::setOptionValue('section_2_button_1_text_alignment', $this->section_2_button_1_text_alignment);
        BaseModelModel::setOptionValue('section_2_button_1_icon_link', $this->section_2_button_1_icon_link);
        
        $this->js('window.toast("Section 2 settings updated successfully!", "success")');
    }

    public function updateSection4()
    {
        BaseModelModel::setOptionValue('section_4_is_disabled', $this->section_4_is_disabled);
        BaseModelModel::setOptionValue('section_4_bg_color', $this->section_4_bg_color);
        BaseModelModel::setOptionValue('section_4_picture_link', $this->section_4_picture_link);
        BaseModelModel::setOptionValue('section_4_line_1', $this->section_4_line_1);
        BaseModelModel::setOptionValue('section_4_line_1_font_name', $this->section_4_line_1_font_name);
        BaseModelModel::setOptionValue('section_4_line_1_font_weight', $this->section_4_line_1_font_weight);
        BaseModelModel::setOptionValue('section_4_line_1_font_size', $this->section_4_line_1_font_size);
        BaseModelModel::setOptionValue('section_4_line_1_font_color', $this->section_4_line_1_font_color);
        BaseModelModel::setOptionValue('section_4_line_1_text_alignment', $this->section_4_line_1_text_alignment);
        BaseModelModel::setOptionValue('section_4_line_2', $this->section_4_line_2);
        BaseModelModel::setOptionValue('section_4_line_2_font_name', $this->section_4_line_2_font_name);
        BaseModelModel::setOptionValue('section_4_line_2_font_weight', $this->section_4_line_2_font_weight);
        BaseModelModel::setOptionValue('section_4_line_2_font_size', $this->section_4_line_2_font_size);
        BaseModelModel::setOptionValue('section_4_line_2_font_color', $this->section_4_line_2_font_color);
        BaseModelModel::setOptionValue('section_4_line_2_text_alignment', $this->section_4_line_2_text_alignment);
        BaseModelModel::setOptionValue('section_4_button_1_bg_color', $this->section_4_button_1_bg_color);
        BaseModelModel::setOptionValue('section_4_button_1_font_name', $this->section_4_button_1_font_name);
        BaseModelModel::setOptionValue('section_4_button_1_font_weight', $this->section_4_button_1_font_weight);
        BaseModelModel::setOptionValue('section_4_button_1_font_size', $this->section_4_button_1_font_size);
        BaseModelModel::setOptionValue('section_4_button_1_font_color', $this->section_4_button_1_font_color);
        BaseModelModel::setOptionValue('section_4_button_1_text_alignment', $this->section_4_button_1_text_alignment);
        BaseModelModel::setOptionValue('section_4_button_1_icon_link', $this->section_4_button_1_icon_link);
        
        $this->js('window.toast("Section 4 settings updated successfully!", "success")');
    }

    public function render()
    {
        return view('livewire.base-model')->layout('components.layouts.app');
    }
}