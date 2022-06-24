<?
include_once("./_common.php");

$var = $_POST['var'];
$day = $_POST['day'];
$min = $_POST['min'];
$max = $_POST['max'];
$url =  $_POST['url'];
$bo_table = $_POST['bo_table'];
$office_no = $_GET['office_no'];
include_once($url.'/company_info.php');
include_once($url.'/skin.function.php');
$rst = day_info($var, $day, $min, $max);
echo json_encode($rst);