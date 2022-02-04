<!DOCTYPE html>
<!-- 
Template Name: Astrology
Version: 1.0.0
Author: Kamleshyadav
Website: http://himanshusofttech.com/
Purchase: http://themeforest.net/user/kamleshyadav
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"><!--<![endif]-->
<!-- Begin Head -->

<!-- Mirrored from kamleshyadav.com/html/astrology/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2021 09:19:31 GMT -->
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>

<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="description" content="Astrology">
<meta name="keywords" content="Astrology, signs, gemstones, tarot, horoscopes, cards, numerology, Zodiac">
<meta name="author" content="hsoft" >
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="MobileOptimized" content="320">
<!--Srart Style -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fonts.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">

<!-- Favicon Link -->
<link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/header/favicon.png')}}">
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','../../../connect.facebook.net/en_US/fbevents.js');
fbq('init', '1624167494576352');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1624167494576352&amp;ev=PageView&amp;noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(function(){
     
      $(document).on("submit","#signup-form",function(){
            var e=this;
       
            $(this).find("[type='submit']").html("REGISTER...");
            $.post($(this).attr('action'),$(this).serialize(),function(data){
              
              $(e).find("[type='submit']").html("REGISTER");
              if(data.status){
                alert(data.msg)
                window.location=data.redirect_location;
              }
              

            }).fail(function(response) {
             
              $(e).find("[type='submit']").html("LOGIN");
              $(".alert").remove();
              var erroJson = JSON.parse(response.responseText);

              console.log(erroJson);
              for (var err in erroJson) {
                for (var errstr of erroJson[err])
                $("[name='" + err + "']").after("<i class='error'>" + errstr + "</i>");
              }

            });
        return false;
      });

    });
  </script>

<script>
    $(function() {
    // handle submit event of form
      $(document).on("submit", "#ajax-login", function() {
        var e = this;
        // change login button text before ajax
        $(this).find("[type='submit']").html("LOGIN...");

        $.post($(this).attr('action'), $(this).serialize(), function(data) {

          $(e).find("[type='submit']").html("LOGIN");
          if (data.status) { // If success then redirect to login url
            window.location = data.redirect_location;
          }
        }).fail(function(response) {
            // handle error and show in html
          $(e).find("[type='submit']").html("LOGIN");
          $(".alert").remove();
          var erroJson = JSON.parse(response.responseText);
          console.log(erroJson);
        //   for (var err in erroJson) {
        //     for (var errstr of erroJson[err])
        //       $("#errors-list").append("<div class='alert alert-danger'>" + errstr + "</div>");
        //   }

        });
        return false;
      });
    });
  </script>

  @yield('headerScript')
</head>
<body>
<!-- Header Start -->
<div class="ast_top_header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ast_contact_details">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i>+91  7358949542</li>
						<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@eworship.in</a></li>
					</ul>
				</div>
				<div class="ast_autho_wrapper">
					<ul>
						<li><a class="popup-with-zoom-anim" href="#login-dialog"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In</a></li>
						<li><a class="popup-with-zoom-anim" href="#signup-dialog"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
						<li class="ast_search">
							<a href="javascript:;"><i class="fa fa-search"></i></a>
							<div class="ast_search_field">
								<form>
									<input type="text" placeholder="Search Here">
									<button type="button"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</li>
						<li class="ast_cart">
							<a href="javascript:;"><i class="fa fa-shopping-cart"></i></a>
							<div class="ast_cart_box">
								<div class="ast_cart_list">
									<ul>
										<li>
											<div class="ast_cart_img">
												<img src="{{ asset('assets/images/content/Products/thumb1.jpg')}}" class="img-responsive">
											</div>
											<div class="ast_cart_info">
												<a href="#">Yellow Sapphire</a>
												<p>1 X $20.00</p>
												<a href="javascript:;" class="ast_cart_remove"><i class="fa fa-trash"></i></a>
											</div>
										</li>
										<li>
											<div class="ast_cart_img">
												<img src="{{ asset('assets/images/content/Products/thumb1.jpg')}}" class="img-responsive">
											</div>
											<div class="ast_cart_info">
												<a href="#">yantra</a>
												<p>1 X $10.00</p>
												<a href="javascript:;" class="ast_cart_remove"><i class="fa fa-trash"></i></a>
											</div>
										</li>
									</ul>
								</div>
								<div class="ast_cart_total">
									<p>total<span>$30.00</span></p>
								</div>
								<div class="ast_cart_btn">
									<button type="button">view cart</button>
									<button type="button">checkout</button>
								</div>
							</div>
						</li>
					</ul><!---->
					<div id="login-dialog" class="zoom-anim-dialog mfp-hide">
						<h1>Login Form</h1>
                        <div id="errors-list"></div>

						<form id="ajax-login" name="postform" method="POST" action="{{ route('ajax.doLogin')}}">
                           @csrf
                            <div class="form-group">
							<input type="text" placeholder="Email" id="email" name="email" >
                            </div>
                            <div class="form-group">
							<input type="password" placeholder="Password" id="password" name="password" >
                            </div>
							<div class="ast_login_data">
								<label class="tp_custom_check" for="remember_me">Remember me <input type="checkbox" name="ast_remember_me" value="yes" id="ast_remember_me"><span class="checkmark"></span>
								</label>
								<a href="#">Forgot password ?</a>
							</div>
							<button type="submit" class="ast_btn">Login</button>
							<p>Create An Account ? <a href="#">SignUp</a></p>
						</form>
					</div>
					<div id="signup-dialog" class="zoom-anim-dialog mfp-hide">
						<h1>signup form</h1>
                        {{-- <div id="errors-list"></div> --}}
						<form id="signup-form" method="POST" action="{{ route('ajax.create')}}">
                            @csrf
                            <div class="form-group">
							<input type="text" placeholder="Name" id="name" name="name">
                            </div>
                            <div class="form-group">
							<input type="text" placeholder="Email" id="email" name="email">
                            </div>
                            <div class="form-group">
							<input type="password" placeholder="Password" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Confirm Password" id="confirm_password" name="confirm_password">
                                </div>
                            <div class="form-group">
							<input type="text" placeholder="Mobile Number" id="mobile" name="mobile">
                            </div>
                            <div class="form-group">
							<button type="submit" class="ast_btn">submit</button>
                            </div>
							<p>Have An Account ? <a href="#">Login</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ast_header_bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="ast_logo">
					<a href="/"><img src="{{ asset('assets/images/eworship.png')}}" width="110px" height="auto" alt="Logo" title="Logo"></a>
					<button class="ast_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<div class="ast_main_menu_wrapper">
					<div class="ast_menu">
						<ul>
							<li><a href="/">home</a></li>
							<li><a href="{{ route('horoscope')}}">horoscope</a></li>
							<li><a href="#">archanai</a>
							<ul class="submenu">
											<li><a href="navagraga_temples.php">Navagraga Temples </a></li>
											<li><a href="murugan_arupadai_temples.php">Murugan Arupadai Temples </a></li>
											<li><a href="important_temples.php">Important Temples</a></li>
										<!--	<li><a href="south_states_temples.php">Temples Choice of Clients in Southern States </a></li>-->
										</ul>
							</li>
							<li><a href="homam_parikkaram.php">Homam and Parikarm</a>
						<!--	<ul class="submenu">
											<li><a href="homam_parikaram_by_astrologer.php">Suggest by Astrologer</a></li>
											<li><a href="homam_parikaram_preferred.php">Homam and Pariharam Preferred by Clients from our Portal List of Homam and Pariharam</a></li>
											<li><a href="homam_parikaram_client_choice.php">Clients choice</a></li>
											
										</ul>-->
							</li>
							<li><a href="wedding.php">Wedding</a></li>
							<li><a href="vasthu.php">Vasthu</a></li>
							<li><a href="rituals.php">Rituals for Ancestors </a></li>
							<!--<li><a href="appointment.php">Solutions</a></li>-->
							<li><a href="contact.php">contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Header End -->  


