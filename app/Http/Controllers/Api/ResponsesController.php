<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Response\StoreRequest;
use App\Response;
use Illuminate\Http\Request;

class ResponsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(
            Response::all(),
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        return response()->json(Response::create($request->only([
            'score',
            'suggestions',
            'is_correct'
        ])), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function show(Response $response)
    {
        return response()->json($response, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, Response $response)
    {
        return response()->json($response->update($request->only([
            'score',
            'suggestions',
            'is_correct'
        ])), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function destroy(Response $response)
    {
        $response->delete();
        return response()->json([], 200);
    }
}
