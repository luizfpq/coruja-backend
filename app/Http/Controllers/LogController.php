<?php

namespace App\Http\Controllers;

use App\Models\Log;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function Index()
    {
       return Log::all();
    }

    public function logAdd(Request $request)
    {
            $log = Log::create([
                'hard_hash'=> $request->input('hard_hash'),
                'ip'=> $request->input('ip'),
                'hard_hash_status'=> $request->input('hard_hash_status')
            ]);
            return $log;
    }
}
