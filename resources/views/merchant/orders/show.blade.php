@extends('layouts.merchant') 
@section('content')

<!-- Table -->
<div class="row pt-4">
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Item - {{ $order->id }}</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('merchant.orders.index') }}" class="btn btn-sm btn-default">Back</a>
          </div>
        </div>
      </div>

      <div class="card-body bg-secondary">
        <h6 class="heading-small text-muted mb-4">Customer information</h6>
        <div class="table-responsive table-responsive">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td width="15%">Customer Name</td>
                <td>{{ $order->customer->full_name }}</td>
              </tr>
              <tr>
                <td>Mobile Number</td>
                <td>{{ $order->customer->mobile_number }}</td>
              </tr>
              <tr>
                <td>Address</td>
                <td>{{ $order->customer->address }}<br> {{ $order->customer->street_address }}<br> {{ $order->customer->apartment_number
                  }}<br> {{ $order->customer->city }}<br> {{ $order->customer->geo_coordinates }}<br>
                </td>
              </tr>
            </tbody>
          </table>

          <h6 class="heading-small text-muted mb-4 mt-2 pt-4">Order information</h6>
          <div class="table-responsive table-responsive">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td width="15%">Product Name</td>
                  <td>{{ $order->item->name }}</td>
                </tr>
                <tr>
                  <td>Price</td>
                  <td>{{ $order->delivery_type }}</td>
                </tr>
                <tr>
                  <td>Payment Type</td>
                  <td>{{ $order->payment_type }}</td>
                </tr>
              </tbody>
            </table>
          </div>

          @include('merchant.orders.form')
        </div>


      </div>
    </div>
    </div>
  </div>

  <!-- Footer -->
  @include('shared.footer')
</div>
@endsection