<?php

namespace App\Http\Controllers;

use App\Http\Requests\Response\StoreRequest;
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

    public function store(StoreRequest $request)
    {
        Response::create($request->only([
            'score',
            'suggestions',
            'is_correct'
        ]));
        return redirect()->route('home');
    }
}
