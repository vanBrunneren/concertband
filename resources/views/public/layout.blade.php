<!DOCTYPE html>
<html>
	<head>
		<title>
			@if(Request::is('SML'))
				Stadtmusik Lenzburg
			@else
				Concertband Lenzburg
			@endif
		</title>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="/css/app.css">

	</head>
	<body>
		
		<div id="fb-root"></div>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-65105017-5', 'auto');
		  ga('send', 'pageview');

		</script>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.7";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<div class="wrapper">
			<div class="container flex-grow">
				<div class="header row">
					<div class="col-lg-3 col-md-3 hidden-xs hidden-sm header-lg-left">
						<a href="/">
							@if(Request::is('SML'))
								<img src="/images/sml_punkt.bmp" class="img-responsive">
							@else
								<img src="/images/logo.bmp" class="img-responsive">
							@endif
						</a>
					</div>
					<div class="col-lg-9 col-md-9 hidden-sm hidden-xs text-right header_img">
						<img src="/images/header_right.jpg">
					</div>
					{{-- 
					<div style="height: 180px;" class="col-lg-1 col-md-1 hidden-sm hidden-xs">
						<img src="/images/sml_punkt.bmp" class="img-responsive" title="Stadtmusik Lenzburg" style="display: inline-block; vertical-align: middle; float: none;">
					</div>
					--}}
					<div class="col-xs-12 hidden-lg hidden-md colorized-header">
						<div class="xs-button">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</div>

						<div class="xs-button-close">
							<i class="fa fa-times close-button" aria-hidden="true"></i>
						</div>

						<a href="/" class="mobile-header">
							<h1 class="header-xs">
								@if(Request::is('SML'))
									Stadtmusik Lenzburg
								@else
									Concertband Lenzburg
								@endif
							</h1>
						</a>
					</div>

				</div>



					<div class="navigation row hidden-xs hidden-sm">
						<div class="row seven-cols">
						@foreach($navigation as $nav)
							
								@if(Request::is('SML'))
									@if($nav->name !== 'Home' AND $nav->name !== 'Intern')
										<a href="{{ $nav->route }}">
											<div class="col-lg-1 col-md-1 col-sm-1 text-center navigation-button">
												{{ $nav->name }}
												@if(Request::is($nav->name))
													<div class="navigation-picker"></div>
												@endif
											</div>
										</a>
									@else
										<div class="col-lg-1 col-md-1 col-sm-1 text-center navigation-button">		
										</div>
									@endif
								@else
									<a href="{{ $nav->route }}">
										<div class="col-lg-1 col-md-1 col-sm-1 text-center navigation-button">
											{{ $nav->name }}
											@if(Request::is($nav->name))
												<div class="navigation-picker"></div>
											@endif
										</div>
									</a>
								@endif
						@endforeach

						<a href="http://www.stadtmusik-lenzburg.ch">
							<div class="col-lg-1 col-md-1 col-sm-1 text-center navigation-button">
								SML
							</div>
						</a>

						</div>
					</div>
					
					<div class="mobile-navigation row">
						<div class="col-xs-12">
							@foreach($navigation as $nav)
								@if(Request::is('SML'))
									@if($nav->name !== 'Home' AND $nav->name !== 'Intern')
										<div class="row">
											<div class="col-xs-12 {{ Request::is($nav->name) ? 'menu-active' : '' }}">
												<a class="menu-link" href="{{ $nav->route }}"><h4>{{ $nav->name }}</h4></a> 
											</div>
										</div>
									@else
										<div class="row">
											<div class="col-xs-12">
											</div>
										</div>
									@endif
								@else
									<div class="row">
										<div class="col-xs-12 {{ Request::is($nav->name) ? 'menu-active' : '' }}">
											<a class="menu-link" href="{{ $nav->route }}"><h4>{{ $nav->name }}</h4></a> 
										</div>
									</div>
								@endif
							@endforeach	

							<div class="row">
								<div class="col-xs-12">
									<a class="menu-link" href="http://www.stadtmusik-lenzburg.ch"><h4>SML</h4></a> 
								</div>
							</div>

						</div>
					</div>


				<div class="content">
					@yield('content')
				</div>

			</div>
			<div class="footer container">
				<div class="row">
					<div class="hidden-xs hidden-sm col-lg-3 col-md-3">
						<div class="row">	
							<div class="col-xs-12 text-center footer-text">
								@if(Request::is('SML'))
									&copy; 2017 stadtmusik-lenzburg.ch
								@else
									&copy; 2017 concertband-lenzburg.ch
								@endif
							</div>
						</div>
					</div>
					<div class="hidden-xs hidden-sm col-lg-9 col-md-9 text-right">
						<div class="row">
							<div class="footer-button col-xs-12">
								<div class="fb-like" data-href="https://www.facebook.com/Concertband-Lenzburg-147810645243618/?fref=ts" data-width="120" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			$('.xs-button').click(function() {
			  	$('.content').hide();
			  	$('.xs-button').hide();
			  	$('.xs-button-close').show();
			  	$('.mobile-navigation').show();
			});

			$('.xs-button-close').click(function() {
			  	$('.content').show();
			  	$('.mobile-navigation').hide();
			  	$('.xs-button').show();
			  	$('.xs-button-close').hide();
			});
		</script>
	</body>
</html>
