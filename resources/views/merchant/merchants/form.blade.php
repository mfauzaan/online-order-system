<div class="card-body bg-secondary">
  <h6 class="heading-small text-muted mb-4">User information</h6>
  <div class="pl-lg-4">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group focused">
            {{ Form::label('Merchant Name',null, ['class' => 'form-control-label']) }}
            {{ Form::text('name', ( isset($merchant->user->name) ? $merchant->user->email : null ), ['class' => 'form-control form-control-alternative', 'placeholder' => 'Merchant Name']) }}
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
              <div class="form-group focused">
                  {{ Form::label('Mobile Number',null, ['class' => 'form-control-label']) }}
                  {{ Form::number('mobile_number',( isset($merchant->user->mobile_number) ? $merchant->user->mobile_number : null ), ['class' => 'form-control form-control-alternative', 'placeholder' => 'Mobile Number']) }}
              </div>
          </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <div class="form-group focused">
                    {{ Form::label('Email', null, ['class' => 'form-control-label']) }}
                    {{ Form::text('email', ( isset($merchant->user->email) ? $merchant->user->email : null ), ['class' => 'form-control form-control-alternative', 'placeholder' => 'Email']) }}
                </div>
            </div>
          </div>
      </div>
  </div>
  <hr class="my-4">
  <!-- Address -->
  <h6 class="heading-small text-muted mb-4">Contact information</h6>
  <div class="pl-lg-4">
    <div class="row">
      <div class="col-md-8">
        <div class="form-group focused">
            {{ Form::label('Address',null, ['class' => 'form-control-label']) }}
            {{ Form::text('address', old('address'), ['class' => 'form-control form-control-alternative', 'placeholder' => 'Address']) }}
        </div>
      </div>
      <div class="col-lg-4">
          <div class="form-group focused">
              {{ Form::label('Street Address',null, ['class' => 'form-control-label']) }}
              {{ Form::text('street_address', old('street_address'), ['class' => 'form-control form-control-alternative', 'placeholder' => 'Street Address']) }}
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group focused">
                {{ Form::label('Appartment Number',null, ['class' => 'form-control-label']) }}
                {{ Form::text('apartment_number',  old('apartment_number'), ['class' => 'form-control form-control-alternative', 'placeholder' => 'Appartment Number']) }}
            </div>
          </div>
      <div class="col-lg-4">
        <div class="form-group focused">
            {{ Form::label('City',null, ['class' => 'form-control-label']) }}
            {{ Form::text('city',  old('city'), ['class' => 'form-control form-control-alternative', 'placeholder' => 'City']) }}
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
            {{ Form::label('Geo Coordinates',null, ['class' => 'form-control-label']) }}
            {{ Form::text('geo_coordinates',  old('geo_coordinates'), ['class' => 'form-control form-control-alternative', 'placeholder' => 'Geo Coordinates']) }}
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card-footer py-4 bg-secondary">
  {{ Form::submit('Create New', ['class' => 'btn btn-success']) }}
  <a href="{{ route('merchant.merchants.index') }}" class="btn btn-danger">Cancel</a>
</div>