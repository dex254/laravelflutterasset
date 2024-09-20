<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DexAppController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'This  is dex  254  my  marged  laravel  and flutter  application 😍😍😍😍😍']);
    }
}
