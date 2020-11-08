<?php

namespace App\Http\Controllers;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('event-calendar');
    }
}
