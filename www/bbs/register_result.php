<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
include_once(G5_PATH.'/login_nav.php');

if (isset($_SESSION['ss_mb_reg']))
    $mb = get_member($_SESSION['ss_mb_reg']);

// 회원정보가 없다면 초기 페이지로 이동
if (!$mb['mb_id'])
    goto_url(G5_URL);

$g5['title'] = '회원가입 완료';
include_once($member_skin_path.'/register_result.skin.php');
include_once('./_tail.php');
?>