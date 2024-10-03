{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Spruha -  Admin Panel HTML Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin,dashboard,panel,bootstrap admin template,bootstrap dashboard,dashboard,themeforest admin dashboard,themeforest admin,themeforest dashboard,themeforest admin panel,themeforest admin template,themeforest admin dashboard,cool admin,it dashboard,admin design,dash templates,saas dashboard,dmin ui design">

		<!-- Favicon -->
		<link rel="icon" href="../assets/img/brand/favicon.ico" type="image/x-icon"/>

		<!-- Title -->
		<title>Spruha - Bootstrap Premium HTML Dashboard Template</title>

		<!-- Bootstrap css-->
		<link  id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Icons css-->
		<link href="../assets/plugins/web-fonts/icons.css" rel="stylesheet"/>
		<link href="../assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
		<link href="../assets/plugins/web-fonts/plugin.css" rel="stylesheet"/>

		<!-- Style css-->
		<link href="../assets/css/style.css" rel="stylesheet">

	</head>

	<body class="ltr main-body leftmenu error-1">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->

		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card">
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
								<div class="mt-5 pt-4 p-2 pos-absolute">
									<img src="../assets/img/brand/logo-light.png" class="d-lg-none header-brand-img text-start float-start mb-4 error-logo-light" alt="logo">
									<img src="../assets/img/brand/logo.png" class=" d-lg-none header-brand-img text-start float-start mb-4 error-logo" alt="logo">
									<div class="clearfix"></div>
									<img src="../assets/img/svgs/user.svg" class="ht-100 mb-0" alt="user">
									<h5 class="mt-4 text-white">Create Your Account</h5>
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup to create, discover and connect with the global community</span>
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="main-container container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											<img src="../assets/img/brand/logo.png" class=" d-lg-none header-brand-img text-start float-start mb-4" alt="logo">
											<div class="clearfix"></div>

                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

												<h5 class="text-start mb-2">Signin to Your Account</h5>
												<p class="mb-4 text-muted tx-13 ms-0 text-start">Signin to create, discover and connect with the global community</p>
												<div class="form-group text-start">
													<label>Email</label>
													<input class="form-control" placeholder="Enter your email" name="email" type="text">
												</div>
												<div class="form-group text-start">
													<label>Password</label>
													<input class="form-control" placeholder="Enter your password" name="password" type="password">
												</div>
												<button class="btn ripple btn-main-primary btn-block">Sign In</button>
											</form>

											<div class="text-start mt-5 ms-0">
												<div class="mb-1"><a href="">Forgot password?</a></div>
												<div>Don't have an account? <a href="#">Register Here</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- End Page -->

		<!-- Jquery js-->
		<script src="../assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap js-->
		<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Select2 js-->
		<script src="../assets/plugins/select2/js/select2.min.js"></script>
		<script src="../assets/js/select2.js"></script>

		<!-- Perfect-scrollbar js -->
		<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<!-- Color Theme js -->
		<script src="../assets/js/themeColors.js"></script>

		<!-- Custom js -->
		<script src="../assets/js/custom.js"></script>

	</body>
</html>
