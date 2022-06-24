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
		<li><a href="<?php echo G5_URL ?>/special01.php" target="_self">안심케어 수술실</a></li>
		<li><a href="<?php echo G5_URL ?>/special02.php" target="_self">감염 관리 시스템</a></li>
		<li class="selected"><a href="<?php echo G5_URL ?>/special03.php" target="_self">믿음 더한 보증 시스템</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/special_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('믿음 더한 보증 시스템');
		});
	</script>
</ul>

<section class="content special03-bg pb2 special-title">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>믿음 더한 보증 시스템</span></h3>
			<span class="slash"></span>
			<h4 >치료가 끝난 뒤에도 이어지는 인연<br>
			당신의 치아, 보증시스템으로 한번 더 지켜드립니다.</h4>
		</div>
	</div>
</section>

<section class="content bg-gray special-bg1">
	<div class="inner tac">
		<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special03_03.png" alt="">
		<div class="middle-title mb0">
			<p class="fz24">하온치과는 오스템 100% 정품을 사용합니다.
			오스템 임플란트 식립 시 <b>정품 인증서</b>를 발급해드립니다.</p>
		</div>
	</div>
</section>

<section class="content mt0 pt0">
	<ul class="basic-box">
		<li class="bg-gray special-bg2 tac mt0">
			<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special03_05.png" alt="">
			<div class="middle-title mb0" style="color: #fff;">
				<p class="fz24">하온치과는 디오 100% 정품을 사용합니다.
				디오 임플란트 식립 시 <span class="fw500">정품 인증서</span>를 발급해드립니다.</p>
			</div>
		</li>
		<li>
			<h5 class="point-color">치아교정 끝난 뒤 사후관리도
			치료 과정 속에 포함됩니다.</h5>

			<b>교정 끝</b>  ≠  <b>치료 끝</b><br>

			<h5 class="underbar">교정 끝! 사후관리 시작!</h5>

			<p>하온치과의 교정이 끝나도 치료는 계속됩니다.
			교정이후 월/년 단위로 배열 체크까지 도와드립니다.
			<span class="point-color fw500">치료 과정 속에 보증이 포함되어 믿을을 더해드립니다.</span></p>
		</li>
	</ul>
</section>

<!-- <section class="content">
	<div class="inner tac">
		<div class="caution tac" style="background-color: #1f92cd; color: #fff;">
			<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special03_02.png" alt="">
			<div class="middle-title mb0">
				<p><b>임플란트를 오래 쓰기 위해서는 시술 후의 관리가 매우 중요</b>합니다.
				하온치과는 비보험 치료를 받으신 분들에게 <b>진료보증제도를 시행</b>하고 있습니다.
				<b>단계적인 진료보증으로 환자분들의 경제적 부담</b>을 덜어드립니다.</p>
			</div>
		</div>
		
	</div>
</section>

<section class="content bg-gray special03-area">
	<div class="inner">
		<ul class="special03-area1">
			<li>
				<h5>임플란트 뿌리</h5>
				<p>보증내용<br>
				(상세내용)</p>
			</li>
			<li>
				<h5>임플란트 보철</h5>
				<p>보증내용<br>
				(상세내용)</p>
			</li>
		</ul>
		<ul class="special03-area2">
			<li>
				<h5>치아교정</h5>
				<p>보증내용<br>
				(상세내용)</p>
			</li>
			<li>
				<h5>환자 의무사항</h5>
				<ul>
					<li><p>보증기간동안 6개월에 한번씩 정기검진 및 잇몸관리를 받습니다.</p></li>
					<li><p>담당 의료진의 지시를 철저히 이행하고 꾸준한 구강위생관리를 합니다.</p></li>
					<li><p>자각증상(통증, 흔들림, 잇몸질환)이 있을 경우 반드시 본원에 연락하여 즉시 관리를 받아야 합니다.</p></li>
					<li><p>이갈이, 이악물기 등 구강 악습관이 있을 시에는 지속적인 치료와 관리를 받아야 합니다.</p></li>
					<li><p>임플란트 수술의 경우 금연, 금주를 원칙으로 합니다.</p></li>
				</ul>
			</li>
			<li>
				<h5>보증 예외사항</h5>
				<ul>
					<li><p>보증 예외사항은 공정거래위원회 기준에 의거합니다.</p></li>
					<li><p>진료비 지급이 지체되어 치료가 중단된 경우</p></li>
					<li><p>정기 검진 시 미내원하거나 1개월 이상 지체된 경우</p></li>
					<li><p>자신의 병력을 제대로 고지하지 않은 경우</p></li>
					<li><p>다른 외상이나 질병에 의해 영향을 받은 경우</p></li>
					<li><p>환자의 부주의로 고정체, 나사 및 보철물이 탈락된 경우</p></li>
					<li><p>본인과실 (사고, 구타, 외상 등)로 인한 문제 발생 시 혹은 기타 본인과실 유무를 구분할 수 없는 경우<br>
					<b>유상 혹은 무상으로 처리합니다.</b></p></li>
				</ul>
			</li>
		</ul>

		<p>* 의무사항을 이행하지 않을 경우 진료 보증을 받을 수 없으므로<br>
		정기검진 약속과 담당 의사의 지시사항을 지켜주시기 바랍니다.<br>
		(치료 보증 시점은 치료가 끝난 날부터입니다.)</p>
		
		
	</div>
</section> -->

<style>
.basic-box li b{width: 150px; background-color: #eee; color: #333;}
.underbar{display: inline-block;background-color: #d2e9f5;padding: 0 5px;background-image: linear-gradient(to bottom, #fff 50%, #d2e9f5 50%);}
</style>


<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>