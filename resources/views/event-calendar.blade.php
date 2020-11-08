@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h1>Calendar</h1>

    <div class="row">
        <div class="col-md-5">
            @livewire('event-form')
        </div>

        <div class="col-md-7">
            <h2>Nov 2020</h2>
            <dl>
                @for ($i = 0; $i < 10; $i++)
                    <dd>{{$i}}</dd>
                    <hr>
                @endfor
            </dl>
        </div>
    </div>

</div>
@endsection
