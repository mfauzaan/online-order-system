@extends('layouts.merchant')

@section('content')
<!-- Table -->
<div class="row">
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Edit Items</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('merchant.items.index') }}" class="btn btn-sm btn-default">Back</a>
          </div>
        </div>
      </div>

      {{ Form::model($item, ['route' => ['merchant.items.update', $item], 'enctype' => 'multipart/form-data']) }}
      {{ method_field('PATCH') }}
        @include('merchant.items.form')
      {{ Form::close() }}
    </div>
  </div>
</div>

    <!-- Footer -->
@include('shared.footer')
</div>
@endsection