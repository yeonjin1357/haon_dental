<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg imp-bg">
	<p>HAON DENTAL CLINIC</p>
	<h2><span>HAON : </span>임플란트</h2>
	<hr>
</div>
<div class="nav-menu pc-nav">
	<ul>
		<li><a href="<?php echo G5_URL ?>/imp_special.php" target="_self">임플란트의 특별함</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_custom.php" target="_self">맞춤 임플란트</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_all.php" target="_self">전악 임플란트</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_oneday.php" target="_self">발치즉시 임플란트</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_highlevel.php" target="_self">뼈이식 임플란트</a></li>
		<li class="selected"><a href="<?php echo G5_URL ?>/imp_osstem.php" target="_self">오스템 임플란트</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/implant_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('오스템 임플란트');
		});
	</script>
</ul>
<section class="content special-title pb2 imp-osstem-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>오스템 임플란트</span></h3>
			<span class="slash"></span>
			<h4 >국산 임플란트 중<br>
			가장 오래된 임상기간과 결과를 지닌 오스템</h4>
		</div>
		
	</div>
</section>

<section class="content">
	<div class="inner">
		<ul class="basic-box" >
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_osstem_02.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5>잇몸이 약해서 임플란트가 어려울 때,
				<span class="point-color">임플란트의 성공률</span>을 높여드립니다.</h5>
				<p>국산 임플란트 중 가장 오래된 임상기간과
				임상결과를 가지고 있어 인지도가 가장 높은 제품입니다.
				좋은 품질과 시술의 편리성을 바탕으로 세계에 수출하는
				세계적인 오스템 임플란트입니다.
				
				</p>
				<h6>“ 하온치과는 <span class="point-color">오스템 100% 정품</span>만을 사용합니다. ”</h6>
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner pt3 tac">
		<div class="middle-title">
			<h4>오스템 정품 임플란트</h4>
		</div>
		<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_osstem_03.jpg" alt="">
		<div class="middle-title">
			<h6 class="point-color mt5">오스템 임플란트는 안전합니다.</h6>
			<p>식약청 기준 및 시험방법 뿐 아니라
			국제적인 연구 수준의 다양한 평가 방법을 개발하고 발전시켜
			최고의 검증 기술을 확보한 임플란트입니다.</p>
		</div>
	</div>
</section>

<section class="content imp-bg6 bg-gray op-circle">
	<div class="inner tac">
		<span>HAON DENTAL CLINIC</span>
		<h5><b class="fw500">오스템 임플란트</b>의 특별함</h5>
		<ul class="col-4">
			<li class="circle-box">
				<p>아시아 태평앙 1위
				50여개국에서 사용</p>
			</li>
			<li class="circle-box">
				<p>10년 이상의
				장기간 임상기록 보유</p>
			</li>
			<li class="circle-box">
				<p>임플란트 성공률
				98.8%</p>
			</li>
			<li class="circle-box">
				<p>표면기술,
				임플란트 디자인,
				정밀도 높음</p>
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="middle-title">
			<h4>타 임플란트와 표면 젖음성 비교</h4>
		</div>
		<ul class="col-2 line-list before-after" style="max-width: 800px; margin: 0 auto;">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_osstem_04.png" alt="">
				<h5>기존표면</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_osstem_05.png" alt="">
				<h5 style="color: #ff7800;">TSIII CA</h5>
			</li>
		</ul>
		<div class="middle-title">
			<p>오스템 칼슘 임플란트는 티타늄 고유의 표면 활성도가
			살아있는 상태의 SA 임플란트를 칼슘 수용액에 보관함으로써
			<b class="point-color fw500">친수성을 향상시키고 혈액젖음성을 극대화 시킨 임플란트</b>입니다.</p>
		</div>
	</div>
</section>

<section class="content imp-bg7 bg-gray">
	<div class="inner tac">
		<div class="middle-title">
			<h4 style="color: #ff7800;">오스템 정품 보증서 제공</h5>
			<p class="mt0" style="color: #fff;">하온치과는 오스템 100% 정품을 사용합니다.</p>
		</div>
		<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_osstem_06.png" alt="">
	</div>
</section>

<?php
include_once(G5_THEME_PATH.'/sub_footer.php');
?>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>