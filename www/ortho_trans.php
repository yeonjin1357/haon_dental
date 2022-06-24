<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg ortho-bg">
	<p>BARUN PLANT DENTAL CLINIC</p>
	<h2>투명교정</h2>
</div>
<?php
	include_once(G5_PATH.'/ortho_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('투명교정');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>BARUN PLANT DENTAL CLINIC</p>
			<h3>투명교정</h3>
		</div>
		<ul class="trans-clippy">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_trans_01.jpg" alt=""></li>
			<li>
				<ul>
					<li>
						<p>투명한
						교정장치로
						심미성 우수</p>
					</li>
					<li>
						<p>탈착이 가능한
						편리성</p>
					</li>
				</ul>
				<p>투명하고 얇은 플라스틱 재질로 만든 장치를 <br />
				단계별로 교체하면서 치아를 이동시키는 교정 방법입니다. <br />
				치아의 이동을 계산하여 모델을 만들고 단계별로 <br /> 
				투명 플라스틱 틀을 제작하여 정밀도와 효율성을 높일 수 있습니다. <br /> 
				투명하기 때문에 심미성이 우수한 교정 방법입니다.</p>
			</li>
		</ul>
	</div>
</section>
<section class="content">
	<div class="inner">
		<div class="middle-title">
			<h4>투명교정 장점</h4>
			<p>투명교정은 금속 교정장치의 가장 큰 단점인 심미적인 부분을 보완할 수 있는 교정장치입니다.
			외부에 노출 시 보다 자연스럽게 보일 수 있는 것이 장점입니다.</p>
		</div>
		<ul class="col-4">
			<li class="circle-icon">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_trans_icon_01.png" alt="">
					<p>탈부착이 가능하여
					위생관리 탁월</p>
				</div>
			</li>
			<li class="circle-icon">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_trans_icon_02.png" alt="">
					<p>적응 기간이 빠르고
					발음에 용이</p>
				</div>
			</li>
			<li class="circle-icon">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_trans_icon_03.png" alt="">
					<p>장치가 탈락하거나
					와이어에 찔리는 등의
					응급상황 발생 없음</p>
				</div>
			</li>
			<li class="circle-icon">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_trans_icon_04.png" alt="">
					<p>치아 부식이나
					잇몸 질환 등의
					부작용 발생 감소</p>
				</div>
			</li>
		</ul>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>