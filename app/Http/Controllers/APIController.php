<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function testResponse()
    {
        return response()->json(['success api json response']);
    }
}
