<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg ortho-bg">
	<p>HAON DENTAL CLINIC</p>
	<h2><span>HAON : </span>치아교정</h2>
	<hr>
</div>
<div class="nav-menu pc-nav">
	<ul>
		<li><a href="<?php echo G5_URL ?>/ortho_special.php" target="_self">교정의 특별함</a></li>
		<li><a href="<?php echo G5_URL ?>/ortho_age.php" target="_self">연령 별 치아교정</a></li>
		<li><a href="<?php echo G5_URL ?>/ortho_braces.php" target="_self">장치 별 치아교정</a></li>
		<li class="selected"><a href="<?php echo G5_URL ?>/ortho_type.php" target="_self">증상 별 치아교정</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/ortho_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('증상 별 치아교정');
		});
	</script>
</ul>
<section class="content special-title pb2 ortho-type-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>증상 별 치아교정</span></h3>
			<span class="slash"></span>
			<h4 >내 증상은 어떻게 교정해야할까?<br>
			하온치과에서 증상 별 치료계획을 보여드립니다.</h4>
		</div>
	</div>
</section>

<section class="content">
	<div class="inner tac">
		<ul class="col-2 before-after" style="max-width: 1000px; margin: 0 auto;">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_02.png" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_03.png" alt="">
			</li>
		</ul>
		<div class="middle-title mt5">
			<h4>저는 돌출입이었어요!</h4>
			<p>돌출입 교정은 발치 없이 기존의 어금니 교합은 유지하면서
			교정이 필요한 앞니만 장치를 부착하여 교정하는 방식입니다.
			짧은 기간안에 원하는 결과를 얻을 수 있어 만족도가 높은 치료입니다.</p>
		</div>
		<ul class="hashtag">
			<li>#슬림한 턱선 완성</li>
			<li>#코가 높아보이는 효과</li>
			<li>#뚜렷한 입술라인</li>
		</ul>
	</div>
</section>

<section class="content bg-gray">
	<div class="inner tac">
		<ul class="col-2 before-after" style="max-width: 1000px; margin: 0 auto;">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_04.png" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_05.png" alt="">
			</li>
		</ul>
		<div class="middle-title mt5">
			<h4>저는 덧니었어요!</h4>
			<p>덧니는 치아가 나올 때 턱뼈가 작거나 치아 사이의 공간이 부족할 때
			치아 배열에서 벗어난 곳에 나는 치아를 말합니다.
			특정 치아 뿐 아니라 여러 치아가 전체적으로
			조금씩 삐뚠 거도 일종의 덧니라고 볼 수 있습니다.</p>
		</div>
		<ul class="hashtag">
			<li>#호감형 인상 완성</li>
			<li>#충치 / 잇몸 질환 예방</li>
			<li>#자신감 상승</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner tac">
		<ul class="col-2 before-after" style="max-width: 1000px; margin: 0 auto;">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_06.png" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_07.png" alt="">
			</li>
		</ul>
		<div class="middle-title mt5">
			<h4>저는 주걱턱이었어요!</h4>
			<p>주걱턱은 아래턱이 위턱보다 앞으로 나온 경우를 말합니다.
			교합이 맞물리지 않아 음식을 베어먹기 힘들고 발음에 어려움이 있으며
			비대칭, 턱관절 통증 및 장애를 동반하기도 합니다. </p>
		</div>
		<ul class="hashtag">
			<li>#얼굴축소 효과</li>
			<li>#저작기능 완화</li>
			<li>#부정확한 발음 개선</li>
			<li>#구강호흡증상 완화</li>
		</ul>
	</div>
</section>

<section class="content bg-gray">
	<div class="inner tac">
		<ul class="col-2 before-after" style="max-width: 1000px; margin: 0 auto;">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_08.png" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_09.png" alt="">
			</li>
		</ul>
		<div class="middle-title mt5">
			<h4>저는 무턱이었어요!</h4>
			<p>아래턱이 작아서 턱 끝이 정상보다 후방에 위치하는 것을 무턱이라고 합니다.
			위턱은 정상이나 아래턱이 작은 경우와 위턱은 앞으로 나오고 아래턱이 정상인 경우는
			외모상으로는 거의 비슷해 보이기 때문에 정확한 진단과 치료 계획이 필수적입니다.</p>
		</div>
		<ul class="hashtag">
			<li>#긍정적인 턱라인 변화</li>
			<li>#정상적인 저작기능</li>
			<li>#자연스러운 입술라인</li>
			<li>#과다한 잇몸노출 개선</li>
		</ul>
	</div>
</section>

