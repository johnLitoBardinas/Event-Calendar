<?php

namespace App\Http\Livewire;

use App\Events;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Livewire\Component;

class EventViewer extends Component
{
    protected $listeners = [ 'onSaveEvent' ];

    public $period;

    public $monthYear;

    public $savedEvent;

    public $selectedDaysOfWeek;

    public function mount()
    {
        $this->selectedDaysOfWeek = [];

        $this->period = CarbonPeriod::create(Carbon::now(), Carbon::now()->addMonth(1))->toArray();
    }

    public function onSaveEvent(int $eventId)
    {
        $this->savedEvent = Events::find($eventId);

        $this->monthYear = Carbon::parse($this->savedEvent->from)->format('M Y');

        $this->period = CarbonPeriod::create($this->savedEvent->from, $this->savedEvent->to)->toArray();

        $this->selectedDaysOfWeek = (array) json_decode($this->savedEvent->dayofweek);
    }

    public function render()
    {
        return view('livewire.event-viewer');
    }
}
