@extends('layouts.app', [
  'activePage' => 'internet-plan-management',
  'menuParent' => 'management',
  'titlePage' => __('Internet Plan Management')
])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" enctype="multipart/form-data" action="{{ route('internetPlan.update', $internetPlan) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">article</i>
                </div>
                <h4 class="card-title">{{ __('Edit Internet Plan') }}</h4>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('internetPlan.index') }}" class="btn btn-sm btn-rose">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', $internetPlan->name) }}" required="true" aria-required="true"/>
                      @include('alerts.feedback', ['field' => 'name'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('Description') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-description" type="text" placeholder="{{ __('Description') }}" value="{{ old('description', $internetPlan->description) }}" required="true" aria-required="true"/>
                      @include('alerts.feedback', ['field' => 'description'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Vel. Download') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('velocity-download') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('velocity-download') ? ' is-invalid' : '' }}" name="velocity-download" id="input-velocity-download" type="velocity-download" placeholder="{{ __('Vel. Download') }}" value="{{ old('velocity-download', $internetPlan->velocity_download) }}" required />
                      @include('alerts.feedback', ['field' => 'velocity-download'])
                    </div>
                  </div>
                  <label class="col-sm-1 col-form-label">{{ __('Vel. Upload') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('velocity-upload') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('velocity-upload') ? ' is-invalid' : '' }}" name="velocity-upload" id="input-velocity-upload" type="velocity-upload" placeholder="{{ __('Vel. Upload') }}" value="{{ old('velocity-upload', $internetPlan->velocity_upload) }}" required />
                      @include('alerts.feedback', ['field' => 'velocity-upload'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Qtd. of tolerance days') }}</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('quantity-tolerance-days') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('quantity-tolerance-days') ? ' is-invalid' : '' }}" name="quantity-tolerance-days" id="input-quantity-tolerance-days" type="quantity-tolerance-days" placeholder="{{ __('Qtd. of tolerance days') }}" value="{{ old('quantity-tolerance-days', $internetPlan->quantity_tolerance_days) }}" />
                      @include('alerts.feedback', ['field' => 'quantity-tolerance-days'])
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">{{ __('Advance Pay. Discount') }}</label>
                  <div class="col-sm-2">
                    <div class="form-group{{ $errors->has('advance-payment-discount') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('advance-payment-discount') ? ' is-invalid' : '' }}" name="advance-payment-discount" id="input-advance-payment-discount" type="text" placeholder="{{ __('Advance Pay. Discount') }}" value="{{ old('advance-payment-discount', $internetPlan->advance_payment_discount) }}" />
                      @include('alerts.feedback', ['field' => 'advance-payment-discount'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Mensal Value') }}&nbsp;*</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('mensal-value') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('mensal-value') ? ' is-invalid' : '' }}" name="mensal-value" id="input-mensal-value" type="mensal-value" placeholder="{{ __('Mensal Value') }}" value="{{ old('mensal-value', $internetPlan->mensal_value) }}" required />
                      @include('alerts.feedback', ['field' => 'mensal-value'])
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">{{ __('Installation Fee') }}</label>
                  <div class="col-sm-2">
                    <div class="form-group{{ $errors->has('installation-fee') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('installation-fee') ? ' is-invalid' : '' }}" name="installation-fee" id="input-installation-fee" type="text" placeholder="{{ __('Installation Fee') }}" value="{{ old('installation-fee', $internetPlan->installation_fee) }}" />
                      @include('alerts.feedback', ['field' => 'installation-fee'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Technology Used') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('tech-used') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('tech-used') ? ' is-invalid' : '' }}" name="tech-used" id="input-tech-used" type="tech-used" placeholder="{{ __('Technology Used') }}" value="{{ old('tech-used', $internetPlan->tech_used) }}" />
                      @include('alerts.feedback', ['field' => 'tech-used'])
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