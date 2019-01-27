@extends('layouts.customer') 
@section('content')
<div class="col-12 ct-content d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <div class="ct-page-title">
    <h1 class="ct-title mt-1">Select a Restaurant</h1>
  </div>
</div>

<div class="container-fluid">
  <div class="col-xl-12">
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Restaurants</h3>
          </div>
        </div>
      </div>

      <div class="row px-3">
        @foreach ($restaurants as $restaurant)
        <div class="card ml-4 mb-4" style="width: 18rem;">
          <img class="card-img-top" src="/img/res_icon.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{ $restaurant->name }}</h5>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="{{ route('restaurants.items.index', $restaurant) }}" class="btn btn-primary">View Items</a>
              </div>
              <small class="text-muted">{{ $restaurant->mobile_number }}</small>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </div>
</div>

</div>

<!-- Footer -->
  @include('shared.footer')
</div>
@endsection