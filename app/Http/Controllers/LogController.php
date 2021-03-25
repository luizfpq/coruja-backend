<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function Index()
    {
       return Log::all();
    }

    public function Check()
    {
        return 'ok';
    }
}
