<?php

namespace App\Repositories;

use App\Response;
use App\User;
use Carbon\Carbon;

class MonthlyFormRepository {
    public static function can() {
        return Response::where('user_id', auth()->user()->id)->whereBetween('created_at', [
                Carbon::now()->firstOfMonth(),
                Carbon::now()
            ])->count() === 0;
    }

    public static function last() {
        return Response::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->limit(1)->get()->first();
    }
}
