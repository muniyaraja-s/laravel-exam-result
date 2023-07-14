<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $results = Dashboard::all();
        return view('dashboard.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $request->validate([
            'reg_no' => 'required',
            'mark_one' => 'required',
            'mark_two' => 'required',
            'mark_three' => 'required',
            'exam_date' => 'required',
        ]);

        $dashboard = new Dashboard();
        $dashboard->reg_no = $request->reg_no;
        $dashboard->mark_one = $request->mark_one;
        $dashboard->mark_two = $request->mark_two;
        $dashboard->mark_three = $request->mark_three;
        $dashboard->exam_date = $request->exam_date;
        $dashboard->save();

        toastr()->success('Created successfully');
        return redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard) {
        return view('dashboard.show', compact('dashboard'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard) {
        return view('dashboard.edit', compact('dashboard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard) {
        $request->validate([
            'reg_no' => 'required',
            'mark_one' => 'required',
            'mark_two' => 'required',
            'mark_three' => 'required',
            'exam_date' => 'required',
        ]);

        $dashboard->reg_no = $request->reg_no;
        $dashboard->mark_one = $request->mark_one;
        $dashboard->mark_two = $request->mark_two;
        $dashboard->mark_three = $request->mark_three;
        $dashboard->exam_date = $request->exam_date;
        $dashboard->save();

        toastr()->success('Updated successfully');
        return redirect()->route('dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard) {
        $dashboard->delete();

        toastr()->success('Deleted successfully');
        return redirect()->route('dashboard.index');

    }
}
