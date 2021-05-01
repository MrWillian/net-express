<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Net Express System - NeX
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="{{ asset('css') }}/web.css" rel="stylesheet" />
  <link href="{{ asset('css') }}/block-page.css" rel="stylesheet" />
</head>
<body class="{{ $class ?? '' }}">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @if (auth()->check() && !in_array(request()->route()->getName(), ['welcome', 'page.pricing', 'page.lock', 'page.error']))
            @include('layouts.page_templates.auth')
        @else
            @include('layouts.page_templates.guest')
        @endif
        
        <div class="fixed-plugin">
          <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
              <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
              <li class="header-title"> Sidebar Filters</li>
              <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                  <div class="badge-colors ml-auto mr-auto">
                    <span class="badge filter badge-purple" data-color="purple"></span>
                    <span class="badge filter badge-azure" data-color="azure"></span>
                    <span class="badge filter badge-green" data-color="green"></span>
                    <span class="badge filter badge-warning" data-color="orange"></span>
                    <span class="badge filter badge-danger" data-color="danger"></span>
                    <span class="badge filter badge-rose active" data-color="rose"></span>
                  </div>
                  <div class="clearfix"></div>
                </a>
              </li>
              <li class="header-title">Sidebar Background</li>
              <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                  <div class="ml-auto mr-auto">
                    <span class="badge filter badge-black active" data-background-color="black"></span>
                    <span class="badge filter badge-white" data-background-color="white"></span>
                    <span class="badge filter badge-red" data-background-color="red"></span>
                  </div>
                  <div class="clearfix"></div>
                </a>
              </li>
              <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                  <p>Sidebar Mini</p>
                  <label class="ml-auto">
                    <div class="togglebutton switch-sidebar-mini">
                      <label>
                        <input type="checkbox">
                        <span class="toggle"></span>
                      </label>
                    </div>
                  </label>
                  <div class="clearfix"></div>
                </a>
              </li>
              <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                  <p>Sidebar Images</p>
                  <label class="switch-mini ml-auto">
                    <div class="togglebutton switch-sidebar-image">
                      <label>
                        <input type="checkbox" checked="">
                        <span class="toggle"></span>
                      </label>
                    </div>
                  </label>
                  <div class="clearfix"></div>
                </a>
              </li>
              <li class="header-title">Images</li>
              <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="{{ asset('material') }}/img/sidebar-1.jpg" alt="">
                </a>
              </li>
              <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="{{ asset('material') }}/img/sidebar-2.jpg" alt="">
                </a>
              </li>
              <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="{{ asset('material') }}/img/sidebar-3.jpg" alt="">
                </a>
              </li>
              <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="{{ asset('material') }}/img/sidebar-4.jpg" alt="">
                </a>
              </li>
              <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro-laravel" target="_blank" class="btn btn-rose btn-block btn-fill">Buy Now</a>
                <a href="https://material-dashboard-pro-laravel.creative-tim.com/docs/getting-started/laravel-setup.html" target="_blank" class="btn btn-default btn-block">
                  Documentation
                </a>
                <a href="https://www.creative-tim.com/product/material-dashboard-laravel" target="_blank" class="btn btn-info btn-block">
                  Get Free Demo!
                </a>
              </li>
              <li class="button-container github-star">
                <a class="github-button" style="display: inline;" href="https://github.com/creativetimofficial/ct-material-dashboard-pro-laravel" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
              </li>
              <li class="header-title">Thank you for 95 shares!</li>
              <li class="button-container text-center">
                <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
                <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
                <br>
                <br>
              </li>
            </ul>
          </div>
        </div>
        <!--   Core JS Files   -->
        <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
        <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
        <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
        <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- Plugin for the momentJs  -->
        <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
        <!--  Plugin for Sweet Alert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
        <!-- Forms Validations Plugin -->
        <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
        <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
        <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
        <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script>
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script>
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <!-- Library for adding dinamically elements -->
        <script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chartist JS -->
        <script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.0" type="text/javascript"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{ asset('material') }}/demo/demo.js"></script>
        <script src="{{ asset('material') }}/js/application.js"></script>
        
        <!--  Mask jQuery Plugin    -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        
        <script>
            $(document).ready(function () {
                @if (session('status'))
                    $.notify({
                        icon: "done",
                        message: "{{ session('status') }}"
                    }, {
                        type: 'success',
                        timer: 3000,
                        placement: {
                        from: 'top',
                        align: 'right'
                        }
                    });
                @endif
            
                $('#input-cep').mask('00000-000');
                $('#input-phone').mask('(00) 00000-0000');
                if ($('#input-document-value').val().length > 11) {
                    $('#input-document-value').attr('placeholder', 'CNPJ');
                    $('#input-document-value').mask('00.000.000/0000-00', {reverse: true});
                    $('#rg-gender-row').hide();
                    $('#input-rg').attr('required', false);
                    $('#input-rg').attr('aria-required', false);
                } else {
                    $('#input-document-value').attr('placeholder', 'CPF');
                    $('#input-document-value').mask('000.000.000-00', {reverse: true});
                    $('#rg-gender-row').show();
                    $('#input-rg').attr('required', true);
                    $('#input-rg').attr('aria-required', true);
                }
            });
            $('.datetimepicker').datetimepicker({
                format: 'D-mm-Y',
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                }
            });

            $('#personSelect').on('change', function() {
                if (this.value === '1') {
                    $('#input-document-value').attr('placeholder', 'CPF');
                    $('#input-document-value').mask('000.000.000-00', {reverse: true});                    
                    $('#rg-gender-row').show();
                    $('#input-rg').attr('required', true);
                    $('#input-rg').attr('aria-required', true);
                } else {
                    $('#input-document-value').attr('placeholder', 'CNPJ');
                    $('#input-document-value').mask('00.000.000/0000-00', {reverse: true});
                    $('#rg-gender-row').hide();
                    $('#input-rg').attr('required', false);
                    $('#input-rg').attr('aria-required', false);
                }
            });
        </script>
    @stack('js')
    @yield('footer-scripts')
</body>

</html>