<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg special-bg">
	<p>HAON DENTAL CLINIC</p>
	<h2>특별함<span>을 만나보세요!</span></h2>
	<hr>
</div>
<div class="nav-menu pc-nav">
	<ul>
		<li class="selected"><a href="<?php echo G5_URL ?>/special01.php" target="_self">안심케어 수술실</a></li>
		<li><a href="<?php echo G5_URL ?>/special02.php" target="_self">감염 관리 시스템</a></li>
		<li><a href="<?php echo G5_URL ?>/special03.php" target="_self">믿음 더한 보증 시스템</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/special_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('안심케어 수술실');
		});
	</script>
</ul>

<section class="content special01-bg pb2 special-title">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>안심케어 수술실</span></h3>
			<span class="slash"></span>
			<h4>환자 분들이 안심하실 수 있도록<br>
			안심케어 수술실을 운영합니다.</h4>
		</div>
		
	</div>
</section>

<section class="content">
	<div class="inner">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_01.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5><span class="point-color">안심케어 수술실</span>이란?</h5>
				<p>현재 화두되고있는 대리수술에 관련하여 
				환자분들이 안심하실수 있도록 하는 특별한 수술실 입니다.

				보호자에게 한정적으로 공개되서 프라이버시 침해 걱정까지
				완벽하게 덜어드리는 <span class="fw500 point-color">하온치과만의 특별한 수술실</span>입니다.</h6>
			</li>
		</ul>
	</div>
</section>

<section class="content special01_ul pc-area">
	<div class="inner">
		<ul class="basic-box">
			<li>
				<h5>보이는 수술실이라서
				믿음이 생겼어요!</h5>
				<p>수술 도중에 의료진이 바뀌는지 불안하신가요?
				또는, 수술에 문제 없는지 궁금하신가요?

				수술을 받는 환자도, 수술을 지켜보며, 
				대기하고 있는 보호자도 모두 안심할 수 있도록
				언제나 믿을 수 있는 수술 환경을 만들기 위해 최선을 다하고 있습니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_02.jpg" alt="">
			</li>
		</ul>

		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_03.jpg" alt="">
			</li>
			<li>
				<h5>환자의 보호자라면
				확인할 수 있어요!</h5>
				<p>수술실 CCTV 공개하면 따라오는 환자의 프라이버시 보호!
				이 부분을 고려하여 하온치과는 환자의 보호자분에게만 특정하여 공개합니다.
				환자분의 동의가 있는 보호자분만 수술실장면을 확인하여 안심할 수 있습니다.</p>
			</li>
		</ul>

		<ul class="basic-box">
			<li>
				<h5>수술 중 의료진이
				바뀌지 않아서 안심이에요!</h5>
				<p>함께 치료계획을 세운 의료진이 아닌
				다른 사람이 수술을 진행할까봐 걱정되시나요?
				걱정마세요. 하온치과에서는 수술 중 의료진이 바뀌지 않습니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_04.jpg" alt="">
			</li>
		</ul>
	</div>
</section>

<section class="content m-area">
	<div class="inner">
		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_02.jpg" alt="">
			</li>
			<li>
				<h5>보이는 수술실이라서
				믿음이 생겼어요!</h5>
				<p>수술 도중에 의료진이 바뀌는지 불안하신가요?
				또는, 수술에 문제 없는지 궁금하신가요?

				수술을 받는 환자도, 수술을 지켜보며, 
				대기하고 있는 보호자도 모두 안심할 수 있도록
				언제나 믿을 수 있는 수술 환경을 만들기 위해 최선을 다하고 있습니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_03.jpg" alt="">
			</li>
			<li>
				<h5>환자의 보호자라면
				확인할 수 있어요!</h5>
				<p>수술실 CCTV 공개하면 따라오는 환자의 프라이버시 보호!
				이 부분을 고려하여 하온치과는 환자의 보호자분에게만 특정하여 공개합니다.
				환자분의 동의가 있는 보호자분만 수술실장면을 확인하여 안심할 수 있습니다.</p>
			</li>
		</ul>

		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_04.jpg" alt="">
			</li>
			<li>
				<h5>수술 중 의료진이
				바뀌지 않아서 안심이에요!</h5>
				<p>함께 치료계획을 세운 의료진이 아닌
				다른 사람이 수술을 진행할까봐 걱정되시나요?
				걱정마세요. 하온치과에서는 수술 중 의료진이 바뀌지 않습니다.</p>
			</li>
			
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner tac" style="max-width: 1400px; margin: 0 auto;">
		<h4 class="middle-title pt3 pb3">안심케어 수술실 이용방법</h4>
		<ul class="col-4 special01-circle">
			<li>
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_05.jpg" alt="">
				</div>
				<h5 class="point-color">STEP 01</h5>
				<p>수술 당일<br>
				보호자와 내원</p>	
			</li>
			<li>
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_06.jpg" alt="">
				</div>
				<h5 class="point-color">STEP 02</h5>
				<p>데스크에<br>
				안심케어 수술실 이용 접수</p>
			</li>
			<li>
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_07.jpg" alt="">
				</div>
				<h5 class="point-color">STEP 03</h5>
				<p>이용절차 진행<br>
				<span style="color: #888;">* 환자 동의 필수</span></p>
			</li>
			<li>
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_08.jpg" alt="">
				</div>
				<h5 class="point-color">STEP 04</h5>
				<p>수술장면 확인<br>
				<span style="color: #888;">* 상담실 이용</span></p>	
			</li>
		</ul>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>