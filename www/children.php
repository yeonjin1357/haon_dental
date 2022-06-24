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
		<li><a href="<?php echo G5_URL ?>/jaw_joint.php" target="_self">턱관절 치료</a></li>
		<li><a href="<?php echo G5_URL ?>/prosthetic.php" target="_self">보철치료</a></li>
		<li class="selected"><a href="<?php echo G5_URL ?>/children.php" target="_self">소아진료</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/basic_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('소아진료');
		});
	</script>
</ul>
<section class="content special-title pb2 children-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>소아진료</span></h3>
			<span class="slash"></span>
			<h4 >치아 질환이 심해지기 전에 정기적인 내원을 통하여<br>
			자연치아의 수명을 늘려주세요.</h4>
		</div>
	</div>
</section>

<section class="content pb5">
	<div class="inner">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/children_02.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5><span class="point-color">소아진료</span>란?</h5>
				<p>소아치과는 신생아를 포함한
				소아 및 청소년기(0-17세)의 성장 발육 과정 중
				나타날 수 있는 구강 내 다양한 질환을
				조기에 발견·예방·치료하는 치료법입니다. </p>
			</li>
		</ul>
	</div>
</section>

<section class="content pt5 pc-area">
	<div class="inner">
		<div class="middle-title">
			<h4>하온치과가 제안하는 소아치료</h4>
		</div>
		<ul class="basic-box">
			<li>
				<div>
					<h5 class="point-color ls-title">STEP. 01</h5>
					<h5 class="point-color">올바른 칫솔질</h5>
					<p class="pt4">충치를 일으키는 세균과 음식물이 치아표면에 달라 붙어
					막을 형성하는데 여기서 산이 만들어지며
					치아표면의 무기질이 빠져나가게 됩니다.
					칫솔질은 바로 이 세균을 제거하는 가장 효과적인 방법이며, 
					충치를 예방하는 가장 기본적인 방법입니다.</p>
				</div>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/children_03.jpg" alt="">
			</li>
		</ul>
		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/children_04.jpg" alt="">
			</li>
			<li style="text-align: right;">
				<div>
					<h5 class="point-color ls-title">STEP. 02</h5>
					<h5 class="point-color">불소도포</h5>
					<p class="pt4">불소도포는 치아 표면에 보호막을 만들어 주어 세균의 공격으로부터
					치아를 보호해 충치를 예방해 주는 효과적인 치료법입니다. 
					약 50~60%의 충치 예방 효과가 불소도포는 충치가 발생하기 쉬운
					성장기 어린이들에게 있어 효과적인 예방치료법입니다.
					맹출하는 영구치의 표면은 아직 완성된 상태가 아니기 때문에 이 시기에
					불소를 도모해주면 치아의 표면에 잘 결합되어
					예방효과가 더욱 커지게 됩니다.</p>
				</div>
			</li>
			
		</ul>
		<ul class="basic-box">
			<li>
				<div>
					<h5 class="point-color ls-title">STEP. 03</h5>
					<h5 class="point-color">소아 충치치료</h5>
					<p class="pt4">충치가 심해지기 전에 빠른 치료를 통하여 자연 치아의 수명을 늘려주세요.
					치아의 가장 바깥에 위치한 단단한 법랑질에서 진행될 때는
					그 속도가 느리지만, 이를 방치할 경우
					내부의 무른 상아질까지 이행된 다음 부터는 충치의 속도가
					매우 빨라지므로 부모님의 지속적인 관심을 바탕으로
					조기 치료를 받아야 합니다.</p>
				</div>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/children_05.jpg" alt="">
			</li>
		</ul>
		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/children_06.jpg" alt="">
			</li>
			<li style="text-align: right;">
				<div>
					<h5 class="point-color ls-title">STEP. 04</h5>
					<h5 class="point-color">소아교정</h5>
					<p class="pt4">적절한 교정치료 시기는 “아이마다 다릅니다.“
					그러나 얼굴 골격의 성장에 문제가 있는지를 파악하기 위한
					가장 적절한 시기는 초등학교 입학 전인 7세경입니다.

					이때는 유치에서 영구치로 교환되는 시기로서
					부정교합 여부가결정되는 중요한 시기이므로
					이 시기를 잘 관찰하여 부정교합을예방하는 것 또한 중요합니다.
					정확한 시기는 6개월 간격으로 치과에 정기적으로 내원하여
					검진을 받은 후 결정하는 것이 좋습니다.</p>
				</div>
			</li>
		</ul>
	</div>
	
