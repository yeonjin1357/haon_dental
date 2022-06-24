<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head_kustom.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<section>
<!-- 서브 배경 :s  -->
<div class="login-bg slide-style slide-bg">
	<div class="center text_center">
		<p>서울고운미소치과</p>
		<h2>로그인/회원가입</h2>
	</div>
</div>
<!-- 서브 배경 :e -->
<!-- 메뉴 :s -->
<div class="tab-menu-wrap">
	<div class="tab-menu">
		<div class="inner">
			<a href="<?php echo G5_URL ?>" class="title hover"><img src="<?php echo G5_THEME_IMG_URL ?>/home.png" alt="메인으로"/></a>
			<div>
				<p class="btn">로그인/회원가입</p>
				<ul class="sub-menu01">
					<li><a href="<?php echo G5_URL ?>/about01.php" target="_self">서울고운미소 소개</a></li>
					<li><a href="<?php echo G5_URL ?>/symptom01.php" target="_self">증상별 교정</a></li>
					<li><a href="<?php echo G5_URL ?>/appliance01.php" target="_self">장치별 치아교정</a></li>
					<li><a href="<?php echo G5_URL ?>/process01.php" target="_self">교정 과정과 시기</a></li>
					<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=beforeafter" target="_self">치료 사례</a></li>
					<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=online" target="_self">커뮤니티</a></li>
				</ul>
			</div>
			<div>
				<p class="btn">회원정보찾기</p>
				<ul class="sub-menu02">
					<li><a href="<?php echo G5_BBS_URL ?>/login.php" target="_self">로그인</a></li>
					<li><a href="<?php echo G5_BBS_URL ?>/register.php" target="_self">회원가입</a></li>
					<li><a href="<?php echo G5_BBS_URL ?>/password_lost.php" target="_self">회원정보찾기</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>	
<!-- 메뉴 :e -->
</section>
<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head_kustom.php');
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');

if ($is_member) {
    alert("이미 로그인중입니다.");
}

$g5['title'] = '회원정보 찾기';
include_once(G5_PATH.'/head.sub.php');

$action_url = G5_HTTPS_BBS_URL."/password_lost2.php";
include_once($member_skin_path.'/password_lost.skin.php');

include_once(G5_PATH.'/tail.sub.php');
include_once('./_tail.php');
?>