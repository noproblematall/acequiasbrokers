<?php

namespace App\Livewire\Components\BaseModel;

use App\Constants\AppConstants;
use App\Models\BaseModel;
use Livewire\Component;

class Section6 extends Component
{
    public $section_6_is_disabled = false;
    public $section_6_bg_color;
    
    // Rectangle 1
    public $section_6_rect1_icon_link;
    public $section_6_rect1_title;
    public $section_6_rect1_title_font_name;
    public $section_6_rect1_title_font_weight;
    public $section_6_rect1_title_font_size;
    public $section_6_rect1_title_font_color;
    public $section_6_rect1_title_text_alignment;
    
    // Rectangle 2
    public $section_6_rect2_image_link;
    public $section_6_rect2_title;
    public $section_6_rect2_title_font_name;
    public $section_6_rect2_title_font_weight;
    public $section_6_rect2_title_font_size;
    public $section_6_rect2_title_font_color;
    public $section_6_rect2_title_text_alignment;
    
    public $section_6_rect2_text;
    public $section_6_rect2_text_font_name;
    public $section_6_rect2_text_font_weight;
    public $section_6_rect2_text_font_size;
    public $section_6_rect2_text_font_color;
    public $section_6_rect2_text_text_alignment;
    
    public $section_6_button_bg_color;
    public $section_6_button_font_color;
    public $section_6_button_font_name;
    public $section_6_button_font_weight;
    public $section_6_button_font_size;
    public $section_6_button_text_alignment;
    public $section_6_button_text;
    public $section_6_button_icon_link;

    public $fontFamilies;
    public $fontWeights;
    public $fontSizes;
    public $textAlignments;

