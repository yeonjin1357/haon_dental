<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg basic-bg">
	<p>HAON DENTAL CLINIC</p>
	<h2><span>HAON : </span>통합진료</h2>
	<hr>
</div>
<div class="nav-menu pc-nav">
	<ul>
		<li><a href="<?php echo G5_URL ?>/basic_special.php" target="_self">통합진료의 특별함</a></li>
		<li><a href="<?php echo G5_URL ?>/root_canal.php" target="_self">MTA 신경치료</a></li>
		<li><a href="<?php echo G5_URL ?>/caries.php" target="_self">충치치료</a></li>
		<li><a href="<?php echo G5_URL ?>/gum_therapy.php" target="_self">잇몸치료</a></li>
		<li><a href="<?php echo G5_URL ?>/wisdom.php" target="_self">사랑니 발치</a></li>
		<li class="selected"><a href="<?php echo G5_URL ?>/jaw_joint.php" target="_self">턱관절 치료</a></li>
		<li><a href="<?php echo G5_URL ?>/prosthetic.php" target="_self">보철치료</a></li>
		<li><a href="<?php echo G5_URL ?>/children.php" target="_self">소아진료</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/basic_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('턱관절 치료');
		});
	</script>
</ul>
<section class="content special-title pb2 joint-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>턱관절 치료</span></h3>
			<span class="slash"></span>
			<h4 >환자의 상태를 고려해 턱의 통증을 치료하고,<br>
			턱관절 건강을 지켜드립니다.</h4>
		</div>
	</div>
</section>

<section class="content pb5">
	<div class="inner">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/joint_02.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5><span class="point-color">턱관절 장애</span>란?</h5>
				<p>귀 바로 옆에 위치한 턱관절은 두개골의 측두골과
				하악골이 만나는 관절로 관절 내 이상과 저작근의 이상으로
				턱관절 장애가 발생합니다.

				<span class="point-color">* 기간별 정기검진 – 3개월, 6개월, 1년 단위로 정기검진</span></p>
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner tac" style="max-width: 1000px;">
		<div class="middle-title">
			<h4>턱관절 자가진단</h4>
		</div>
		<ul class="strengths">
			<li>
				<p>턱관절 부위에 통증이 있다.</p>
			</li>
			<li>
				<p>입을 크게 벌리지 못한다.</p>
			</li>
			<li>
				<p>턱관절을 움직일 때 소리가 난다.</p>
			</li>
			<li>
				<p>턱관절 질환으로 인해 두통 목 어깨의 통증을 느낀다.</p>
			</li>
			<li>
				<p>평소 씹는 힘이 강하고 이를 악무는 습관이 있다.</p>
			</li>
			<li>
				<p>잘 때 이갈이를 한다.</p>
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="middle-title">
			<h4>턱관절 치료방법</h4>
		</div>
		<ul class="col-4 line-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/joint_03.png" alt="">
				<h5>STEP 01
				<span class="point-color">내원 접수</span></h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/joint_04.png" alt="">
				<h5>STEP 02
				<span class="point-color">정확한 진단</span></h5>
				<p>파노라마 X-RAY, 악관절 CT촬영<br>
				하악장애 분석검사</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/joint_05.png" alt="">
				<h5>STEP 03
				<span class="point-color">진단 및 상담</span></h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/joint_06.png" alt="">
				<h5>STEP 04
				<span class="point-color">치료 진행</span></h5>
				<p>습관개선, 물리치료<br>
				스플린트, 치아교합 개선</p>
			</li>
		</ul>
	</div>
</section>


<style>
	.line-list li img{border: none;}

	@media screen and (max-width:769px) {
	}
	
	@media screen and (max-width: 425px){

	}	
</style>

<?php
include_once(G5_THEME_PATH.'/sub_footer.php');
?>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>