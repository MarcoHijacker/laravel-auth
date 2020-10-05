@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Employee: {{ $emp -> firstname }} {{ $emp -> lastname }}</div>

                  <div class="card-body">
                    <ul>
                      <u>Surname:</u> {{ $emp -> firstname }} <br>
                      <u>Lastname:</u> {{ $emp -> lastname }} <br>
                      <u>Date of birth:</u> {{ $emp -> date_of_birth }} <br>
                      <u>Private Code:</u>
                      @auth
                        {{ $emp -> private_code }} <br>
                      @else
                        *Login to show this* <br>
                      @endauth
                      <u>Location (City):</u> {{ $emp -> location -> name}} ({{ $emp -> location -> city }}) <br>
                    </ul>
                    <br><br>
                    <a class="btn btn-primary" href="{{ route('employee-edit', $emp -> id) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('employee-destroy', $emp -> id) }}">Delete</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
