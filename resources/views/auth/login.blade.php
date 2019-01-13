@extends('layouts.admin')

@section('main-container')
<div class="d-flex h-100">
<!-- login box -->
<div class="container my-auto">
<div class="row justify-content-center ">
  <div class="col-lg-5">
    <div class="card bg-secondary shadow border-0">
      <div class="card-body px-lg-5 py-lg-5">
        <div class="btn-wrapper text-center">
          <img src="/img/oos-logo.svg" alt="">
        </div>
        <div class="text-center text-muted mb-4">
          <small>One Solution for All</small>
        </div>
        @if ($errors->any())
          <div class="alert alert-danger" role="alert">{{ implode('', $errors->all(':message')) }}</div>
        @endif

        <form role="form" action="{{ route('login') }}" method="POST">
          @csrf
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
              </div>
              <input class="form-control" placeholder="Email" type="email" name="email" value="">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
              </div>
              <input class="form-control" placeholder="Password" type="password" name="password">
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary my-4">Login</button>
          </div>
        </form>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-6">
        <a href="https://payer.mv/" class="text-light">
          <small>© 2018 Online Order System.</small>
        </a>
        <small></small>
      </div>
    </div>
  </div>
  </div>
</div>
@endsection
