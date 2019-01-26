@extends('layouts.admin')

@section('content')
<!-- Table -->
<div class="row pt-4">
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Items</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('items.create') }}" class="btn btn-sm btn-default">Create New</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($items as $item)
           <tr>
              <th scope="row">
                <span class="mb-0 text-sm">{{ $item->id }}</span>
              </th>
              <th scope="row">
                <span class="mb-0 text-sm">{{ $item->name }}</span>
              </th>
              <td>
                <span class="mb-0 text-sm">{{ $item->price }}</span>
              </td>
              <td>
                  <span class="mb-0 text-sm">{{ $item->status }}</span>
                </td>
              <td>
                {{ Form::open(['route' => ['items.destroy', $item], 'method' => 'delete', 'id' => 'delete']) }}
                <a href="{{ route('items.edit', $item) }}" class="btn btn-primary btn-sm mb-2 mt-2">Edit</a>
                {{ Form::button('Delete', ['class' => 'btn btn-danger btn-sm delete-onclick mb-2" delete-onclick', 'type' => 'submit']) }}
                {{ Form::close() }}
              </td>
            </tr>
            @empty
            <td colspan="6" style="padding-left: 5em">
              <p>Oops! Items not found.</p>
            </td>
            @endforelse
          </tbody>
        </table>
      </div>
      <div class="card-footer py-4">
      @include('shared.paginations')
      </div>
    </div>
  </div>
</div>

    <!-- Footer -->
@include('shared.footer')
</div>
@endsection