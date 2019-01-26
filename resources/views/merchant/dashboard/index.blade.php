@extends('layouts.merchant')

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
    <h1>Total Sales</h1>
    <h3>{{ (isset($total_sales) ? $total_sales : 0) }} .ރ</h3>
  </div>

  <div class="col-sm">
    <h1>Total Order</h1>
    <h3>{{ (isset($orders_count) ? $orders_count : 0) }}</h3>
  </div>

  <div class="col-sm">
    <h1>Customers</h1>
    <h3>{{ (isset($customers_count) ? $customers_count : 0) }}</h3>
  </div>
</div>

<hr>


<div class="container-fluid">
  <div class="row">
      <div class="col-xl-8 mb-5 mb-xl-0">
        <div class="card bg-gradient-default shadow">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
              <div class="col">
                <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                <h2 class="text-white mb-0">Sales</h2>
              </div>
            </div>
          </div>
          <div class="card-body">
            <!-- Chart -->
            <div class="chart"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
              <!-- Chart wrapper -->
              <canvas id="chart-sales" class="chart-canvas chartjs-render-monitor" width="1682" height="700" style="display: block; height: 350px; width: 841px;"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card shadow">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
              <div class="col">
                <h6 class="text-uppercase text-muted ls-1 mb-1">Past 6 Months</h6>
                <h2 class="mb-0">Sales</h2>
              </div>
            </div>
          </div>
          <div class="card-body">
            <!-- Chart -->
            <div class="chart"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
              <canvas id="chart-orders" class="chart-canvas chartjs-render-monitor" style="display: block; height: 350px; width: 381px;" width="762" height="700"></canvas>
              <canvas id="chart-orders" class="chart-canvas"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

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
              <tbody>
                @forelse ($orders as $order)
                  <tr>
                    <th scope="row">
                      {{ $order->id }}
                    </th>
                    <th scope="row">
                      {{ $order->user_id }}
                    </th>
                    <td>
                      {{ $order->item->name }}
                    </td>
                    <td>
                        <span class="badge badge-success">{{ $order->status }}</span>
                    </td>
                    <td>
                      {{ $order->total_price }} .ރ
                    </td>
                    <td>
                      {{ $order->created_at }}
                      <a class="btn btn-sm btn-icon-only text-light" href="{{ route('orders.show', $order) }}"><i class="fa fa-ellipsis-v mt-2"></i></a>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <th scope="row" colspan="6">
                      Oops! There are no orders.
                    </th>
                  </tr>
                @endforelse
              </tbody>
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