<div class="card-body bg-secondary">
    <h6 class="heading-small text-muted mb-4">Item information</h6>
    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    {{ Form::label('Name',null, ['class' => 'form-control-label']) }} 
                    {{ Form::text('name', old('name'), ['class' => 'form-control form-control-alternative', 'placeholder' => 'Name']) }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="form-group focused">
                    {{ Form::label('Price',null, ['class' => 'form-control-label']) }} 
                    {{ Form::text('price', old('price'), ['class' => 'form-control form-control-alternative', 'placeholder' => 'Price']) }}
                </div>
            </div>
            <div class="col-lg-3">
                    <div class="form-group focused">
                        {{ Form::label('Status',null, ['class' => 'form-control-label']) }} 
                        @if (isset($item))
                        {{ Form::select('status', ['Publised' => 'Publised', 'Draft' => 'Draft'], null, ['class' => 'form-control form-control-alternative']) }}
                        @else
                        {{ Form::select('status', ['Publised' => 'Publised', 'Draft' => 'Draft'], 'Publised', ['class' => 'form-control form-control-alternative']) }}
                        @endif
                    </div>
                </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="form-group focused">
                        {{ Form::label('Description',null, ['class' => 'form-control-label']) }} 
                        {{ Form::textarea('description', old('description'), ['class' => 'form-control form-control-alternative', 'placeholder' => 'Description', ]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4">
    <!-- Address -->
    <div class="pl-lg-4">
        <div class="row">
            <div class="col-md-8">
{{--                     <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div> --}}
            </div>
        </div>
    </div>
</div>

<div class="card-footer py-4 bg-secondary">
    {{ Form::submit('Create New', ['class' => 'btn btn-success']) }}
    <a href="{{ route('merchants.index') }}" class="btn btn-danger">Cancel</a>
</div>