    public function mount()
    {
        // Initialize Section 6
        $this->section_6_is_disabled = (bool) BaseModel::getOptionValue('section_6_is_disabled', 0);
        $this->section_6_bg_color = BaseModel::getOptionValue('section_6_bg_color', '#01c8c5');
        
        // Rectangle 1
        $this->section_6_rect1_icon_link = BaseModel::getOptionValue('section_6_rect1_icon_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/6/compraico.png');
        $this->section_6_rect1_title = BaseModel::getOptionValue('section_6_rect1_title', '¡QUIERO COMPRAR UN INMUEBLE!');
        $this->section_6_rect1_title_font_name = BaseModel::getOptionValue('section_6_rect1_title_font_name', AppConstants::FONT_FAMILIES[0]);
        $this->section_6_rect1_title_font_weight = BaseModel::getOptionValue('section_6_rect1_title_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_6_rect1_title_font_size = BaseModel::getOptionValue('section_6_rect1_title_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_6_rect1_title_font_color = BaseModel::getOptionValue('section_6_rect1_title_font_color', '#2d2926');
        $this->section_6_rect1_title_text_alignment = BaseModel::getOptionValue('section_6_rect1_title_text_alignment', AppConstants::TEXT_ALIGNMENT[0]);
        
        // Rectangle 2
        $this->section_6_rect2_image_link = BaseModel::getOptionValue('section_6_rect2_image_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/6/comprapic.png');
        $this->section_6_rect2_title = BaseModel::getOptionValue('section_6_rect2_title', 'TU ESPACIO PERFECTO ESTÁ MÁS CERCA DE LO QUE IMAGINÁS');
        $this->section_6_rect2_title_font_name = BaseModel::getOptionValue('section_6_rect2_title_font_name', AppConstants::FONT_FAMILIES[0]);
        $this->section_6_rect2_title_font_weight = BaseModel::getOptionValue('section_6_rect2_title_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_6_rect2_title_font_size = BaseModel::getOptionValue('section_6_rect2_title_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_6_rect2_title_font_color = BaseModel::getOptionValue('section_6_rect2_title_font_color', '#2d2926');
        $this->section_6_rect2_title_text_alignment = BaseModel::getOptionValue('section_6_rect2_title_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        
        $this->section_6_rect2_text = BaseModel::getOptionValue('section_6_rect2_text', 'Nuestro método exclusivo permite recorrer inmuebles virtualmente y en detalle antes de visitarlos. Ahorrás tiempo, elegís mejor y accedés antes a oportunidades.');
        $this->section_6_rect2_text_font_name = BaseModel::getOptionValue('section_6_rect2_text_font_name', AppConstants::FONT_FAMILIES[2]);
        $this->section_6_rect2_text_font_weight = BaseModel::getOptionValue('section_6_rect2_text_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_6_rect2_text_font_size = BaseModel::getOptionValue('section_6_rect2_text_font_size', AppConstants::FONT_SIZES[1]);
        $this->section_6_rect2_text_font_color = BaseModel::getOptionValue('section_6_rect2_text_font_color', '#2d2926');
        $this->section_6_rect2_text_text_alignment = BaseModel::getOptionValue('section_6_rect2_text_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        
        // Button
        $this->section_6_button_bg_color = BaseModel::getOptionValue('section_6_button_bg_color', '#004de6');
        $this->section_6_button_font_color = BaseModel::getOptionValue('section_6_button_font_color', '#ffffff');
        $this->section_6_button_font_name = BaseModel::getOptionValue('section_6_button_font_name', AppConstants::FONT_FAMILIES[2]);
        $this->section_6_button_font_weight = BaseModel::getOptionValue('section_6_button_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_6_button_font_size = BaseModel::getOptionValue('section_6_button_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_6_button_text_alignment = BaseModel::getOptionValue('section_6_button_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_6_button_text = BaseModel::getOptionValue('section_6_button_text', 'Clic para saber más');
        $this->section_6_button_icon_link = BaseModel::getOptionValue('section_6_button_icon_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/6/informationico.png');
        
        // Initialize font arrays
        $this->fontFamilies = AppConstants::FONT_FAMILIES;
        $this->fontWeights = AppConstants::FONT_WEIGHTS;
        $this->fontSizes = AppConstants::FONT_SIZES;
        $this->textAlignments = AppConstants::TEXT_ALIGNMENT;
    }

    public function updateSection6()
    {
        BaseModel::setOptionValue('section_6_is_disabled', $this->section_6_is_disabled);
        BaseModel::setOptionValue('section_6_bg_color', $this->section_6_bg_color);
        
        // Rectangle 1
        BaseModel::setOptionValue('section_6_rect1_icon_link', $this->section_6_rect1_icon_link);
        BaseModel::setOptionValue('section_6_rect1_title', $this->section_6_rect1_title);
        BaseModel::setOptionValue('section_6_rect1_title_font_name', $this->section_6_rect1_title_font_name);
        BaseModel::setOptionValue('section_6_rect1_title_font_weight', $this->section_6_rect1_title_font_weight);
        BaseModel::setOptionValue('section_6_rect1_title_font_size', $this->section_6_rect1_title_font_size);
        BaseModel::setOptionValue('section_6_rect1_title_font_color', $this->section_6_rect1_title_font_color);
        BaseModel::setOptionValue('section_6_rect1_title_text_alignment', $this->section_6_rect1_title_text_alignment);
        
        // Rectangle 2
        BaseModel::setOptionValue('section_6_rect2_image_link', $this->section_6_rect2_image_link);
        BaseModel::setOptionValue('section_6_rect2_title', $this->section_6_rect2_title);
        BaseModel::setOptionValue('section_6_rect2_title_font_name', $this->section_6_rect2_title_font_name);
        BaseModel::setOptionValue('section_6_rect2_title_font_weight', $this->section_6_rect2_title_font_weight);
        BaseModel::setOptionValue('section_6_rect2_title_font_size', $this->section_6_rect2_title_font_size);
        BaseModel::setOptionValue('section_6_rect2_title_font_color', $this->section_6_rect2_title_font_color);
        BaseModel::setOptionValue('section_6_rect2_title_text_alignment', $this->section_6_rect2_title_text_alignment);
        
        BaseModel::setOptionValue('section_6_rect2_text', $this->section_6_rect2_text);
        BaseModel::setOptionValue('section_6_rect2_text_font_name', $this->section_6_rect2_text_font_name);
        BaseModel::setOptionValue('section_6_rect2_text_font_weight', $this->section_6_rect2_text_font_weight);
        BaseModel::setOptionValue('section_6_rect2_text_font_size', $this->section_6_rect2_text_font_size);
        BaseModel::setOptionValue('section_6_rect2_text_font_color', $this->section_6_rect2_text_font_color);
        BaseModel::setOptionValue('section_6_rect2_text_text_alignment', $this->section_6_rect2_text_text_alignment);
        
        // Button
        BaseModel::setOptionValue('section_6_button_bg_color', $this->section_6_button_bg_color);
        BaseModel::setOptionValue('section_6_button_font_color', $this->section_6_button_font_color);
        BaseModel::setOptionValue('section_6_button_font_name', $this->section_6_button_font_name);
        BaseModel::setOptionValue('section_6_button_font_weight', $this->section_6_button_font_weight);
        BaseModel::setOptionValue('section_6_button_font_size', $this->section_6_button_font_size);
        BaseModel::setOptionValue('section_6_button_text_alignment', $this->section_6_button_text_alignment);
        BaseModel::setOptionValue('section_6_button_text', $this->section_6_button_text);
        BaseModel::setOptionValue('section_6_button_icon_link', $this->section_6_button_icon_link);
        
        $this->dispatch('toast', message: 'Section 6 updated successfully!', type: 'success');
        $this->dispatch('refresh-preview-section-6');
    }

    public function render()
    {
        return view('livewire.components.base-model.section6');
    }
}