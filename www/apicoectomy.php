<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg apicoectomy-bg">
	<p>MISOJIN DENTAL CLINIC</p>
	<h2>치근단 절제술</h2>
</div>
<?php
	include_once(G5_PATH.'/gum_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('치근단 절제술');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>MISOJIN DENTAL CLINIC</p>
			<h3>치근단 절제술</h3>
		</div>
		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/apicoectomy_01.jpg" alt="">
			</li>
			<li>
				<h5 class="point-color">치근단 절제술이란?</h5>
				<p>치근단 절제술은 자연치아 살리기의 마지막 단계입니다.
				자연치아는 심미성, 저작능력이 어떠한 대체 치아보다 뛰어납니다.
				치근단 절제술을 통해 자연치아를 보존할 수 있으므로 
				감동플러스치과는 포기하지 않습니다.</p>
			</li>
		</ul>
	</div>
</section>
<section class="content">
	<div class="inner">
		<h4 class="middle-title">치근단 절제술 치료 과정</h4>
		<ul class="col-4 circle-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/apicoectomy_02.jpg" alt="">
				<h5>STEP01</h5>
				<p>치아의 뿌리 끝 염증조직을
				제거하기 위해 잇몸쪽으로
				치아뿌리에 접근합니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/apicoectomy_03.jpg" alt="">
				<h5>STEP02</h5>
				<p>뿌리 끝 부분에
				낭종이나 농양 또는
				육아종을 확인합니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/apicoectomy_04.jpg" alt="">
				<h5>STEP03</h5>
				<p>염증 조직을 제거한 후,
				오염된 치아 뿌리 끝을
				삭제합니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/apicoectomy_05.jpg" alt="">
				<h5>STEP04</h5>
				<p>뿌리 끝에 MTA
				충전 후 마무리 해줍니다.</p>
			</li>
		</ul>
	</div>
</section>
<section class="content apicoectomy">
	<div class="inner">
		<h4 class="middle-title">치근단 절제술 치료 케이스</h4>
		<ul class="col-2">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/apicoectomy_06.jpg" alt="">
				<h5>BEFORE</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/apicoectomy_07.jpg" alt="">
				<h5>AFTER</h5>
			</li>
		</ul>
	</div>
</section>
<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>