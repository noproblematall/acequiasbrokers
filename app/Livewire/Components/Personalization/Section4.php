<?php

namespace App\Livewire\Components\Personalization;

use App\Models\Broker;
use App\Models\Personalization;
use Livewire\Component;

class Section4 extends Component
{
    public Broker $broker;
    
    // Personalization fields
    public $section_4_button_link;

    public function mount(Broker $broker)
    {
        $this->broker = $broker;
        
        // Load existing personalization if exists
        $personalization = Personalization::where('broker_id', $broker->id)->first();
        if ($personalization) {
            $this->section_4_button_link = $personalization->section_4_button_link;
        }
    }

    public function updatePersonalization()
    {
        Personalization::updateOrCreate(
            ['broker_id' => $this->broker->id],
            [
                'section_4_button_link' => $this->section_4_button_link,
            ]
        );

        $this->dispatch('toast', message: 'Section 4 personalization updated successfully!', type: 'success');
        $this->dispatch('refresh-preview-section-4');
        $this->dispatch('refresh-preview-section-4');
    }

    public function render()
    {
        return view('livewire.components.personalization.section4');
    }
}