<?php

namespace App\Livewire\Components\Personalization;

use App\Models\Broker;
use App\Models\Personalization;
use Livewire\Component;

class Section10 extends Component
{
    public Broker $broker;
    
    // Personalization fields for icon links
    public $section_10_icon1_link;
    public $section_10_icon2_link;
    public $section_10_icon3_link;

    public function mount(Broker $broker)
    {
        $this->broker = $broker;
        
        // Load existing personalization if exists
        $personalization = Personalization::where('broker_id', $broker->id)->first();
        if ($personalization) {
            $this->section_10_icon1_link = $personalization->section_10_icon1_link;
            $this->section_10_icon2_link = $personalization->section_10_icon2_link;
            $this->section_10_icon3_link = $personalization->section_10_icon3_link;
        }
    }

    public function updatePersonalization()
    {
        Personalization::updateOrCreate(
            ['broker_id' => $this->broker->id],
            [
                'section_10_icon1_link' => $this->section_10_icon1_link,
                'section_10_icon2_link' => $this->section_10_icon2_link,
                'section_10_icon3_link' => $this->section_10_icon3_link,
            ]
        );

        $this->dispatch('toast', message: 'Section 10 personalization updated successfully!', type: 'success');
    }

    public function render()
    {
        return view('livewire.components.personalization.section10');
    }
}