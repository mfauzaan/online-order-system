{{ Form::model($order, ['route' => ['orders.update', $order]]) }}

<div class="row pt-4">
    <div class="col-lg-3">
        <div class="form-group focused">
                {{ method_field('PATCH') }}
                
                {{ Form::label('Status',null, ['class' => 'form-control-label']) }} 
                @if (isset($order))
                {{ Form::select('status', ['Pending' => 'Pending', 'Delivered' => 'Delivered'], null, ['class' => 'form-control form-control-alternative']) }}
                @else
                {{ Form::select('status', ['Pending' => 'Pending', 'Delivered' => 'Delivered'], 'Pending', ['class' => 'form-control form-control-alternative']) }}
                @endif
                
        </div>
    </div>
</div>

<!-- Address -->
<div class="pl-lg-4">
    <div class="row">
        <div class="col-md-8">
        </div>
    </div>
</div>

<div class="card-footer py-4 bg-secondary">
    {{ Form::submit('Save Changes', ['class' => 'btn btn-success']) }}
    <a href="{{ route('merchants.index') }}" class="btn btn-danger">Cancel</a>
</div>
{{ Form::close() }}
