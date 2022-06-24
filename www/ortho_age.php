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
		<li class="selected"><a href="<?php echo G5_URL ?>/ortho_age.php" target="_self">연령 별 치아교정</a></li>
		<li><a href="<?php echo G5_URL ?>/ortho_braces.php" target="_self">장치 별 치아교정</a></li>
		<li><a href="<?php echo G5_URL ?>/ortho_type.php" target="_self">증상 별 치아교정</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/ortho_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('연령 별 치아교정');
		});
	</script>
</ul>
<section class="content special-title pb2 ortho-age-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>연령 별 치아교정</span></h3>
			<span class="slash"></span>
			<h4 >나이대에 따라 교정방법이 달라집니다.<br>
			하온치과는 연령별로 맞는 교정을 제안드립니다.</h4>
		</div>
	</div>
</section>

<section class="content pb5">
	<div class="inner">
		<ul class="basic-box" >
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_02.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5>우리아이의 <span class="point-color">골격성장,</span>
				늦기 전에 바로 잡아주세요.</h5>
				<p>얼굴 골격의 성장에 문제가 있는지를 파악하기 위한 적절한 시기는
				<span class="point-color">초등학교 입학 전인 6-7세경</span>입니다.
				이때는 유치에서 영구치로 교환되는 시기로서 부정교합 여부가
				결정되는 중요한 시기이므로 이 시기를 잘 관찰하여 부정교합을
				예방하는 것 또한 중요합니다.
				
				<span class="point-color">교정의 정확한 시기는 6개월 간격으로 치과에 정기적으로 내원하여
				성장 분석을 받은 후 결정하는 것이 좋습니다.</span></p>
			</li>
		</ul>
	</div>
</section>

<section class="content bg-gray special03-area">
	<div class="inner">
		<div class="middle-title">
			<h4>우리아이 교정시기 <span class="point-color ss">언제가 좋을까요?</span></h4>
		</div>
		<ul class="special03-area1 mt5">
			<li>
				<h5>예방교정</h5>
				<div>
					<div>
						<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_03.png" alt="">
					</div>
					<div>
						<h6>주걱턱 (만 8세 전)</h6>
						<p>주걱턱은 조기 치료가 더욱 중요하며
						불편함을 줄이기 위해
						최소한의 턱교정 장치로 치료합니다.</p>
					</div>
				</div>

				<div>
					<div>
						<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_05.png" alt="">
					</div>
					<div>
						<h6>무턱 비대칭 (만 8~10세 전 후)</h6>
						<p>무턱 비대칭이 있다면 늦어도
						영구치가 나오기 전인
						<b class="fw500">10세 전 교정 시작</b>을 추천합니다.</p>
					</div>
				</div>
			</li>
			<li>
				<h5>본교정</h5>
				<div>
					<div>
						<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_04.png" alt="">
					</div>
					<div>
						<h6>만 10~14세 전 후</h6>
						<p>턱 교정을 완성했거나, 턱 교정을 안한 경우
						모두 영구치열이 거의 완성되었다면
						치아를 움직이는 치열교정으로
						완벽한 마무리를 하게 됩니다.</p>
					</div>
				</div>	
			</li>
		</ul>
		
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="middle-title">
			<h4>정확한 시기 측정을 위한 성장분석</h4>
		</div>
<!-- 		<ul class="col-4 line-list">
			<li class="num" data-num="01">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_06.jpg" alt="">
				<h5>손 성장판 분석 1</h5>
			</li>
			<li class="num" data-num="02">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_07.jpg" alt="">
				<h5>손 성장판 분석 2</h5>
			</li>
			<li class="num" data-num="03">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_08.jpg" alt="">
				<h5>손 성장판 분석 3</h5>
			</li>
			<li class="num" data-num="04">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_09.jpg" alt="">
				<h5>손 성장판 분석 4</h5>
			</li>
		
			<li class="num" data-num="01">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_10.jpg" alt="">
				<h5>목뼈 성장 분석 1</h5>
			</li>
			<li class="num" data-num="02">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_11.jpg" alt="">
				<h5>목뼈 성장 분석 2</h5>
			</li>
			<li class="num" data-num="03">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_12.jpg" alt="">
				<h5>목뼈 성장 분석 3</h5>
			</li>
			<li class="num" data-num="04">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_13.jpg" alt="">
				<h5>목뼈 성장 분석 4</h5>
			</li>
		</ul> -->

		<ul class="col-3 line-list">
			<li class="num" data-num="01">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_20.jpg" alt="">
				<h5>손 성장판 분석 1</h5>
			</li>
			<li class="num" data-num="02">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_21.jpg" alt="">
				<h5>손 성장판 분석 2</h5>
			</li>
			<li class="num" data-num="03">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_22.jpg" alt="">
				<h5>손 성장판 분석 3</h5>
			</li>
		</ul>
	</div>
