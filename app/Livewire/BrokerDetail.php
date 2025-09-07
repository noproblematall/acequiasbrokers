<?php

namespace App\Livewire;

use App\Models\Broker;
use App\Models\Personalization;
use Livewire\Component;

class BrokerDetail extends Component
{
    public Broker $broker;
    
    // Personalization fields
    public $section_2_line_1;
    public $section_2_line_2;
    public $section_2_paragraph_3;
    public $button_link;

    public function mount(Broker $broker)
    {
        $this->broker = $broker;
        
        // Load existing personalization if exists
        $personalization = Personalization::where('broker_id', $broker->id)->first();
        if ($personalization) {
            $this->section_2_line_1 = $personalization->section_2_line_1;
            $this->section_2_line_2 = $personalization->section_2_line_2;
            $this->section_2_paragraph_3 = $personalization->section_2_paragraph_3;
            $this->button_link = $personalization->button_link;
        }
    }

    public function updatePersonalization()
    {
        Personalization::updateOrCreate(
            ['broker_id' => $this->broker->id],
            [
                'section_2_line_1' => $this->section_2_line_1,
                'section_2_line_2' => $this->section_2_line_2,
                'section_2_paragraph_3' => $this->section_2_paragraph_3,
                'button_link' => $this->button_link,
            ]
        );

        $this->js('window.toast("Section 2 personalization updated successfully!", "success")');
    }

    public function render()
    {
        return view('livewire.broker-detail')->layout('components.layouts.app');
    }
}