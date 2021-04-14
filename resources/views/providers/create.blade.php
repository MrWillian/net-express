@extends('layouts.app', [
  'activePage' => 'provider-management',
  'menuParent' => 'registrations',
  'titlePage' => __('Provider Management')
])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" enctype="multipart/form-data" action="{{ route('provider.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">group add</i>
                </div>
                <h4 class="card-title">{{ __('Add Provider') }}</h4>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('provider.index') }}" class="btn btn-sm btn-rose">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Company Name') }}&nbsp;*</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('company_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" name="company_name" id="input-company-name" type="text" placeholder="{{ __('Company Name') }}" value="{{ old('company_name') }}" required="true" aria-required="true"/>
                      @include('alerts.feedback', ['field' => 'company_name'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Fantasy') }}&nbsp;*</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('fantasy') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('fantasy') ? ' is-invalid' : '' }}" name="fantasy" id="input-fantasy" type="text" placeholder="{{ __('Fantasy') }}" value="{{ old('fantasy') }}" required="true" aria-required="true"/>
                      @include('alerts.feedback', ['field' => 'fantasy'])
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('State Registration') }}</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('state-registration') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('state-registration') ? ' is-invalid' : '' }}" name="state-registration" id="input-state-registration" type="state-registration" placeholder="{{ __('State Registration') }}" value="{{ old('state-registration') }}" />
                      @include('alerts.feedback', ['field' => 'state-registration'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}&nbsp;*</label>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required />
                      @include('alerts.feedback', ['field' => 'email'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('Phone') }}</label>
                  <div class="col-sm-2">
                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="input-phone" type="text" placeholder="{{ __('Phone') }}" value="{{ old('phone') }}" />
                      @include('alerts.feedback', ['field' => 'phone'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label for="personSelect" class="col-sm-2 col-form-label">Person</label>
                  <select class="col-sm-3 form-control selectpicker" data-style="btn btn-link" id="personSelect">
                    <option value="1">{{ __('Physical Person') }}</option>
                    <option value="2">{{ __('Legal Person') }}</option>
                  </select>
                  <label class="col-sm-2 col-form-label" id="labelDocument">{{ __('Document') }}&nbsp;*</label>
                  <div class="col-sm-2" id="input-group-document">
                    <div class="form-group{{ $errors->has('document') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('document') ? ' is-invalid' : '' }}" name="document" id="input-document" type="text" placeholder="{{ __('CPF') }}" value="{{ old('document') }}" />
                      @include('alerts.feedback', ['field' => 'document'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Zip') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('cep') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('cep') ? ' is-invalid' : '' }}" name="cep" id="input-cep" type="text" placeholder="{{ __('Zip') }}" value="{{ old('cep') }}" required />
                      @include('alerts.feedback', ['field' => 'cep'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('Country') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" id="input-country" type="text" placeholder="{{ __('Country') }}" value="{{ old('country') }}" required />
                      @include('alerts.feedback', ['field' => 'country'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('State') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" id="input-state" type="text" placeholder="{{ __('State') }}" value="{{ old('state') }}" required />
                      @include('alerts.feedback', ['field' => 'state'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('City') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" id="input-city" type="text" placeholder="{{ __('City') }}" value="{{ old('city') }}" required />
                      @include('alerts.feedback', ['field' => 'city'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('District') }}&nbsp;*</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('district') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" id="input-district" type="text" placeholder="{{ __('District') }}" value="{{ old('district') }}" required />
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
                      <input class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" id="input-number" type="text" placeholder="{{ __('Number') }}" value="{{ old('number') }}" required />
                      @include('alerts.feedback', ['field' => 'number'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Location') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('location') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" id="input-location" type="text" placeholder="{{ __('Location') }}" value="{{ old('location') }}" />
                      @include('alerts.feedback', ['field' => 'location'])
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-rose">{{ __('Add Provider') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection