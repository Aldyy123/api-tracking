<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tongkat extends Controller
{
    public function index(){
        return response()->json([
            'success' => true,
            'message' => 'Ini adalah data tongkat',
            'data'    => 'Tongkat'
        ], 200);
    }
}
