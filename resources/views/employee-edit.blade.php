@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Employee: {{ $emp -> firstname }} {{ $emp -> lastname }}</div>

                  <div class="card-body">

                    <form action="{{ route('employee-update', $emp -> id) }}" method="post">
                      @csrf
                      @method('POST')

                      <div class="form-group">
                        <label for="firstname">FIRSTNAME</label><br>
                        <input type="text" name="firstname" value="{{ $emp -> firstname }}">
                      </div>
                      <div class="form-group">
                        <label for="lastname">LASTNAME</label><br>
                        <input type="text" name="lastname" value="{{ $emp -> lastname }}">
                      </div>
                      <div class="form-group">
                        <label for="date_of_birth">DATE OF BIRTH</label><br>
                        <input type="date" name="date_of_birth" value="{{ $emp -> date_of_birth }}">
                      </div>
                      <div class="form-group">
                        <label for="private_code">PRIVATE CODE</label><br>
                        <input type="number" name="private_code" value="{{ $emp -> private_code }}">
                      </div>
                      <div class="form-group">
                        <label for="location_id">LOCATION</label><br>
                        <select name="location_id">
                          @foreach ($locs as $loc)
                            <option value="{{ $loc -> id }}"

                              @if ($emp -> location -> id === $loc -> id)
                                selected
                              @endif

                              >{{ $loc -> name }} ( {{ $loc -> state }} )</option>
                          @endforeach
                        </select>
                      </div><br>

                        <button type="submit" name="button">SAVE</button>

                    </form>
                  </div>

                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
