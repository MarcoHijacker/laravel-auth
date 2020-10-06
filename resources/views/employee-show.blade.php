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
                        *Login to see this* <br>
                      @endauth
                      <u>Location (City):</u> {{ $emp -> location -> name}} ({{ $emp -> location -> city }}) <br>
                    </ul>
                    @auth
                      <br>
                      <a class="btn btn-primary" href="{{ route('employee-edit', $emp -> id) }}"><i class="fas fa-edit"></i> Edit</a>
                      <a class="btn btn-danger" href="{{ route('employee-destroy', $emp -> id) }}"><i class="fas fa-trash-alt"></i> Delete</a>
                    @else
                      <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                    @endauth
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
