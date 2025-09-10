<?php

namespace App\Livewire\Components\Public;

use App\Models\BaseModel;
use App\Models\Broker;
use App\Models\Personalization;
use Livewire\Component;

class Section7 extends Component
{
    protected $listeners = ['refresh-preview-section-7' => 'refreshPreview'];
    public $broker;
    
    // Section properties
    public $section_7_is_disabled;
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
    
    // Items Content
    public $section_7_item1_title;
    public $section_7_item1_subtitle;
    public $section_7_item1_icon_url;
    
    public $section_7_item2_title;
    public $section_7_item2_subtitle;
    public $section_7_item2_icon_url;
    
    public $section_7_item3_title;
    public $section_7_item3_subtitle;
    public $section_7_item3_icon_url;

    
    public $section_7_item1_icon_link;
    public $section_7_item2_icon_link;
    public $section_7_item3_icon_link;

    public function mount($broker = null)
    {
        if (!$broker) {
            $this->broker = Broker::first();
        } else {
            $this->broker = is_numeric($broker) ? Broker::find($broker) : $broker;
        }
        
        // Load base model values
        $this->section_7_is_disabled = (bool) BaseModel::getOptionValue('section_7_is_disabled', 0);
        $this->section_7_bg_color = BaseModel::getOptionValue('section_7_bg_color', '#89d4e3');
        
        // Rectangle 1
        $this->section_7_rect1_icon_url = BaseModel::getOptionValue('section_7_rect1_icon_url', 'https://acequiasb.s3.us-east-1.amazonaws.com/micros/6/compraico.png');
        $this->section_7_rect1_title = BaseModel::getOptionValue('section_7_rect1_title', 'DEMOS EL PRÓXIMO PASO JUNTOS');
        $this->section_7_rect1_title_font_name = BaseModel::getOptionValue('section_7_rect1_title_font_name', 'Geometos');
        $this->section_7_rect1_title_font_weight = BaseModel::getOptionValue('section_7_rect1_title_font_weight', 'font-normal');
        $this->section_7_rect1_title_font_size = BaseModel::getOptionValue('section_7_rect1_title_font_size', 'text-lg');
        $this->section_7_rect1_title_font_color = BaseModel::getOptionValue('section_7_rect1_title_font_color', '#2d2926');
        $this->section_7_rect1_title_text_alignment = BaseModel::getOptionValue('section_7_rect1_title_text_alignment', 'text-left');
        
        // Rectangle 2 - Shared Title Styling
        $this->section_7_rect2_title_font_name = BaseModel::getOptionValue('section_7_rect2_title_font_name', 'Ubuntu');
        $this->section_7_rect2_title_font_weight = BaseModel::getOptionValue('section_7_rect2_title_font_weight', 'font-normal');
        $this->section_7_rect2_title_font_size = BaseModel::getOptionValue('section_7_rect2_title_font_size', 'text-base');
        $this->section_7_rect2_title_font_color = BaseModel::getOptionValue('section_7_rect2_title_font_color', '#2d2926');
        $this->section_7_rect2_title_text_alignment = BaseModel::getOptionValue('section_7_rect2_title_text_alignment', 'text-left');
        
        // Rectangle 2 - Shared Subtitle Styling
        $this->section_7_rect2_subtitle_font_name = BaseModel::getOptionValue('section_7_rect2_subtitle_font_name', 'Ubuntu');
        $this->section_7_rect2_subtitle_font_weight = BaseModel::getOptionValue('section_7_rect2_subtitle_font_weight', 'font-normal');
        $this->section_7_rect2_subtitle_font_size = BaseModel::getOptionValue('section_7_rect2_subtitle_font_size', 'text-sm');
        $this->section_7_rect2_subtitle_font_color = BaseModel::getOptionValue('section_7_rect2_subtitle_font_color', '#63666a');
        $this->section_7_rect2_subtitle_text_alignment = BaseModel::getOptionValue('section_7_rect2_subtitle_text_alignment', 'text-left');
        
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
        
        // Load personalization if broker exists
        if ($this->broker) {
            $personalization = Personalization::where('broker_id', $this->broker->id)->first();
            if ($personalization) {
                if ($personalization->section_7_item1_icon_link) {
                    $this->section_7_item1_icon_link = $personalization->section_7_item1_icon_link;
                }
                if ($personalization->section_7_item2_icon_link) {
                    $this->section_7_item2_icon_link = $personalization->section_7_item2_icon_link;
                }
                if ($personalization->section_7_item3_icon_link) {
                    $this->section_7_item3_icon_link = $personalization->section_7_item3_icon_link;
                }
            }
        }
    }

    public function refreshPreview()
    {
        $this->mount($this->broker);
    }

    public function render()
    {
        return view('livewire.components.public.section7');
    }
}