@yield('content')

<div class="ast_download_wrapper ast_toppadder70 ast_bottompadder70">
	<div class="container">
		<div class="row">
			
			
		</div>
	</div>
</div>
<!-- Download wrapper End-->
<!-- Footer wrapper start-->
<div class="ast_footer_wrapper ast_toppadder70 ast_bottompadder20">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="ast_footer_info">
				<img src="{{ asset('assets/images/eworship.png')}}" width="110px" height="auto" alt="Logo">	
				<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>					
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>					
						<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>					
						<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>					
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>					
					</ul>
			</div></div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="widget text-widget">
					<h4 class="widget-title">our services</h4>
					<div class="ast_servicelink">
						<ul>
							<li><a href="archana.php">Archana</a></li>
											<li><a href="parikaram_homam.php">Parikaram & Homam</a></li>
											<li><a href="vasthu.php">VASTHU</a></li>
							
						</ul>
					</div>	
					<p></p>
					<h4 class="widget-title" style="margin-top: 30px;">Compliance</h4>
					<div class="ast_servicelink">
						<ul>
							<li><a href="privacypolicy.php">Privacy Policy</a></li>
											<li><a href="tc.php">Terms & Conditions</a></li>
											<li><a href="termsofuse.php">Terms of Use</a></li>
							
						</ul>
					</div>						
				</div>			
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="widget text-widget">
					<h4 class="widget-title">quick links</h4>
					<div class="ast_sociallink">
						<ul>
							<li><a href="index.php">home</a></li>
							<li><a href="about.php">about</a></li>
							<li><a href="team.php">Astrologers</a></li>
							<!--<li><a href="solutions.php">Solutions</a></li>-->
							<li><a href="contact.php">contact</a></li>
						</ul>
					</div>				
				</div>			
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="widget text-widget">
					<h4 class="widget-title">get in touch</h4>
					<div class="ast_gettouch">
						<ul>
							<li><i class="fa fa-home" aria-hidden="true"></i> <p>No 1 kodappu  Road, Uyakondan malai, Vayalore Road, Trichy - 620102</p></li>
							<li><i class="fa fa-at" aria-hidden="true"></i> <a href="mailto:info@eworship.in">info@eworship.in</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i> <p><a href="+91 7358949542">+91 7358949542 </a></p></li>
						</ul>
					</div>				
				</div>			
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ast_copyright_wrapper">
					<p>&copy; Copyright 2021 eWorship, All Rights Reserved, by <a href="http://affinityopus.com/">Affinity Interactive</a></p>				
				</div>			
			</div>	
		</div>	
	</div>
</div>
<!-- Footer wrapper End-->
<!--Main js file Style--> 
<script type="text/javascript" src="{{ asset('assets/js/jquery.js')}}"></script> 
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/custom.js')}}"></script>
<!--Main js file End-->
</body>

<!-- Mirrored from kamleshyadav.com/html/astrology/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2021 09:20:26 GMT -->
</html>