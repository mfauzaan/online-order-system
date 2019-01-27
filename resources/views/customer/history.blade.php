@extends('layouts.customer')

@section('content')
<div class="col-12 ct-content d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <div class="ct-page-title">
    <h1 class="ct-title mt-1">Restaurants</h1>
  </div>
  <div class="col-md-3">
{{--     <form>
      <div class="form-group">
        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
          </div>
          <input class="form-control" placeholder="Search" type="text" name="q" value="">
        </div>
      </div>
    </form> --}}
  </div>
</div>
<hr>


<div class="container-fluid">
      <div class="col-xl-12">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">History</h3>
              </div>
              <div class="col text-right">
                <a href="/merchant/products/" class="btn btn-sm btn-primary">See all</a>
              </div>
            </div>
          </div>
          <div class="table-responsive fixed-card-500">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Restaurant</th>
                  <th scope="col">Item</th>
                  <th scope="col">Total Price</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($order as $order)
                <tr>
                  <th scope="row">
                  {{ $order->id }}
                  </th>
                  <td>
                  {{ $order->merchant_id }}
                  </td>
                  {{ $order->item_id }}
                  <td>
                  {{ $order->total_price }}
                  </td>
                  {{ $order->status }}
                </tr> 
                @empty
                  <tr>
                    <th scope="row" colspan="6">
                      Oops! There are no Restaurants.
                    </th>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
</div>

    <!-- Footer -->
@include('shared.footer')
</div>
@endsection