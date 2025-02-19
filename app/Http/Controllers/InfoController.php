<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function serverInfo() {
    return response()->json([
        'php_version' => phpversion(),
        'server_software' => $_SERVER['SERVER_SOFTWARE'],
    ]);
}

public function clientInfo() {
    return response()->json([
        'ip' => request()->ip(),
        'user_agent' => request()->userAgent(),
    ]);
}

public function databaseInfo() {
    $database = env('DB_DATABASE');
    return response()->json([
        'database' => $database,
    ]);
}
}
