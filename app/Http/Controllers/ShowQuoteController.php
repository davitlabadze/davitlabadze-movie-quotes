<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class ShowQuoteController extends Controller
{
    public function index()
    {
        $data = Quote::inRandomOrder()->with('movie')->first();
        return response()->json($data);

    }
}
