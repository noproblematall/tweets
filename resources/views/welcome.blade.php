<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		{!! $google !!}
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" value="{{ csrf_token() }}" />

	<title>همة حتى القمة | اليوم الوطني السعودي</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{asset('css/doc.css')}}" rel="stylesheet">
	
	
	</head>
<body>
	<input type="hidden" id="base_url" value="{{asset('/')}}">
	<section class="gea_whole_outer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="site-logo">
						<img src="{{asset('img/logo.png')}}" alt="logo" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 order-md-first order-sm-last">
					<div class="leftside">
						<img src="{{asset('img/leftpan.png')}}" class="left_sidespan" alt="Left Side Banner">
						<div class="yellow_text_box">
							<span dir="rtl" lang="ar" class="heading_yellow">آخر التغريدات</span>
							<span dir="rtl" lang="ar" class="twitter_name"></span>
							<p dir="rtl" lang="ar"></p>
						</div>
						<div class="green_text_box">
							<ul>
								<li>	
									<span dir="rtl" lang="ar" class="heading_green">المسافة المقطوعة</span>
									<span dir="rtl" lang="ar" class="current_distance"></span>
								</li>
								<li>	
									<span dir="rtl" lang="ar" class="heading_green">المسافة الإجمالية</span>
									<span dir="rtl" lang="ar" class="total_distance"></span>
								</li>
								<li>	
									{{-- <span class="heading_green">المسافة الإجمالية</span> --}}
									<span class="current_position"></span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-9 order-md-last order-sm-first">
					<div class="rightside">
						<img src="{{asset('img/map.png')}}" class="map_img" alt="Map">
						<img src="{{asset('img/final.gif')}}" alt="" class="flag">
					</div>
				</div>
			</div>	
		</div>
	</section>
	
	
	<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('js/jquery.keyframes.min.js')}}"></script>
	<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
