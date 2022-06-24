<?php

// 스킨파일은 단독으로 실행할 수 없다
if(defined('_GNUBOARD_') == false)
{
    exit('스킨파일은 단독으로 실행할 수 없습니다.');
}

// 프로그램 연산에 필요한 선행함수를 실행한다
include_once($board_skin_path . '/company_info.php');
include_once($board_skin_path . '/skin.function.php');

$sql = "select
			*
		from
			cm_office
		where
			id_no = '".$view['ca_name']."' ";
$off=sql_fetch($sql);
$office_no = ($office_no)? $office_no:$off['id_no'];
//set_session('del_office_no', $office_no); // office_no 생성
//set_session('ss_select', $view['wr_1']); // 예약날짜 생성
?>
<script src="<?php echo $board_skin_url; ?>/script.js"></script>
<link rel="stylesheet" href="<?php echo $board_skin_url; ?>/style.css">

<div id="mara_view">
	<table>
		<caption><i class='fa fa-bell' aria-hidden='true'></i> 일부 항목은 개인정보보호를 위해 일부항목은 표시되지 않습니다.</caption>
		<colgroup>
			<col width="15%">
			<col width="35%">
			<col width="15%">
			<col width="35%">
		</colgroup>
		<tbody>
			<tr>
				<th>예약업체명</th>
				<td><?php echo $off['office_name']; ?></td>
				<th>예약일자/시간</th>
				<td><?php echo $view['wr_1']; ?> ( <?php echo $view['wr_2']; ?> )</td>
			</tr>
			<tr>
				<th>예약자이름</th>
				<td><strong><?php echo $view['name']; ?></strong></td>
				<th>예약자연락처</th>
				<td>
				<?php
					if(($view['mb_id'] && $view['mb_id'] == $member['mb_id']) || $is_admin) {
						echo $view['wr_homepage'];
					} else {
						echo "********";
					}?>
				</td>
			</tr>
			<tr>
				<th>차량번호</th>
				<td>
				<?php
					if(($view['mb_id'] && $view['mb_id'] == $member['mb_id']) || $is_admin) {
						echo $view['wr_subject'];
					} else {
						echo "********";
					}?>
				</td>
				<th>차량명칭</th>
				<td><?php echo $view['wr_4']; ?></td>
			</tr>
			<tr>
				<th>정비 항목</th>
				<td colspan="3">
					<ul>
						<?php
						$wr_5 = explode("|",$view['wr_5']);
						for($i=0;$i<count($wr_5);$i++) {
							echo "<li>".$wr_5[$i]."</li>";
						}?>
					</ul>
				</td>
			</tr>
			<tr>
				<th>메모</th>
				<td colspan="3"><?php echo $view['wr_6']; ?></td>
			</tr>
		</tbody>
	</table>

    <h2 class="guide"><i class='fa fa-volume-up' aria-hidden='true'></i> 이용안내</h2>
    <ol class="explain">
		<li> 온라인 정비예약을 하면 정비업체 방문후 대기시간 없이 바로 정비를 받을 수 있어 편리합니다.</li>
		<li> 정비수리가 아닌 일반적인 점검을 받고자 할경우에도 예약을 하면 빠른 서비스를 받을 수 있습니다.</li>
		<li> 예약완료후 개인적인 사유로 정비업체에 방문 하지 못할 경우 반드시 예약업체에 연락주시기 바랍니다.</li>
		<li> 아무런 사유없이 예약날자에 방문하지 않을 경우 정비업체와 다른 고객에게 피해가 발생되오니 방문하지 못할 경우 꼭 연락을 주시기 바랍니다.</li>
		<li> 정비업체에서 예약내용에 따라 고객님께 연락을 드릴 수 있습니다.</li>
		<li> 예약취소는 해당업체에 전화로 취소 바랍니다.</li>

    </ol>

    <div id="button_zone">

		<?php if (($member['mb_id'] && ($member['mb_id'] === $write['mb_id'])) || $is_admin) { ?>
        <button type="button" name="btn_edit" class="btn_edit"><i class='fa fa-pencil' aria-hidden='true'></i> 예약 수정</button>&nbsp;&nbsp;
		<?php } ?>

		<?php if(!$member['mb_id'] && !$write['mb_id']) { // 비회원이 작성한글이거나 비회원인 경우 수정버튼 보임 ?>
		<button type="button" name="btn_edit" class="btn_edit"><i class='fa fa-pencil' aria-hidden='true'></i> 예약 수정</button>&nbsp;&nbsp;
		<?php } ?>

		<button type="button" name="btn_list" class="btn_list"><i class='fa fa-calendar' aria-hidden='true'></i> 달력 보기</button>&nbsp;&nbsp;

		<?php if($is_admin || $write['mb_id']==$member['mb_id']) { ?>
		<button type="button" name="btn_delete" class="btn_delete"><i class='fa fa-trash-o' aria-hidden='true'></i> 예약 삭제</button>&nbsp;&nbsp;
		<?php } ?>


	</div>
</div>

<script>
$(document).ready(function() {

	// 예약 수정
	$(".btn_edit").click(function() {

		var url = "<?php echo htmlspecialchars_decode($update_href); ?>&office_no=<?php echo $office_no; ?>&select=<?php echo $view['wr_1']; ?>";
		location.href=url;
	});

	// 예약 삭제
	$(".btn_delete").click(function() {
		if(!confirm("한번 삭제한 자료는 복구가 불가능합니다. 정말로 삭제하시겠습니까?")) {
			return false;
		};
		var url = "<?php echo htmlspecialchars_decode($delete_href); ?>&office_no=<?php echo $office_no; ?>&select=<?php echo $view['wr_1'];?>";
		location.href=url;
	});

	// 달력 보기
	$(".btn_list").click(function() {
		var url = "<?php echo htmlspecialchars_decode($list_href); ?>&office_no=<?php echo $office_no; ?>";
		location.href=url;
	});

});
</script>