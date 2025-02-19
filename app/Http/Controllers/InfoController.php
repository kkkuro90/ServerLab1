<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DTOs\InfoDTO; 

class InfoController extends Controller
{
    public function serverInfo()
    {
        $info = new InfoDTO(phpversion(), $_SERVER['SERVER_SOFTWARE'], null, null, null);
        return response()->json($info);
    }

    public function clientInfo()
    {
        $info = new InfoDTO(null, null, request()->ip(), request()->userAgent(), null);
        return response()->json($info);
    }

    public function databaseInfo()
    {
        $database = env('DB_DATABASE');
        $info = new InfoDTO(null, null, null, null, $database);
        return response()->json($info);
    }
}
