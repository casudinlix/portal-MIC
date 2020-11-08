<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

	<head>
		<title>{{ config('app.name') }} :: Login</title>
		<!-- Meta tag Keywords -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8" />
		<meta name="keywords"
			content="Working Signin form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<!-- //Meta tag Keywords -->
		<link href="//fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
		<!--/Style-CSS -->
		<link rel="stylesheet" href="login.css" type="text/css" media="all" />
		<link rel="stylesheet" href="alert/dist/sweetalert2.min.css" type="text/css" media="all" />
		<link rel="stylesheet" href="dist/css/adminlte.min.css" type="text/css" media="all" />
		<script src="alert/dist/sweetalert2.all.min.js"></script>
		<!--//Style-CSS -->
	</head>

	<body>

		<!-- form section start -->
		<section class="w3l-workinghny-form">
			<!-- /form -->
			<div class="workinghny-form-grid">
				<div class="wrapper">
					<div class="logo">
						<h1><a class="brand-logo" href="#"><span>Working</span> Sign In</a></h1>
						<!-- if logo is image enable this   
                        <a class="brand-logo" href="#index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
					</div>
					<div class="workinghny-block-grid">
						<div class="workinghny-left-img align-end">
							<img src="2.png" class="img-responsive" alt="img" />
						</div>
						<div class="form-right-inf">

							<div class="login-form-content">
								<h2>Where to?</h2>
								<form action="#" class="signin-form" id="login">
									<div class="one-frm">
										@csrf
										<label>Email or username</label>
										<input type="text" name="email" placeholder="Email or Username" required="">
									</div>
									<div class="one-frm">
										<label>Password</label>
										<input type="password" name="password" placeholder="password" required="">
									</div>
									<label class="check-remaind">
										<input type="checkbox">
										<span class="checkmark"></span>
										<p class="remember">Remember Me</p>

									</label>
									<button class="btn btn-style mt-3">
										Sign In <div class="spinner-border text-dark" id="spin"></div>
									</button>

								</form>
							</div>
							@foreach (['danger', 'warning', 'success', 'info'] as $msg)

							@if(Session::has('alert-' . $msg))

							<script>
								Swal.fire({
										type: 'error',
										title:"Error!",
										text: "{{ Session::get('alert-' . $msg) }}"
										});
							</script>



							@endif

							@endforeach
						</div>
					</div>
				</div>
			</div>
			<!-- //form -->
			<!-- copyright-->
			<div class="copyright text-center">
				<div class="wrapper">
					<p class="copy-footer-29">© 2020 Working Sign In. All rights reserved | Design by <a
							href="https://w3layouts.com">W3layouts</a></p>
				</div>
			</div>
			<!-- //copyright-->
		</section>
		<!-- //form section start -->
		<script src="plugins/jquery/jquery.min.js"></script>
		<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<script>
			$("#spin").hide();
			$("#login").submit(function (e) { 
				e.preventDefault();
				$("#spin").show();
				const form =$("#login").serialize();
				$.ajax({
					type: "post",
					url: "{{ route('login.auth') }}",
					data: form,
					dataType: "JSON",
					success: function (res) {
						  if (res.success) {
						$("#spin").hide();
                            Swal.fire({
                                type: 'success',
                                title: 'Login Berhasil!',
                                text: 'Anda akan di arahkan dalam 3 Detik',
                                timer: 3000,
                                showCancelButton: false,
                                showConfirmButton: false
                            })
                                .then (function() {
                                    window.location.href = "{{ route('dashboard') }}";
                                });

                        } else {

                            console.log(res.success);

                            Swal.fire({
                                type: 'error',
                                title:res.message,
                                text: 'silahkan coba lagi!'
                            });
							$("#spin").hide();
                        }
						
					},error:function(res){
						Swal.fire({
						type: 'error',
						title: 'Opps!',
						text: res.statusText
						});
						$("#spin").hide();
					}
				});
			});
		</script>

	</body>

</html>