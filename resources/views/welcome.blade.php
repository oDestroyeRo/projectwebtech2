@extends('layouts.app')

@section('content')
    @if (Auth::guest())
    <div class="jumbotron">
        <div class="container">
            <h1 class="text-center">The Wongklom Singer</h1>
        </div>
    </div>
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="https://unsplash.it/200?image=0" alt="Sample Image">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="https://unsplash.it/200?image=1" alt="Sample Image">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="https://unsplash.it/200?image=2" alt="Sample Image">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="https://unsplash.it/200?image=3" alt="Sample Image">
        </a>
      </div>
    </div>
    @else

      <?php
      $user = \App\User::where('email', '=', Auth::user()->email)->first();

      if ($user->role == 'customer'){ ?>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">ChangePassword</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('changepassword.update',Auth::user()->id) }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="id" class="col-md-4 control-label">ID</label>

                                    <div class="col-md-6">
                                          <label for="id" class="col-md-4 control-label">{{ Auth::user()->id }}</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="id" class="col-md-4 control-label">Email</label>

                                    <div class="col-md-6">
                                          <label for="id" class="col-md-4 control-label">{{ Auth::user()->email }}</label>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">New Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      <?php } ?>


    @endif
@endsection
