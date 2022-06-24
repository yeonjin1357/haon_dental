<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<section class="footerArea">
	<div class="area area5">
		<footer id="footer">
			<div>
				<ul class="inner">
					<li><a href="<?php echo G5_URL ?>/about.php" target="_self">하온치과의</a></li>
					<li>|</li>
					<li><a href="<?php echo G5_URL ?>/special01.php" target="_self">특별함을 만나보세요</a></li>
					<li>|</li>
					<li><a href="<?php echo G5_URL ?>/imp_special.php" target="_self">HAON: 임플란트</a></li>
					<li>|</li>
					<li><a href="<?php echo G5_URL ?>/ortho_special.php" target="_self">HAON: 치아교정</a></li>
					<li>|</li>
					<li><a href="<?php echo G5_URL ?>/basic_special.php" target="_self">HAON: 통합진료</a></li>
					<li>|</li>
					<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice" target="_self">커뮤니티</a></li>
				</ul>	
				<div class="mt1"><img src="<? echo G5_THEME_IMG_URL; ?>/footer_logo.png" alt=""></div>
				<p>의료기관명칭 : 하온치과의원 ㅣ 대표자명 : 허용호 <br />
				사업자등록번호 : 835-92-01768<br />
					주소 : 경기도 시흥시 황고개로 526, 3층
					<br /> 대표번호 : 031-506-2080 ㅣ FAX : 031-507-2080</p>
				<p class="copyright">Copyright ⓒ 2022 하온치과의원. 
				Design by 혜윰앤컴퍼니 All rights reserved</p>
			</div>
		 </footer>
	</div>
</section>

<script>
	AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });

	window.addEventListener('load', AOS.refresh);
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>

<script>
$('.menu .dropdown > li').mouseenter(function(){
	$('header').addClass('hd_color2');
	
});

$('.menu .dropdown > li').mouseleave(function(){
	$('header').removeClass('hd_color2');
	
});
</script>