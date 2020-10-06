@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Employees List:</div>

                  <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('employee-create') }}"><i class="fas fa-plus-square"></i> Create New Employee</a><br><br>
                    <ul>
                      @foreach ($emps as $emp)
                        <li>
                          <a href="{{ route('employee-show',  $emp -> id) }}">
                          {{ $emp -> firstname }}
                          {{ $emp -> lastname }}
                          </a>
                        </li>
                      @endforeach
                    </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
