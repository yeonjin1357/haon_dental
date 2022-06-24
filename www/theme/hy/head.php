<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

if(defined('_INDEX_')) {
    $idx_nav = ' navigation';
    $menu_href = '';
} else {
    $idx_nav = '';
    $menu_href = G5_URL;
}

?>
<!-- 이벤트 게시판 -->
<?php 
include_once('./_common.php'); 
include_once(G5_LIB_PATH.'/latest.lib.php'); 
?> 
<!-- 상단 시작 { -->
<div id="hd">
	<div id="skip_to_container"><a href="#container">본문 바로가기</a></div>
	<?php
		if(defined('_INDEX_')) { // index에서만 실행
			include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
		}

		if ($bo_table == "online") {
		 include_once(G5_THEME_PATH.'/online_nav.php');	
		} else if ($bo_table == "qna") {
		   include_once(G5_THEME_PATH.'/qna_nav.php');
		} else if ($bo_table == "around") {
		   include_once(G5_THEME_PATH.'/around_nav.php');
		};
	?>
	<header id="header">
		<div id="pc-gnb">
			<ul>
				<?php if ($is_member) {  ?>
				<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">MEMBER</a></li>
				<li><a href="<?php echo G5_BBS_URL ?>/logout.php">LOGOUT</a></li>
				<?php if ($is_admin) {  ?>
				<li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>">ADMIN</a></li>
				<?php }  ?>
				<?php } else {  ?>
				<li><a href="<?php echo G5_BBS_URL ?>/login.php">LOGIN</a></li>
				<li><a href="<?php echo G5_BBS_URL ?>/register.php">JOIN</a></li>
				<?php }  ?>
			</ul> 
		</div>
		<div class="menu-wrap">
			<a id="m_logo" href="<?php echo G5_URL ?>/index.php"><img src="<? echo G5_THEME_IMG_URL; ?>/logo.png" alt="미소진치과" width="100"></a>
			<div class="spinner-master">
				<input type="checkbox" id="spinner-form" />
				<label for="spinner-form" class="spinner-spin">
				<div class="spinner diagonal part-1"></div>
				<div class="spinner horizontal"></div>
				<div class="spinner diagonal part-2"></div>
				</label>
			</div>
			<ul class="mobile-gnb">
				<?php if ($is_member) {  ?>
				<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"><i class="fa fa-cog" aria-hidden="true"></i> MEMBER</a></li>
				<li><a href="<?php echo G5_BBS_URL ?>/logout.php">LOGOUT</a></li>
				<?php if ($is_admin) {  ?>
				<li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>">ADMIN</a></li>
				<?php }  ?>
				<?php } else {  ?>
				<li><a href="<?php echo G5_BBS_URL ?>/login.php">LOGIN</a></li>
				<li><a href="<?php echo G5_BBS_URL ?>/register.php">JOIN</a></li>
				<?php }  ?>
			</ul>
			
			<nav id="menu" class="inner menu">
			<a id="logo" href="<?php echo G5_URL ?>/index.php"><img src="<? echo G5_THEME_IMG_URL; ?>/logo.png" alt="바른플란트치과" width="100"></a>
				<ul class="dropdown">
					<li>
						<a href="<?php echo G5_URL ?>/about.php" target="_self">미소진치과</a>
						<ul>
							<li><a href="<?php echo G5_URL ?>/about.php" target="_self">미소진치과의 특별함</a></li>
							<li><a href="<?php echo G5_URL ?>/info_dentist.php" target="_self">의료진 소개</a></li>
							<li><a href="<?php echo G5_URL ?>/info_equipment.php" target="_self">디지털 장비</a></li>
							<!-- <li><a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')" target="_self">믿음 케어 솔루션</a></li> -->
							
							<li><a href="<?php echo G5_URL ?>/info_time.php" target="_self">진료안내</a></li>
							<li><a href="<?php echo G5_URL ?>/info_interior.php" target="_self">둘러보기</a></li>
							<li><a href="<?php echo G5_URL ?>/info_map.php" target="_self">오시는길</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/special01.php" target="_self">환자를 생각한 진료</a>
						<ul>
							<li><a href="<?php echo G5_URL ?>/special01.php" target="_self">단계별 보존치료</a></li>
							<li><a href="<?php echo G5_URL ?>/special02.php" target="_self">완벽을 추구하는 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/special03.php" target="_self">편안한 보철 & 재보철</a></li>
							<li><a href="<?php echo G5_URL ?>/special04.php" target="_self">턱관절 집중치료</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/imp_custom.php" target="_self">임플란트</a>
						<ul>
							<li><a href="<?php echo G5_URL ?>/imp_custom.php" target="_self">맞춤 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_navigation.php" target="_self">네비게이션 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_highlevel.php" target="_self">뼈이식 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_denture.php" target="_self">임플란트 틀니</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_oneday.php" target="_self">발치즉시 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_insurance.php" target="_self">건강보험 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_disease.php" target="_self">전신질환 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_caution.php" target="_self">임플란트 주의사항</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/gum_therapy.php" target="_self">자연치아살리기</a>
						<ul>
							<li><a href="<?php echo G5_URL ?>/gum_therapy.php" target="_self">잇몸치료</a></li>
							<li><a href="<?php echo G5_URL ?>/caries.php" target="_self">충치치료</a></li>
							<li><a href="<?php echo G5_URL ?>/root_canal.php" target="_self">신경치료</a></li>
							<!-- <li><a href="<?php echo G5_URL ?>/apicoectomy.php" target="_self">치근단절제술</a></li>
							<li><a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')" target="_self">의도적재식술 / 자가치아이식술</a></li> -->
						</ul>
					</li>
					<!-- <li>
						<a href="<?php echo G5_URL ?>/ortho_age.php" target="_self">치아교정</a>
						<ul>
							<li><a href="<?php echo G5_URL ?>/ortho_age.php" target="_self">연령별 치아교정</a></li>
							<li><a href="<?php echo G5_URL ?>/ortho_braces.php" target="_self">장치별 치아교정</a></li>
							<li><a href="<?php echo G5_URL ?>/ortho_retainer.php" target="_self">치아교정 유지관리</a></li>
							<li><a href="<?php echo G5_URL ?>/ortho_caution.php" target="_self">치아교정 주의사항</a></li>
							<li><a href="<?php echo G5_URL ?>/ortho_trans.php" target="_self">투명교정</a></li>
							<li><a href="<?php echo G5_URL ?>/ortho_clippy.php" target="_self">클리피씨 교정</a></li>
						</ul>
					</li> -->
					<li>
						<a href="<?php echo G5_URL ?>/wisdom.php" target="_self">일반진료</a>
						<ul>
							<li><a href="<?php echo G5_URL ?>/wisdom.php" target="_self">사랑니 발치</a></li>
							<!-- <li><a href="<?php echo G5_URL ?>/caries.php" target="_self">충치치료</a></li> -->
							<li><a href="<?php echo G5_URL ?>/prosthetic.php" target="_self">보철치료</a></li>
							<!-- <li><a href="<?php echo G5_URL ?>/denture.php" target="_self">틀니</a></li> -->
							<!-- <li><a href="<?php echo G5_URL ?>/gum_therapy.php" target="_self">잇몸치료</a></li>
							<li><a href="<?php echo G5_URL ?>/root_canal.php" target="_self">신경치료</a></li> -->
							<li><a href="<?php echo G5_URL ?>/whitening.php" target="_self">치아미백</a></li>
							<li><a href="<?php echo G5_URL ?>/aesthetic.php" target="_self">심미보철</a></li>
							<li><a href="<?php echo G5_URL ?>/jaw_joint.php" target="_self">턱관절</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<script>
				$('ul li:has(ul)').addClass('has-submenu');
				$('ul li ul').addClass('sub-menu');

				var $menu = $('#menu'), $menulink = $('#spinner-form'), $menuTrigger = $('.has-submenu > a');
				
				$menulink.click(function (e) {
					$menulink.toggleClass('active');
					$menu.toggleClass('active');
					$('.mobile-gnb').toggleClass('active');

				});
				// 트리거 버튼 클릭시
				$menuTrigger.click(function (e) {
					if($(window).width() <=1199){ 
						// 해상도 1199px이하보다 작을 때
						e.preventDefault();
						// 이벤트 적용 하지 말고
						var t = $(this);
						t.toggleClass('active').next('ul').toggleClass('active');
					}
				});

				$('.sub-menu li > a').click(function(){
					$menulink.removeClass('active');
					$menu.removeClass('active');
					$('.mobile-gnb').removeClass('active');
					$('.spinner-master input').prop('checked', false);
				});

			
			</script>
		</div><!-- header_wrap -->
	</header>
</div>

<!-- } 상단 끝 -->
<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container">
        <?php if ((!$bo_table || $w == 's' ) && !defined("_INDEX_")) { ?><div id="container_title" class="center"><?php echo $g5['title'] ?></div><?php } ?> 
		<!-- board, login, join, etc (backend develop part) : 수정 불가 -->