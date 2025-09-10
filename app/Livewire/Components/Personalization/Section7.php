<?php

namespace App\Livewire\Components\Personalization;

use App\Models\Broker;
use App\Models\Personalization;
use Livewire\Component;

class Section7 extends Component
{
    public Broker $broker;
    
    // Personalization fields for icon links
    public $section_7_item1_icon_link;
    public $section_7_item2_icon_link;
    public $section_7_item3_icon_link;

    public function mount(Broker $broker)
    {
        $this->broker = $broker;
        
        // Load existing personalization if exists
        $personalization = Personalization::where('broker_id', $broker->id)->first();
        if ($personalization) {
            $this->section_7_item1_icon_link = $personalization->section_7_item1_icon_link;
            $this->section_7_item2_icon_link = $personalization->section_7_item2_icon_link;
            $this->section_7_item3_icon_link = $personalization->section_7_item3_icon_link;
        }
    }

    public function updatePersonalization()
    {
        Personalization::updateOrCreate(
            ['broker_id' => $this->broker->id],
            [
                'section_7_item1_icon_link' => $this->section_7_item1_icon_link,
                'section_7_item2_icon_link' => $this->section_7_item2_icon_link,
                'section_7_item3_icon_link' => $this->section_7_item3_icon_link,
            ]
        );

        $this->dispatch('toast', message: 'Section 7 personalization updated successfully!', type: 'success');
        $this->dispatch('refresh-preview-section-7');
    }

    public function render()
    {
        return view('livewire.components.personalization.section7');
    }
}