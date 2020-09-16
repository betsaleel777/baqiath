<body>
	<!-- banner -->

	<div class="main_section_agile" id="home">
		<div class="agileits_w3layouts_banner_nav">

			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="{{route('acceuil')}}"> <span>B</span>aqiath</a></h1>

				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-2" id="link-effect-2">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{route('acceuil')}}" class="effect-3">{{__('messages.acceuil_title')}}</a></li>
							<li><a href="#slider3-pager" class="effect-3">{{__('messages.about_title')}}</a></li>
							{{-- <li><a href="blog.html" class="effect-3">Blog</a></li> --}}
							<li class="dropdown">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">{{__('messages.lang_title')}}<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="{{url('/fr')}}">Français</a></li>
									<li><a href="{{url('/en')}}">English</a></li>
									<li><a href="{{url('/it')}}">Italiano</a></li>
								</ul>
							</li>
							<li><a href="{{route('mailus')}}" class="effect-3">{{__('messages.contact_title')}}</a></li>
						</ul>
					</nav>
				</div>
			</nav>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="banner_top">
		<div class="slider">
			<div class="wrapper">
				<div class="agile_banner_text_info">
					<h3>{{__('messages.site_title')}}</h3>
					<p style="color: mediumspringgreen">{{__('messages.site_slogant')}}</p>
					<div class="w3-button">
						{{-- <div class="w3ls-button">
							<a href="single.html" class="hvr-shutter-out-vertical">Lire plus</a>
						</div> --}}
						<center>
							<div class="w3l-button">
								<a href="#portfolio" class="hvr-shutter-out-vertical scroll ">{{__('messages.maisons_button')}}</a>
							</div>
						</center>
						<div class="clearfix"> </div>
					</div>


				</div>
				<!-- Slideshow 3 -->
				<ul class="rslides" id="slider">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
				<!-- Slideshow 3 Pager -->
				<ul id="slider3-pager">
					<li><a href="#"><img src="{{asset('web/images/banner11.jpg')}}" data-selector="img" alt=""></a></li>
					<li><a href="#"><img src="{{asset('web/images/banner22.jpg')}}" data-selector="img" alt=""></a></li>
					<li><a href="#"><img src="{{asset('web/images/banner33.jpg')}}" data-selector="img" alt=""></a></li>
					<li><a href="#"><img src="{{asset('web/images/banner44.jpg')}}" data-selector="img" alt=""></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->

	<!-- //banner -->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-4 agileits_banner_bottom_left">
				<div class="agileinfo_banner_bottom_pos">
					<div class="w3_agileits_banner_bottom_pos_grid">
						<div class="col-xs-3 wthree_banner_bottom_grid_left">
							<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
								<span class="fa fa-info-circle" aria-hidden="true"></span>
							</div>
						</div>
						<div class="col-xs-9 wthree_banner_bottom_grid_right">
							<h4>{{__('messages.banner_about_title_one')}}</h4>
							<p>{{__('messages.banner_about_content_one')}}</p>

						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="col-md-4 agileits_banner_bottom_left">
				<div class="agileinfo_banner_bottom_pos">
					<div class="w3_agileits_banner_bottom_pos_grid">
						<div class="col-xs-3 wthree_banner_bottom_grid_left">
							<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
								<span class="fa fa-globe" aria-hidden="true"></span>
							</div>
						</div>
						<div class="col-xs-9 wthree_banner_bottom_grid_right">
							<h4>{{__('messages.banner_about_title_two')}}</h4>
							<p>{{__('messages.banner_about_content_two')}}</p>

						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="col-md-4 agileits_banner_bottom_left">
				<div class="agileinfo_banner_bottom_pos">
					<div class="w3_agileits_banner_bottom_pos_grid">
						<div class="col-xs-3 wthree_banner_bottom_grid_left">
							<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
								<span class="fa fa-user" aria-hidden="true"></span>
							</div>
						</div>
						<div class="col-xs-9 wthree_banner_bottom_grid_right">
							<h4>{{__('messages.banner_about_title_three')}}</h4>
							<p>{{__('messages.banner_about_content_three')}}</p>

						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom -->
	<!-- medile_section -->
	{{-- <div class="medile_section" id="three_grids">
		<div class="col-md-5 mid-one"> </div>
		<div class="col-md-3 mid-text-info">
			<h4>Unique and truly responsive websites</h4>
			<p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard
				dummy text.</p>
		</div>
		<div class="col-md-4 mid-two"> </div>
		<div class="clearfix"> </div>

	</div> --}}
	<!-- //medile_section -->
