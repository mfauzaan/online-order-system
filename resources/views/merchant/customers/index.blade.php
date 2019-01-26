@extends('layouts.merchant')

@section('content')
<!-- Table -->
<div class="row pt-4">
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Customers</h3>
          </div>
          <div class="col text-right">
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($customers as $customer)
           <tr>
              <th scope="row">
                <span class="mb-0 text-sm">{{ $customer->id }}</span>
              </th>
              <th scope="row">
                <span class="mb-0 text-sm">{{ $customer->full_name }}</span>
              </th>
              <td>
                <span class="mb-0 text-sm">{{ $customer->mobile_number }}</span>
              </td>
              <td>
                <a href="{{ route('merchant.customers.edit', $customer) }}" class="btn btn-primary btn-sm mb-2 mt-2">Edit</a>
              </td>
            </tr>
            @empty
            <td colspan="6" style="padding-left: 5em">
              <p>Oops! Customer not found.</p>
            </td>
            @endforelse
          </tbody>
        </table>
      </div>
      <div class="card-footer py-4">
          {{ $customers->links() }}
      </div>
    </div>
  </div>
</div>

    <!-- Footer -->
@include('shared.footer')
</div>
@endsection