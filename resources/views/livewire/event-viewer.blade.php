<div>
    <span wire:loading> Loading ...</span>
    <div wire:loading.remove>
        <h2>{{$monthYear ?? now()->format('M Y')}}</h2>
        <dl>
            @foreach ($period as $date)
                <dd class="p-1 py-2 border-top border-dark mb-0  @if(in_array(strtolower($date->format('D')), $selectedDaysOfWeek)) bg-light-green @endif">
                    {{$date->format('j')}} &nbsp; {{$date->format('D')}}
                    <span class="text-center d-inline-block w-50">
                        @if (in_array(strtolower($date->format('D')), $selectedDaysOfWeek))
                            {{$savedEvent->name}}
                        @endif
                    </span>

                </dd>
            @endforeach
        </dl>
    </div>


</div>
