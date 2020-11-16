<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Kampus MIC, STIMIK MIC, Kampus Digital, Cikarang, Bekasi">
        <meta name="description" content="STMIK Media Informatika Cendekia">
        <meta name="author" content="STMIK MIC">
        <title>{{ config('app.name') }} :: @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <!-- Favicons-->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('logo.png') }}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('logo.png') }}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('logo.png') }}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('logo.png') }}">

        <!-- BASE CSS -->
        <link href="{{ asset('fron/css/base.css') }}" rel="stylesheet">

        <!-- SPECIFIC CSS -->
        @yield('css')


        <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>

    <body>

        <!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

        <div id="preloader">
            <div class="pulse"></div>

        </div><!-- Pulse Preloader -->

        <header>
            <a id="logo" href="{{ route('welcome') }}">
                <img src="{{asset ('logo_sm.png') }}" alt="Logo-mic" data-retina="true" class="img img-fluid"
                    width="146px" height="50px">

            </a>
            <nav id="top-nav">
                <ul>
                    <li><a href="#search"><i class=" icon-search"></i></a></li>
                    <li><a href="{{ route('tour') }}">Tour</a></li>
                    @if (Auth::check())
                    <li style="color:white">{{ auth()->user()->name }}</li>
                    @else

                    <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
                    @endif
                </ul>
            </nav>
            <a id="menu-trigger" href="#"><span class="menu-trigger-text">Menu</span><span
                    class="menu-trigger-icon"></span></a>
        </header> <!-- End Header -->

        @include('layouts.fron.side')
        <!--End nav-->

        <div class="main-wrapper">
            @yield('content')

            <div class="container_gray_bg" id="newsletter_container">
                <div class="container margin_60">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h3>Subscribe to our Newsletter for latest news.</h3>
                            <div id="message-newsletter"></div>
                            <form method="post" action="assets/newsletter.php" name="newsletter" id="newsletter"
                                class="form-inline">
                                <input name="email_newsletter" id="email_newsletter" type="email" value=""
                                    placeholder="Your Email" class="form-control">
                                <button id="submit-newsletter" class="button"> Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- End newsletter_container -->
            <footer>
                <div class="container">
                    <div class="row ">
                        <div class="col-md-3 col-sm-3">
                            <p id="logo_footer">
                                <img src="{{ asset('footer_logo.png') }}" alt="MIC-Footer" data-retina="true"
                                    class="img img-fluid" width="175px">
                            </p>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <h4>About</h4>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Blog</a></li>
                                @if (auth()->check())
                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                @else
                                <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>

                                @endif

                                <li><a href="#">Terms and condition</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <h4>Academic</h4>
                            <ul>
                                <li><a href="#">Plans of study</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Admissions</a></li>
                                <li><a href="#">Staff</a></li>
                                <li><a href="#">Students</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <h4>Kontak Kami</h4>

                            <ul id="contacts_footer">
                                <li>
                                    <address>
                                        Harco Teknik Blok H 1-5 Pasir Gombong Kawasan Industri
                                        Jababeka Cikarang - Bekasi 17530

                                    </address>
                                </li>
                                <li>Info line - <a href="tel://8936726">(021) 8936726-8937186</a></li>
                                <li>Email - <a href="#">info@mic.ac.id</a> /
                                    <a href="#">email@email.mic.ac.id</a></li>
                            </ul>
                        </div>
                    </div><!-- End row -->
                </div><!-- End container -->
            </footer><!-- End footer -->
            <div id="copy">
                <div class="container">
                    © Atena 2015 - All rights reserved.
                </div>
            </div><!-- End copy -->
        </div> <!-- main-wrapper -->


        <!-- Login modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-popup">
                    <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                    <form action="#" class="popup-form" id="myLogin">
                        @csrf
                        <input type="text" class="form-control form-white" placeholder="Username Or Email" name="email">
                        <input type="password" class="form-control form-white" placeholder="Password" name="password">
                        <div class="checkbox-holder text-left">
                            <div class="checkbox">
                                <input type="checkbox" value="accept_1" id="check_1" name="check_1" />
                                <label for="check_1"><span>I Agree to the <strong>Terms &amp;
                                            Conditions</strong></span></label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-submit">Submit <div class="spinner-border text-dark"
                                id="spin"></div></button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Register modal -->
        <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-popup">
                    <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                    <form action="#" class="popup-form" id="myRegister">
                        <input type="text" class="form-control form-white" placeholder="Name">
                        <input type="text" class="form-control form-white" placeholder="Last Name">
                        <input type="email" class="form-control form-white" placeholder="Email">
                        <input type="text" class="form-control form-white" placeholder="Password">
                        <div class="checkbox-holder text-left">
                            <div class="checkbox">
                                <input type="checkbox" value="accept_2" id="check_2" name="check_2" />
                                <label for="check_2"><span>I Agree to the <strong>Terms &amp;
                                            Conditions</strong></span></label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-submit">Register</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Search modal -->
        <div id="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="type keyword(s) here">
                <button type="submit" class="button">Search</button>
            </form>
        </div>

        <!-- Common scripts -->
        <script src="{{ asset('fron/js/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('fron/js/common_scripts_min.js') }}"></script>
        <script src="{{ asset('fron/js/functions.js') }}"></script>
        <script src="{{ asset('fron/assets/validate.js') }}"></script>

        <!-- Specific scripts -->
        @yield('js')

        @yield('script')

        <script src="{{ asset('fron/js/tabs.js') }}"></script>
        <script>
            new CBPFWTabs( document.getElementById( 'tabs' ) );
        </script>
        <link rel="stylesheet" href="alert/dist/sweetalert2.min.css" type="text/css" media="all" />
        <script src="alert/dist/sweetalert2.all.min.js"></script>
        <script>
            $("#spin").hide();
        			$("#myLogin").submit(function (e) { 
        				e.preventDefault();
        				$("#spin").show();
        				const form =$("#myLogin").serialize();
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