<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/js/plugins/tables/datatables/bootstrap4/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
	{{-- <link href="{{ asset('admin/js/plugins/tables/datatables/bootstrap4/buttons/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"> --}}
	<link href="{{ asset('admin/js/plugins/tables/datatables/bootstrap4/responsive/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/css/core.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/css/components.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/css/colors.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->


    @yield('style')

</head>
<body class="navbar-top  has-detached-right sidebar-xs">
        @include('admin.layouts.include.navbar')

    <!-- Page container -->
    <div class="page-container">
		<!-- Page content -->
		<div class="page-content">
            @include('admin.layouts.include.sidebar')

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">
                                @isset ($data['module'])
                                    {{$data['module']}}
                                @endisset
                            </span>
                                 @isset ($data['page-doc'])
                                    -
                                    {{$data['page-doc']}}
                                @endisset
                            </h4>
						</div>

                        @isset ($data['create-url'])
						<div class="heading-elements">
                            <a href="
                             {{$data['create-url']}}
                             " class="btn bg-blue heading-btn">add</a>
                        </div>
                        @endisset
					</div>

					<div class="breadcrumb-line breadcrumb-line-component">
						<ul class="breadcrumb">
                        <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> Home</a></li>
                            @isset ($data['module-url'])
							<li><a href="{{$data['module-url']}}">{{$data['module']}}</a></li>
                            @endisset

                            @isset ($data['page-doc'])
                                <li class="active">
                                    {{$data['page-doc']}}
                                </li>
                            @endisset

						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Link</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Dropdown
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
                <!-- /page header -->



                <!-- Content area -->
                <div class="content">
                    @if(Session::has('successMsg'))
                        <div class="alert alert-success"> {{ Session::get('successMsg') }}</div>
                    @endif

                    @yield('content')


                    @include('admin.layouts.include.footer')

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
        {{-- @include('admin.layouts.include.sidebar2') --}}

    <!-- Core JS files -->
	<script type="text/javascript" src="{{ asset('admin/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->
	<!-- Theme JS files -->
	<script type="text/javascript" src="{{ asset('admin/js/plugins/ui/nicescroll.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/tables/datatables/bootstrap4/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/tables/datatables/bootstrap4/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/tables/datatables/bootstrap4/buttons/dataTables.buttons.min.js')}}"></script>
    {{-- <script type="text/javascript" src="{{ asset('admin/js/plugins/tables/datatables/bootstrap4/buttons/buttons.bootstrap4.min.js')}}"></script> --}}
    <script type="text/javascript" src="{{ asset('admin/js/plugins/tables/datatables/bootstrap4/responsive/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/tables/datatables/bootstrap4/responsive/responsive.bootstrap4.min.js')}}"></script>

    <script src="{{ asset('vendor/datatables/buttons.server-side.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/plugins/forms/selects/select2.min.js')}}"></script>
    @yield('js')

	<script type="text/javascript" src="{{ asset('admin/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/pages/layout_fixed_custom.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/pages/sidebar_detached_sticky_custom.js')}}"></script>

	<script type="text/javascript" src="{{ asset('admin/js/plugins/ui/ripple.min.js')}}"></script>
	{{-- <script type="text/javascript" src="{{ asset('admin/js/pages/datatables_advanced.js')}}"></script> --}}

    <!-- /theme JS files -->
    @stack('scripts')
    @yield('script')
    @stack('script')

</body>
</html>


	<!-- /theme JS files -->
