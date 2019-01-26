<div class="card-body bg-secondary">
    <h6 class="heading-small text-muted mb-4">Item information</h6>
    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    {{ Form::label('Name',null, ['class' => 'form-control-label']) }} {{ Form::text('name', old('name'), ['class' => 'form-control form-control-alternative', 'placeholder' => 'Name']) }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="form-group focused">
                    {{ Form::label('Price',null, ['class' => 'form-control-label']) }} {{ Form::text('price', old('price'), ['class' => 'form-control form-control-alternative', 'placeholder' => 'Price']) }}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group focused">
                    {{ Form::label('Status',null, ['class' => 'form-control-label']) }} @if (isset($item)) {{ Form::select('status', ['Publised' => 'Publised', 'Draft' => 'Draft'], null, ['class' => 'form-control form-control-alternative']) }} @else
                    {{ Form::select('status', ['Publised' => 'Publised', 'Draft' => 'Draft'], 'Publised', ['class' => 'form-control form-control-alternative']) }} @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="form-group focused">
                        {{ Form::label('Description',null, ['class' => 'form-control-label']) }} {{ Form::textarea('description', old('description'), ['class' => 'form-control form-control-alternative', 'placeholder' => 'Description', ]) }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="form-group focused">
                    {{ Form::label('Feature Image',null, ['class' => 'form-control-label']) }}
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="featured_image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" accept="image/png, image/jpeg" {{ isset($item) ? '' : 'required'}}>
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                @if (isset($item->featured_image))
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $item->featured_image }}" alt="Card image cap">
                </div>
                @endif
            </div>
        </div>
    </div>


    <hr class="my-4">
    <!-- Address -->
</div>

<div class="card-footer py-4 bg-secondary">
    {{ Form::submit('Create New', ['class' => 'btn btn-success']) }}
    <a href="{{ route('merchant.merchants.index') }}" class="btn btn-danger">Cancel</a>
</div>