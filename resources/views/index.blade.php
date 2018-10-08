@extends('layouts.admin')

@section('content')
  <div class="form-signin">
    <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <button class="btn btn-lg btn-primary btn-block" href="/admin/login" type="submit">Login as Admin</button>
    <button class="btn btn-lg btn-primary btn-block" type="/admin/user">Login as User</button>
    <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
  </div>
@endsection