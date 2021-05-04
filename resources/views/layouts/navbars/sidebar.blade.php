<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
      {{ __('NeX') }}
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      {{ __('Net Express') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <div class="user">
      <div class="photo">
        <img src="{{ auth()->user()->profilePicture() }}" />
      </div>
      <div class="user-info">
        <a data-toggle="collapse" href="#collapseExample" class="username">
          <span>
            {{ auth()->user()->name }}
            <b class="caret"></b>
          </span>
        </a>
        <div class="collapse" id="collapseExample">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> MP </span>
                <span class="sidebar-normal"> My Profile </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> EP </span>
                <span class="sidebar-normal"> Edit Profile </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> S </span>
                <span class="sidebar-normal"> Settings </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($menuParent == 'management' || $activePage == 'dashboard') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#management" {{ ($menuParent == 'management' || $activePage == 'dashboard') ? ' aria-expanded="true"' : '' }}>
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Management') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($menuParent == 'dashboard' || $menuParent == 'management') ? ' show' : '' }}" id="management">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'client-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('web.client.index') }}">
                <span class="sidebar-mini"> CL </span>
                <span class="sidebar-normal">{{ __('Clients') }} </span>
              </a>
            </li>
            {{-- @can('manage-employees', App\User::class) --}}
              <li class="nav-item{{ $activePage == 'employee-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('employee.index') }}">
                  <span class="sidebar-mini"> EM </span>
                  <span class="sidebar-normal"> {{ __('Employees') }} </span>
                </a>
              </li>
            {{-- @endcan --}}
            {{-- @can('manage-users', App\User::class) --}}
              <li class="nav-item{{ $activePage == 'provider-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('provider.index') }}">
                  <span class="sidebar-mini"> PR </span>
                  <span class="sidebar-normal"> {{ __('Providers') }} </span>
                </a>
              </li>
            {{-- @endcan --}}
            @can('manage-items', App\User::class)
              <li class="nav-item{{ $activePage == 'internet-plan-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('internetPlan.index') }}">
                  <span class="sidebar-mini"> PL </span>
                  <span class="sidebar-normal"> {{ __('Internet Plans') }} </span>
                </a>
              </li>
            @endcan
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'solicitation-management' ? ' active' : '' }} ">
        <a class="nav-link" href="{{ route('solicitation.index') }}">
          <i class="material-icons">call</i>
          <p> {{ __('Solicitations') }} </p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'installation-management' ? ' active' : '' }} ">
        <a class="nav-link" href="{{ route('installation.index') }}">
          <i class="material-icons">settings</i>
          <p> Installations </p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'clients-map' ? ' active' : '' }} ">
        <a class="nav-link" href="{{ route('clientMap.index') }}">
          <i class="material-icons">place</i>
          <p> Clients Map </p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'calendar' ? ' active' : '' }} ">
        <a class="nav-link" href="{{ route('page.calendar') }}">
          <i class="material-icons">date_range</i>
          <p> Calendar </p>
        </a>
      </li>
    </ul>
  </div>
</div>
