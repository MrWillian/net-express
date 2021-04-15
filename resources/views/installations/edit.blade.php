@extends('layouts.app', ['activePage' => 'installation-management', 'menuParent' => 'management', 'titlePage' => __('Installation Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" enctype="multipart/form-data" action="{{ route('installation.update', $installation) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">call</i>
                </div>
                <h4 class="card-title">{{ __('Edit Installation') }}</h4>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('installation.index') }}" class="btn btn-sm btn-rose">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label for="personSelect" class="col-sm-2 col-form-label">{{ __('Client') }}</label>
                  <select class="col-sm-7 form-control selectpicker" data-style="btn btn-link" id="personSelect">
                    <option value="1" {{ $installation->client->id === 1 ? 'selected' : '' }}>{{ __('Client 1') }}</option>
                    <option value="2" {{ $installation->client->id === 2 ? 'selected' : '' }}>{{ __('Client 2') }}</option>
                  </select>
                </div>
                <div class="row">
                  <label for="personSelect" class="col-sm-2 col-form-label">{{ __('Internet Plan') }}</label>
                  <select class="col-sm-7 form-control selectpicker" data-style="btn btn-link" id="personSelect">
                    <option value="1" {{ $installation->client->id === 1 ? 'selected' : '' }}>{{ __('Plan 1') }}</option>
                    <option value="2" {{ $installation->client->id === 2 ? 'selected' : '' }}>{{ __('Plan 2') }}</option>
                  </select>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Description') }}&nbsp;*</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-description" type="text" placeholder="{{ __('Description') }}" value="{{ old('description', $installation->description) }}" required />
                      @include('alerts.feedback', ['field' => 'description'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Date') }}</label>
                  <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                      <input type="text" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }} datetimepicker" value="{{ $installation->date }}"/>
                      @include('alerts.feedback', ['field' => 'date'])
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