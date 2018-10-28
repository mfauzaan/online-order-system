@extends('layouts.admin')

@section('content-wrapper')
<div class="register-container full-height sm-p-t-30">
  <div class="d-flex justify-content-center flex-column full-height ">
    <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
       @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      <p class="p-t-35">Sign into your account</p>
      <!-- START Login Form -->
      <form id="form-login" class="p-t-15" role="form" novalidate="novalidate" action="{{ route('login') }}" method="POST">
       @csrf
       @if ($errors->any())
        <div class="alert alert-danger" role="alert">
          <button class="close" data-dismiss="alert"></button>
        {{ implode('', $errors->all(':message')) }}
        </div>
      @endif

        <!-- START Form Control-->
        <div class="form-group form-group-default">
          <label>Email</label>
          <div class="controls">
            <input type="text" name="email" placeholder="E-Mail" class="form-control" required="" aria-required="true">
          </div>
        </div>
        <!-- END Form Control-->
        <!-- START Form Control-->
        <div class="form-group form-group-default">
          <label>Password</label>
          <div class="controls">
            <input type="password" class="form-control" name="password" placeholder="Credentials" required=""
              aria-required="true">
          </div>
        </div>

        <!-- START Form Control-->
        <div class="row">
          <div class="col-md-6 no-padding sm-p-l-10">
            <div class="checkbox ">
              <input type="checkbox" value="true" id="is_remember" name="is_remember">
              <label for="is_remember">Keep Me Signed in</label>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-center justify-content-end">
            <a href="#" class="text-info small">Help? Contact Support</a>
          </div>
        </div>
        <!-- END Form Control-->
        <button class="btn btn-primary btn-cons m-t-10" type="submit">Sign in</button>
      </form>
      
    </div>
  </div>
</div>
@endsection