</section>

<section class="content pb5">
	<div class="inner pt5">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_14.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5>바른 치열은
				자존감과 연결됩니다.</h5>
				<p>치아배열을 개선하기 위한 교정치료는
				사춘기 전후 시기에 시작하는 것이 좋습니다.
				영구치가 <span class="point-color">모두 나오는 만 12-13세 정도가 교정치료의
				적기</span>라고 할 수 있습니다.
				이 시기의 교정치료는 성인보다 치아가 원하는 방향으로
				잘 움직이고 통증도 적어 효과가 좋습니다.</p>
			</li>
		</ul>
	</div>
</section>

<section class="content ortho-bg4 bg-gray op-circle pc-area">
	<div class="inner tac" style="max-width: 1400px;">
		<h3>청소년 교정의 효과</h5>
		<p>청소년기에 아이들은 자존감, 인성 등이 형성되는 중요한 시기입니다.
		내 아이의 미래가 바뀔 수 있는 현재 이 시점,
		아이에게 자존감과 밝은 미소를 선물하세요.</p>
		<ul class="col-2 mt5">
			<li>
				<h5>불만족 - 자존감 저하</h5>
				<p>부적응 행동</p>
				<ul class="col-3">
					<li class="circle-box">
						<p>스트레스</p>
					</li>
					<li class="circle-box">
						<p>무력감</p>
					</li>
					<li class="circle-box">
						<p>학업저하</p>
					</li>
				</ul>
			</li>
			<li>
				<h5>만족 - 자존감 상승</h5>
				<p>건강한 행동 및 적응</p>
				<ul class="col-3">
					<li class="circle-box">
						<p>긍정적 사고</p>
					</li>
					<li class="circle-box">
						<p>활발한 생활</p>
					</li>
					<li class="circle-box">
						<p>학업집중도 향상</p>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>

<section class="content ortho-bg4m-1 bg-gray op-circle m-area">
	<div class="inner tac">
		<h3>청소년 교정의 효과</h5>
		<p>청소년기에 아이들은 자존감, 인성 등이 형성되는 중요한 시기입니다.
		내 아이의 미래가 바뀔 수 있는 현재 이 시점,
		아이에게 자존감과 밝은 미소를 선물하세요.</p>
		<div class="negative">
			<h5>불만족 - 자존감 저하</h5>
			<p>부적응 행동</p>
			<ul class="col-3">
				<li class="circle-box">
					<p>스트레스</p>
				</li>
				<li class="circle-box">
					<p>무력감</p>
				</li>
				<li class="circle-box">
					<p>학업저하</p>
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="content ortho-bg4m-2 bg-gray op-circle m-area mt0">
	<div class="inner tac">
		<h3>청소년 교정의 효과</h5>
		<p>청소년기에 아이들은 자존감, 인성 등이 형성되는 중요한 시기입니다.
		내 아이의 미래가 바뀔 수 있는 현재 이 시점,
		아이에게 자존감과 밝은 미소를 선물하세요.</p>
		<div class="negative positive">
			<h5>만족 - 자존감 상승</h5>
			<p>건강한 행동 및 적응</p>
			<ul class="col-3">
				<li class="circle-box">
					<p>긍정적 사고</p>
				</li>
				<li class="circle-box">
					<p>활발한 생활</p>
				</li>
				<li class="circle-box">
					<p>학업집중도 향상</p>
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="content pb5">
	<div class="inner pt5">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_15.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200"">
				<h5>교정하기엔 늦었나요? 
				아니요! 필요하다면 가능합니다.</h5>
				<p>성인의 적절한 교정시기는 스스로가 필요하다고
				느낄 때라고 할 수 있습니다.
				잇몸뼈에 큰 이상만 없다면 어느나이에도 가능합니다!</p>
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner tac" style="max-width: 1000px;">
		<div class="middle-title">
			<h4>성인 교정 효과</h4>
		</div>
		<ul class="strengths">
			<li>
				<p>자신감있는 미소로 사회생활과 대인관계에 도움이 될 수 있습니다.</p>
			</li>
			<li>
				<p>구강위생관리가 용이하며 충치 유발률이 낮아집니다.</p>
			</li>
			<li>
				<p>교정치료의 협조도가 높아 치료 기간이 청소년과 비슷하며 치료 결과가 좋습니다.</p>
			</li>
		</ul>
	</div>
