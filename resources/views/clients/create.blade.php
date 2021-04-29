@extends('layouts.app', [
  'activePage' => 'client-management',
  'menuParent' => 'management',
  'titlePage' => __('Client Management')
])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form enctype="multipart/form-data" id="client-create-form" autocomplete="off" class="form-horizontal">
            <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}" />

            <div class="card ">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">person</i>
                </div>
                <h4 class="card-title">{{ __('Add Client') }}</h4>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('web.client.index') }}" class="btn btn-sm btn-rose">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}&nbsp;*</label>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
                      @include('alerts.feedback', ['field' => 'name'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('Gender') }}</label>
                  <select class="col-sm-2 form-control selectpicker" data-style="btn btn-link" id="genderSelect">
                    <option value="M">{{ __('Male') }}</option>
                    <option value="F">{{ __('Female') }}</option>
                  </select>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required="true" aria-required="true" />
                      @include('alerts.feedback', ['field' => 'email'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('Phone') }}</label>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <input class="form-control" name="phone_number" id="input-phone-number" type="text" placeholder="{{ __('Phone') }}" value="{{ old('phone_number') }}" />
                      @include('alerts.feedback', ['field' => 'phone_number'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('RG') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('rg') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('rg') ? ' is-invalid' : '' }}" name="rg" id="input-rg" type="text" placeholder="{{ __('RG') }}" value="{{ old('rg') }}" required="true" aria-required="true" />
                      @include('alerts.feedback', ['field' => 'rg'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('Birthday') }}</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('birthday') ? ' has-danger' : '' }}">
                      <input type="text" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }} datetimepicker" id="birthday" />
                      @include('alerts.feedback', ['field' => 'birthday'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label for="personSelect" class="col-sm-2 col-form-label">Person</label>
                  <select class="col-sm-3 form-control selectpicker" data-style="btn btn-link" id="personSelect">
                    <option value="1">{{ __('Physical Person') }}</option>
                    <option value="2">{{ __('Legal Person') }}</option>
                  </select>
                  <label class="col-sm-1 col-form-label" id="labelDocument">{{ __('Document') }}&nbsp;*</label>
                  <div class="col-sm-3" id="input-group-document">
                    <div class="form-group{{ $errors->has('documentValue') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('documentValue') ? ' is-invalid' : '' }}" name="documentValue" id="input-document-value" type="text" placeholder="{{ __('CPF') }}" value="{{ old('documentValue') }}" required="true" aria-required="true" />
                      @include('alerts.feedback', ['field' => 'documentValue'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Zip') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('cep') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('cep') ? ' is-invalid' : '' }}" name="cep" id="input-cep" type="text" placeholder="{{ __('Zip') }}" value="{{ old('cep') }}" required="true" aria-required="true" />
                      @include('alerts.feedback', ['field' => 'cep'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('Country') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" id="input-country" type="text" placeholder="{{ __('Country') }}" value="{{ old('country') }}" required="true" aria-required="true" />
                      @include('alerts.feedback', ['field' => 'country'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('State') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" id="input-state" type="text" placeholder="{{ __('State') }}" value="{{ old('state') }}" required="true" aria-required="true" />
                      @include('alerts.feedback', ['field' => 'state'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('City') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" id="input-city" type="text" placeholder="{{ __('City') }}" value="{{ old('city') }}" required="true" aria-required="true" />
                      @include('alerts.feedback', ['field' => 'city'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('District') }}&nbsp;*</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('district') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" id="input-district" type="text" placeholder="{{ __('District') }}" value="{{ old('district') }}" required="true" aria-required="true" />
                      @include('alerts.feedback', ['field' => 'district'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Place') }}</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('place') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('place') ? ' is-invalid' : '' }}" name="place" id="input-place" type="text" placeholder="{{ __('Place') }}" value="{{ old('place') }}" />
                      @include('alerts.feedback', ['field' => 'place'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('Number') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('number') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" id="input-number" type="text" placeholder="{{ __('Number') }}" value="{{ old('number') }}" required="true" aria-required="true" />
                      @include('alerts.feedback', ['field' => 'number'])
                    </div>
                  </div>
                </div>
                {{-- <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Location') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('location') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" id="input-location" type="text" placeholder="{{ __('Location') }}" value="{{ old('location') }}" />
                      @include('alerts.feedback', ['field' => 'location'])
                    </div>
                  </div>
                </div> --}}
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-rose">{{ __('Add Client') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal"></div>
@endsection

@section('footer-scripts')
  @include('clients.scripts.create')
@endsection
