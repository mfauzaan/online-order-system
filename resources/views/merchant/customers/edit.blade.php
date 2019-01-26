@extends('layouts.merchant')

@section('content')
<!-- Table -->
<div class="row">
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Edit User</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('customers.index') }}" class="btn btn-sm btn-default">Back</a>
          </div>
        </div>
      </div>

      {{ Form::model($customer, ['route' => ['customers.update', $customer]]) }}
      {{ method_field('PATCH') }}
        @include('merchant.customers.form')
      {{ Form::close() }}
    </div>
  </div>
</div>

    <!-- Footer -->
@include('shared.footer')
</div>
@endsection