</section>

<section class="content pt5">
	<div class="inner tac">
		<div class="middle-title">
			<h4>증상 별 맞춤 치료 계획</h4>
		</div>
		<ul class="col-3 mt5 ortho-card">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_17.png" alt="">
				<div class="ortho-card-txt">
					<h5>부분교정</h5>
					<p>필요한 부분만 선택하여
					교정 가능한 부분교정!
					중년층에게는 장기간 진행되는
					전체 교정의 부담을 낮춰
					치료 가능합니다.</p>
				</div>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_18.png" alt="">
				<div class="ortho-card-txt">
					<h5>수술교정</h5>
					<p>하온치과는 자연치아 보존을 위해
					비발치 비수술 교정을 지향합니다.
					다만 골격적인 이상은
					수술을 통해 바로 잡아야합니다.
					이 경우 수술을 진행하여 개선합니다.</p>
				</div>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_16.png" alt="">
				<div class="ortho-card-txt">
					<h5>잇몸 케어교정</h5>
					<p>잇몸이 나빠지면서
					이가 벌어지거나 틀어지는 경우!
					잇몸치료만이 답이 아닐 수 있습니다.
					교정치료를 통해 부정교합을
					올바르게 개선하는 방법 또한
					잇몸질환 해결에 도움이 될 수 있습니다.</p>
				</div>
			</li>
		</ul>
		<a class="plusbtn" href="<?php echo G5_URL ?>/ortho_type.php">내 증상에 맞는 교정 보러가기 +</a>
	</div>
</section>

<section class="content ortho-bg5 bg-gray">
	<div class="inner">
		<div class="ortho-bg5-txt">
			<h4 class="nsk fw700">당신은 원래 더
			아름다운 사람입니다.</h4>
			<p class="fw500">하온치과에서 아름다운 미소를 찾아드리겠습니다.</p>
			<a class="plusbtn mb5" href="<?php echo G5_URL ?>/ortho_braces.php">내 증상에 맞는 교정 보러가기 +</a>
		</div>
	</div>
</section>

<style>
	.op-circle > div > p{white-space: pre-line; font-size: 16px; padding-top: 3%;}
	.ortho-bg4 {padding: 6% 0px !important;}
	.ortho-bg4 .col-3, .ortho-bg4 .col-2{flex-wrap:nowrap;}
	.ortho-bg4 .col-2 li:last-child{margin-left: 10%;}
	.ortho-bg4 .col-2 li:last-child .circle-box{background-color: rgba(255, 255, 255, 0.8) !important;}
	.ortho-bg4 .col-2 li:last-child .circle-box p{color: #333;}
	.ortho-bg4 .circle-box{ margin: 5% 2% 0 2% !important;}

	.special03-area div > ul > li{display: block;}
	.special03-area div > ul > li > div{display: flex; align-items:center; margin-top: 10%;}
	.special03-area div > ul > li > div div:last-child{margin-left: 7%;}
	.special03-area div > ul > li > div h6{font-weight: 500; margin-bottom: 15px;}
	.special03-area div > ul > li > div p{white-space: pre-line;}

	.negative{margin-top: 5%;}
	.negative > h5{font-weight: 500; margin-bottom: 0;}
	.negative > p{margin-bottom: 5%;}
	.positive .circle-box{background-color: rgba(255, 255, 255, 0.8) !important;}
	.positive .circle-box p{color: #333;}

	.strengths li:before{display: none;}
	.strengths li{background-color: #daedf6;}
	.strengths li p{color: #333;}

	.ortho-bg5-txt{white-space: pre-line;}
	@media screen and (max-width: 425px) {
		.op-circle > div > p{font-size: 12px;}
		.ss{display: block;}
		.special03-area div > ul > li h5{margin-top: 50px;}
		.special03-area div > ul > li > div{display: block; text-align: center;}
		.special03-area div > ul > li > div div:last-child{margin-left: 0; margin-top: 20px;}
		.plusbtn{font-size: 12px; padding: 8px 16px;}
	}
</style>

<script>
	$(function(){
		$('.ortho-card li').mouseenter(function(){
			$(this).children('.ortho-card-txt').fadeIn(600);
			$(this).children('img').addClass('hover');
		});
		$('.ortho-card li').mouseleave(function(){
			$(this).children('.ortho-card-txt').fadeOut(600);
			$(this).children('img').removeClass('hover');
		});
	});
</script>


<?php
include_once(G5_THEME_PATH.'/sub_footer.php');
?>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>