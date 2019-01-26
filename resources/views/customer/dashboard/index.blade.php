@extends('layouts.customer')

@section('content')
<div class="col-12 ct-content d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <div class="ct-page-title">
    <h1 class="ct-title mt-1">Dashboard</h1>
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

<div class="row col-12 mb-3 header-body">
  <div class="col-sm">
    <h1>Customers</h1>
    <h3>{{ (isset($customers_count) ? $customers_count : 0) }}</h3>
  </div>
</div>

<hr>


<div class="container-fluid">

    <div class="row mt-5">
      <div class="col-xl-8 mb-5 mb-xl-0">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Recent Orders</h3>
              </div>
              <div class="col text-right">
                <a href="{{ route('orders.index') }}" class="btn btn-sm btn-primary">See all</a>
              </div>
            </div>
          </div>
          <div class="table-responsive fixed-card-500">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Order ID</th>
                  <th scope="col">User ID</th>
                  <th scope="col">Order</th>
                  <th scope="col">Status</th>
                  <th scope="col">Price</th>
                  <th scope="col">Date/Time</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Customers</h3>
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
                  <th scope="col">Mobile Number</th>
                  <th scope="col">Name</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($customers as $customer)
                <tr>
                  <th scope="row">
                  {{ $customer->id }}
                  </th>
                  <td>
                  {{ $customer->mobile_number }}
                  </td>
                  <td>
                  {{ $customer->full_name }}
                  </td>
                </tr> 
                @empty
                  <tr>
                    <th scope="row" colspan="6">
                      Oops! There are no Customers.
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