<?php

namespace App\Http\Controllers;

use App\Models\Arduino;
use App\Http\Requests\ArduinoRequest;
use App\Http\Repositories\ArduinoRepository;

class ArduinoController extends Controller
{
    private ArduinoRepository $repository;

    public function __construct(ArduinoRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('arduinos.index', [
            'arduinos' => $this->repository->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('arduinos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ArduinoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArduinoRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arduino  $arduino
     * @return \Illuminate\Http\Response
     */
    public function show(Arduino $arduino)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arduino  $arduino
     * @return \Illuminate\Http\Response
     */
    public function edit(Arduino $arduino)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arduino  $arduino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arduino $arduino)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arduino  $arduino
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arduino $arduino)
    {
        //
    }
}
