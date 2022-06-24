<?php

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){ $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; header('HTTP/1.1 301 Moved Permanently'); header('Location: ' . $redirect); }

출처: https://zpxlcm.tistory.com/53 [주&정 | 공부하는 일상]
?>
