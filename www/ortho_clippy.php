<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg ortho-bg">
	<p>BARUN PLANT DENTAL CLINIC</p>
	<h2>클리피씨교정</h2>
</div>
<?php
	include_once(G5_PATH.'/ortho_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('클리피씨교정');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>BARUN PLANT DENTAL CLINIC</p>
			<h3>클리피씨교정</h3>
		</div>
		<ul class="trans-clippy">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_clippy_01.jpg" alt=""></li>
			<li>
				<ul>
					<li>
						<p>세라믹 장치의
						심미성</p>
					</li>
					<li>
						<p>자가결찰 장치의
						뛰어난 성능</p>
					</li>
				</ul>
				<p>‘세라믹 장치의 심미성’과 '자가 결찰 장치의 뛰어난 성능'을 결합하여 <br />
				최근 각광을 받고 있는 장치입니다. <br />
				세라믹에 로듐 코팅이 되어있는 클립으로 구성되어 심미적입니다. <br />
				마찰력이 감소되어 치아 이동에 유리하며, 브라켓에 의한 불편감이 가장 적습니다.</p>
			</li>
		</ul>
	</div>
</section>
<section class="content">
	<div class="inner">
		<h4 class="middle-title">클리피씨교정 장점</h4>
		<ul class="col-4">
			<li class="circle-icon">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_clippy_icon_01.png" alt="">
					<p>치료기간 단축</p>
				</div>
			</li>
			<li class="circle-icon">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_clippy_icon_02.png" alt="">
					<p>뛰어난 심미성</p>
				</div>
			</li>
			<li class="circle-icon">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_clippy_icon_03.png" alt="">
					<p>적은 통증</p>
				</div>
			</li>
			<li class="circle-icon">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_clippy_icon_04.png" alt="">
					<p>편리한 구강관리</p>
				</div>
			</li>
		</ul>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>