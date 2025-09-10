<?php

namespace App\Livewire\Components\Personalization;

use App\Models\Broker;
use App\Models\Personalization;
use Livewire\Component;

class Section9 extends Component
{
    public Broker $broker;
    
    // Personalization fields
    public $section_9_button_link;

    public function mount(Broker $broker)
    {
        $this->broker = $broker;
        
        // Load existing personalization if exists
        $personalization = Personalization::where('broker_id', $broker->id)->first();
        if ($personalization) {
            $this->section_9_button_link = $personalization->section_9_button_link;
        }
    }

    public function updatePersonalization()
    {
        Personalization::updateOrCreate(
            ['broker_id' => $this->broker->id],
            [
                'section_9_button_link' => $this->section_9_button_link,
            ]
        );

        $this->dispatch('toast', message: 'Section 9 personalization updated successfully!', type: 'success');
    }

    public function render()
    {
        return view('livewire.components.personalization.section9');
    }
}