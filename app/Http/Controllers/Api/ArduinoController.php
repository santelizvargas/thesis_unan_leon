<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Arduino;
use App\Http\Requests\ArduinoRequest;
// use App\Http\Repositories\ArduinoRepository;

class ArduinoController extends Controller
{
    // private ArduinoRepository $repository;

    public function __construct(
            // ArduinoRepository $repository
    )
    {
        // $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json([
            'arduinos' => Arduino::all()->toArray()
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ArduinoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArduinoRequest $request)
    {
        // $temperature = $request->safe()->only(['temperature']);

        // $this->repository->create($temperature);

        // return response()->json([
        //     'arduinos' => $this->repository->get()
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arduino  $arduino
     * @return \Illuminate\Http\Response
     */
    public function show(Arduino $arduino)
    {
        
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
    public function update(ArduinoRequest $request, Arduino $arduino)
    {
        // $validated = $request->safe()->only(['temperature']);

        // $arduino->updateOrCreate($validated);

        // return response()->json([
        //     'arduinos' => $this->repository->get()
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arduino  $arduino
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arduino $arduino)
    {
        // $arduino->destroy();

        // return response()->json([
        //     'arduinos' => $this->repository->get()
        // ]);
    }
}