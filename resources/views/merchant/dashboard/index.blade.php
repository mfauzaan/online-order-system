@extends('layouts.admin')

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
    <h3>MVR 756268.38</h3>
  </div>

  <div class="col-sm">
    <h1>Total Order</h1>
    <h3>9292</h3>
  </div>

  <div class="col-sm">
    <h1>Users</h1>
    <h3>2726</h3>
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
                <a href="/admin/transactions" class="btn btn-sm btn-primary">See all</a>
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
                      53 .ރ
                    </td>
                    <td>
                      13 Jan 2019 - 22:29
                      <button class="btn btn-sm btn-icon-only text-light transaction-modal" id="4556" data-toggle="modal" data-target="#transactionModal">
                        <i class="fa fa-ellipsis-v"></i>
                      </button>
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
                <h3 class="mb-0">Users</h3>
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
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    Google Play
                  </th>
                  <td>
                  $30 (US)
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="badge badge-dot mr-4">
                          <i class="bg-danger"></i> 1
                        </span>
                        <a class="btn btn-sm btn-icon-only text-light" href="/merchant/products/10/packages/41/inventories">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
  <!-- Modal -->
  <div class="modal fade" id="transactionModal" tabindex="-1" role="dialog" aria-labelledby="transactionModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="transactionModalLabel">Transaction Receipt</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body card bg-secondary shadow border-0" id="transaction_data">
            <div class="card-header bg-transparent">
              <div class="text-muted text-center mt-1"><h2>-</h2></div>
              <div class="text-muted text-center mt-1"><p class="lead m-0">-</p></div>
              <div class="text-muted text-center mt-1"><h2 class=" pl-4">-</h2></div>
              <div class="text-muted text-center mt-1"><span class="badge  p-3"></span></div>
            </div>
            <div class="card-body pb-0 card-header bg-transparent">
              <div class="row">
                <div class="col">
                  <label class="form-control-label" for="input-username">Paid On</label>
                  <p>-</p>
                </div>
                <div class="col text-right">
                    <label class="form-control-label" for="input-email">Refernce</label>
                    <p>-</p>
                </div>
                <div class="w-100"></div>
                
                <div class="w-100"></div>
                <div class="col">
                    <label class="form-control-label" for="input-first-name">Payment Device</label>
                    <p>-</p>
                </div>
                <div class="col text-right">
                    <label class="form-control-label" for="input-last-name">Paid with</label>
                    <p>-</p>
                </div>
              </div>
            </div>
            <div class="card-body pb-0 pt-3">
              <div class="row align-items-center">
                <div class="col">
                  <label class="form-control-label" for="input-first-name">Paid By</label>
                  <p>-</p>
                </div>
                <div class="col">
                  <div class="focused text-right">
                    <a href="#" class="btn btn-primary ">View Profile</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
</div>

    <!-- Footer -->
    <footer class="footer">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            © 2018 <a href="https://oos.com" class="font-weight-bold ml-1" target="_blank">Online Order System.</a>
          </div>
        </div>
      </div>
    </footer>
    </div>
@endsection