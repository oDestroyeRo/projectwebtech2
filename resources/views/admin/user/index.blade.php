@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body" >
                  <table class="table">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Email</th>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Tel</th>
                              <th>Birthday</th>
                              <th>Gender</th>
                              <th>Address</th>
                              <th>Role</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $d)
                          <tr>
                              <td>{{ $d->id }}</td>
                              <td>{{ $d->email }}</td>
                              <td>{{ $d->firstname }}</td>
                              <td>{{ $d->lastname }}</td>
                              <td>{{ $d->tel }}</td>
                              <td>{{ $d->birthday }}</td>
                              <td>{{ $d->gender }}</td>
                              <td>{{ $d->address }}</td>
                              <td>{{ $d->role }}</td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
@endsection
