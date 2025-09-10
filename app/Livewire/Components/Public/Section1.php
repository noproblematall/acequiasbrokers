<?php

namespace App\Livewire\Components\Public;

use App\Models\BaseModel;
use App\Models\Broker;
use Livewire\Component;

class Section1 extends Component
{
    public $section_1_logo_link;
    public $section_1_logo_width;
    public $section_1_bg_color;
    public $section_1_is_disabled;
    public $broker;

    public function mount($broker = null)
    {
        if (!$broker) {
            $this->broker = Broker::first();
        } else {
            $this->broker = is_numeric($broker) ? Broker::find($broker) : $broker;
        }

        $this->section_1_logo_link = BaseModel::getOptionValue('section_1_logo_link');
        $this->section_1_logo_width = BaseModel::getOptionValue('section_1_logo_width', '100');
        $this->section_1_bg_color = BaseModel::getOptionValue('section_1_bg_color', '#ffffff');
        $this->section_1_is_disabled = BaseModel::getOptionValue('section_1_is_disabled', false);
    }

    public function render()
    {
        return view('livewire.components.public.section1');
    }
}