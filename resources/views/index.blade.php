<!DOCTYPE html>
<html lang="ko">
<head>
<title> Take A Look </title>
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
<link type="text/css" rel="stylesheet" href="{{asset('common/css/total_Style.css')}}" />
<link rel="stylesheet" href="{{ asset('common/css/jquery.mCustomScrollbar.css') }}">

	<script type="text/javascript" src="{{ asset('common/js/jquery-3.2.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('common/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

</head>

<body>
	<div id="wrap">
		<!-- header -->
		<div id="header">
			<!-- logo -->
			<h1><a href="index.html"><img src="{{asset('images/common/logo.png')}}" alt="Take A Look"></a></h1>
			<!-- //logo -->
			<!-- gnb -->
			<div class="gnb">
				<ul class="slide_x">
					<li><a href="/sub">오늘의픽</a></li>
					<li><a href="/sub">거래량</a></li>
					<li><a href="/sub">거래금액</a></li>
					<li><a href="/sub">골든크로스</a></li>
					<li><a href="/sub">정배열</a></li>
					<li><a href="/sub">갭상승</a></li>
				</ul>
				<a href="#none" class="btn_more"><img src="{{asset('images/common/btn_more.png')}}" alt="전체보기"></a>
			</div>
			<!-- //gnb -->
		</div>
		<!-- //header -->

		<!-- container_wrap -->
		<div id="container_wrap">
			<!-- index_mn -->
			<div class="index_mn">
				<ul>
					<li><a href="/sub">오늘의픽<span></span></a></li>
					<li><a href="/sub">거래량<span></span></a></li>
					<li><a href="/sub">거래금액<span></span></a></li>
					<li><a href="/sub">골든크로스<span></span></a></li>
					<li><a href="/sub">정배열<span></span></a></li>
					<li><a href="/sub">갭상승<span></span></a></li>
				</ul>
			</div>
			<!-- //index_mn -->
		</div>
		<!-- //container_wrap -->

	</div>

	<script>
		(function($){
			$(window).on("load",function(){
				$(".slide_x").mCustomScrollbar({
					axis:"x",
					advanced:{autoExpandHorizontalScroll:true}
				});
			});
		})(jQuery);
	</script>

	<script>
		$(document).ready(function(){
			$('.btn_more').click(function() {
				$('.gnb').toggleClass("more");
			});
		});
	</script>
</body>
</html>
