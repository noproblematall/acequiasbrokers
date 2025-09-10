<?php

namespace App\Livewire\Components\BaseModel;

use App\Constants\AppConstants;
use App\Models\BaseModel;
use Livewire\Component;

class Section4 extends Component
{
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
    public $section_4_button_1_text;
    public $section_4_button_1_icon_link;

    public $fontFamilies;
    public $fontWeights;
    public $fontSizes;
    public $textAlignments;

    public function mount()
    {
        // Initialize Section 4
        $this->section_4_is_disabled = (bool) BaseModel::getOptionValue('section_4_is_disabled', 0);
        $this->section_4_bg_color = BaseModel::getOptionValue('section_4_bg_color', '#63666a');
        $this->section_4_picture_link = BaseModel::getOptionValue('section_4_picture_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/4/section4pic.png');
        $this->section_4_line_1 = BaseModel::getOptionValue('section_4_line_1', "");
        $this->section_4_line_1_font_name = BaseModel::getOptionValue('section_4_line_1_font_name', AppConstants::FONT_FAMILIES[3]);
        $this->section_4_line_1_font_weight = BaseModel::getOptionValue('section_4_line_1_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_4_line_1_font_size = BaseModel::getOptionValue('section_4_line_1_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_4_line_1_font_color = BaseModel::getOptionValue('section_4_line_1_font_color', '#ffffff');
        $this->section_4_line_1_text_alignment = BaseModel::getOptionValue('section_4_line_1_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_4_line_2 = BaseModel::getOptionValue('section_4_line_2', "");
        $this->section_4_line_2_font_name = BaseModel::getOptionValue('section_4_line_2_font_name', AppConstants::FONT_FAMILIES[3]);
        $this->section_4_line_2_font_weight = BaseModel::getOptionValue('section_4_line_2_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_4_line_2_font_size = BaseModel::getOptionValue('section_4_line_2_font_size', AppConstants::FONT_SIZES[1]);
        $this->section_4_line_2_font_color = BaseModel::getOptionValue('section_4_line_2_font_color', '#ffffff');
        $this->section_4_line_2_text_alignment = BaseModel::getOptionValue('section_4_line_2_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_4_button_1_bg_color = BaseModel::getOptionValue('section_4_button_1_bg_color', '#004de6');
        $this->section_4_button_1_font_name = BaseModel::getOptionValue('section_4_button_1_font_name', AppConstants::FONT_FAMILIES[2]);
        $this->section_4_button_1_font_weight = BaseModel::getOptionValue('section_4_button_1_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_4_button_1_font_size = BaseModel::getOptionValue('section_4_button_1_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_4_button_1_font_color = BaseModel::getOptionValue('section_4_button_1_font_color', '#ffffff');
        $this->section_4_button_1_text_alignment = BaseModel::getOptionValue('section_4_button_1_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_4_button_1_text = BaseModel::getOptionValue('section_4_button_1_text', 'Agenda una visita');
        $this->section_4_button_1_icon_link = BaseModel::getOptionValue('section_4_button_1_icon_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/4/calendaricon.png');
        
        // Initialize font arrays
        $this->fontFamilies = AppConstants::FONT_FAMILIES;
        $this->fontWeights = AppConstants::FONT_WEIGHTS;
        $this->fontSizes = AppConstants::FONT_SIZES;
        $this->textAlignments = AppConstants::TEXT_ALIGNMENT;
    }

    public function updateSection4()
    {
        BaseModel::setOptionValue('section_4_is_disabled', $this->section_4_is_disabled);
        BaseModel::setOptionValue('section_4_bg_color', $this->section_4_bg_color);
        BaseModel::setOptionValue('section_4_picture_link', $this->section_4_picture_link);
        BaseModel::setOptionValue('section_4_line_1', $this->section_4_line_1);
        BaseModel::setOptionValue('section_4_line_1_font_name', $this->section_4_line_1_font_name);
        BaseModel::setOptionValue('section_4_line_1_font_weight', $this->section_4_line_1_font_weight);
        BaseModel::setOptionValue('section_4_line_1_font_size', $this->section_4_line_1_font_size);
        BaseModel::setOptionValue('section_4_line_1_font_color', $this->section_4_line_1_font_color);
        BaseModel::setOptionValue('section_4_line_1_text_alignment', $this->section_4_line_1_text_alignment);
        BaseModel::setOptionValue('section_4_line_2', $this->section_4_line_2);
        BaseModel::setOptionValue('section_4_line_2_font_name', $this->section_4_line_2_font_name);
        BaseModel::setOptionValue('section_4_line_2_font_weight', $this->section_4_line_2_font_weight);
        BaseModel::setOptionValue('section_4_line_2_font_size', $this->section_4_line_2_font_size);
        BaseModel::setOptionValue('section_4_line_2_font_color', $this->section_4_line_2_font_color);
        BaseModel::setOptionValue('section_4_line_2_text_alignment', $this->section_4_line_2_text_alignment);
        BaseModel::setOptionValue('section_4_button_1_bg_color', $this->section_4_button_1_bg_color);
        BaseModel::setOptionValue('section_4_button_1_font_name', $this->section_4_button_1_font_name);
        BaseModel::setOptionValue('section_4_button_1_font_weight', $this->section_4_button_1_font_weight);
        BaseModel::setOptionValue('section_4_button_1_font_size', $this->section_4_button_1_font_size);
        BaseModel::setOptionValue('section_4_button_1_font_color', $this->section_4_button_1_font_color);
        BaseModel::setOptionValue('section_4_button_1_text_alignment', $this->section_4_button_1_text_alignment);
        BaseModel::setOptionValue('section_4_button_1_text', $this->section_4_button_1_text);
        BaseModel::setOptionValue('section_4_button_1_icon_link', $this->section_4_button_1_icon_link);
        
        $this->dispatch('toast', message: 'Section 4 updated successfully!', type: 'success');
    }

    public function render()
    {
        return view('livewire.components.base-model.section4');
    }
}