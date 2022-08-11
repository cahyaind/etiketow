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

    public function store(Request $request) {
        $tour = Tour::create($request->all());
        return response()->json(['message' => 'Powodzenie', 'data' => $tour]);
    }

    public function update(Request $request,$id) {
        $tour = Tour::find($id);
        $tour->update($request->all());
        return response()->json(['message' => 'Powodzenie', 'data' => $tour]);
    }

    public function destroy($id) {
        $tour = Tour::find($id);
        $tour->delete();
        return response()->json(['message' => 'Successfully deleted','data' => null]);
    }
}
