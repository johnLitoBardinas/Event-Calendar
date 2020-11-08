<?php

namespace App\Http\Livewire;

use App\Events;
use Carbon\Carbon;
use Livewire\Component;

class EventForm extends Component
{
    // Constant Day of the Week.
    public $constantDaysOfWeek;

    public $name;

    public $from;

    public $to;

    public $dayofweek;

    public function mount()
    {
        $this->constantDaysOfWeek = config('constant.days_of_week');
    }

    public function saveEvent()
    {
        if (Carbon::parse($this->to)->lessThanOrEqualTo($this->from)) {
            session()->flash('error', 'Invalid Date!!');
            return;
        }

        if (empty($this->dayofweek)) {
            session()->flash('error', 'Invalid Day of the Week!!');
            return;
        }

        $eventData = [
            'name' => $this->name,
            'from' => $this->from,
            'to' => $this->to,
            'dayofweek' => json_encode($this->dayofweek),
        ];

        $event = Events::create($eventData);
        session()->flash('success', 'Event Saved!!');
        $this->emitTo('event-viewer', 'onSaveEvent', $event->id);
    }

    public function render()
    {
        return view('livewire.event-form');
    }
}
