@extends('layouts.customer') 
@section('content')
<div class="col-12 ct-content d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <div class="ct-page-title">
    <h1 class="ct-title mt-1">Select a Item</h1>
  </div>
</div>

<div class="container-fluid">
  <div class="col-xl-12">
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Items</h3>
          </div>
        </div>
      </div>

      <div class="row px-3">
        @forelse ($restaurent->items as $item)
        <div class="card ml-4 mb-4" style="width: 18rem;">
          <img class="card-img-top" src="{{ $item->featured_image }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{ $item->name }}</h5>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                @include('customer.items.create')
              </div>
              <small class="text-muted">{{ $item->mobile_number }}</small>
            </div>
          </div>
        </div>
        @empty
        <div class="ml-4 mb-4">
          Oops! No Food found
        </div>
        @endforelse
      </div>

    </div>
  </div>
</div>

</div>

<!-- Footer -->
  @include('shared.footer')
</div>
@endsection