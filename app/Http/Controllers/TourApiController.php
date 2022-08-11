<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourApiController extends Controller
{
    public function index() {
        $tours = Tour::all();
        return response()->json(['message' => 'Powodzenie','data' => $tours]);
    }

    public function show($id) {
        $tour = Tour::find($id);
        return response()->json(['message' => 'Powodzenie', 'data' => $tour]);
    }
}
