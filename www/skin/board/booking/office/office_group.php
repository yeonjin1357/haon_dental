<?
include_once("./_common.php");



if($mode=="tice") {

	include_once(G5_PATH.'/js/json/Json_encode.php');

	$sql = "update
				cm_office
			set
				office_topid = '".$_POST['chg']."'
			where
				office_license = '".$_POST['bizNo']."' and office_topid = '".$member['mb_id']."' ";
	sql_query($sql);

	$code = "OK";
	echo json_encode2($code);
	exit;

}

include_once(G5_PATH."/head.sub.php");

// 대표관리자 찾기.
$sql = "select
			office_license,
			office_topid
		from
			cm_office
		where
			mb_id = '".$member['mb_id']."' ";
$rs=sql_fetch($sql);

if($member['mb_id']!=$rs['office_topid']) {

	echo '<br/><br/><br/><br/>';
	echo '<center>대표관리아이디로 접속하지 않았습니다.</center>';
	exit;

}



## 사업자번호에 속한 그룹 명단
$sql = "select
			*
		from
			cm_office
		where
			office_license = '".$rs['office_license']."' ";
$result = sql_query($sql);
?>
<link href="<?php echo G5_URL; ?>/carinfo/css/default2.css" rel="stylesheet" />
<script>
$(document).ready(function() {

	$("#carinfo_basic").on("click", "span.change", function() {
		//var idx = $("span.change").index(this);
		var id = $(this).text();

		if(confirm("선택한 서브아이디 [ "+id+" ](으)로 대표관리아이디 권한을 넘기시겠습니까?" )) {
			$.ajax({
				type : 'POST',
				url : "./office_group.php",
				data : {
					"mode":"tice",
					"chg" :id,
					"bizNo":"<?php echo $rs[office_license]; ?>"
				},
				dataType: "json",
				async: false,
				cache: false,
				error : function(error) {
					alert("Error!");
				},
				success : function(data) {
					//alert(data);
					if(data=='OK') {
						parent.location.reload();
					}
				},
				complete : function() {
					//alert("complete!");
				}
			});

		} else {

			return false;

		}

	});
});
</script>
<style>
#carinfo_basic { width:99%; margin:0px; min-height:100px; }
#carinfo_basic caption { text-align:left; padding-bottom:8px; line-height:150%; }
</style>
<div id="carinfo_basic">
	<table>
		<caption>
		※ 현재 대표관리아이디는 "<span class="txt_blue txt_bold"><?php echo $rs['office_topid']; ?></span>" 입니다.<br/>
		※ 서브아이디를 클릭하면 대표관리아이디로 변경되며, 모든 권한이 해당 아이디로 넘겨지므로 주의 바랍니다.
		</caption>
		<colgroup>
			<col width="5%" />
			<col width="24%" />
			<col width="24%" />
			<col width="24%" />
			<col width="23%" />
		</colgroup>
		<thead>
			<tr>
				<th>번호</th>
				<th>사업자번호</th>
				<th>사업자명칭</th>
				<th>서브아이디</th>
				<th>팀명칭</th>
			</tr>
		</thead>
		<tbody>
		<?php for($i=0; $row = sql_fetch_array($result); $i++) { ?>
			<tr>
				<td><?php echo ($i+1); ?></td>
				<td><?php echo $row['office_license']; ?></td>
				<td><?php echo $row['office_name']; ?></td>
				<td><span class="change txt_red txt_bold td_hand"><?php echo $row['mb_id']; ?></span></td>
				<td><?php echo $row['office_team']; ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
<? include_once(G5_PATH."/tail.sub.php"); ?>