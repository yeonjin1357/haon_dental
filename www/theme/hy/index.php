<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');
include_once(G5_THEME_PATH.'/menu.php');
include_once(G5_THEME_PATH.'/loading.php');

?>



	<!-- 콘텐츠를 입력하세요 -->
<div id="fullpage">
	<section class="section slide-section">
		<!-- <div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/slide_01.jpg" alt="slide01">
					<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_slide_01.jpg" alt="m_slide01">
				</div>
				<div class="swiper-slide">
					<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/slide_02.jpg" alt="slide02">
					<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_slide_02.jpg" alt="m_slide02">
				</div>
				<div class="swiper-slide">
					<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/slide_03.jpg" alt="slide02">
					<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_slide_03.jpg" alt="m_slide02">
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div> -->
		<div class="slide active">
			<div class="slidetxt">
				<span>HAON DENTAL CLINIC</span>
				<h5 data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">독보적인 진료 노하우 <b>ON</b></h5>
				<hr data-aos="fade-right" data-aos-duration="2000" data-aos-delay="2000">
				<div class="slide-img" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1500"><img src="<? echo G5_THEME_IMG_URL; ?>/main/slide-img.png" class="mt5 slide-img"></div>
			</div>
		</div>
		<div class="slide slide2">
			<div class="slidetxt">
				<span>HAON DENTAL CLINIC</span>
				<h5 data-aos="zoom-in" data-aos-duration="1000">오래 쓰는 임플란트 <b>ON</b></h5>
				<hr data-aos="fade-right" data-aos-duration="2000" data-aos-delay="1500">
				<p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">하온치과는 뿌리부터 튼튼한 임플란트를 식립합니다.</p>
			</div>
		</div>
		<div class="slide slide3">
			<div class="slidetxt">
				<span>HAON DENTAL CLINIC</span>
				<h5 data-aos="zoom-in" data-aos-duration="1000">1:1 맞춤 치아교정 <b>ON</b></h5>
				<hr data-aos="fade-right" data-aos-duration="2000" data-aos-delay="1500">
				<p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">하온치과는 처음부터 끝까지 전담의료진이 함께합니다.</p>
			</div>
		</div>
		<div class="slide slide4">
			<div class="slidetxt">
				<span>HAON DENTAL CLINIC</span>
				<h5 data-aos="zoom-in" data-aos-duration="1000">보이는 수술실 <b>ON</b></h5>
				<hr data-aos="fade-right" data-aos-duration="2000" data-aos-delay="1500">
				<p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">하온치과는 환자의 안전을 보호하기 위해 앞장섭니다.</p>
			</div>
		</div>

		<div class="slide slide5">
			<div class="slidetxt">
				<span>HAON DENTAL CLINIC</span>
				<h5 data-aos="zoom-in" data-aos-duration="1000">깨끗한 치과 <b>ON</b></h5>
				<hr data-aos="fade-right" data-aos-duration="2000" data-aos-delay="1500">
				<p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">하온치과는 철저한 멸균소독시스템을 운영합니다.</p>
				
			</div>
			<ul class="slide5-icon">
				<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">

					<svg version="1.1" id="Calque_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="83px" height="83px" viewBox="0 0 83 83" enable-background="new 0 0 83 83" xml:space="preserve">
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M10.287,25.393c0.51,1.126,1.154,2.192,1.912,3.172l2.628-2.037
						c-0.6-0.773-1.109-1.618-1.513-2.508L10.287,25.393z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M13.735,12.686L10.82,11.09c-0.595,1.085-1.062,2.24-1.389,3.434
						l3.206,0.878C12.896,14.458,13.266,13.544,13.735,12.686z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M16.879,28.623l-2.092,2.584c0.954,0.772,1.994,1.432,3.096,1.965
						c0.154-1.166,0.372-2.312,0.661-3.43C17.965,29.408,17.401,29.045,16.879,28.623z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M33.818,27.733c-0.226,0.226-0.459,0.442-0.699,0.649l2.173,2.516
						c0.298-0.258,0.589-0.528,0.874-0.813c0.592-0.592,1.142-1.232,1.631-1.903l-2.687-1.959C34.724,26.756,34.289,27.264,33.818,27.733
						z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M36.549,23.67l3.066,1.283c0.477-1.141,0.821-2.339,1.021-3.561
						l-3.28-0.539C37.199,21.82,36.927,22.768,36.549,23.67z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M36.967,15.039c0.287,0.934,0.467,1.904,0.532,2.884l3.316-0.223
						c-0.083-1.236-0.309-2.461-0.672-3.64L36.967,15.039z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M36.168,7.465c-0.879-0.879-1.856-1.653-2.904-2.3l-1.745,2.829
						c0.828,0.512,1.601,1.123,2.298,1.82L36.168,7.465z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M29.91,3.599c-1.17-0.388-2.389-0.64-3.623-0.751l-0.294,3.312
						c0.979,0.088,1.944,0.287,2.872,0.595L29.91,3.599z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M24.859,31.444c-0.919,0-1.838-0.1-2.732-0.295l-0.713,3.246
						c1.128,0.247,2.287,0.373,3.445,0.373l0.231-0.001l-0.039-3.324L24.859,31.444z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M12.422,21.229c-0.158-0.81-0.239-1.635-0.239-2.456
						c0-0.157,0.002-0.314,0.009-0.471L8.87,18.18c-0.008,0.197-0.011,0.396-0.011,0.593c0,1.034,0.102,2.076,0.3,3.094L12.422,21.229z"
						/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M23.058,6.236l-0.468-3.292c-1.226,0.175-2.429,0.491-3.579,0.941
						l1.21,3.095C21.131,6.624,22.086,6.374,23.058,6.236z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M27.956,31.063l0.807,3.225c1.203-0.301,2.369-0.742,3.463-1.312
						l-1.532-2.95C29.829,30.476,28.907,30.824,27.956,31.063z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M15.89,9.816c0.539-0.537,1.126-1.027,1.747-1.458l-1.895-2.731
						c-0.782,0.542-1.522,1.16-2.201,1.838c-0.199,0.198-0.391,0.4-0.577,0.607l2.472,2.223C15.583,10.131,15.734,9.972,15.89,9.816z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M21.422,22.206c-1.889-1.893-1.889-4.97,0-6.859
						c0.917-0.916,2.136-1.421,3.434-1.421c1.103,0,2.147,0.368,2.999,1.04c0.862-0.73,1.765-1.412,2.709-2.038
						c-1.537-1.499-3.557-2.326-5.708-2.326c-2.184,0-4.236,0.85-5.784,2.393c-3.185,3.187-3.187,8.373,0,11.563
						c0.31,0.309,0.645,0.582,0.992,0.834c0.458-1.038,0.974-2.044,1.545-3.015C21.547,22.319,21.482,22.267,21.422,22.206z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M29.708,18.776c0,1.296-0.504,2.514-1.421,3.43
						c-0.916,0.916-2.134,1.421-3.43,1.421c-0.041,0-0.082-0.005-0.122-0.006c-0.618,1.001-1.166,2.049-1.642,3.134
						c0.574,0.126,1.163,0.196,1.764,0.196l0,0c2.184,0,4.237-0.851,5.78-2.394c1.545-1.543,2.396-3.597,2.396-5.781
						c0-1.079-0.209-2.127-0.606-3.097c-0.987,0.653-1.924,1.375-2.809,2.154C29.678,18.142,29.708,18.457,29.708,18.776z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M46.491,8.119c-3.012,0-5.917,0.465-8.647,1.325
						c0.286,0.398,0.56,0.807,0.809,1.229l-2.867,1.683c-0.344-0.586-0.755-1.134-1.191-1.661c-1.407,0.64-2.754,1.385-4.03,2.232
						c0.023,0.022,0.049,0.043,0.073,0.066c0.781,0.781,1.383,1.692,1.79,2.686c4.037-2.674,8.871-4.236,14.065-4.236
						c14.084,0,25.542,11.459,25.542,25.544c0,6.812-2.651,13.22-7.463,18.042l-0.485,0.487v25.782h3.324V56.88
						c5.132-5.39,7.949-12.427,7.949-19.893C75.358,21.07,62.408,8.119,46.491,8.119z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M18.544,29.742c0.27,0.153,0.534,0.316,0.813,0.45l-1.441,2.996
						c-0.01-0.006-0.022-0.011-0.032-0.017c-0.166,1.25-0.26,2.521-0.26,3.815c0,0.273,0.006,0.545,0.015,0.816L7.642,55.114h7.537v9.079
						h3.324V51.79h-5.103l7.598-13.16l-0.021-0.484c-0.017-0.386-0.031-0.77-0.031-1.158c0-3.638,0.769-7.097,2.146-10.232
						c-1.093-0.238-2.12-0.702-3.03-1.364C19.447,26.788,18.935,28.24,18.544,29.742z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M19.356,30.192c-0.278-0.134-0.543-0.297-0.813-0.45
						c-0.289,1.118-0.506,2.264-0.661,3.43c0.01,0.006,0.021,0.011,0.032,0.017L19.356,30.192z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M38.652,10.674c-0.249-0.423-0.523-0.831-0.809-1.229
						c-1.115,0.351-2.198,0.773-3.25,1.251c0.437,0.527,0.847,1.075,1.191,1.661L38.652,10.674z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M21.609,22.376c-0.571,0.971-1.088,1.977-1.545,3.015
						c0.91,0.662,1.937,1.126,3.03,1.364c0.476-1.085,1.024-2.133,1.642-3.134C23.568,23.593,22.472,23.153,21.609,22.376z"/>
					<path fill="#fff" stroke="#fff" stroke-width="0.25" d="M30.564,12.928c-0.944,0.626-1.847,1.308-2.709,2.038
						c0.149,0.118,0.295,0.242,0.432,0.379c0.691,0.69,1.147,1.553,1.331,2.489c0.884-0.779,1.821-1.501,2.809-2.154
						c-0.406-0.993-1.009-1.904-1.79-2.686C30.613,12.971,30.587,12.95,30.564,12.928z"/>
					</svg>
					<h5>체온 측정</h5>
				</li>
				<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">

					<svg version="1.1" id="Calque_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="83px" height="83px" viewBox="0 0 83 83" enable-background="new 0 0 83 83" xml:space="preserve">
					<g>
						<g>
							<path fill="none" stroke="#fff" stroke-width="2" d="M17.957,49.874v-9.869c-0.41-2.52-2.203-4.926-4.709-4.927l-1.509,0.001
								c-0.065,0-0.127,0.01-0.189,0.013"/>
							<path fill="none" stroke="#fff" stroke-width="2" d="M19.111,70.146L5.687,47.617L5.497,29.846
								c0.063-0.003,0.124-0.012,0.189-0.012l1.509-0.002c2.506,0.002,4.299,2.406,4.709,4.928v9.867l3.688,3.896l10.552,10.552l0,0
								l-6.558-6.527c-1.629-1.725-1.082-4.912,0.643-6.543c0,0,0.42-0.344,0.465-0.382l11.676,11.674l1.505,7.517v7.789"/>
							<line fill="none" stroke="#fff" stroke-width="2" x1="38.677" y1="73.075" x2="15.192" y2="73.075"/>
						</g>
						<g>
							<path fill="none" stroke="#fff" stroke-width="2" d="M65.359,49.874v-9.869c0.41-2.52,2.203-4.926,4.707-4.927l1.511,0.001
								c0.065,0,0.126,0.01,0.189,0.013"/>
							<path fill="none" stroke="#fff" stroke-width="2" d="M64.205,70.146l13.426-22.529l0.188-17.771
								c-0.063-0.003-0.124-0.012-0.188-0.012l-1.51-0.002c-2.506,0.002-4.299,2.406-4.709,4.928v9.867l-3.688,3.896L57.173,59.074l0,0
								l6.558-6.527c1.629-1.725,1.082-4.912-0.645-6.543c0,0-0.418-0.344-0.463-0.382L50.949,57.296l-1.508,7.517v7.789"/>
							<line fill="none" stroke="#fff" stroke-width="2" x1="44.639" y1="73.075" x2="68.124" y2="73.075"/>
						</g>
					</g>
					<line fill="none" stroke="#fff" stroke-width="2" x1="33.119" y1="77.359" x2="33.119" y2="80.393"/>
					<line fill="none" stroke="#fff" stroke-width="2" x1="49.994" y1="77.359" x2="49.994" y2="80.393"/>
					<polygon fill="none" stroke="#fff" stroke-width="2" points="59.93,5.805 62.701,12.969 69.865,15.741 62.701,18.512 
						59.93,25.676 57.158,18.512 49.994,15.741 57.158,12.969 "/>
					<polygon fill="none" stroke="#fff" stroke-width="2" points="36.197,33.391 37.464,36.666 40.74,37.934 37.464,39.2 
						36.197,42.476 34.931,39.2 31.654,37.934 34.931,36.666 "/>
					<g>
						<line fill="none" stroke="#fff" stroke-width="2" x1="14.585" y1="22.928" x2="20.082" y2="28.425"/>
						<line fill="none" stroke="#fff" stroke-width="2" x1="20.082" y1="22.928" x2="14.585" y2="28.425"/>
					</g>
					<g>
						<line fill="none" stroke="#fff" stroke-width="2" x1="51.515" y1="32.329" x2="57.012" y2="37.826"/>
						<line fill="none" stroke="#fff" stroke-width="2" x1="57.012" y1="32.329" x2="51.515" y2="37.826"/>
					</g>
					</svg>
					<h5>소독제 비치</h5>
				</li>
				<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1200">

					<svg version="1.1" id="Calque_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="83px" height="83px" viewBox="0 0 83 83" enable-background="new 0 0 83 83" xml:space="preserve">
					<g>
						<path fill="none" stroke="#fff" stroke-width="2" d="M50.504,28.415c-2.793-1.623-3.525-1.689-7.434-0.659
							c-0.59,0.153-1.102,0.244-1.57,0.295c-0.469-0.051-0.981-0.142-1.575-0.295c-3.901-1.03-4.633-0.964-7.427,0.659
							c-2.449,1.292-3.857,5.027-3.158,9.225c0.81,4.854,2.682,5.193,2.682,10.449c0,5.229,1.897,7.841,3.422,7.841
							c1.526,0,2.295-1.791,3.965-6.27c1.15-3.072,2.852-3.56,4.182,0c1.674,4.479,2.439,6.27,3.967,6.27
							c1.525,0,3.421-2.612,3.421-7.841c0-5.243,1.862-5.543,2.682-10.449C54.362,33.442,52.951,29.707,50.504,28.415z"/>
						<path fill="none" stroke="#fff" stroke-width="2" d="M39.42,77.631C26.244,73.785,8.727,66.026,8.727,43.172V13.623L41.5,4.761
							l32.773,8.864v29.547c0,22.854-17.516,30.613-30.692,34.459L41.5,78.239L39.42,77.631z"/>
						<path fill="none" stroke="#fff" stroke-width="2" d="M26.803,64.252c-7.496-5.06-10.863-11.879-10.863-21.287V18.749"/>
						<path fill="none" stroke="#fff" stroke-width="2" d="M40.771,11.195l26.579,7.188V43.19c0,18.485-14.021,24.949-26.236,28.514
							l-0.345,0.102l-0.343-0.101"/>
					</g>
					</svg>
					<h5>멸균 소독</h5>
				</li>
				<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1400">
					<svg version="1.1" id="Calque_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="83px" height="83px" viewBox="0 0 83 83" enable-background="new 0 0 83 83" xml:space="preserve">
					<g>
						<g>
							<polyline fill="none" stroke="#fff" stroke-width="2" points="27.341,28.119 16.667,17.445 7.917,17.445 7.917,4.609 		"/>
							<path fill="none" stroke="#fff" stroke-width="2" d="M47.63,53.225L72.115,77.71c0.665,0.665,1.745,0.663,2.407,0l2.407-2.407
								c0.667-0.666,0.667-1.743,0-2.409L52.759,48.723"/>
							<path fill="none" stroke="#fff" stroke-width="2" d="M40.956,48.957l4.582,4.581c0.664,0.666,1.743,0.664,2.406,0l4.816-4.813
								c0.664-0.667,0.664-1.743,0-2.408l-5.072-5.072"/>
							<path fill="none" stroke="#fff" stroke-width="2" d="M41.935,35.491l-9.619-9.62c-0.664-0.664-1.741-0.664-2.406,0.001
								l-4.817,4.814c-0.662,0.665-0.663,1.743,0,2.409l9.222,9.22"/>
						</g>
						<g>
							<line fill="none" stroke="#fff" stroke-width="2" x1="59.624" y1="23.526" x2="53.738" y2="29.411"/>
							<path fill="none" stroke="#fff" stroke-width="2" d="M13.263,77.952c-0.596,0.642-1.709,0.571-2.475-0.163
								c-1.846-1.771-3.657-3.58-5.428-5.427c-0.734-0.766-0.803-1.878-0.161-2.476c14.692-13.757,29.386-27.515,44.08-41.271
								c0.64-0.598,1.532-0.685,1.999-0.198c1.127,1.176,2.28,2.328,3.453,3.455c0.486,0.465,0.4,1.359-0.195,2
								C40.777,48.565,27.021,63.259,13.263,77.952z"/>
							<line fill="none" stroke="#fff" stroke-width="2" x1="46.374" y1="32.145" x2="51.984" y2="37.754"/>
							<line fill="none" stroke="#fff" stroke-width="2" x1="10.853" y1="69.912" x2="16.462" y2="75.52"/>
							<circle fill="none" stroke="#fff" stroke-width="2" cx="67.334" cy="15.814" r="10.905"/>
						</g>
					</g>
					</svg>
					<h5>1인 1기구</h5>
				</li>
			</ul>
		</div>

		<div class="slide slide6">
			<div class="slidetxt">
				<span>HAON DENTAL CLINIC</span>
				<h5 data-aos="zoom-in" data-aos-duration="1000">당신의 미소를 위한 치과 <b>ON</b></h5>
				<hr data-aos="fade-right" data-aos-duration="2000" data-aos-delay="1500">
				<p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">언제나 활짝! 웃으실 수 있도록 하온치과가 함께 하겠습니다.</p>
			</div>
		</div>
		
	</section>

	<section class="section">
		<div class="area area6">
			<ul class="col-2">
				<li data-aos="fade-up" data-aos-duration="1000" class="doctor">
					<!-- <img src="<? echo G5_THEME_IMG_URL; ?>/main/doctor.jpg" alt=""> -->
				</li>
				<li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500" class="area6li">
					<div class="area6-txt">
						<div>
							<p>보건복지부 인증 전문의 진료</p>
							<h5>하온치과 <b>허용호</b></h5>
							<div class="sign-area">
								<span>대표원장</span>
								<img src="<? echo G5_THEME_IMG_URL; ?>/main/sign.jpg" alt="">
							</div>
							<a href="<?php echo G5_URL ?>/info_dentist.php" class="go-btn">
								<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/go.jpg" alt="">
								<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/go-m.jpg" alt="">
							</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<section class="section">
		<div class="area area1">
			<ul class="col-4 area1-wrap" >
				<li>
					<div class="area1txt "  data-aos="fade-up" data-aos-duration="1000">
						<div>
							<h5 >HAON</h5>
							<p>오래쓰는
							<span>임플란트</span></p>
							<a href="<?php echo G5_URL ?>/imp_special.php" target="_self">DETAIL VIEW</a>
						</div>
					</div>
				</li>
				<li>
					<div class="area1txt" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
						<div>
							<h5>HAON</h5>
							<p>얼굴과학
							<span>치아교정</span></p>
							<a href="<?php echo G5_URL ?>/ortho_special.php" target="_self">DETAIL VIEW</a>
						</div>
					</div>
				</li>
				<li>
					<div class="area1txt" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
						<div>
							<h5>HAON</h5>
							<p>보존적인
							<span>충치치료</span></p>
							<a href="<?php echo G5_URL ?>/caries.php" target="_self">DETAIL VIEW</a>
						</div>
					</div>
				</li>
				<li>
					<div class="area1txt" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
						<div>
							<h5>HAON</h5>
							<p>고난도
							<span>사랑니발치</span></p>
							<a href="<?php echo G5_URL ?>/wisdom.php" target="_self">DETAIL VIEW</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<section class="section">
		<div class="area area2">
			<div class="left-box" data-aos="fade-up" data-aos-duration="1000">
				<p>Comfortable
				<br>Dentistry</p>
			</div>
			<div class="area2-wrap">
				<h5 data-aos="fade-right" data-aos-duration="2000" data-aos-delay="400"><span class="point-color">편안한 진료,</span>
				하온치과의 목표입니다.</h5>

				<ul class="col-3 line-list sub-col-3 area2-sub">
					<li class="special01">
						<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/detail_view1.png" alt="">
						<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_detail_view1.png" alt="">
						<div>
							<h6>안심케어 수술실</h6>
							<p>DETAIL VIEW +</p>
						</div>
					</li>
					<li class="special02">
						<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/detail_view2.png" alt="">
						<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_detail_view2.png" alt="">
						<div>
							<h6>감염관리 시스템</h6>
							<p>DETAIL VIEW +</p>
						</div>
					</li>
					<li class="special03">
						<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/detail_view3.png" alt="">
						<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_detail_view3.png" alt="">
						<div>
							<h6>믿음 보증시스템</h6>
							<p>DETAIL VIEW +</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	
	<section class="section">
		<div class="area area3">
			<div class="left-box right-box" data-aos="fade-up" data-aos-duration="1000">
				<p>Special
				<br>Dentistry</p>
			</div>
			<div class="area3-wrap">
				<h5 data-aos="fade-right" data-aos-duration="2000" data-aos-delay="400">하온치과만의
				<span class="point-color">특별함</span></h5>
				
				<ul class="col-3 area3-sub">
					<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="area3-sub01">
						<div>
							<h5>01
							안심진료 시스템</h5>
							<section>
								<div>
									<span>수술실 CCTV 활성화</span>
									<span>멸균시스템 구축</span>
								</div>
								<div>
									<span>1인 1기구 필수</span>
									<span>사후보증제도</span>
								</div>
							</section>
						</div>
					</li>
					<li>
						<ul>
							<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600" class="area3-sub02">
								<div class="area3-txtbox">
									<h5>02
									통합진료 시스템</h5>
								</div>
								<div class="area3-hoverbox">
									<h5>02
									통합진료 시스템</h5>
									<p>모든 진료를 한 곳에서!
									분야별 의료진이
									통합적인 치료계획을 수립합니다.</p>
								</div>
							</li>
							<li style="margin-left: 0;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800" class="area3-sub04">
								<div class="area3-txtbox">
									<h5>04
									대표원장 책임진료</h5>
								</div>
								<div class="area3-hoverbox">
									<h5>04
									대표원장 책임진료</h5>
									<p>치과 전문의 대표원장이
									전 치료과정을 체크하여
									책임진료를 도와드립니다.</p>
								</div>
							</li>
						</ul>
					</li>
					<li>
						<ul>
							<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700" class="area3-sub03">
								<div class="area3-txtbox">
									<h5>03
									교정 전담의료진</h5>
								</div>
								<div class="area3-hoverbox">
									<h5>03
									교정 전담의료진</h5>
									<p>하온치과는 교정만을 담당하는
									교정 의료진이 전담합니다.
									맞춤 치아교정을 만나보세요.</p>
								</div>
							</li>
							<li style="margin-left: 0;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900" class="area3-sub05">
								<div class="area3-txtbox">
									<h5>05
									빠르고 정확성 높은 진료</h5>
								</div>
								<div class="area3-hoverbox">
									<h5>05
									빠르고 정확성 높은 진료</h5>
									<p>단계 별 시스템을 도입하여
									마취부터 안 아프도록 도와드립니다.
									하온에서 편안한 진료 받아보세요!</p>
								</div>
							</li>
						</ul>
					</li>
				</ul>	
			</div>
		</div>
	</section>

	<section class="section pc-area">
		<div class="area area4">
			<div class="footer-bg"></div>
			<div class="area4-wrap">
				<ul class="col-2">
					<li>
						<div>
							<span>하온치과</span>
							<ul class="icon-list">
								<li>
									<a href="<?php echo G5_URL ?>/info_dentist.php">
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/footer_icon1.png" alt="">
										<p>의료진 소개</p>
									</a>
								</li>
								<li>
									<a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')">
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/footer_icon2.png" alt="">
										<p>블로그</p>
									</a>
								</li>
								<li>
									<a href="<?php echo G5_URL ?>/info_interior.php">
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/footer_icon3.png" alt="">
										<p>둘러보기</p>
									</a>
								</li>
								<li>
									<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=qa" target="_self">
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/footer_icon4.png" alt="">
										<p>온라인 상담</p>
									</a>
								</li>
							</ul>
						</div>
						<div style="align-items:center;">
							<span>상담전화</span>
							<h5 class="phone-num">031. 506. 2080</h5>
						</div>
						<div>
							<span>진료시간</span>
							<div class="info_time">
								<div>
									<span>평 일</span>
									<p>AM 09:00 ~ PM 05:30</p>
								</div>
								<div>
									<span class="point-color">화 · 수 · 목</span>
									<p class="point-color">AM 09:00 ~ PM 08:30 (야간진료)</p>
								</div>
								<div>
									<span>토 요 일</span>
									<p>AM 09:00 ~ PM 02:00</p>
								</div>
								<div>
									<span>점 심 시 간</span>
									<p>PM 12:30 ~ PM 02:00</p>
								</div>
								<div>
									<span class="point-color">저 녁 시 간</span>
									<p class="point-color">PM 05:30 ~ PM 06:30</p>
								</div>
								
								<div class="notice">
									<p>* 토요일은 점심시간 없이 진료합니다.</p>
									<p>* 공휴일 및 일요일은 휴진입니다.</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="map_area">
							<span>찾아오시는 길</span>
							<p>경기도 시흥시 황고개로 526, 3층</p>
						</div>
						<section>
							<!-- * 카카오맵 - 지도퍼가기 -->
							<!-- 1. 지도 노드 -->
							<div id="daumRoughmapContainer1640842578229" class="root_daum_roughmap root_daum_roughmap_landing"></div>

							<!--
								2. 설치 스크립트
								* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
							-->
							<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

							<!-- 3. 실행 스크립트 -->
							<script charset="UTF-8">
								new daum.roughmap.Lander({
									"timestamp" : "1640842578229",
									"key" : "28mt3",
									"mapWidth" : "640",
									"mapHeight" : "240"
								}).render();
							</script>
						</section>
						<div class="parking">
							<span>주차장</span>
							<p>치과 건물 내 지하주차장 (지하 2층)
							치과 건너편 행정복지센터 주차장</p>
						</div>

						<div class="naver">
							<a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')">
								<img src="<? echo G5_THEME_IMG_URL; ?>/main/footer_icon5.png" alt="">
							</a>
							<p>빠르고 간편한<br>
							<b><span class="n_span">네이버</span> 진료예약</b><br>
							<strong>네이버 예약서비스</strong>를 통해서 빠르고 간편한 진료예약이 가능합니다.</p>
						</div>
					</li>
				</ul>
			</div>	
		</div>
	</section>

	<section class="section m-area">
		<div class="area4 area">
			<div class="footer-bg"></div>
			<div class="area4-wrap">
				<ul class="col-2">
					<li>
						<div class="haon">
							<span>하온치과</span>
							<ul class="icon-list">
								<li>
									<a href="<?php echo G5_URL ?>/info_dentist.php">
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/footer_icon1.png" alt="">
										<p>의료진 소개</p>
									</a>
								</li>
								<li>
									<a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')">
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/footer_icon2.png" alt="">
										<p>블로그</p>
									</a>
								</li>
								<li>
									<a href="<?php echo G5_URL ?>/info_interior.php">
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/footer_icon3.png" alt="">
										<p>둘러보기</p>
									</a>
								</li>
								<li>
									<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=qa" target="_self">
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/footer_icon4.png" alt="">
										<p>온라인 상담</p>
									</a>
								</li>
							</ul>
						</div>
						<div>
							<span>상담전화</span>
							<h5 class="phone-num">031. 506. 2080</h5>
						</div>
						<div>
							<span>진료시간</span>
							<div class="info_time">
								<div>
									<span>평 일</span>
									<p>AM 09:00 ~ PM 05:30</p>
								</div>
								<div>
									<span class="point-color">화 · 수 · 목</span>
									<p class="point-color">AM 09:00 ~ PM 08:30<br>
									(야간진료)</p>
								</div>
								<div>
									<span>토 요 일</span>
									<p>AM 09:00 ~ PM 02:00</p>
								</div>
								<div>
									<span>점 심 시 간</span>
									<p>PM 12:30 ~ PM 02:00</p>
								</div>
								<div>
									<span class="point-color">저 녁 시 간</span>
									<p class="point-color">PM 05:30 ~ PM 06:30</p>
								</div>
								
								<div class="notice">
									<p>* 토요일은 점심시간 없이 진료합니다.</p>
									<p>* 공휴일 및 일요일은 휴진입니다.</p>
								</div>
							</div>
						</div>
					</li>
					
				</ul>
			</div>	
		</div>
	</section>

	<section class="section m-area">
		<div class="area4 area">
			<div class="area4-wrap">
				<ul class="col-2">
					<li>
						<div class="map_area">
							<span>찾아오시는 길</span>
							<p>경기도 시흥시 황고개로 526, 3층</p>
						</div>
						<section>
							<!-- * 카카오맵 - 지도퍼가기 -->
							<!-- 1. 지도 노드 -->
							<div id="daumRoughmapContainer1640853702262" class="root_daum_roughmap root_daum_roughmap_landing"></div>

							<!--
								2. 설치 스크립트
								* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
							-->
							<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

							<!-- 3. 실행 스크립트 -->
							<script charset="UTF-8">
								new daum.roughmap.Lander({
									"timestamp" : "1640853702262",
									"key" : "28my6",
									"mapWidth" : "640",
									"mapHeight" : "180"
								}).render();
							</script>
						</section>
						<div class="parking">
							<span>주차장</span>
							<p>치과 건물 내 지하주차장 (지하 2층)
							치과 건너편 행정복지센터 주차장</p>
						</div>

					</li>
					
				</ul>
			</div>	
		</div>
	</section>

	<section class="section m-area m-footer">
		<div class="area4 area">
			<div class="area4-wrap">
				<ul class="col-2">
					<li>
						

						<div class="naver">
							<a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')">
								<img src="<? echo G5_THEME_IMG_URL; ?>/main/footer_icon5.png" alt="">
							</a>
							<p>빠르고 간편한<br>
							<b><span class="n_span">네이버</span> 진료예약</b><br>
							<strong>네이버 예약서비스</strong>를 통해서<br>	 빠르고 간편한 진료예약이 가능합니다.</p>
						</div>
					</li>
					
				</ul>
			</div>	
		</div>
		<footer id="footer">
			<div class="inner">
				<ul>
					<li><a href="<?php echo G5_URL ?>/about.php" target="_self">하온치과의</a></li>
					<li>|</li>
					<li><a href="<?php echo G5_URL ?>/special01.php" target="_self">특별함을 만나보세요</a></li>
					<li>|</li>
					<li><a href="<?php echo G5_URL ?>/imp_special.php" target="_self">HAON: 임플란트</a></li>
					<li>|</li>
					<li><a href="<?php echo G5_URL ?>/ortho_special.php" target="_self">HAON: 치아교정</a></li>
					<li>|</li>
					<li><a href="<?php echo G5_URL ?>/basic_special.php" target="_self">HAON: 통합진료</a></li>
					<li>|</li>
					<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice" target="_self">커뮤니티</a></li>
				</ul>	
				<img src="<? echo G5_THEME_IMG_URL; ?>/footer_logo.png" alt="">
				<p>의료기관명칭 : 하온치과의원 ㅣ 대표자명 : 허용호 ㅣ 사업자등록번호 : 835-92-01768<br />
					주소 : 경기도 시흥시 황고개로 526, 3층 ㅣ 대표번호 : 031-506-2080 ㅣ FAX : 031-507-2080</p>
				<p class="copyright">Copyright ⓒ 2022 하온치과의원. 
				Design by 혜윰앤컴퍼니 All rights reserved</p>
			</div>
		 </footer>

	</section>

	<section class="section footerArea pc-area">
		<div class="area area5">
			<footer id="footer">
			 	<div class="inner">
					<ul>
						<li><a href="<?php echo G5_URL ?>/about.php" target="_self">하온치과의</a></li>
						<li>|</li>
						<li><a href="<?php echo G5_URL ?>/special01.php" target="_self">특별함을 만나보세요</a></li>
						<li>|</li>
						<li><a href="<?php echo G5_URL ?>/imp_special.php" target="_self">HAON: 임플란트</a></li>
						<li>|</li>
						<li><a href="<?php echo G5_URL ?>/ortho_special.php" target="_self">HAON: 치아교정</a></li>
						<li>|</li>
						<li><a href="<?php echo G5_URL ?>/basic_special.php" target="_self">HAON: 통합진료</a></li>
						<li>|</li>
						<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice" target="_self">커뮤니티</a></li>
					</ul>	
			 		<img src="<? echo G5_THEME_IMG_URL; ?>/footer_logo.png" alt="">
			 		<p>의료기관명칭 : 하온치과의원 ㅣ 대표자명 : 허용호 ㅣ 사업자등록번호 : 835-92-01768<br />
			 			주소 : 경기도 시흥시 황고개로 526, 3층 ㅣ 대표번호 : 031-506-2080 ㅣ FAX : 031-507-2080</p>
			 		<p class="copyright">Copyright ⓒ 2022 하온치과의원. 
			 		Design by 혜윰앤컴퍼니 All rights reserved</p>
			 	</div>
			 </footer>
		</div>
	</section>
</div>

<div class="sns_click kakao_click">
	<a href="http://pf.kakao.com/_IxoRPb" target="_blank"><img src="<? echo G5_THEME_IMG_URL; ?>/main/kakao_logo.png" alt="카카오톡상담"> <span>카 카 오 톡<br class="m_br">상담 click!</span></a>
</div>
</main>

<style>

/* 카카오톡 버튼 */
.sns_click{position: fixed;width:228px;left: 20px;bottom: 20px;box-shadow:1px 1px 10px rgba(0,0,0,0.3);-webkit-border-radius: 50px;-moz-border-radius:50px ;border-radius:50px ;    border: 3px solid #3b1f1c; background: #3b1f1c;z-index: 100;}
.sns_click img{float: left;}
.sns_click span{display: block;float: left;margin-left: 10px;font-size: 20px;color: #fff;font-family: "Noto Sans KR";line-height: 1.1;text-align: center;}
.sns_click a{overflow: hidden;display: block;padding: 20px;}
.sns_click:hover{transition:all 0.5s ease-out;}
.sns_click:hover span{color: yellow;}

.kakao_click{left: 20px;bottom: 20px;}
.naver_click{left: 20px;bottom: 115px;border-color: #3AAB36;background: #3AAB36;}

.mfb-component--bl.mfb-zoomin .mfb-component__list li:nth-child(5), .mfb-component--br.mfb-zoomin .mfb-component__list li:nth-child(5){display: none;}

@media screen and (max-width: 425px) {
	.mfb-component--bl.mfb-zoomin .mfb-component__list li:nth-child(5), .mfb-component--br.mfb-zoomin .mfb-component__list li:nth-child(5){display: block;}
	.sns_click{display: none;}
}
</style>


<script>
    setTimeout(function(){
        $(".loading").fadeOut();
    }, 1000);
</script>

<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>



	const swiper = new Swiper('.swiper-container', {
		// Default parameters
		slidesPerView: 1,
		spaceBetween: 0,
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
		}
	});

	$(document).ready(function() {
		$('#fullpage').fullpage({
			//options here
			autoScrolling:true,
			scrollHorizontally: true,
			navigation: true,
			navigationPosition: 'right',
			showActiveTooltop: true,
			sectionSelector: '.section',
			lazyLoading: true,
			slideSelector: '.slide',
			slidesNavigation: true,
			dragAndMove: true,

				 onLeave: function(){
				jQuery('.section [data-aos]').removeClass("aos-animate");
			},
			onSlideLeave: function(){
				jQuery('.slide [data-aos]').removeClass("aos-animate");
			},
			afterSlideLoad: function(){
				jQuery('.slide.active [data-aos]').addClass("aos-animate");
			},
			afterLoad: function(){
				jQuery('.section.active [data-aos]').addClass("aos-animate");
			   jQuery('.fp-table.active .aos-init').addClass('aos-animate');
			},
			afterResize: function(){
				// var pluginContainer = this;
				// alert("The sections have finished resizing");
				jQuery('*').addClass("aos-animate")
			}
			
			
			
			
		});
	
		//methods
		//$.fn.fullpage.setAllowScrolling(false);


	});

	
	
	AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
	window.addEventListener('load', AOS.refresh);

	function AOS_MOBILE() {
	  if (matchMedia("screen and (max-width: 768px)").matches) {

		$('.area2-wrap h5').attr('data-aos', 'fade-down');

	  }
	} // 768px 이하일 때 left_con 의 애니메이션 효과를 fade-down 으로 바꾼다.

	
	$('.area3-sub li ul li').mouseover(function(){
		$(this).children('div.area3-txtbox').css({'display':'none'});
		$(this).children('div.area3-hoverbox').css({'display':'block'});
		$(this).addClass('area3-sub-hover');
	});

	$('.area3-sub li ul li').mouseout(function(){
		$(this).children('div.area3-txtbox').css({'display':'block'});
		$(this).children('div.area3-hoverbox').css({'display':'none'});
		$(this).removeClass('area3-sub-hover');
	});

		var windowWidth = $( window ).width();
		if(windowWidth < 769) {
			$('.pc-area').remove();
		} else {
			$('.m-area').remove();
		}

	
	/*$('a').click(function(){
		alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.');
		return false;
	});*/

	
</script>

<script>
	$(function(){
		$('.special01').click(function(){
			location.href = "<?php echo G5_URL ?>/special01.php"
		});
		$('.special02').click(function(){
			location.href = "<?php echo G5_URL ?>/special02.php"
		});
		$('.special03').click(function(){
			location.href = "<?php echo G5_URL ?>/special03.php"
		});
	})
</script>

<script>

$('.area3-sub01 section').addClass('vis-hidden');


$('.slide-section').mouseleave(function(){
	$('header').addClass('hd_color');
	
});

$('.slide-section').mouseenter(function(){
	$('header').removeClass('hd_color');
	
});

$('.area3-sub > li:first-child').mouseover(function(){
	$(this).css({'color' : '#fff'});
	$('.area3-sub > li:first-child section').removeClass('vis-hidden');
	$('.area3-sub > li:first-child section').addClass('vis-normal');
	$(this).removeClass('area3-sub01');

});

$('.area3-sub > li:first-child').mouseleave(function(){
	$(this).css({'color' : '#111'});
	$('.area3-sub > li:first-child section').removeClass('vis-normal');
	$('.area3-sub > li:first-child section').addClass('vis-hidden');
	$(this).addClass('area3-sub01');

});

</script>


<style>
@media screen and (max-width:425px){
	.slide-img{max-width: 240px !important; margin: 0 auto;}
}
</style>

<script>
	/*$('.root_daum_roughmap').click(function(){
		alert('ok!');
		fullpage_api.setAllowScrolling(false);
	});*/

	 $(".root_daum_roughmap").on("touchstart", function(e){
		 e.originalEvent.touches[0].pageX
		e.originalEvent.touches[0].pageY
		 
        $.fn.fullpage.setAllowScrolling(false);
    });

    $(".root_daum_roughmap").on("touchend", function(e){
		e.originalEvent.changedTouches[0].pageX
		e.originalEvent.changedTouches[0].pageY
		 
        $.fn.fullpage.setAllowScrolling(true);
    });


</script>

<script>

</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>	