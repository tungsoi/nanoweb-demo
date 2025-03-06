<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index() {
        $staffs = Staff::paginate(5);
        return view('staff.index', compact('staffs'));
    }

    public function show($staffId) {
        $staff = Staff::find($staffId);
        return view('staff.show', compact('staff'));
    }

    public function create() {
        return view('staff.create');
    }

    public function store(Request $request) {
        $request->validate([
            'email' => 'required|unique:staffs',
        ]);
        Staff::create($request->all());
        return redirect()->route('staffs');
    }

    public function edit($staffId) {
        $staff = Staff::find($staffId);
        return view('staff.edit', compact('staff'));
    }

    public function update(Request $request) {
        Staff::find($request->id)->update($request->all());
        return redirect()->route('staffs');
    }
}
