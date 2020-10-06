<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Location;

class LoggedController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function destroy($id) {
    $emp = Employee::findOrFail($id);
    $emp -> delete();
    return redirect() -> route('employee-index');
  }

  public function edit($id) {
    $emp = Employee::findOrFail($id);
    $locs = Location::all();
    return view('employee-edit', compact('emp', 'locs'));
  }

  public function update(Request $request, $id) {
      $data = $request -> all();
      $emp = Employee::findOrFail($id);
      $emp -> update($data);
      return redirect() -> route('employee-show', $emp -> id);
  }

  public function create() {
    $locs = Location::all();
    return view('employee-create', compact('locs'));
  }

  public function store(Request $request) {
    $data = $request -> all();
    $emp = Employee::create($data);
    return redirect() -> route('employee-show', $emp -> id);
  }
}
