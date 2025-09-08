<?php

namespace App\Livewire\Components\BaseModel;

use App\Constants\AppConstants;
use App\Models\BaseModel;
use Livewire\Component;

class Section7 extends Component
{
    public $section_7_is_disabled = false;
    public $section_7_bg_color;
    
    // Rectangle 1
    public $section_7_rect1_icon_url;
    public $section_7_rect1_title;
    public $section_7_rect1_title_font_name;
    public $section_7_rect1_title_font_weight;
    public $section_7_rect1_title_font_size;
    public $section_7_rect1_title_font_color;
    public $section_7_rect1_title_text_alignment;
    
    // Rectangle 2 - Shared Title Styling
    public $section_7_rect2_title_font_name;
    public $section_7_rect2_title_font_weight;
    public $section_7_rect2_title_font_size;
    public $section_7_rect2_title_font_color;
    public $section_7_rect2_title_text_alignment;
    
    // Rectangle 2 - Shared Subtitle Styling
    public $section_7_rect2_subtitle_font_name;
    public $section_7_rect2_subtitle_font_weight;
    public $section_7_rect2_subtitle_font_size;
    public $section_7_rect2_subtitle_font_color;
    public $section_7_rect2_subtitle_text_alignment;
    
    // Rectangle 2 - Items Content
    public $section_7_item1_title;
    public $section_7_item1_subtitle;
    public $section_7_item1_icon_url;
    
    public $section_7_item2_title;
    public $section_7_item2_subtitle;
    public $section_7_item2_icon_url;
    
    public $section_7_item3_title;
    public $section_7_item3_subtitle;
    public $section_7_item3_icon_url;

    public $fontFamilies;
    public $fontWeights;
    public $fontSizes;
    public $textAlignments;

