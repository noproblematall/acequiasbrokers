<?php

namespace App\Livewire\Components\BaseModel;

use App\Constants\AppConstants;
use App\Models\BaseModel;
use Livewire\Component;

class Section2 extends Component
{
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

        // Initialize Section 2 values
        $this->section_2_is_disabled = (bool) BaseModel::getOptionValue('section_2_is_disabled', 0);
        $this->section_2_bg_color = BaseModel::getOptionValue('section_2_bg_color', '#418fde');
        $this->section_2_line_1_font_name = BaseModel::getOptionValue('section_2_line_1_font_name', AppConstants::FONT_FAMILIES[0]);
        $this->section_2_line_1_font_weight = BaseModel::getOptionValue('section_2_line_1_font_weight', AppConstants::FONT_WEIGHTS[6]);
        $this->section_2_line_1_font_size = BaseModel::getOptionValue('section_2_line_1_font_size', AppConstants::FONT_SIZES[4]);
        $this->section_2_line_1_font_color = BaseModel::getOptionValue('section_2_line_1_font_color', '#ffffff');
        $this->section_2_line_1_text_alignment = BaseModel::getOptionValue('section_2_line_1_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_2_line_2_font_name = BaseModel::getOptionValue('section_2_line_2_font_name', AppConstants::FONT_FAMILIES[1]);
        $this->section_2_line_2_font_weight = BaseModel::getOptionValue('section_2_line_2_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_2_line_2_font_size = BaseModel::getOptionValue('section_2_line_2_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_2_line_2_font_color = BaseModel::getOptionValue('section_2_line_2_font_color', '#ffffff');
        $this->section_2_line_2_text_alignment = BaseModel::getOptionValue('section_2_line_2_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_2_paragraph_3_font_name = BaseModel::getOptionValue('section_2_paragraph_3_font_name', AppConstants::FONT_FAMILIES[1]);
        $this->section_2_paragraph_3_font_weight = BaseModel::getOptionValue('section_2_paragraph_3_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_2_paragraph_3_font_size = BaseModel::getOptionValue('section_2_paragraph_3_font_size', AppConstants::FONT_SIZES[1]);
        $this->section_2_paragraph_3_font_color = BaseModel::getOptionValue('section_2_paragraph_3_font_color', '#ffffff');
        $this->section_2_paragraph_3_text_alignment = BaseModel::getOptionValue('section_2_paragraph_3_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_2_button_1_bg_color = BaseModel::getOptionValue('section_2_button_1_bg_color', '#3c4b72');
        $this->section_2_button_1_font_name = BaseModel::getOptionValue('section_2_button_1_font_name', AppConstants::FONT_FAMILIES[2]);
        $this->section_2_button_1_font_weight = BaseModel::getOptionValue('section_2_button_1_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_2_button_1_font_size = BaseModel::getOptionValue('section_2_button_1_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_2_button_1_font_color = BaseModel::getOptionValue('section_2_button_1_font_color', '#ffffff');
        $this->section_2_button_1_text_alignment = BaseModel::getOptionValue('section_2_button_1_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_2_button_1_icon_link = BaseModel::getOptionValue('section_2_button_1_icon_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/2/WA%2Bicon%2BT.png');
    }

    public function updateSection2()
    {
        BaseModel::setOptionValue('section_2_is_disabled', $this->section_2_is_disabled);
        BaseModel::setOptionValue('section_2_bg_color', $this->section_2_bg_color);
        BaseModel::setOptionValue('section_2_line_1_font_name', $this->section_2_line_1_font_name);
        BaseModel::setOptionValue('section_2_line_1_font_weight', $this->section_2_line_1_font_weight);
        BaseModel::setOptionValue('section_2_line_1_font_size', $this->section_2_line_1_font_size);
        BaseModel::setOptionValue('section_2_line_1_font_color', $this->section_2_line_1_font_color);
        BaseModel::setOptionValue('section_2_line_1_text_alignment', $this->section_2_line_1_text_alignment);
        BaseModel::setOptionValue('section_2_line_2_font_name', $this->section_2_line_2_font_name);
        BaseModel::setOptionValue('section_2_line_2_font_weight', $this->section_2_line_2_font_weight);
        BaseModel::setOptionValue('section_2_line_2_font_size', $this->section_2_line_2_font_size);
        BaseModel::setOptionValue('section_2_line_2_font_color', $this->section_2_line_2_font_color);
        BaseModel::setOptionValue('section_2_line_2_text_alignment', $this->section_2_line_2_text_alignment);
        BaseModel::setOptionValue('section_2_paragraph_3_font_name', $this->section_2_paragraph_3_font_name);
        BaseModel::setOptionValue('section_2_paragraph_3_font_weight', $this->section_2_paragraph_3_font_weight);
        BaseModel::setOptionValue('section_2_paragraph_3_font_size', $this->section_2_paragraph_3_font_size);
        BaseModel::setOptionValue('section_2_paragraph_3_font_color', $this->section_2_paragraph_3_font_color);
        BaseModel::setOptionValue('section_2_paragraph_3_text_alignment', $this->section_2_paragraph_3_text_alignment);
        BaseModel::setOptionValue('section_2_button_1_bg_color', $this->section_2_button_1_bg_color);
        BaseModel::setOptionValue('section_2_button_1_font_name', $this->section_2_button_1_font_name);
        BaseModel::setOptionValue('section_2_button_1_font_weight', $this->section_2_button_1_font_weight);
        BaseModel::setOptionValue('section_2_button_1_font_size', $this->section_2_button_1_font_size);
        BaseModel::setOptionValue('section_2_button_1_font_color', $this->section_2_button_1_font_color);
        BaseModel::setOptionValue('section_2_button_1_text_alignment', $this->section_2_button_1_text_alignment);
        BaseModel::setOptionValue('section_2_button_1_icon_link', $this->section_2_button_1_icon_link);
        
        $this->dispatch('toast', message: 'Section 2 updated successfully!', type: 'success');
    }

    public function render()
    {
        return view('livewire.components.base-model.section2');
    }
}