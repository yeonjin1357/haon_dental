<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>

<!-- 하단 시작 -->
<!--  <footer id="footer">
 	<div class="inner">
 		<img src="<? echo G5_THEME_IMG_URL; ?>/logo.png" alt="">
 		<p>미소진치과의원 ㅣ 
 			대표 : ㅇㅇㅇ ㅣ 사업자등록번호 : 000-000-000 <br />
 			주소 : ㅇㅇㅇ ㅣ 전화 : 000-000-000 ㅣ FAX : 000-000-000 </p>
 		<p class="copyright">Copyright ⓒ ㅇㅇㅇㅇㅇㅇㅇ. 
 		Design by 혜윰앤컴퍼니 All rights reserved</p>
 	</div>
 </footer> -->
<!-- 하단 끝 -->

<!-- tob_btn 사용 시 주석 해제 -->
<!-- <button type="button" id="top_btn">
	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
</button> -->
<link rel="stylesheet" href="<?php echo G5_THEME_URL; ?>/dist/css/mfb.css">
<link rel="stylesheet" href="<?php echo G5_THEME_URL; ?>/dist/css/snsbtn.css">
<script src="<?php echo G5_THEME_URL; ?>/dist/js/mfb.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<ul id="footmenu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
      <li class="mfb-component__wrap">
        <a class="mfb-component__button--main clickbtn">
          <i class="mfb-component__main-icon--resting ion-plus-round"></i>
          <i class="mfb-component__main-icon--active ion-close-round"></i>
        </a>
        <ul class="mfb-component__list">
		  <li>
            <a href="<? echo G5_URL; ?>/info_map.php" target="_self" data-mfb-label="오시는길" class="mfb-component__button--child">
              <img src="<? echo G5_THEME_IMG_URL; ?>/quick/quick_map.png" alt="오시는길" class="mfb-component__child-icon ion-social-twitter"></i>
            </a>
          </li>

		  <li>
            <a href="<? echo G5_URL; ?>/info_time.php" target="_self" data-mfb-label="진료안내" class="mfb-component__button--child">
              <img src="<? echo G5_THEME_IMG_URL; ?>/quick/quick_info.png" alt="진료안내" class="mfb-component__child-icon ion-social-twitter"></i>
            </a>
          </li>

		  <li>
            <a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')" target="_self" data-mfb-label="네이버블로그" class="mfb-component__button--child">
              <img src="<? echo G5_THEME_IMG_URL; ?>/quick/quick_blog.png" alt="네이버블로그" class="mfb-component__child-icon ion-social-twitter"></i>
            </a>
          </li>
		  <li>
            <a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')" target="_self" data-mfb-label="네이버 예약" class="mfb-component__button--child">
              <img src="<?php echo G5_THEME_IMG_URL ?>/quick/quick_naver.png" alt="네이버예약" class="mfb-component__child-icon ion-social-octocat"></i>
            </a>
          </li>
          <li>
           <a href="http://pf.kakao.com/_IxoRPb" target="_blank" data-mfb-label="카카오톡 상담" class="mfb-component__button--child">
              <img src="<?php echo G5_THEME_IMG_URL ?>/quick/quick_kakao.png" alt="카카오톡상담" class="mfb-component__child-icon ion-social-github">
            </a>
          </li>
         </ul>
      </li>
    </ul>





<!-- 하단 끝 -->
<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>