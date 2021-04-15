@extends('layouts.app', [
  'activePage' => 'solicitation-management',
  'menuParent' => 'management',
  'titlePage' => __('Solicitation Management')
])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" enctype="multipart/form-data" action="{{ route('solicitation.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">call</i>
                </div>
                <h4 class="card-title">{{ __('Add Solicitation') }}</h4>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('solicitation.index') }}" class="btn btn-sm btn-rose">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label for="personSelect" class="col-sm-2 col-form-label">{{ __('Client') }}</label>
                  <select class="col-sm-7 form-control selectpicker" data-style="btn btn-link" id="personSelect">
                    <option value="1">{{ __('Client 1') }}</option>
                    <option value="2">{{ __('Client 2') }}</option>
                  </select>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Description') }}&nbsp;*</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-description" type="text" placeholder="{{ __('Description') }}" value="{{ old('description') }}" required />
                      @include('alerts.feedback', ['field' => 'description'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Date') }}</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                      <input type="text" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }} datetimepicker" value="{{ now()->format('d-m-Y') }}"/>
                      @include('alerts.feedback', ['field' => 'date'])
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-rose">{{ __('Add Solicitation') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection