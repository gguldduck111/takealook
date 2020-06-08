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
			<h1><a href="/"><img src="{{asset('images/common/logo.png')}}" alt="Take A Look"></a></h1>
			<!-- //logo -->
			<!-- gnb -->
			<div class="gnb">
				<ul class="slide_x">
					<li><a href="sub.html">오늘의픽</a></li>
					<li><a href="sub.html">거래량</a></li>
					<li><a href="sub.html">거래금액</a></li>
					<li class="on"><a href="sub.html">골든크로스</a></li>
					<li><a href="sub.html">정배열</a></li>
					<li><a href="sub.html">갭상승</a></li>
				</ul>
				<a href="#none" class="btn_more"><img src="{{asset('images/common/btn_more.png')}}" alt="전체보기"></a>
			</div>
			<!-- //gnb -->
		</div>
		<!-- //header -->

		<!-- container_wrap -->
		<div id="container_wrap">

			<!-- container -->
			<div class="container">

				<!-- 거래금액 -->
				<p class="cont_title1">
					<a href="#none" class="btn_text">골든크로스<span>?</span></a>
				</p>

				<div class="popup_wrap">
					<div class="popup">
						<p><span>단기(20일) 이동평균선이 장기(60일)</span> 이동평균선을 돌파하는 경우의 종목입니다.</p>
						<a href="#none" class="btn_close"><img src={{asset('images/common/btn_close.png')}} alt="닫기"></a>
					</div>
				</div>

				<div class="t_header">
					<ul>
						<li>순위 종목명</li>
						<li>거래량</li>
						<li>종가<br />전일대비(등락률)</li>
					</ul>
				</div>
				<div class="list_box">
					<ol>
						<li>
							<p class="num">1</p>
							<p class="name">삼성전자</p>
							<p class="quantity">175,454,656</p>
							<p class="price">47,850<span class="up">+650(+1.36%)</span></p>
						</li>
						<li>
							<p class="num">2</p>
							<p class="name">현대자동차</p>
							<p class="quantity">175,454,656</p>
							<p class="price">47,850<span class="down">-650(-1.36%)</span></p>
						</li>
						<li>
							<p class="num">3</p>
							<p class="name">한진칼</p>
							<p class="quantity">175,454,656</p>
							<p class="price">47,850<span class="up">+650(+1.36%)</span></p>
						</li>
						<li>
							<p class="num">4</p>
							<p class="name">SK하이닉스</p>
							<p class="quantity">175,454,656</p>
							<p class="price">47,850<span class="up">+650(+1.36%)</span></p>
						</li>
						<li>
							<p class="num">5</p>
							<p class="name">NAVER</p>
							<p class="quantity">175,454,656</p>
							<p class="price">47,850<span class="up">+650(+1.36%)</span></p>
						</li>
						<li>
							<p class="num">6</p>
							<p class="name">삼성전자</p>
							<p class="quantity">175,454,656</p>
							<p class="price">47,850<span class="up">+650(+1.36%)</span></p>
						</li>
						<li>
							<p class="num">7</p>
							<p class="name">현대자동차</p>
							<p class="quantity">175,454,656</p>
							<p class="price">47,850<span class="down">-650(-1.36%)</span></p>
						</li>
						<li>
							<p class="num">8</p>
							<p class="name">한진칼</p>
							<p class="quantity">175,454,656</p>
							<p class="price">47,850<span class="up">+650(+1.36%)</span></p>
						</li>
						<li>
							<p class="num">9</p>
							<p class="name">SK하이닉스</p>
							<p class="quantity">175,454,656</p>
							<p class="price">47,850<span class="up">+650(+1.36%)</span></p>
						</li>
						<li>
							<p class="num">10</p>
							<p class="name">NAVER</p>
							<p class="quantity">175,454,656</p>
							<p class="price">47,850<span class="up">+650(+1.36%)</span></p>
						</li>
					</ol>
				</div>
				<!-- 거래금액 -->

			</div>
			<!-- //container -->

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

		$(document).ready(function(){
			$('.btn_text').click(function() {
				$('.popup_wrap').toggleClass("on");
			});
			$('.btn_close').click(function() {
				$('.popup_wrap').removeClass("on");
			});
		});
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
