@extends('layouts.app', ['activePage' => 'employee-management', 'menuParent' => 'registrations', 'titlePage' => __('Employee Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" enctype="multipart/form-data" action="{{ route('employee.update', $employee) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">engineering</i>
                </div>
                <h4 class="card-title">{{ __('Edit Employee') }}</h4>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('employee.index') }}" class="btn btn-sm btn-rose">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}&nbsp;*</label>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', $employee->name) }}" required="true" aria-required="true"/>
                      @include('alerts.feedback', ['field' => 'name'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('Admission') }}&nbsp;*</label>
                  <div class="col-sm-2">
                    <div class="form-group{{ $errors->has('admission_date') ? ' has-danger' : '' }}">
                      <input type="text" class="form-control{{ $errors->has('admission_date') ? ' is-invalid' : '' }} datetimepicker" value="{{ $employee->admission_date }}" required/>
                      @include('alerts.feedback', ['field' => 'admission_date'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}&nbsp;*</label>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', $employee->email) }}" required />
                      @include('alerts.feedback', ['field' => 'email'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('Phone') }}</label>
                  <div class="col-sm-2">
                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="input-phone" type="text" placeholder="{{ __('Phone') }}" value="{{ old('phone', $employee->phone) }}" />
                      @include('alerts.feedback', ['field' => 'phone'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Office') }}</label>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('office') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('office') ? ' is-invalid' : '' }}" name="office" id="input-office" type="office" placeholder="{{ __('Office') }}" value="{{ old('office', $employee->office) }}" />
                      @include('alerts.feedback', ['field' => 'office'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('Salary') }}</label>
                  <div class="col-sm-2">
                    <div class="form-group{{ $errors->has('salary') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('salary') ? ' is-invalid' : '' }}" name="salary" id="input-salary" type="text" placeholder="{{ __('Salary') }}" value="{{ old('salary', $employee->salary) }}" />
                      @include('alerts.feedback', ['field' => 'salary'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('RG') }}&nbsp;*</label>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('rg') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('rg') ? ' is-invalid' : '' }}" name="rg" id="input-rg" type="text" placeholder="{{ __('RG') }}" value="{{ old('rg', $employee->rg) }}" required />
                      @include('alerts.feedback', ['field' => 'rg'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('Birthdate') }}</label>
                  <div class="col-sm-2">
                    <div class="form-group{{ $errors->has('birthdate') ? ' has-danger' : '' }}">
                      <input type="text" class="form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }} datetimepicker" placeholder="{{ __('Birthdate') }}" value="{{ $employee->birth_date }}" />
                      @include('alerts.feedback', ['field' => 'birthdate'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" id="labelDocument">{{ __('Document') }}&nbsp;*</label>
                  <div class="col-sm-4" id="input-group-document">
                    <div class="form-group{{ $errors->has('document') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('document') ? ' is-invalid' : '' }}" name="document" id="input-document" type="text" placeholder="{{ __('CPF') }}" value="{{ old('document', $employee->document) }}" />
                      @include('alerts.feedback', ['field' => 'document'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('Gender') }}</label>
                  <select class="col-sm-2 form-control selectpicker" data-style="btn btn-link" id="genderSelect">
                    <option value="1">{{ __('Male') }}</option>
                    <option value="2">{{ __('Female') }}</option>
                  </select>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Zip') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('cep') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('cep') ? ' is-invalid' : '' }}" name="cep" id="input-cep" type="text" placeholder="{{ __('Zip') }}" value="{{ old('cep', $employee->cep) }}" required />
                      @include('alerts.feedback', ['field' => 'cep'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('Country') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" id="input-country" type="text" placeholder="{{ __('Country') }}" value="{{ old('country', $employee->country) }}" required />
                      @include('alerts.feedback', ['field' => 'country'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('State') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" id="input-state" type="text" placeholder="{{ __('State') }}" value="{{ old('state', $employee->state) }}" required />
                      @include('alerts.feedback', ['field' => 'state'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('City') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" id="input-city" type="text" placeholder="{{ __('City') }}" value="{{ old('city', $employee->city) }}" required />
                      @include('alerts.feedback', ['field' => 'city'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('District') }}&nbsp;*</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('district') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" id="input-district" type="text" placeholder="{{ __('District') }}" value="{{ old('district', $employee->district) }}" required />
                      @include('alerts.feedback', ['field' => 'district'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Place') }}</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('place') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('place') ? ' is-invalid' : '' }}" name="place" id="input-place" type="text" placeholder="{{ __('Place') }}" value="{{ old('place', $employee->place) }}" />
                      @include('alerts.feedback', ['field' => 'place'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('Number') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('number') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" id="input-number" type="text" placeholder="{{ __('Number') }}" value="{{ old('number', $employee->number) }}" required />
                      @include('alerts.feedback', ['field' => 'number'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Location') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('location') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" id="input-location" type="text" placeholder="{{ __('Location') }}" value="{{ old('location', $employee->location) }}" />
                      @include('alerts.feedback', ['field' => 'location'])
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-rose">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection