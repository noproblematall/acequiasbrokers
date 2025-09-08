<?php

namespace App\Livewire\Components\BaseModel;

use App\Constants\AppConstants;
use App\Models\BaseModel;
use Livewire\Component;

class Section5 extends Component
{
    public $section_5_is_disabled = false;
    public $section_5_bg_color;
    
    // Rectangle 1
    public $section_5_rect1_icon_link;
    public $section_5_rect1_title;
    public $section_5_rect1_title_font_name;
    public $section_5_rect1_title_font_weight;
    public $section_5_rect1_title_font_size;
    public $section_5_rect1_title_font_color;
    public $section_5_rect1_title_text_alignment;
    
    // Rectangle 2
    public $section_5_rect2_image_link;
    public $section_5_rect2_title;
    public $section_5_rect2_title_font_name;
    public $section_5_rect2_title_font_weight;
    public $section_5_rect2_title_font_size;
    public $section_5_rect2_title_font_color;
    public $section_5_rect2_title_text_alignment;
    
    public $section_5_rect2_text;
    public $section_5_rect2_text_font_name;
    public $section_5_rect2_text_font_weight;
    public $section_5_rect2_text_font_size;
    public $section_5_rect2_text_font_color;
    public $section_5_rect2_text_text_alignment;
    
    public $section_5_button_bg_color;
    public $section_5_button_font_color;
    public $section_5_button_font_name;
    public $section_5_button_font_weight;
    public $section_5_button_font_size;
    public $section_5_button_text_alignment;
    public $section_5_button_text;
    public $section_5_button_icon_link;

    public $fontFamilies;
    public $fontWeights;
    public $fontSizes;
    public $textAlignments;

    public function mount()
    {
        // Initialize Section 5
        $this->section_5_is_disabled = (bool) BaseModel::getOptionValue('section_5_is_disabled', 0);
        $this->section_5_bg_color = BaseModel::getOptionValue('section_5_bg_color', '#31cbfc');
        
        // Rectangle 1
        $this->section_5_rect1_icon_link = BaseModel::getOptionValue('section_5_rect1_icon_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/5/ventaico.png');
        $this->section_5_rect1_title = BaseModel::getOptionValue('section_5_rect1_title', '¡QUIERO VENDER UN INMUEBLE!');
        $this->section_5_rect1_title_font_name = BaseModel::getOptionValue('section_5_rect1_title_font_name', AppConstants::FONT_FAMILIES[0]);
        $this->section_5_rect1_title_font_weight = BaseModel::getOptionValue('section_5_rect1_title_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_5_rect1_title_font_size = BaseModel::getOptionValue('section_5_rect1_title_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_5_rect1_title_font_color = BaseModel::getOptionValue('section_5_rect1_title_font_color', '#2d2926');
        $this->section_5_rect1_title_text_alignment = BaseModel::getOptionValue('section_5_rect1_title_text_alignment', AppConstants::TEXT_ALIGNMENT[0]);
        
        // Rectangle 2
        $this->section_5_rect2_image_link = BaseModel::getOptionValue('section_5_rect2_image_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/5/ventapic.png');
        $this->section_5_rect2_title = BaseModel::getOptionValue('section_5_rect2_title', 'PUBLICAMOS TU INMUEBLE CON RECORRIDOS VIRTUALES 360°');
        $this->section_5_rect2_title_font_name = BaseModel::getOptionValue('section_5_rect2_title_font_name', AppConstants::FONT_FAMILIES[0]);
        $this->section_5_rect2_title_font_weight = BaseModel::getOptionValue('section_5_rect2_title_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_5_rect2_title_font_size = BaseModel::getOptionValue('section_5_rect2_title_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_5_rect2_title_font_color = BaseModel::getOptionValue('section_5_rect2_title_font_color', '#2d2926');
        $this->section_5_rect2_title_text_alignment = BaseModel::getOptionValue('section_5_rect2_title_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        
        $this->section_5_rect2_text = BaseModel::getOptionValue('section_5_rect2_text', 'Con un sistema único que integra recorridos virtuales 360° y visitas presenciales, atraemos más compradores calificados y reducimos los tiempos de venta.');
        $this->section_5_rect2_text_font_name = BaseModel::getOptionValue('section_5_rect2_text_font_name', AppConstants::FONT_FAMILIES[2]);
        $this->section_5_rect2_text_font_weight = BaseModel::getOptionValue('section_5_rect2_text_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_5_rect2_text_font_size = BaseModel::getOptionValue('section_5_rect2_text_font_size', AppConstants::FONT_SIZES[1]);
        $this->section_5_rect2_text_font_color = BaseModel::getOptionValue('section_5_rect2_text_font_color', '#2d2926');
        $this->section_5_rect2_text_text_alignment = BaseModel::getOptionValue('section_5_rect2_text_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        
        // Button
        $this->section_5_button_bg_color = BaseModel::getOptionValue('section_5_button_bg_color', '#004de6');
        $this->section_5_button_font_color = BaseModel::getOptionValue('section_5_button_font_color', '#ffffff');
        $this->section_5_button_font_name = BaseModel::getOptionValue('section_5_button_font_name', AppConstants::FONT_FAMILIES[2]);
        $this->section_5_button_font_weight = BaseModel::getOptionValue('section_5_button_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_5_button_font_size = BaseModel::getOptionValue('section_5_button_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_5_button_text_alignment = BaseModel::getOptionValue('section_5_button_text_alignment', AppConstants::TEXT_ALIGNMENT[1]);
        $this->section_5_button_text = BaseModel::getOptionValue('section_5_button_text', 'Clic para saber más');
        $this->section_5_button_icon_link = BaseModel::getOptionValue('section_5_button_icon_link', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/5/informationico.png');
        
        // Initialize font arrays
        $this->fontFamilies = AppConstants::FONT_FAMILIES;
        $this->fontWeights = AppConstants::FONT_WEIGHTS;
        $this->fontSizes = AppConstants::FONT_SIZES;
        $this->textAlignments = AppConstants::TEXT_ALIGNMENT;
    }

    public function updateSection5()
    {
        BaseModel::setOptionValue('section_5_is_disabled', $this->section_5_is_disabled);
        BaseModel::setOptionValue('section_5_bg_color', $this->section_5_bg_color);
        
        // Rectangle 1
        BaseModel::setOptionValue('section_5_rect1_icon_link', $this->section_5_rect1_icon_link);
        BaseModel::setOptionValue('section_5_rect1_title', $this->section_5_rect1_title);
        BaseModel::setOptionValue('section_5_rect1_title_font_name', $this->section_5_rect1_title_font_name);
        BaseModel::setOptionValue('section_5_rect1_title_font_weight', $this->section_5_rect1_title_font_weight);
        BaseModel::setOptionValue('section_5_rect1_title_font_size', $this->section_5_rect1_title_font_size);
        BaseModel::setOptionValue('section_5_rect1_title_font_color', $this->section_5_rect1_title_font_color);
        BaseModel::setOptionValue('section_5_rect1_title_text_alignment', $this->section_5_rect1_title_text_alignment);
        
        // Rectangle 2
        BaseModel::setOptionValue('section_5_rect2_image_link', $this->section_5_rect2_image_link);
        BaseModel::setOptionValue('section_5_rect2_title', $this->section_5_rect2_title);
        BaseModel::setOptionValue('section_5_rect2_title_font_name', $this->section_5_rect2_title_font_name);
        BaseModel::setOptionValue('section_5_rect2_title_font_weight', $this->section_5_rect2_title_font_weight);
        BaseModel::setOptionValue('section_5_rect2_title_font_size', $this->section_5_rect2_title_font_size);
        BaseModel::setOptionValue('section_5_rect2_title_font_color', $this->section_5_rect2_title_font_color);
        BaseModel::setOptionValue('section_5_rect2_title_text_alignment', $this->section_5_rect2_title_text_alignment);
        
        BaseModel::setOptionValue('section_5_rect2_text', $this->section_5_rect2_text);
        BaseModel::setOptionValue('section_5_rect2_text_font_name', $this->section_5_rect2_text_font_name);
        BaseModel::setOptionValue('section_5_rect2_text_font_weight', $this->section_5_rect2_text_font_weight);
        BaseModel::setOptionValue('section_5_rect2_text_font_size', $this->section_5_rect2_text_font_size);
        BaseModel::setOptionValue('section_5_rect2_text_font_color', $this->section_5_rect2_text_font_color);
        BaseModel::setOptionValue('section_5_rect2_text_text_alignment', $this->section_5_rect2_text_text_alignment);
        
        // Button
        BaseModel::setOptionValue('section_5_button_bg_color', $this->section_5_button_bg_color);
        BaseModel::setOptionValue('section_5_button_font_color', $this->section_5_button_font_color);
        BaseModel::setOptionValue('section_5_button_font_name', $this->section_5_button_font_name);
        BaseModel::setOptionValue('section_5_button_font_weight', $this->section_5_button_font_weight);
        BaseModel::setOptionValue('section_5_button_font_size', $this->section_5_button_font_size);
        BaseModel::setOptionValue('section_5_button_text_alignment', $this->section_5_button_text_alignment);
        BaseModel::setOptionValue('section_5_button_text', $this->section_5_button_text);
        BaseModel::setOptionValue('section_5_button_icon_link', $this->section_5_button_icon_link);
        
        $this->dispatch('toast', message: 'Section 5 updated successfully!', type: 'success');
    }

    public function render()
    {
        return view('livewire.components.base-model.section5');
    }
}