<?php

namespace App\Livewire;

use App\Constants\AppConstants;
use App\Models\BaseModel as BaseModelModel;
use Livewire\Component;

class BaseModel extends Component
{
    public $landing_bg_color;
    
    public $section_1_is_disabled = false;
    public $section_1_bg_color;
    public $section_1_line_1_font_name;
    public $section_1_line_1_font_weight;
    public $section_1_line_1_font_size;
    public $section_1_line_1_font_color;
    public $section_1_line_1_text_alignment;
    public $section_1_line_2_font_name;
    public $section_1_line_2_font_weight;
    public $section_1_line_2_font_size;
    public $section_1_line_2_font_color;
    public $section_1_line_2_text_alignment;
    public $section_1_paragraph_3_font_name;
    public $section_1_paragraph_3_font_weight;
    public $section_1_paragraph_3_font_size;
    public $section_1_paragraph_3_font_color;
    public $section_1_paragraph_3_text_alignment;
    public $section_1_button_1_bg_color;
    public $section_1_button_1_font_name;
    public $section_1_button_1_font_weight;
    public $section_1_button_1_font_size;
    public $section_1_button_1_font_color;
    public $section_1_button_1_text_alignment;
    public $section_1_button_1_icon_link;

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

        $this->landing_bg_color = BaseModelModel::getOptionValue('landing_bg_color', '#ffffff');
        
        $this->section_1_is_disabled = (bool) BaseModelModel::getOptionValue('section_1_is_disabled', 0);
        $this->section_1_bg_color = BaseModelModel::getOptionValue('section_1_bg_color', '#418fde');
        $this->section_1_line_1_font_name = BaseModelModel::getOptionValue('section_1_line_1_font_name', AppConstants::FONT_FAMILIES[0]);
        $this->section_1_line_1_font_weight = BaseModelModel::getOptionValue('section_1_line_1_font_weight', AppConstants::FONT_WEIGHTS[6]);
        $this->section_1_line_1_font_size = BaseModelModel::getOptionValue('section_1_line_1_font_size', AppConstants::FONT_SIZES[4]);
        $this->section_1_line_1_font_color = BaseModelModel::getOptionValue('section_1_line_1_font_color', '#ffffff');
        $this->section_1_line_1_text_alignment = BaseModelModel::getOptionValue('section_1_line_1_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_1_line_2_font_name = BaseModelModel::getOptionValue('section_1_line_2_font_name', AppConstants::FONT_FAMILIES[1]);
        $this->section_1_line_2_font_weight = BaseModelModel::getOptionValue('section_1_line_2_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_1_line_2_font_size = BaseModelModel::getOptionValue('section_1_line_2_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_1_line_2_font_color = BaseModelModel::getOptionValue('section_1_line_2_font_color', '#ffffff');
        $this->section_1_line_2_text_alignment = BaseModelModel::getOptionValue('section_1_line_2_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_1_paragraph_3_font_name = BaseModelModel::getOptionValue('section_1_paragraph_3_font_name', AppConstants::FONT_FAMILIES[1]);
        $this->section_1_paragraph_3_font_weight = BaseModelModel::getOptionValue('section_1_paragraph_3_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_1_paragraph_3_font_size = BaseModelModel::getOptionValue('section_1_paragraph_3_font_size', AppConstants::FONT_SIZES[1]);
        $this->section_1_paragraph_3_font_color = BaseModelModel::getOptionValue('section_1_paragraph_3_font_color', '#ffffff');
        $this->section_1_paragraph_3_text_alignment = BaseModelModel::getOptionValue('section_1_paragraph_3_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_1_button_1_bg_color = BaseModelModel::getOptionValue('section_1_button_1_bg_color', '#3c4b72');
        $this->section_1_button_1_font_name = BaseModelModel::getOptionValue('section_1_button_1_font_name', AppConstants::FONT_FAMILIES[1]);
        $this->section_1_button_1_font_weight = BaseModelModel::getOptionValue('section_1_button_1_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_1_button_1_font_size = BaseModelModel::getOptionValue('section_1_button_1_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_1_button_1_font_color = BaseModelModel::getOptionValue('section_1_button_1_font_color', '#ffffff');
        $this->section_1_button_1_text_alignment = BaseModelModel::getOptionValue('section_1_button_1_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_1_button_1_icon_link = BaseModelModel::getOptionValue('section_1_button_1_icon_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/2/WA%2Bicon%2BT.png');
    }

    public function updateLandingLevel()
    {
        BaseModelModel::setOptionValue('landing_bg_color', $this->landing_bg_color);
        
        session()->flash('success', 'Landing level settings updated successfully!');
    }

    public function updateSection1()
    {
        BaseModelModel::setOptionValue('section_1_is_disabled', $this->section_1_is_disabled);
        BaseModelModel::setOptionValue('section_1_bg_color', $this->section_1_bg_color);
        BaseModelModel::setOptionValue('section_1_line_1_font_name', $this->section_1_line_1_font_name);
        BaseModelModel::setOptionValue('section_1_line_1_font_weight', $this->section_1_line_1_font_weight);
        BaseModelModel::setOptionValue('section_1_line_1_font_size', $this->section_1_line_1_font_size);
        BaseModelModel::setOptionValue('section_1_line_1_font_color', $this->section_1_line_1_font_color);
        BaseModelModel::setOptionValue('section_1_line_1_text_alignment', $this->section_1_line_1_text_alignment);
        BaseModelModel::setOptionValue('section_1_line_2_font_name', $this->section_1_line_2_font_name);
        BaseModelModel::setOptionValue('section_1_line_2_font_weight', $this->section_1_line_2_font_weight);
        BaseModelModel::setOptionValue('section_1_line_2_font_size', $this->section_1_line_2_font_size);
        BaseModelModel::setOptionValue('section_1_line_2_font_color', $this->section_1_line_2_font_color);
        BaseModelModel::setOptionValue('section_1_line_2_text_alignment', $this->section_1_line_2_text_alignment);
        BaseModelModel::setOptionValue('section_1_paragraph_3_font_name', $this->section_1_paragraph_3_font_name);
        BaseModelModel::setOptionValue('section_1_paragraph_3_font_weight', $this->section_1_paragraph_3_font_weight);
        BaseModelModel::setOptionValue('section_1_paragraph_3_font_size', $this->section_1_paragraph_3_font_size);
        BaseModelModel::setOptionValue('section_1_paragraph_3_font_color', $this->section_1_paragraph_3_font_color);
        BaseModelModel::setOptionValue('section_1_paragraph_3_text_alignment', $this->section_1_paragraph_3_text_alignment);
        BaseModelModel::setOptionValue('section_1_button_1_bg_color', $this->section_1_button_1_bg_color);
        BaseModelModel::setOptionValue('section_1_button_1_font_name', $this->section_1_button_1_font_name);
        BaseModelModel::setOptionValue('section_1_button_1_font_weight', $this->section_1_button_1_font_weight);
        BaseModelModel::setOptionValue('section_1_button_1_font_size', $this->section_1_button_1_font_size);
        BaseModelModel::setOptionValue('section_1_button_1_font_color', $this->section_1_button_1_font_color);
        BaseModelModel::setOptionValue('section_1_button_1_text_alignment', $this->section_1_button_1_text_alignment);
        BaseModelModel::setOptionValue('section_1_button_1_icon_link', $this->section_1_button_1_icon_link);
        
        session()->flash('success', 'Section 1 settings updated successfully!');
    }

    public function render()
    {
        return view('livewire.base-model')->layout('components.layouts.app');
    }
}