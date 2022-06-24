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
			<a id="m_logo" href="<?php echo G5_URL ?>/index.php"><img src="<? echo G5_THEME_IMG_URL; ?>/logo.png" alt="하온치과" width="100"></a>
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
			
				<ul class="dropdown">
					<li>
						<a href="<?php echo G5_URL ?>/about.php" target="_self">하온치과의</a>
						<ul>
							<li><a href="<?php echo G5_URL ?>/about.php" target="_self">정직한 진료 원칙</a></li>
							<li><a href="<?php echo G5_URL ?>/info_dentist.php" target="_self">경험이 다른 의료진</a></li>
							<!-- <li><a href="<?php echo G5_URL ?>/info_equipment.php" target="_self">디지털 장비</a></li> -->
							<li><a href="<?php echo G5_URL ?>/info_interior.php" target="_self">둘러보기</a></li>
							<li><a href="<?php echo G5_URL ?>/info_time.php" target="_self">진료 및 예약안내</a></li>
							<li><a href="<?php echo G5_URL ?>/info_map.php" target="_self">찾아오시는 길</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/special01.php" target="_self">특별함을 만나보세요</a>
						<ul>
							<li><a href="<?php echo G5_URL ?>/special01.php" target="_self">안심케어 수술실</a></li>
							<li><a href="<?php echo G5_URL ?>/special02.php" target="_self">감염관리시스템</a></li>
							<li><a href="<?php echo G5_URL ?>/special03.php" target="_self">믿음 더한 보증시스템</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/imp_special.php" target="_self">HAON: 임플란트</a>
						<ul>
							<li><a href="<?php echo G5_URL ?>/imp_special.php" target="_self">임플란트의 특별함</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_custom.php" target="_self">맞춤 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_all.php" target="_self">전악 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_oneday.php" target="_self">발치즉시 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_highlevel.php" target="_self">뼈이식 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_osstem.php" target="_self">오스템 임플란트</a></li>
							<!-- <li><a href="<?php echo G5_URL ?>/imp_navigation.php" target="_self">네비게이션 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_denture.php" target="_self">임플란트 틀니</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_insurance.php" target="_self">건강보험 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_disease.php" target="_self">전신질환 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_caution.php" target="_self">임플란트 주의사항</a></li> -->
						</ul>
					</li>

					<li class="logoli">
						<a id="logo" href="<?php echo G5_URL ?>/index.php"><img src="<? echo G5_THEME_IMG_URL; ?>/logo2.png" alt="하온치과"></a>
					</li>
					
					<li>
						<a href="<?php echo G5_URL ?>/ortho_special.php" target="_self">HAON: 치아교정</a>
						<ul>
							<li><a href="<?php echo G5_URL ?>/ortho_special.php" target="_self">교정의 특별함</a></li>
							<li><a href="<?php echo G5_URL ?>/ortho_age.php" target="_self">연령 별 치아교정</a></li>
							<li><a href="<?php echo G5_URL ?>/ortho_braces.php" target="_self">장치 별 치아교정</a></li>
							<li><a href="<?php echo G5_URL ?>/ortho_type.php" target="_self">증상 별 치아교정</a></li>
							<!-- <li><a href="<?php echo G5_URL ?>/ortho_retainer.php" target="_self">치아교정 유지관리</a></li>
							<li><a href="<?php echo G5_URL ?>/ortho_caution.php" target="_self">치아교정 주의사항</a></li>
							<li><a href="<?php echo G5_URL ?>/ortho_trans.php" target="_self">투명교정</a></li>
							<li><a href="<?php echo G5_URL ?>/ortho_clippy.php" target="_self">클리피씨 교정</a></li> -->
						</ul>
					</li>

					<li>
						<a href="<?php echo G5_URL ?>/basic_special.php" target="_self">HAON: 통합진료</a>
						<ul>
							<li><a href="<?php echo G5_URL ?>/basic_special.php" target="_self">통합진료의 특별함</a></li>
							<li><a href="<?php echo G5_URL ?>/root_canal.php" target="_self">MTA 신경치료</a></li>
							<li><a href="<?php echo G5_URL ?>/caries.php" target="_self">충치치료</a></li>
							<li><a href="<?php echo G5_URL ?>/gum_therapy.php" target="_self">잇몸치료</a></li>
							<li><a href="<?php echo G5_URL ?>/wisdom.php" target="_self">사랑니 발치</a></li>
							<li><a href="<?php echo G5_URL ?>/jaw_joint.php" target="_self">턱관절 치료</a></li>
							<li><a href="<?php echo G5_URL ?>/prosthetic.php" target="_self">보철치료</a></li>
							<li><a href="<?php echo G5_URL ?>/children.php" target="_self">소아진료</a></li>
							<!-- <li><a href="<?php echo G5_URL ?>/apicoectomy.php" target="_self">치근단절제술</a></li>
							<li><a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')" target="_self">의도적재식술 / 자가치아이식술</a></li> -->
						</ul>
					</li>

					<li>
						<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice" target="_self">커뮤니티</a>
						<ul>
							<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice" target="_self">공지사항</a></li>
							<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=qa" target="_self">온라인상담</a></li>
						</ul>
					</li> 

					
					
					<!-- <li>
						<a href="<?php echo G5_URL ?>/wisdom.php" target="_self">일반진료</a>
						<ul>
							
							<li><a href="<?php echo G5_URL ?>/caries.php" target="_self">충치치료</a></li>
							
							<li><a href="<?php echo G5_URL ?>/denture.php" target="_self">틀니</a></li>
							<li><a href="<?php echo G5_URL ?>/gum_therapy.php" target="_self">잇몸치료</a></li>
							<li><a href="<?php echo G5_URL ?>/root_canal.php" target="_self">신경치료</a></li>
							<li><a href="<?php echo G5_URL ?>/whitening.php" target="_self">치아미백</a></li>
							<li><a href="<?php echo G5_URL ?>/aesthetic.php" target="_self">심미보철</a></li>
							
						</ul>
					</li> -->
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

				

				let header = document.querySelector("#header");
				let headerHeight = header.offsetHeight;

				window.onscroll = function () {
				  let windowTop = window.scrollY;
					// 스크롤 세로값이 헤더높이보다 크거나 같으면 
					// 헤더에 클래스 'drop'을 추가한다
				  if (windowTop >= headerHeight) {
					header.classList.add("hd_color");
				  } 
				  // 아니면 클래스 'drop'을 제거
				  else {
					header.classList.remove("hd_color");
				  }
				};

				$('.has-submenu').click(function(){
					if($(this).children('.sub-menu').hasClass('active') === false){
						$(this).children('.sub-menu').removeClass('active');
						$(this).children('a').removeClass('active');
					} else{
						$('.has-submenu > a').removeClass('active');
						$('.sub-menu').removeClass('active');
						$(this).children('.sub-menu').addClass('active');
						$(this).children('a').addClass('active');
					}

				});


			</script>
		</div><!-- header_wrap -->
	</header>
</div>

<!-- } 상단 끝 -->
<!-- 콘텐츠 시작 { -->
<main id="wrapper">
    
        <!-- <?php if ((!$bo_table || $w == 's' ) && !defined("_INDEX_")) { ?><div id="container_title" class="center"><?php echo $g5['title'] ?></div><?php } ?> -->
		<!-- header -->