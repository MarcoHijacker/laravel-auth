<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class GuestController extends Controller
{
  public function index() {
    $emps = Employee::all();
    return view('employee-home', compact('emps'));
  }

  public function home() {
    return view('home');
  }

  public function show($id) {
    $emp = Employee::findOrFail($id);
    return view('employee-show', compact('emp'));
  }
}
