<?php
include_once('./_common.php');
$gr_id ="BOARD_01";
$ct_title ='[ 온라인예약 ]';
$ct_sub_title ='온라인예약 업체리스트';
include_once(G5_PATH."/head.sub.php");

if($member['mb_level'] < 5) {
	alert('정상적인 방법으로 이용바랍니다.', G5_URL);
}

if(!$wr_id) {
	alert('정상적인 방법으로 이용바랍니다.', G5_URL);
}

// 예약내용
$sql = "select
			*
		from
			".$write_table."
		where
			wr_id = '".$wr_id."' ";
$row=sql_fetch($sql);


// 업체정보
$sql = "select
			*
		from
			cm_office
		where
			id_no = '".$row['ca_name']."' ";
$off=sql_fetch($sql);
?>
<style>
#booking_view { width:100%; padding:10px 15px 0px 10px;}
#booking_view table { width:100%;border-spacing:0;border-collapse:collapse; }
#booking_view th { font-size:12px; text-align:right; padding:10px; background:#eeeeee; border:1px solid #cccccc;}
#booking_view td { font-size:12px; text-align:left; padding:10px; background:#ffffff; border:1px solid #cccccc;}
#booking_view select { padding:4px 5px 4px 3px; font-size:12px;}
#booking_view input { border:1px solid #888888; padding:5px 5px 5px 3px; font-size:12px; background:#ffffff;}
#booking_view button { border:1px solid #888888; padding:5px 10px 5px 10px; font-size:12px;}
#booking_view caption { font-size:15px; padding:20px 0px 12px 0px; display:none; }
#booking_view ul { line-height:150%; padding:0px; }
#booking_view ul li { padding:0px; margin:0px; list-style:none }

.mara_btn_area {
	width:100%; text-align:center; padding:15px;
	-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
	-moz-box-sizing: border-box;    /* Firefox, other Gecko */
	box-sizing: border-box;         /* Opera/IE 8+ */
}
.errpg { width:98%; text-align:center; padding:150px 0 0 0; font-size:15px; color:#004080; }
</style>

<?php
// 타업체의 예약내용을 보려고 한다면...
if($off['mb_id']!=$member['mb_id']) {
	echo "<div class='errpg'>";
	echo "타 업체의 상세 예약 내용은 확인할 수 없습니다.";
	echo "</div>";
	exit;
}
?>

<div id="booking_view">
	<table>
		<caption>온라인예약현황</caption>
		<colgroup>
			<col class="15%">
			<col class="35%">
			<col class="15%">
			<col class="35%">
		</colgroup>
		<tbody>
			<tr>
				<th>예약업체명</th>
				<td><?php echo $off['office_name']; ?></td>
				<th>예약일자/시간</th>
				<td><?php echo $row['wr_1']; ?> ( <?php echo $row['wr_2']; ?> )</td>
			</tr>
			<tr>
				<th>예약자이름</th>
				<td><strong><?php echo $row['wr_name']; ?></strong></td>
				<th>예약자연락처</th>
				<td><?php echo $row['wr_homepage']; ?></td>
			</tr>
			<tr>
				<th>차량번호</th>
				<td colspan="3"><?php echo $row['wr_subject']; ?></td>
			</tr>
			<tr>
				<th>차량명칭</th>
				<td colspan="3"><?php echo $row['wr_4']; ?></td>
			</tr>
			<tr>
				<th>정비 항목</th>
				<td colspan="3">
					<ul>
						<?php
						$wr_5 = explode("|",$row['wr_5']);
						for($i=0; $i < count($wr_5); $i++) {
							echo "<li>".$wr_5[$i]."</li>";
						}?>
					</ul>
				</td>
			</tr>
			<tr>
				<th>메모</th>
				<td colspan="3"><?php echo $row['wr_6']; ?></td>
			</tr>
		</tbody>
	</table>
</div>