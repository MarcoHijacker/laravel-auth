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
}
