@extends('layouts.merchant')

@section('content')
<!-- Table -->
<div class="row pt-4">
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Orders</h3>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <th scope="col">ID</th>
            <th scope="col">Item</th>
            <th scope="col">Price</th>
            <th scope="col">Payment Type</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($orders as $order)
           <tr>
              <th scope="row">
                <span class="mb-0 text-sm">{{ $order->id }}</span>
              </th>
              <th scope="row">
                <span class="mb-0 text-sm">{{ $order->item->name }}</span>
              </th>
              <td>
                <span class="mb-0 text-sm">{{ $order->total_price }}</span>
              </td>
              <td>
                  <span class="mb-0 text-sm">{{ $order->payment_type }}</span>
              </td>
              <td>
                  <span class="mb-0 text-sm">{{ $order->status }}</span>
              </td>
              <td>
                <a href="{{ route('merchant.orders.show', $order) }}" class="btn btn-primary btn-sm mb-2 mt-2">Show Order</a>
              </td>
            </tr>
            @empty
            <td colspan="6" style="padding-left: 5em">
              <p>Oops! orders not found.</p>
            </td>
            @endforelse
          </tbody>
        </table>
      </div>
      <div class="card-footer py-4">
          {{ $orders->links() }}
      </div>
    </div>
  </div>
</div>

    <!-- Footer -->
@include('shared.footer')
</div>
@endsection