@extends('layouts.merchant')

@section('content')
<!-- Table -->
<div class="row pt-4">
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Merchants</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('merchant.merchants.create') }}" class="btn btn-sm btn-default">Create New</a>
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
            @forelse ($merchants as $merchant)
           <tr>
              <th scope="row">
                <span class="mb-0 text-sm">{{ $merchant->id }}</span>
              </th>
              <th scope="row">
                <span class="mb-0 text-sm">{{ $merchant->name }}</span>
              </th>
              <td>
                <span class="mb-0 text-sm">{{ $merchant->mobile_number }}</span>
              </td>
              <td>
                {{ Form::open(['route' => ['merchant.merchants.destroy', $merchant], 'method' => 'delete', 'id' => 'delete']) }}
                <a href="{{ route('merchant.merchants.edit', $merchant) }}" class="btn btn-primary btn-sm mb-2 mt-2">Edit</a>
                {{ Form::button('Delete', ['class' => 'btn btn-danger btn-sm delete-onclick mb-2" delete-onclick', 'type' => 'submit']) }}
                {{ Form::close() }}
               {{--  <form action="{{ route('merchants.destroy', { products_id, id: code.id, packages_id }) }}?_method=DELETE"
                  method="POST" class="form-inline">

                  <a href="{{ route('discount_codes.edit', { id: code.id }) }}" class="btn btn-primary btn-sm mb-2">Edit</a>                  {{ csrfField() }}
                  <button type="submit" class="btn btn-danger btn-sm delete-onclick mb-2">Delete</button>
                </form> --}}
              </td>
            </tr>
            @empty
            <td colspan="6" style="padding-left: 5em">
              <p>Oops! Merchant not found.</p>
            </td>
            @endforelse
          </tbody>
        </table>
      </div>
      <div class="card-footer py-4">
          {{ $merchants->links() }}
      </div>
    </div>
  </div>
</div>

    <!-- Footer -->
@include('shared.footer')
</div>
@endsection