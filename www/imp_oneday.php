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
		<li class="selected"><a href="<?php echo G5_URL ?>/imp_oneday.php" target="_self">발치즉시 임플란트</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_highlevel.php" target="_self">뼈이식 임플란트</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_osstem.php" target="_self">오스템 임플란트</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/implant_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('발치즉시 임플란트');
		});
	</script>
</ul>
<section class="content special-title pb2 imp-oneday-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>발치즉시 임플란트</span></h3>
			<span class="slash"></span>
			<h4 >최소 내원 횟수와<br>
			꼼꼼한 관리의 콜라보레이션</h4>
		</div>
		
	</div>
</section>

<section class="content">
	<div class="inner">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_oneday_02.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5>발치 후 즉시 식립을 도와드리는
				<span class="point-color">효율적인 임플란트</span> 완성!</h5>
				<p>발치를 하고 난 뒤 임플란트를 하기 위해서는
				발치한 부위가 아물 때 까지 약 3개월이 필요합니다.

				하지만 발치즉시 임플란트는 발치 후 당일날 임플란트를 식립함으로써
				잇몸이 아물 때 까지 기다리는 기간 필요 없이
				빠른 치료가 가능한 방법입니다.
				하온치과는 내원 횟수도 효율적으로, 체크도 꼼꼼하게 도와드립니다.</p>
			</li>
		</ul>
	</div>
</section>

<section class="content pc-area pt5">
	<div class="inner">
		<ul class="basic-box">		
			<li>
				<h5>발치즉시 임플란트란?</h5>
				<h6 class="point-color mb3">내원 당일 완성되는 임플란트의 마법
				진단부터 식립까지 즉시 이루어집니다!</h6>
				<p>바쁜 현대인을 위하여 내원 횟수도 효율적으로!
				꼭 필요한 체크도 빠짐 없이 꼼꼼하게 도와드립니다.
				발치즉시 임플란트는 기다리는 기간을 최소로 하여
				치유력이 가장 좋은 시기에 치료를 한다는 큰 장점이 있습니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_oneday_03.png" alt="">
			</li>
		</ul>
	</div>
</section>

<section class="content m-area">
	<div class="inner">
		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_oneday_03.png" alt="" style="margin-right: 12%;">
			</li>
			<li>
				<h5>발치즉시 임플란트란?</h5>
				<h6 class="point-color mb3">내원 당일 완성되는 임플란트의 마법
				진단부터 식립까지 즉시 이루어집니다!</h6>
				<p>바쁜 현대인을 위하여 내원 횟수도 효율적으로!
				꼭 필요한 체크도 빠짐 없이 꼼꼼하게 도와드립니다.
				발치즉시 임플란트는 기다리는 기간을 최소로 하여
				치유력이 가장 좋은 시기에 치료를 한다는 큰 장점이 있습니다.</p>
			</li>
			
		</ul>
	</div>
</section>

<section class="content imp-bg4 bg-gray op-circle">
	<div class="inner tac">
		<span>HAON DENTAL CLINIC</span>
		<h5><b class="fw500">발치즉시 임플란트</b>의 장점</h5>
		<ul class="col-4">
			<li class="circle-box">
				<p>치료기간 단축</p>
			</li>
			<li class="circle-box">
				<p>심미성 우수</p>
			</li>
			<li class="circle-box">
				<p>잇몸 뼈 유지</p>
			</li>
			<li class="circle-box">
				<p>통증 최소화</p>
			</li>
		</ul>
	</div>
</section>

<?php
include_once(G5_THEME_PATH.'/sub_footer.php');
?>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>