    public function mount()
    {
        // Initialize Section 7
        $this->section_7_is_disabled = (bool) BaseModel::getOptionValue('section_7_is_disabled', 0);
        $this->section_7_bg_color = BaseModel::getOptionValue('section_7_bg_color', '#89d4e3');
        
        // Rectangle 1
        $this->section_7_rect1_icon_url = BaseModel::getOptionValue('section_7_rect1_icon_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/6/compraico.png');
        $this->section_7_rect1_title = BaseModel::getOptionValue('section_7_rect1_title', 'DEMOS EL PRÓXIMO PASO JUNTOS');
        $this->section_7_rect1_title_font_name = BaseModel::getOptionValue('section_7_rect1_title_font_name', AppConstants::FONT_FAMILIES[0]);
        $this->section_7_rect1_title_font_weight = BaseModel::getOptionValue('section_7_rect1_title_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_7_rect1_title_font_size = BaseModel::getOptionValue('section_7_rect1_title_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_7_rect1_title_font_color = BaseModel::getOptionValue('section_7_rect1_title_font_color', '#2d2926');
        $this->section_7_rect1_title_text_alignment = BaseModel::getOptionValue('section_7_rect1_title_text_alignment', AppConstants::TEXT_ALIGNMENT[0]);
        
        // Rectangle 2 - Shared Title Styling
        $this->section_7_rect2_title_font_name = BaseModel::getOptionValue('section_7_rect2_title_font_name', AppConstants::FONT_FAMILIES[2]);
        $this->section_7_rect2_title_font_weight = BaseModel::getOptionValue('section_7_rect2_title_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_7_rect2_title_font_size = BaseModel::getOptionValue('section_7_rect2_title_font_size', AppConstants::FONT_SIZES[2]);
        $this->section_7_rect2_title_font_color = BaseModel::getOptionValue('section_7_rect2_title_font_color', '#2d2926');
        $this->section_7_rect2_title_text_alignment = BaseModel::getOptionValue('section_7_rect2_title_text_alignment', AppConstants::TEXT_ALIGNMENT[0]);
        
        // Rectangle 2 - Shared Subtitle Styling
        $this->section_7_rect2_subtitle_font_name = BaseModel::getOptionValue('section_7_rect2_subtitle_font_name', AppConstants::FONT_FAMILIES[2]);
        $this->section_7_rect2_subtitle_font_weight = BaseModel::getOptionValue('section_7_rect2_subtitle_font_weight', AppConstants::FONT_WEIGHTS[3]);
        $this->section_7_rect2_subtitle_font_size = BaseModel::getOptionValue('section_7_rect2_subtitle_font_size', AppConstants::FONT_SIZES[1]);
        $this->section_7_rect2_subtitle_font_color = BaseModel::getOptionValue('section_7_rect2_subtitle_font_color', '#63666a');
        $this->section_7_rect2_subtitle_text_alignment = BaseModel::getOptionValue('section_7_rect2_subtitle_text_alignment', AppConstants::TEXT_ALIGNMENT[0]);
        
        // Items Content
        $this->section_7_item1_title = BaseModel::getOptionValue('section_7_item1_title', 'Conversemos por WhatsApp');
        $this->section_7_item1_subtitle = BaseModel::getOptionValue('section_7_item1_subtitle', 'Hablemos hoy de lo que te importa.');
        $this->section_7_item1_icon_url = BaseModel::getOptionValue('section_7_item1_icon_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/7/WA%2Bicon%2BT.png');
        
        $this->section_7_item2_title = BaseModel::getOptionValue('section_7_item2_title', 'Agendemos un llamado');
        $this->section_7_item2_subtitle = BaseModel::getOptionValue('section_7_item2_subtitle', 'Seleccioná día y hora para recibir mi llamado.');
        $this->section_7_item2_icon_url = BaseModel::getOptionValue('section_7_item2_icon_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/7/calendaricon.png');
        
        $this->section_7_item3_title = BaseModel::getOptionValue('section_7_item3_title', 'Guardá mi número');
        $this->section_7_item3_subtitle = BaseModel::getOptionValue('section_7_item3_subtitle', 'Registrá mis datos de contacto en tu celular.');
        $this->section_7_item3_icon_url = BaseModel::getOptionValue('section_7_item3_icon_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/7/agendarico.png');
        
        // Initialize font arrays
        $this->fontFamilies = AppConstants::FONT_FAMILIES;
        $this->fontWeights = AppConstants::FONT_WEIGHTS;
        $this->fontSizes = AppConstants::FONT_SIZES;
        $this->textAlignments = AppConstants::TEXT_ALIGNMENT;
    }

    public function updateSection7()
    {
        BaseModel::setOptionValue('section_7_is_disabled', $this->section_7_is_disabled);
        BaseModel::setOptionValue('section_7_bg_color', $this->section_7_bg_color);
        
        // Rectangle 1
        BaseModel::setOptionValue('section_7_rect1_icon_url', $this->section_7_rect1_icon_url);
        BaseModel::setOptionValue('section_7_rect1_title', $this->section_7_rect1_title);
        BaseModel::setOptionValue('section_7_rect1_title_font_name', $this->section_7_rect1_title_font_name);
        BaseModel::setOptionValue('section_7_rect1_title_font_weight', $this->section_7_rect1_title_font_weight);
        BaseModel::setOptionValue('section_7_rect1_title_font_size', $this->section_7_rect1_title_font_size);
        BaseModel::setOptionValue('section_7_rect1_title_font_color', $this->section_7_rect1_title_font_color);
        BaseModel::setOptionValue('section_7_rect1_title_text_alignment', $this->section_7_rect1_title_text_alignment);
        
        // Rectangle 2 - Shared Title Styling
        BaseModel::setOptionValue('section_7_rect2_title_font_name', $this->section_7_rect2_title_font_name);
        BaseModel::setOptionValue('section_7_rect2_title_font_weight', $this->section_7_rect2_title_font_weight);
        BaseModel::setOptionValue('section_7_rect2_title_font_size', $this->section_7_rect2_title_font_size);
        BaseModel::setOptionValue('section_7_rect2_title_font_color', $this->section_7_rect2_title_font_color);
        BaseModel::setOptionValue('section_7_rect2_title_text_alignment', $this->section_7_rect2_title_text_alignment);
        
        // Rectangle 2 - Shared Subtitle Styling
        BaseModel::setOptionValue('section_7_rect2_subtitle_font_name', $this->section_7_rect2_subtitle_font_name);
        BaseModel::setOptionValue('section_7_rect2_subtitle_font_weight', $this->section_7_rect2_subtitle_font_weight);
        BaseModel::setOptionValue('section_7_rect2_subtitle_font_size', $this->section_7_rect2_subtitle_font_size);
        BaseModel::setOptionValue('section_7_rect2_subtitle_font_color', $this->section_7_rect2_subtitle_font_color);
        BaseModel::setOptionValue('section_7_rect2_subtitle_text_alignment', $this->section_7_rect2_subtitle_text_alignment);
        
        // Items Content
        BaseModel::setOptionValue('section_7_item1_title', $this->section_7_item1_title);
        BaseModel::setOptionValue('section_7_item1_subtitle', $this->section_7_item1_subtitle);
        BaseModel::setOptionValue('section_7_item1_icon_url', $this->section_7_item1_icon_url);
        
        BaseModel::setOptionValue('section_7_item2_title', $this->section_7_item2_title);
        BaseModel::setOptionValue('section_7_item2_subtitle', $this->section_7_item2_subtitle);
        BaseModel::setOptionValue('section_7_item2_icon_url', $this->section_7_item2_icon_url);
        
        BaseModel::setOptionValue('section_7_item3_title', $this->section_7_item3_title);
        BaseModel::setOptionValue('section_7_item3_subtitle', $this->section_7_item3_subtitle);
        BaseModel::setOptionValue('section_7_item3_icon_url', $this->section_7_item3_icon_url);
        
        $this->dispatch('toast', message: 'Section 7 updated successfully!', type: 'success');
    }

    public function render()
    {
        return view('livewire.components.base-model.section7');
    }
}