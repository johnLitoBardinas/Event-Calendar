@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h1>Calendar</h1>

    <div class="row">
        <div class="col-md-5">
            @livewire('event-form')
        </div>

        <div class="col-md-7">
            @livewire('event-viewer')
        </div>
    </div>

</div>
@endsection