<!-- <section class="content">
	<div class="inner tac">
		<ul class="col-2 before-after" style="max-width: 1000px; margin: 0 auto;">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_10.png" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_11.png" alt="">
			</li>
		</ul>
		<div class="middle-title mt5">
			<h4>저는 비대칭이었어요!</h4>
			<p>얼굴 중심선을 기준으로 좌우 균형이 어긋나 있거나 대칭이 되지 않는 경우를 말합니다.
			일반적으로 치아 또는 얼굴 형태와 같이 삐뚤어져 있는 경우가 많으며,
			주걱턱, 무턱 증상과 동반되어 나타나는 경우가 많습니다.</p>
		</div>
		<ul class="hashtag">
			<li>#턱통증 개선</li>
			<li>#얼굴 윤곽의 변화</li>
			<li>#척추 측만증 치료</li>
			<li>#거북목 치료</li>
		</ul>
	</div>
</section> -->

<section class="content bg-gray">
	<div class="inner tac">
		<ul class="col-2 before-after" style="max-width: 1000px; margin: 0 auto;">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_12.png" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_13.png" alt="">
			</li>
		</ul>
		<div class="middle-title mt5">
			<h4>저는 앞니가 벌어졌어요!</h4>
			<p>앞니가 마음에 안들 때 부분교정으로 해결할 수 있습니다.
			부정 교합은 주로 잇몸의 공간이 부족하여 생기지만,  공간이 오히려 남아서 치아 사이가 벌어지는 경우도 있습니다.
			적절한 위치를 중심으로 치아를 모아주는 치료를 해야 합니다.</p>
		</div>
		<ul class="hashtag">
			<li>#정상적인 저작기능</li>
			<li>#부정확한 발음 개선</li>
			<li>#공간치열 개선</li>
		</ul>
	</div>
</section>


<section class="content">
	<div class="inner tac">
		<ul class="col-2 before-after" style="max-width: 1000px; margin: 0 auto;">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_14.png" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_15.png" alt="">
			</li>
		</ul>
		<div class="middle-title mt5">
			<h4>저는 개방교합이었어요!</h4>
			<p>위아래 치아를 맞물었을 때 어금니는 물리지만
			앞니는 물리지 않고 열려있는 상태가 되는 것을 개방교합이라고 합니다.

			얼굴이 긴 분에게 많이 나타나는 부정교합으로 성장기에 예방을 해주는 것이
			가장 이상적이나 심해지면 발치교정을 요하는 경우가 많습니다.</p>
		</div>
		<ul class="hashtag">
			<li>#발음개선</li>
			<li>#올바른 교합 회복</li>
			<li>#편안한 저작력</li>
			<li>#페이스라인 개선</li>
		</ul>
	</div>
</section>

<section class="content bg-gray">
	<div class="inner tac">
		<ul class="col-2 before-after" style="max-width: 1000px; margin: 0 auto;">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_16.png" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_17.png" alt="">
			</li>
		</ul>
		<div class="middle-title mt5">
			<h4>저는 과개교합이었어요!</h4>
			<p>위아래 치아를 맞물렸을 때 위 앞니가 아래 앞니를 과도하게 덮을 경우 과개교합이라고 합니다.
			미관상으로는 확연하게 드러나지 않을 수도 있지만, 아래 앞니의 마모가 나타나고 잇몸이 나빠질 수 있으니 반드시 교정치료가 필요합니다.
			사각 턱이신 분에게 많이 나타나는 부정교합 중 하나로 치료 후 턱 라인도 가름하게 하는 효과를 동시에 얻을 수 있습니다.</p>
		</div>
		<ul class="hashtag">
			<li>#잇몸 / 턱관절 건강회복</li>
			<li>#갸름해진 턱라인</li>
			<li>#편안한 저작력</li>
			<li>#발음 개선</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner tac">
		<ul class="col-2 before-after" style="max-width: 1000px; margin: 0 auto;">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_18.png" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_type_19.png" alt="">
			</li>
		</ul>
		<div class="middle-title mt5">
			<h4>저는 매복치가 있었어요!</h4>
			<p>매복치는 여러 가지 원인에 의하여 치아가 나와야 할 시기가 지나도록
			잇몸 안에서 못 나오고 있는 것을 말합니다.
			좌우 치아가 나는 시기가 6개월 이상 차이가 나면 한 번쯤 치과에서
			방사선 사진 촬영 검사를 받아볼 필요가 있습니다.</p>
		</div>
		<ul class="hashtag">
			<li>#저작기능 회복</li>
			<li>#보철치료에 비해 심미적인 효과</li>
			<li>#치열 무너짐 방지</li>
		</ul>
	</div>
</section>


<style>

	@media screen and (max-width:769px) {
		
	}
	
	@media screen and (max-width:425px) {

	}
</style>

<?php
include_once(G5_THEME_PATH.'/sub_footer.php');
?>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>