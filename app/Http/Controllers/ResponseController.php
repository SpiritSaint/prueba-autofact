<?php

namespace App\Http\Controllers;

use App\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function index()
    {
        return response()->json(
            Response::all(),
            200
        );
    }
    
    public function store(Request $request)
    {
        return response()->json(
            Response::create($request->only([
                'score',
                'suggestions',
                'is_correct'
            ])),
            201
        );
    }
}
