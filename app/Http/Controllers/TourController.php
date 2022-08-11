<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    public function index() {
        $tours = Tour::all();
        // dd($tours);
        return view('tours.index', compact(['tours']));
    }

    public function create() {
        return view('tours.create');
    }

    public function store(Request $request) {
        Tour::create($request->all());
        return redirect('/tours');
    }

    public function edit($id) {
        $tour = Tour::find($id);
        return view('tours.edit', compact(['tour']));
    }

    public function update(Request $request, $id) {
        $tour = Tour::find($id);
        $tour->update($request->all());
        return redirect('/tours');
    }

    public function destroy($id) {
        $tour = Tour::find($id);
        $tour->delete();
        return redirect('/tours');
    }
}
