<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>LMS</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('asset/vendors/images/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('asset/vendors/images/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('asset/vendors/images/favicon-16x16.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/vendors/styles/style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');

	
	</script>
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="">
				<h1>Learning Management System</h1>
				</a>
			</div>
			<div class="login-menu">
				<ul>
					{{-- <li><a href="register.html">Register</a></li> --}}
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-7 col-lg-12">
					<img src="vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-7 col-lg-12">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h1 class="text-center text-primary">Login</h1>
						</div>
						<form action="{{url('/loginaction')}}" method="post">
                            @csrf
							<div class="select-role">
								<div class="btn-group btn-group-toggle" data-toggle="buttons">
								</div>
                            </div>
							<div class="input-group custom">
								<input type="text" name="username" value="{{ old('username') }}"class="form-control form-control-lg" placeholder="Username"  autocomplete="off">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
									<span class="text-danger"> 
										@error('username')
										{{$message}}
										@enderror</span>
										<style>
											.input-group {
												margin-bottom: 0; 
											}
											
											.text-danger {
												display: block;
												margin-top: 0;
											}
										</style>
										
								
								<br>
								<div class="input-group custom">
									<input type="password" name="password" value="{{ old('password') }}" class="form-control form-control-lg" placeholder="Password" autocomplete="off">
									<div class="input-group-append custom">
										<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
									</div>
								</div>
								<span class="text-danger"> 
									@error('password')
									{{$message}}
									@enderror
								</span>
								<style>
									.input-group {
										margin-bottom: 0; 
									}
									
									.text-danger {
										display: block;
										margin-top: 0;
									}
								</style>
								
			


							{{-- <div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div>
								</div> --}}
								<div class="col-6">
									{{-- <div class="forgot-password"><a href="">Forgot Password</a></div> --}}
								</div><br>
                                <div class="form-group row">
                                    <div class="col-sm-12 text-center">
                                        <button class="btn btn-primary mr-6" >SUBMIT</button>
                                    </div>
                                </div>
							</div>
                           
                            </form>
                           
								{{-- <div class="col-sm-12">
									<div class="input-group mb-0">
										
										<a class="btn btn-primary btn-lg btn-block" method="post" href="{{('/loginaction')}}">Sign In</a>
								
									</div> --}}
								</div>
							</div>
					
					</div>
               
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{asset('asset/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('asset/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('asset/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('asset/vendors/scripts/layout-settings.js')}}"></script>	
</body>
</html>