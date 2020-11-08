<div>
    @include('alert-messages')

    <form wire:submit.prevent="saveEvent">
        <div class="form-group">
          <label for="event">Event</label>
          <input type="text" class="form-control" id="event" aria-describedby="event" wire:model.lazy="name" required>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="exampleInputPassword1">From</label>
                <input type="date" class="form-control" id="exampleInputPassword1" wire:model.lazy="from">
              </div>
              <div class="form-group col-6">
                  <label for="exampleInputPassword1">To</label>
                  <input type="date" class="form-control" id="exampleInputPassword1" wire:model.lazy="to">
            </div>
        </div>

        <div class="form-check p-0">
            @foreach ($constantDaysOfWeek as $day)
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="{{$day}}" wire:model="dayofweek.{{$day}}">
                    <label class="form-check-label" for="{{$day}}">{{ucfirst($day)}}</label>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </form>
</div>
