<?php

namespace App\Livewire\Components\Public;

use App\Models\BaseModel;
use App\Models\Broker;
use App\Models\Personalization;
use Livewire\Component;

class Section2 extends Component
{
    public $broker;
    public $section_2_bg_color;
    public $section_2_is_disabled;
    public $section_2_line_1;
    public $section_2_line_2;
    public $section_2_paragraph_3;
    public $section_2_button_link;
    public $section_2_image_url;
    
    // Line 1 styling
    public $section_2_line_1_font_name;
    public $section_2_line_1_font_weight;
    public $section_2_line_1_font_size;
    public $section_2_line_1_font_color;
    public $section_2_line_1_text_alignment;
    
    // Line 2 styling
    public $section_2_line_2_font_name;
    public $section_2_line_2_font_weight;
    public $section_2_line_2_font_size;
    public $section_2_line_2_font_color;
    public $section_2_line_2_text_alignment;
    
    // Paragraph 3 styling
    public $section_2_paragraph_3_font_name;
    public $section_2_paragraph_3_font_weight;
    public $section_2_paragraph_3_font_size;
    public $section_2_paragraph_3_font_color;
    public $section_2_paragraph_3_text_alignment;
    
    // Button styling
    public $section_2_button_1_bg_color;
    public $section_2_button_1_font_name;
    public $section_2_button_1_font_weight;
    public $section_2_button_1_font_size;
    public $section_2_button_1_font_color;
    public $section_2_button_1_text_alignment;
    public $section_2_button_1_icon_link;
    public $section_2_button_1_text;

    public function mount($broker = null)
    {
        if (!$broker) {
            $this->broker = Broker::first();
        } else {
            $this->broker = is_numeric($broker) ? Broker::find($broker) : $broker;
        }
        
        $this->section_2_bg_color = BaseModel::getOptionValue('section_2_bg_color', '#ffffff');
        $this->section_2_is_disabled = BaseModel::getOptionValue('section_2_is_disabled', false);
                
        // Get styling options
        $this->section_2_line_1_font_name = BaseModel::getOptionValue('section_2_line_1_font_name', 'Arial');
        $this->section_2_line_1_font_weight = BaseModel::getOptionValue('section_2_line_1_font_weight', '700');
        $this->section_2_line_1_font_size = BaseModel::getOptionValue('section_2_line_1_font_size', '24');
        $this->section_2_line_1_font_color = BaseModel::getOptionValue('section_2_line_1_font_color', '#111827');
        $this->section_2_line_1_text_alignment = BaseModel::getOptionValue('section_2_line_1_text_alignment', 'left');
        
        $this->section_2_line_2_font_name = BaseModel::getOptionValue('section_2_line_2_font_name', 'Arial');
        $this->section_2_line_2_font_weight = BaseModel::getOptionValue('section_2_line_2_font_weight', '600');
        $this->section_2_line_2_font_size = BaseModel::getOptionValue('section_2_line_2_font_size', '20');
        $this->section_2_line_2_font_color = BaseModel::getOptionValue('section_2_line_2_font_color', '#374151');
        $this->section_2_line_2_text_alignment = BaseModel::getOptionValue('section_2_line_2_text_alignment', 'left');
        
        $this->section_2_paragraph_3_font_name = BaseModel::getOptionValue('section_2_paragraph_3_font_name', 'Arial');
        $this->section_2_paragraph_3_font_weight = BaseModel::getOptionValue('section_2_paragraph_3_font_weight', '400');
        $this->section_2_paragraph_3_font_size = BaseModel::getOptionValue('section_2_paragraph_3_font_size', '16');
        $this->section_2_paragraph_3_font_color = BaseModel::getOptionValue('section_2_paragraph_3_font_color', '#4b5563');
        $this->section_2_paragraph_3_text_alignment = BaseModel::getOptionValue('section_2_paragraph_3_text_alignment', 'left');
        
        $this->section_2_button_1_bg_color = BaseModel::getOptionValue('section_2_button_1_bg_color', '#2563eb');
        $this->section_2_button_1_font_name = BaseModel::getOptionValue('section_2_button_1_font_name', 'Arial');
        $this->section_2_button_1_font_weight = BaseModel::getOptionValue('section_2_button_1_font_weight', '500');
        $this->section_2_button_1_font_size = BaseModel::getOptionValue('section_2_button_1_font_size', '16');
        $this->section_2_button_1_font_color = BaseModel::getOptionValue('section_2_button_1_font_color', '#ffffff');
        $this->section_2_button_1_text_alignment = BaseModel::getOptionValue('section_2_button_1_text_alignment', 'center');
        $this->section_2_button_1_icon_link = BaseModel::getOptionValue('section_2_button_1_icon_link');
        $this->section_2_button_1_text = BaseModel::getOptionValue('section_2_button_1_text');
        
        // Override with broker personalization if exists
        if ($this->broker) {
            $personalization = Personalization::where('broker_id', $this->broker->id)->first();
            if ($personalization) {
                $this->section_2_line_1 = $personalization->section_2_line_1 ?: $this->section_2_line_1;
                $this->section_2_line_2 = $personalization->section_2_line_2 ?: $this->section_2_line_2;
                $this->section_2_paragraph_3 = $personalization->section_2_paragraph_3 ?: $this->section_2_paragraph_3;
                $this->section_2_image_url = $personalization->section_2_image_url ?: $this->section_2_image_url;
                $this->section_2_button_link = $personalization->section_2_button_link ?: $this->section_2_button_link;
            }
        }
    }

    public function render()
    {
        return view('livewire.components.public.section2');
    }
}