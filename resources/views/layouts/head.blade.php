<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Baqiath</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Immobiler, Gestion Immobiliaire, Récouvrements, Arbitrage ad Hoc,Médiation
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, Baqiath Immobilier, Biens Immobilers, Administration des Biens" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
    <link href="{{asset('web/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('web/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
    <link href="{{asset('web/css/font-awesome.css')}}" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->

	<div class="main_section_agile inner" id="home">
		<div class="agileits_w3layouts_banner_nav">

			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html"> <span>B</span>aqiath</a></h1>

				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-2" id="link-effect-2">
						<ul class="nav navbar-nav">
                        <li><a href="{{route('acceuil')}}" class="effect-3">Acceuil</a></li>
							{{-- <li><a href="about.html" class="effect-3">About</a></li> --}}
							{{-- <li><a href="blog.html" class="effect-3">Blog</a></li> --}}
							<li class="dropdown">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Langues<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Anglais</a></li>
									<li><a href="typography.html">Italien</a></li>
								</ul>
							</li>
                        <li class="active"><a href="{{route('mailus')}}" class="effect-3">Contact</a></li>
						</ul>
					</nav>
				</div>
			</nav>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">

			<ul class="w3_short">
            <li><a href="{{route('acceuil')}}">Acceuil</a><span>|</span></li>
				<li>Contact</li>
			</ul>
		</div>
	</div>
	<!--//w3_short-->