</section>

<section class="content m-area">
	<div class="inner">
		<div class="middle-title">
			<h4>하온치과가 제안하는 소아치료</h4>
		</div>
		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/children_03.jpg" alt="">
			</li>
			<li>
				<div>
					<h5 class="point-color ls-title">STEP. 01</h5>
					<h5 class="point-color">올바른 칫솔질</h5>
					<p class="pt4">충치를 일으키는 세균과 음식물이 치아표면에 달라 붙어
					막을 형성하는데 여기서 산이 만들어지며
					치아표면의 무기질이 빠져나가게 됩니다.
					칫솔질은 바로 이 세균을 제거하는 가장 효과적인 방법이며, 
					충치를 예방하는 가장 기본적인 방법입니다.</p>
				</div>
			</li>
			
		</ul>
		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/children_04.jpg" alt="">
			</li>
			<li>
				<div>
					<h5 class="point-color ls-title">STEP. 02</h5>
					<h5 class="point-color">불소도포</h5>
					<p class="pt4">불소도포는 치아 표면에 보호막을 만들어 주어 세균의 공격으로부터
					치아를 보호해 충치를 예방해 주는 효과적인 치료법입니다. 
					약 50~60%의 충치 예방 효과가 불소도포는 충치가 발생하기 쉬운
					성장기 어린이들에게 있어 효과적인 예방치료법입니다.
					맹출하는 영구치의 표면은 아직 완성된 상태가 아니기 때문에 이 시기에
					불소를 도모해주면 치아의 표면에 잘 결합되어
					예방효과가 더욱 커지게 됩니다.</p>
				</div>
			</li>
			
		</ul>
		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/children_05.jpg" alt="">
			</li>
			<li>
				<div>
					<h5 class="point-color ls-title">STEP. 03</h5>
					<h5 class="point-color">소아 충치치료</h5>
					<p class="pt4">충치가 심해지기 전에 빠른 치료를 통하여 자연 치아의 수명을 늘려주세요.
					치아의 가장 바깥에 위치한 단단한 법랑질에서 진행될 때는
					그 속도가 느리지만, 이를 방치할 경우
					내부의 무른 상아질까지 이행된 다음 부터는 충치의 속도가
					매우 빨라지므로 부모님의 지속적인 관심을 바탕으로
					조기 치료를 받아야 합니다.</p>
				</div>
			</li>
			
		</ul>
		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/children_06.jpg" alt="">
			</li>
			<li>
				<div>
					<h5 class="point-color ls-title">STEP. 04</h5>
					<h5 class="point-color">소아교정</h5>
					<p class="pt4">적절한 교정치료 시기는 “아이마다 다릅니다.“
					그러나 얼굴 골격의 성장에 문제가 있는지를 파악하기 위한
					가장 적절한 시기는 초등학교 입학 전인 7세경입니다.

					이때는 유치에서 영구치로 교환되는 시기로서
					부정교합 여부가결정되는 중요한 시기이므로
					이 시기를 잘 관찰하여 부정교합을예방하는 것 또한 중요합니다.
					정확한 시기는 6개월 간격으로 치과에 정기적으로 내원하여
					검진을 받은 후 결정하는 것이 좋습니다.</p>
				</div>
			</li>
		</ul>
	</div>
</section>


<style>
	.line-list li img{border: none;}
	.ls-title{letter-spacing: 3px; font-size: 18px; position: relative;}
	.ls-title:after{content: ''; width: 50px; height: 5px; border-bottom: 2px solid #1f92cd; position: absolute; bottom: -10px; left: 0;}
	.basic-box li:nth-child(2n) .ls-title:after{left: auto; right: 0;}


	@media screen and (max-width:769px) {
		.ls-title:after{width: 100px; height: 5px; border-bottom: 2px solid #1f92cd; position: absolute; bottom: -10px; left: 50% !important; transform:translateX(-50%); right: auto;}
		.basic-box li h5{padding-top: 3%;}
	}
	
	@media screen and (max-width: 425px){
		.ls-title{font-size: 12px;}
	}	
</style>

<?php
include_once(G5_THEME_PATH.'/sub_footer.php');
?>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>