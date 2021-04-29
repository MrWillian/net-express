@extends('layouts.app', [
  'activePage' => 'client-management', 
  'menuParent' => 'management', 
  'titlePage' => __('Client Management')
])

<?php $user = auth()->user() ?>

@section('content')
  <div class="content">

    @isset($success)
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <i class="material-icons">close</i>
        </button>
        <span>
          <b> Success - </b> {{ $success }}</span>
      </div>
    @endisset

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">group</i>
                </div>
                <h4 class="card-title">{{ __('Clients') }}</h4>
              </div>
              <div class="card-body">
                @can('create', App\User::class)
                  <div class="row">
                    <div class="col-12 text-right">
                      <a href="{{ route('web.client.create') }}" class="btn btn-sm btn-rose">{{ __('Add client') }}</a>
                    </div>
                  </div>
                @endcan
                <div class="table-responsive">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover" style="display:none">
                    <thead class="text-primary">
                      <th>
                        {{ __('Name') }}
                      </th>
                      <th>
                        {{ __('Email') }}
                      </th>
                      <th>
                        {{ __('Role') }}
                      </th>
                      <th>
                        {{ __('Creation date') }}
                      </th>
                      @can('manage-users', App\User::class)
                        <th class="text-right">
                          {{ __('Actions') }}
                        </th>
                      @endcan
                    </thead>
                    <tbody>
                      @foreach($clients as $client)
                        <tr>
                          <td>
                            {{ $client['name'] }}
                          </td>
                          <td>
                            {{ $client['email'] }}
                          </td>
                          <td>
                            {{ $client['role'] }}
                          </td>
                          <td>
                            {{ $client['created_at']->format('Y-m-d') }}
                          </td>
                          @can('manage-clients', App\User::class)
                            <td class="td-actions text-right">
                              <form id="{{$client['id']}}" class="delete-client">
                                <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}" />
                                
                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('client.edit', $user) }}" data-original-title="" title="">
                                  <i class="material-icons">edit</i>
                                  <div class="ripple-container"></div>
                                </a>
                              
                                <button type="submit" class="btn btn-danger btn-link" data-original-title="" title="">
                                    <i class="material-icons">close</i>
                                    <div class="ripple-container"></div>
                                </button>
                              </form>
                            </td>
                          @endcan
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal"></div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      $('#datatables').fadeIn(1100);
      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search clients",
        },
        "columnDefs": [
          { "orderable": false, "targets": 5 },
        ],
      });
    });
  </script>
@endpush

@section('footer-scripts')
  @include('clients.scripts.delete')
@endsection
