<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sensors;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function index()
    {
        return response()->json([
            'sensors' => Sensors::all()->toArray()
        ]);
    }
}
