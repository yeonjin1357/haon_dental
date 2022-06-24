<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
define('G5_DOMAIN', 'https://haondental.com');
define('G5_HTTPS_DOMAIN', 'https://haondental.com');

$begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    $g5_head_title = $g5['title']; // 상태바에 표시될 제목
    $g5_head_title .= " | ".$config['cf_title'];
}

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="naver-site-verification" content="975b542ed2b6bf3e94142a882fa806769991041b" />
<!-- 네이버 웹마스터 도구 사이트 구조 개선 코드 -->
<meta name="naverBot" content="All"/>
<meta name="naverBot" content="index.follow"/>
<meta name="Yeti" content="All"/>
<meta name="Yeti" content="index.follow"/>
<!-- 네이버 웹마스터 도구 사이트 구조 개선 코드 -->

<!-- BORAWARE LOG SCRIPT. -->
<!-- <script type="text/javascript">
var protect_id = 'c124';
</script>
<script async type="text/javascript" src="//script.boraware.kr/protect_script_v2.js"></script> -->
<!-- END OF BORAWARE LOG SCRIPT -->
<!-- 페이지 설명 -->
<meta name="description" content="하온치과, 시흥치과, 임플란트, 치아교정, 성인교정, 소아교정, 사랑니발치, 보철, 충치, 상악동수술, 고난이도임플란트">
<meta name="keywords" content="하온치과의원, 연성치과, 배곧치과, 거모동치과, 장현치과, 능곡치과, 장곡역, 시흥치과, 시흥시청역치과, 시흥능곡치과, 시흥능곡역치과, 안산치과, 임플란트, 치아교정, 성인교정, 소아교정, 사랑니발치, 잇몸질환">
<link rel="shortcut icon" href="<?php echo G5_URL?>/favicon.ico"/>
<!-- 오픈그래프 태그, 소셜 미디어로 공유될 때 우선적으로 활용 -->
<meta property="og:type" content="website">
<meta property="og:title" content="하온치과의원 - 전문의 진료, 임플란트, 치아교정">
<meta property="og:description" content="하온치과, 시흥치과, 임플란트, 치아교정, 성인교정, 소아교정, 사랑니발치, 보철, 충치, 상악동수술, 고난이도임플란트">
<meta property="og:image" content="<?php echo G5_URL?>/cover.jpg?v=1.0">
<meta property="og:url" content="<?php echo G5_URL?>">

<!-- 대표 url -->
<link rel="canonical" href="<?php echo G5_URL?>">	
<?php
if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>
<title><?php echo $g5_head_title; ?></title>
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/header.css">
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/default.css">
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/footer.css">
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/common.css">
<link type="text/css" href="<?php echo G5_THEME_CSS_URL; ?>/menu_style.css">
<link rel="stylesheet" href="<?php echo G5_THEME_URL; ?>/dist/css/swiper.css">
<link rel="stylesheet" href="<?php echo G5_THEME_URL; ?>/dist/css/jquery.fullpage.css">
<link rel="stylesheet" href="<?php echo G5_JS_URL ?>/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:300,500,700,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/css">
<?php if(defined('_INDEX_')) { ?>
<!-- 메인페이지만 설정만 파일 -->
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/main.css">
<?php } else { ?>
<!-- 그외 나머지 페이지 설정만 파일 -->
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/sub.css">
<?php } ?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "<?php echo G5_URL ?>";
var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
<?php
if ($is_admin) {
    echo 'var g5_admin_url = "'.G5_ADMIN_URL.'";'.PHP_EOL;
}
?>
</script>






<script src="<?php echo G5_THEME_JS_URL ?>/jquery.js"></script>
<script src="<?php echo G5_JS_URL ?>/common.js"></script>
<script src="<?php echo G5_JS_URL ?>/wrest.js"></script>
<script src="<?php echo G5_THEME_JS_URL ?>/bootstrap.min.js"></script>
<script src="<?php echo G5_THEME_JS_URL ?>/custom.js"></script>
<script src="<?php echo G5_THEME_JS_URL ?>/jquery.bxslider.min.js"></script>
<script src="<?php echo G5_THEME_JS_URL ?>/jquery.easing.1.3.js"></script>
<script src="<?php echo G5_THEME_JS_URL ?>/jquery.scrollTo.js"></script>
<script src="<?php echo G5_THEME_JS_URL ?>/jquery.singlePageNav.js"></script>
<script src="<?php echo G5_THEME_JS_URL ?>/smooth-scroll.js"></script>
<script src="<?php echo G5_THEME_JS_URL ?>/jquery.backstretch.min.js"></script>
<!-- 커스텀 -->
<script src="<?php echo G5_THEME_JS_URL ?>/move.js"></script>
<!-- <script src="<?php echo G5_THEME_JS_URL ?>/quick.js"></script> -->
<script src="<?php echo G5_THEME_URL; ?>/dist/js/swiper.js"></script>
<script src="<?php echo G5_THEME_URL; ?>/dist/js/jquery.fullpage.js"></script>
<script src="<?php echo G5_THEME_URL; ?>/dist/js/scrolloverflow.min.js"></script>
<!-- <script src="<?php echo G5_THEME_URL; ?>/dist/js/jquery.fullpage.extensions.min.js"></script> -->
<script src="<?php echo G5_THEME_JS_URL ?>/tab.js"></script>
<script src="<?php echo G5_THEME_JS_URL ?>/sub-menu.js"></script>
<style>
</style>
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top">
<?php
if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
    $sr_admin_msg = '';
    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";

    echo '<div id="hd_login_msg">'.$sr_admin_msg.$member['mb_nick'].'님 로그인 중 ';
    echo '<a href="'.G5_BBS_URL.'/logout.php">로그아웃</a></div>';
}
?>