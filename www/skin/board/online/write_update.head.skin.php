<?php
if (!defined('_GNUBOARD_')) exit; // ���� ������ ���� �Ұ�
 $keystring = uniqid();
set_session("ss_captcha_count", 0);
set_session("ss_captcha_key", $keystring);
$captcha_key = $_POST['captcha_key'] = get_session('ss_captcha_key');
?> 