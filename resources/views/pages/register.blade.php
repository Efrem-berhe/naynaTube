@extends('layouts.login_registration_layout')

@section('content')
  <div class="container">
    <div class="row d-flex justify-content-center" style="margin-top:48px;">

      <div class="col-md-6 offset-md-3 card mt-2 ml-0 p-0">

          <div class="card-header">
            Register
          </div>

          <div class="card-block p-2">
            <form class="form-horizontal justify-content-center" method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 offset-md-1 pt-1 control-label d-flex align-items-center">Name</label>

                <div class="col-md-10 offset-md-1">
                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                         autofocus>

                  @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 offset-md-1 control-label">Username</label>

                <div class="col-md-10 offset-md-1">
                  <input id="name" type="text" class="form-control" name="username" value="{{ old('username') }}" required
                         autofocus>

                  @if ($errors->has('username'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 offset-md-1 control-label">E-Mail Address</label>

                <div class="col-md-10 offset-md-1">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                  @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 offset-md-1 control-label">Password</label>

                <div class="col-md-10 offset-md-1">
                  <input id="password" type="password" class="form-control" name="password" required>

                  @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <label for="password-confirm" class="col-md-4 offset-md-1 control-label">Confirm Password</label>

                <div class="col-md-10 offset-md-1">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                         required>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-10 offset-md-1">
                  <button type="submit" class="btn btn-primary btn-block">
                    Register
                  </button>
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
    <a class="m-auto"><< back</a>

  </div>
@endsection
