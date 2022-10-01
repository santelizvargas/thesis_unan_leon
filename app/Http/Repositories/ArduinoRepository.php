<?php

namespace App\Http\Repositories;
use App\Models\Arduino;

class ArduinoRepository implements Repository
{
    public function get()
    {
        return Arduino::all();
    }

    public function create($arduino)
    {
        return Arduino::create($arduino);
    }
}