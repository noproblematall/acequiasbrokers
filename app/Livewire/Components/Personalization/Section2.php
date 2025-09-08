<?php

namespace App\Livewire\Components\Personalization;

use App\Models\Broker;
use App\Models\Personalization;
use Livewire\Component;

class Section2 extends Component
{
    public Broker $broker;
    
    // Personalization fields
    public $section_2_line_1;
    public $section_2_line_2;
    public $section_2_paragraph_3;
    public $section_2_button_link;

    public function mount(Broker $broker)
    {
        $this->broker = $broker;
        
        // Load existing personalization if exists
        $personalization = Personalization::where('broker_id', $broker->id)->first();
        if ($personalization) {
            $this->section_2_line_1 = $personalization->section_2_line_1;
            $this->section_2_line_2 = $personalization->section_2_line_2;
            $this->section_2_paragraph_3 = $personalization->section_2_paragraph_3;
            $this->section_2_button_link = $personalization->section_2_button_link;
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
                'section_2_button_link' => $this->section_2_button_link,
            ]
        );

        session()->flash('message', 'Section 2 personalization updated successfully!');
        $this->dispatch('toast', message: 'Section 2 personalization updated successfully!', type: 'success');
    }

    public function render()
    {
        return view('livewire.components.personalization.section2');
    }
}