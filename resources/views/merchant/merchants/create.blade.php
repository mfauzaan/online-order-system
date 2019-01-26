@extends('layouts.merchant')

@section('content')
<!-- Table -->
<div class="row">
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Create Merchants</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('merchant.merchants.index') }}" class="btn btn-sm btn-default">Back</a>
          </div>
        </div>
      </div>

      {!! Form::open(['route' => 'merchant.merchants.store']) !!}
        @include('merchant.merchants.form')
      {!! Form::close() !!}
    </div>
  </div>
</div>

    <!-- Footer -->
@include('shared.footer')
</div>
@endsection