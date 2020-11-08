@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h1>Calendar</h1>

    <div class="row">
        <div class="col-md-5">
            <form>
                <div class="form-group">
                  <label for="event">Event</label>
                  <input type="text" class="form-control" id="event" aria-describedby="event" placeholder="">
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="exampleInputPassword1">From</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group col-6">
                          <label for="exampleInputPassword1">To</label>
                          <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                </div>

                <div class="form-check p-0">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Mon</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Tue</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Wed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Thu</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Fri</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Sat</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Sun</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
              </form>
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
