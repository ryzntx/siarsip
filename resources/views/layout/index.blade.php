<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Spruha -  Admin Panel HTML Dashboard assets">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin,dashboard,panel,bootstrap admin assets,bootstrap dashboard,dashboard,themeforest admin dashboard,themeforest admin,themeforest dashboard,themeforest admin panel,themeforest admin assets,themeforest admin dashboard,cool admin,it dashboard,admin design,dash assetss,saas dashboard,dmin ui design">

		<!-- Favicon -->
		<link rel="icon" href="{{ asset('assets') }}/img/brand/favicon.ico" type="image/x-icon"/>

		<!-- Title -->
		<title>User | @yield('title')</title>

		<!-- Bootstrap css-->
		<link  id="style" href="{{ asset('assets') }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Icons css-->
		<link href="{{ asset('assets') }}/plugins/web-fonts/icons.css" rel="stylesheet"/>
		<link href="{{ asset('assets') }}/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
		<link href="{{ asset('assets') }}/plugins/web-fonts/plugin.css" rel="stylesheet"/>

		<!-- Style css-->
		<link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">

		<!-- Select2 css -->
		<link href="{{ asset('assets') }}/plugins/select2/css/select2.min.css" rel="stylesheet">

	</head>

	<body class="ltr main-body leftmenu">

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{ asset('assets') }}/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->

		<!-- Page -->
		<div class="page">

		<!-- Main Header-->
		<div class="main-header side-header sticky">
			<div class="main-container container-fluid">
				<div class="main-header-left">
					<a class="main-header-menu-icon" href="javascript:void(0)" id="mainSidebarToggle"><span></span></a>
					<div class="hor-logo">
						<a class="main-logo" href="index.html">
							<img src="{{ asset('assets') }}/img/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
							<img src="{{ asset('assets') }}/img/brand/logo-light.png" class="header-brand-img desktop-logo-dark"
								alt="logo">
						</a>
					</div>
				</div>
				<div class="main-header-center">
					<div class="responsive-logo">
						<a href="index.html"><img src="{{ asset('assets') }}/img/brand/logo.png" class="mobile-logo" alt="logo"></a>
						<a href="index.html"><img src="{{ asset('assets') }}/img/brand/logo-light.png" class="mobile-logo-dark"
								alt="logo"></a>
					</div>
				</div>
				<div class="main-header-right">
					<button class="navbar-toggler navresponsive-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
						aria-expanded="false" aria-label="Toggle navigation">
						<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
					</button><!-- Navresponsive closed -->
					<div
						class="navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
						<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
							<div class="d-flex order-lg-2 ms-auto">
								<!-- Theme-Layout -->
								<div class="dropdown d-flex main-header-theme">
									<a class="nav-link icon layout-setting">
										<span class="dark-layout">
											<i class="fe fe-sun header-icons"></i>
										</span>
										<span class="light-layout">
											<i class="fe fe-moon header-icons"></i>
										</span>
									</a>
								</div>
								<!-- Theme-Layout -->
								<!-- country -->
								<!-- country -->
								<!-- Full screen -->
								<!-- Full screen -->
								<!-- Notification -->
								<!-- Profile -->
								<div class="dropdown main-profile-menu">
									<a class="d-flex" href="#">
										<span class="main-img-user"><img alt="avatar"
												src="{{ asset('assets') }}/img/users/1.jpg"></span>
									</a>
									<div class="dropdown-menu">
										<div class="header-navheading">
											<h6 class="main-notification-title">{{ auth()->user()->name}}</h6>
											<p class="main-notification-text">{{ auth()->user()->role}}</p>
										</div>
										<a class="dropdown-item border-top" href="profile.html">
											<i class="fe fe-user"></i> My Profile
										</a>
										<a class="dropdown-item" href="/profile/edit">
											<i class="fe fe-edit"></i> Edit Profile
										</a>
										<a class="dropdown-item" href="profile.html">
											<i class="fe fe-settings"></i> Account Settings
										</a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="dropdown-item" href="/logout">
                                                <button type="submit" class="btn ripple btn-main-primary"><i class="fe fe-power"></i> Sign Out</button>
                                            </a>
                                        </form>
									</div>
								</div>
								<!-- Profile -->
								<!-- Sidebar -->
								<!-- Sidebar -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Main Header-->

		<!-- Sidemenu -->
		@include('layout.sidebar')
		<!-- End Sidemenu -->

			<!-- Main Content-->
			@yield('content')

			<!-- End Main Content-->

			<!-- Main Footer-->
			@include('layout.footer')
			<!--End Footer-->

			<!-- Sidebar -->
			{{-- <div class="sidebar sidebar-right sidebar-animate">
				<div class="sidebar-icon">
					<a href="#" class="text-end float-end text-dark fs-20" data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right"><i class="fe fe-x"></i></a>
				</div>
				<div class="sidebar-body">
					<h5>Todo</h5>
					<div class="d-flex p-3">
						<label class="ckbox"><input checked  type="checkbox"><span>Hangout With friends</span></label>
						<span class="ms-auto">
							<i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
						<span class="ms-auto">
							<i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
						<span class="ms-auto">
							<i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input checked type="checkbox"><span>System Updated</span></label>
						<span class="ms-auto">
							<i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input type="checkbox"><span>Do something more</span></label>
						<span class="ms-auto">
							<i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input  type="checkbox"><span>System Updated</span></label>
						<span class="ms-auto">
							<i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input  type="checkbox"><span>Find an Idea</span></label>
						<span class="ms-auto">
							<i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top mb-0">
						<label class="ckbox"><input  type="checkbox"><span>Project review</span></label>
						<span class="ms-auto">
							<i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
						</span>
					</div>
					<h5>Overview</h5>
					<div class="p-4">
						<div class="main-traffic-detail-item">
							<div>
								<span>Founder &amp; CEO</span> <span>24</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-20p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
						<div class="main-traffic-detail-item">
							<div>
								<span>UX Designer</span> <span>1</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress-bar progress-bar-xs bg-secondary wd-15p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
						<div class="main-traffic-detail-item">
							<div>
								<span>Recruitment</span> <span>87</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" class="progress-bar progress-bar-xs bg-success wd-45p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
						<div class="main-traffic-detail-item">
							<div>
								<span>Software Engineer</span> <span>32</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-info wd-25p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
						<div class="main-traffic-detail-item">
							<div>
								<span>Project Manager</span> <span>32</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-danger wd-25p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
					</div>
				</div>
			</div> --}}
			<!-- End Sidebar -->

		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

		<!-- Jquery js-->
		<script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap js-->
		<script src="{{ asset('assets') }}/plugins/bootstrap/js/popper.min.js"></script>
		<script src="{{ asset('assets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Perfect-scrollbar js -->
		<script src="{{ asset('assets') }}/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<!-- Sidemenu js -->
		<script src="{{ asset('assets') }}/plugins/sidemenu/sidemenu.js" id="leftmenu"></script>

		<!-- Sidebar js -->
		<script src="{{ asset('assets') }}/plugins/sidebar/sidebar.js"></script>

		<!-- Select2 js-->
		<script src="{{ asset('assets') }}/plugins/select2/js/select2.min.js"></script>
		<script src="{{ asset('assets') }}/js/select2.js"></script>

		<!-- Color Theme js -->
		<script src="{{ asset('assets') }}/js/themeColors.js"></script>

		<!-- Sticky js -->
		<script src="{{ asset('assets') }}/js/sticky.js"></script>

		<!-- Custom js -->
		<script src="{{ asset('assets') }}/js/custom.js"></script>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Bootstrap -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


	</body>
</html>
