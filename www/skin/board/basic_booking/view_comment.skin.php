<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 벌이뉨 예약 관련 코드
include_once(G5_PLUGIN_PATH.'/jquery-ui/datepicker.php'); 

$json = json_decode($view['wr_10'],true);
$bMode0 = false;
$bMode6 = false;
$bMode = [0,0,0,0,0,0,0];
$day_name=["일","월","화","수","목","금","토"];
if($json['mode']=="day"){
	//$bData = json_decode($json['data'],true);
	for($k=0; $k < count($json['data']); $k++){
	    $bMode[$json['data'][$k][option]] = 1;
	    if(array_sum($bMode) == 7) break;
	}
}
    
$start = $json['start'];
$end = $json['end'];

$start_time = $json['start_time'];
$end_time = $json['end_time'];
$time_op = $json['time_op'];
$total = $json['total'];
$avg  = $json['avg'];
$boo_count = $json['boo_count'];
$num_count = $json['num_count'];
$boo_option = $json['boo_option'];

$goods = $json['goods'];
if($goods!=""){
    for($gg=0; $gg < count($goods); $gg++){
        $goods_array[$gg] = $goods[$gg][name];
        $goods_sub_array[$gg] = $goods[$gg][sub];
    }
    //$goods_array = implode( ':', $goods_array);
}

if($boo_option!="")
    $boo_option = explode(':', $boo_option);

if($json['mode'] == "last" && $num_count==""){ // 예약시 갯수 제한
    $num_count = 1;
}



$days = array();
if($json['mode']=="day"){
    $i=0;
    while(true){
        $timestamp = strtotime("{$start} +{$i} days");
        /*
         echo "{$start} : ".date("Y-m-d", $timestamp)."<br/>";
        */
        $days[date("Y-m-d", $timestamp)] = $avg;
        $i++;
        if($end == date("Y-m-d", $timestamp) || $i >= 15000){
            break;
        }
    }

    for($k=0; $k < count($json['data']); $k++){
        $days[$json['data'][$k][day]] = $json['data'][$k][num];
    }

    $total = array_sum($days);
}else if($json['mode']=="last"){
    $i=0;
    while(true){
        $timestamp = strtotime("{$start} +{$i} days");
        /*
         echo "{$start} : ".date("Y-m-d", $timestamp)."<br/>";
        */
        $days[date("Y-m-d", $timestamp)] = $total;
        $i++;
        if($end == date("Y-m-d", $timestamp) || $i >= 15000){
            break;
        }
    }
}
$view_commet = array(); // 예약글 아래 댓글들은 전부 볼 수 있게 함.
// 벌이뉨 예약 관련 코드

?>
<style>
<!--
  .gazettedHoliday {
    background: red;
    position: relative;
  }
    .gazettedHoliday a {
        background: red !important;
        color: white !important;
     }

   .gazettedHoliday:hover:after {
    background: #333;
    background: rgba(0,0,0,.8);
    border-radius: 5px;
    bottom: 26px;
    color: #fff;
    content: attr(title);
    left: 20%;
    padding: 5px 15px;
    position: absolute;
    z-index: 98;
   	min-width: 280px;
    width: auto;
    font-size: 20px;
    font-weight: bold;
  }

   .gazettedHoliday:hover:before {
    border: solid;
    border-color: #333 transparent;
    border-width: 6px 6px 0 6px;
    content: "";
    left: 50%;
    position: absolute;
    z-index: 99;
  }
  
.dotline{

    margin-top: 5px; 
    margin-bottom: 5px; 
    padding: 5px 5px 5px 5px; 
    border: 0.1em dashed #bcbcbc;
}


.dotline_red{

    margin-top: 5px; 
    margin-bottom: 5px; 
    padding: 5px 5px 5px 5px; 
    border: 0.1em dotted #f44336;
}



-->
</style>
<script>
// 글자수 제한
var char_min = parseInt(<?php echo $comment_min ?>); // 최소
var char_max = parseInt(<?php echo $comment_max ?>); // 최대
</script>
<!-- 벌이뉨 예약관련 -->
<div class="booking_comment dotline_red"> </div>
<!-- 벌이뉨 예약관련 -->
<button type="button" class="cmt_btn"><i class="fa fa-commenting-o" aria-hidden="true"></i> 예약 및 댓글목록</button>
<!-- 댓글 시작 { -->
<section id="bo_vc">
    <h2>댓글목록</h2>
    <?php
    $cmt_amt = count($list);
    // 추가해주세요.
    //$comment_yn = false;
    //$mem_commet = array();
    // 추가해주세요.
    
    // 벌이뉨 예약 관련 코드
    $is_booking = true;
    $is_my_booking= true;
    $booking_count = 0;
    $my_booking_count=0;
    // 벌이뉨 예약 관련 코드
    
    for ($i=0; $i<$cmt_amt; $i++) {
    	// 추가 해주세요.
    	/* 
    	if(!$comment_yn)
    		$member['mb_id'] == $list[$i]['mb_id'] ? $comment_yn=true : $comment_yn=false;
    	
    	if($mem_commet[$list[$i]['mb_id']] == "")
    		$mem_commet[$list[$i]['mb_id']] = 1;
    	else
    		continue;
    	 */
    	// 추가 해주세요.
    	
    	
        $comment_id = $list[$i]['wr_id'];
        $cmt_depth = strlen($list[$i]['wr_comment_reply']) * 50;
        $comment = $list[$i]['content'];

        /*
        if (strstr($list[$i]['wr_option'], "secret")) {
            $str = $str;
        }
        */
        $comment = preg_replace("/\[\<a\s.*href\=\"(http|https|ftp|mms)\:\/\/([^[:space:]]+)\.(mp3|wma|wmv|asf|asx|mpg|mpeg)\".*\<\/a\>\]/i", "<script>doc_write(obj_movie('$1://$2.$3'));</script>", $comment);
        $cmt_sv = $cmt_amt - $i + 1; // 댓글 헤더 z-index 재설정 ie8 이하 사이드뷰 겹침 문제 해결
        
        // 벌이뉨 예약 관련 코드
        if($boo_count!=0 && $my_booking_count >= $boo_count){
        	$is_my_booking=false;
        }
        
        $mJson = json_decode($list[$i]['wr_6'],true);
        

        if($member['mb_id'] == $list[$i]['mb_id'] && $member['mb_id']!="" && $list[$i]['wr_7'] == 2){
            if($mJson['num_count']>1)
                $my_booking_count+=$mJson['num_count'];
            else
                $my_booking_count++;            
        } 
                
        if($cmt_depth == 0 && $list[$i]['wr_7'] == 2){ // 예약 수 계산
        	if($mJson['num_count']>1)
        	    $booking_count+=$mJson['num_count'];
        	else
        	    $booking_count++;
        	
        	if($json['mode']=="day"){
        		$temp_days[$list[$i]['wr_9']]+=1;
        	}
        }  
        // 벌이뉨 예약 관련 코드
           
        
     ?>

    <article id="c_<?php echo $comment_id ?>" <?php if ($cmt_depth) { ?>style="margin-left:<?php echo $cmt_depth ?>px;border-top-color:#e0e0e0"<?php } ?>>
        <header style="z-index:<?php echo $cmt_sv; ?>">
            <h2><?php echo get_text($list[$i]['wr_name']); ?>님의 <?php if ($cmt_depth) { ?><span class="sound_only">댓글의</span><?php } ?> 댓글</h2>
            <?php echo $list[$i]['name'] ?>
            <?php if ($is_ip_view) { ?>
            <span class="sound_only">아이피</span>
            <span>(<?php echo $list[$i]['ip']; ?>)</span>
            <?php } ?>
            <span class="sound_only">작성일</span>
            <span class="bo_vc_hdinfo"><i class="fa fa-clock-o" aria-hidden="true"></i> <time datetime="<?php echo date('Y-m-d\TH:i:s+09:00', strtotime($list[$i]['datetime'])) ?>"><?php echo $list[$i]['datetime'] ?></time></span>
            <?php
            include(G5_SNS_PATH.'/view_comment_list.sns.skin.php');
            ?>
        </header>

        <!-- 댓글 출력 -->
        <div class="cmt_contents">
        	<!-- 벌이뉨 예약 관련 코드 -->
        	<?php 
        	$ss_name = 'ss_secret_comment_'.$bo_table.'_'.$list[$i]['wr_id'];
        	if($list[$i]['wr_7']){ 
        	?>
            	<p>
    	        	<span style="color: blue;"> 
    	        	[<?php if($list[$i]['wr_7']==1){ echo "예약대기"; }else if($list[$i]['wr_7']==2){ echo "예약승인"; }else if($list[$i]['wr_7']==3){ echo "예약반려"; } ?>]
    	        	</span>
    	        	<span>
    	        	예약 날짜 : <?=$list[$i]['wr_9']?> 
    	        	</span>
            	</p>        
        	
        	   <?php 
        	   if(($member['mb_id'] == $list[$i]['mb_id'] && $member['mb_id']!="") || $is_admin || get_session($ss_name)){
        	       $opJson = json_decode($list[$i]['wr_8'],true);
        	   ?>
        	   <div class="dotline">
                	<p>
                	<span>[예약 내용] </span>
                	</p>
                	<p>
                	   <span>
                	   <?php 
                	       if($opJson[option]){
                	           echo "1차 옵션 [{$opJson[option]}]";
                	       }
                	       if($opJson[suboption]){
                	           echo ", 2차 옵션 [{$opJson[suboption]}]";
                	       }
                	       if($opJson[date]){
                	           if($json['mode']=="day"){
                	               if($opJson[option] || $opJson[option]) $comma = ", ";
                	               echo "{$comma}시간 [{$opJson[date]}]";
                	           }else{
                	               echo "시간 [{$opJson[date]}], 예약 갯수 [{$mJson['num_count']}]";
                	           }
                	       }
                	   ?>            	   
                	   </span>
                	</p>
                	<?php
                	   $op_count = count($mJson[option]);
                	   if($op_count > 0){
                	?>
                    	<p>
                    	   <span>
                    	       <?php 
                    	       foreach($mJson[option] as $key => $value){
                    	           foreach($mJson[option][$key] as $subkey => $subvalue){
                    	               if($key==0)
                    	                   echo "{$subkey} [{$subvalue}]";
                    	               else
                    	                   echo ", {$subkey} [{$subvalue}]";
                    	           }
                    	       }
                    	       ?>
                    	   </span>
                    	</p>
                	<?php }?>
                	
                	</div>
                	
        	   <?php }?>
        	<?php } ?>
            
            
            
            
            <!-- 벌이뉨 예약 관련 코드 -->
            
            <?php
            // 벌이뉨 예약시 아래 댓글들 비밀글 상관 없이 다 보이게 하기 
            // ss_secret_comment_booking_222 $ss_name = 'ss_secret_comment_'.$bo_table.'_'.$wr['wr_id'];
            if($member['mb_id'] == $list[$i]['mb_id'] && $list[$i]['wr_comment_reply'] == "" ) {
            	$view_commet[$list[$i]['wr_comment']] = $list[$i]['mb_id'];
            }
            
           
            if($list[$i]['mb_id'] == "" && $list[$i]['wr_comment_reply'] == ""){
            	
            	if(get_session($ss_name)){
            		$view_commet[$list[$i]['wr_comment']] = $ss_name;
            	}
            }
             
            if($member['mb_id'] != $list[$i]['mb_id'] && $member['mb_id']!="" && $list[$i]['wr_comment_reply'] != ""){
            	
            	if($view_commet[$list[$i]['wr_comment']] == $member['mb_id']){
            		
            		$comment_wr = $list[$i]['wr_comment'];
            		$pre_comment = sql_fetch("select wr_content from {$write_table} where wr_comment='$comment_wr'");
            		$comment = $pre_comment['wr_content'];
            		$comment = preg_replace("/\[\<a\s.*href\=\"(http|https|ftp|mms)\:\/\/([^[:space:]]+)\.(mp3|wma|wmv|asf|asx|mpg|mpeg)\".*\<\/a\>\]/i", "<script>doc_write(obj_movie('$1://$2.$3'));</script>", $comment);
            		
            	}
            }
            
            if($list[$i]['wr_comment_reply'] != ""){
            	if(get_session($view_commet[$list[$i]['wr_comment']])){
            		$comment_wr = $list[$i]['wr_comment'];
            		$pre_comment = sql_fetch("select wr_content from {$write_table} where wr_comment='$comment_wr'");
            		$comment = $pre_comment['wr_content'];
            		$comment = preg_replace("/\[\<a\s.*href\=\"(http|https|ftp|mms)\:\/\/([^[:space:]]+)\.(mp3|wma|wmv|asf|asx|mpg|mpeg)\".*\<\/a\>\]/i", "<script>doc_write(obj_movie('$1://$2.$3'));</script>", $comment);
            	}
            }
            // 벌이뉨 예약시 아래 댓글들 비밀글 상관 없이 다 보이게 하기
            ?>
            <p>
                <?php if (strstr($list[$i]['wr_option'], "secret")) { ?><img src="<?php echo $board_skin_url; ?>/img/icon_secret.gif" alt="비밀글"><?php } ?>
                <?php echo $comment ?>
            </p>
            
            
            
            <?php if($list[$i]['is_reply'] || $list[$i]['is_edit'] || $list[$i]['is_del']) {
                $query_string = clean_query_string($_SERVER['QUERY_STRING']);
				
                if($w == 'cu') {
                    $sql = " select wr_id, wr_content, mb_id from $write_table where wr_id = '$c_id' and wr_is_comment = '1' ";
                    $cmt = sql_fetch($sql);
                    if (!($is_admin || ($member['mb_id'] == $cmt['mb_id'] && $cmt['mb_id'])))
                        $cmt['wr_content'] = '';
                    $c_wr_content = $cmt['wr_content'];
                }

                $c_reply_href = './board.php?'.$query_string.'&amp;c_id='.$comment_id.'&amp;w=c#bo_vc_w';
                $c_edit_href = './board.php?'.$query_string.'&amp;c_id='.$comment_id.'&amp;w=cu#bo_vc_w';
  
             ?>
            <ul class="bo_vc_act">
                <!-- 
                <?php if(!$comment_yn){?>
                	<?php if ($list[$i]['is_reply']) { ?><li><a href="<?php echo $c_reply_href;  ?>" onclick="comment_box('<?php echo $comment_id ?>', 'c'); return false;" class="btn_b03">답변</a></li><?php } ?>
                <?php }?>
                 -->
                <!-- 벌이뉨 예약 관련 코드 버튼 노출 경우의 수-->
                <?php if($is_admin){?>
                	<?php if($list[$i]['wr_7']=="1"){?>
                		<li><span data-value="<?=$comment_id?>" data-type="2" class="btn_admin btn_b03 color_1 btn_exe" style="padding : 1px 5px 1px 5px; cursor: pointer; ">승인</span></li>
                		<li><span data-value="<?=$comment_id?>" data-type="3" class="btn_admin btn_b03 btn_exe" style="padding : 1px 5px 1px 5px; cursor: pointer; ">승인반려</span></li>
                	<?php }else if($list[$i]['wr_7']=="2"){?>
                		<li><span data-value="<?=$comment_id?>" data-type="3" class="btn_admin btn_b03 btn_exe" style="padding : 1px 5px 1px 5px; cursor: pointer; ">승인반려</span></li>     
                	<?php }else if($list[$i]['wr_7']=="3"){?>
                		<li><span data-value="<?=$comment_id?>" data-type="2" class="btn_admin btn_b03 color_1 btn_exe" style="padding : 1px 5px 1px 5px; cursor: pointer; ">승인</span></li>
                	<?php }?>      
                <?php }?>
                
                <?php if($member['mb_id'] == $list[$i]['mb_id'] && !$is_admin){?>
                	<?php if(get_session($ss_name) || $list[$i]['mb_id'] != "") {?>
                		<?php if($list[$i]['is_reply']) { ?><li><a href="<?php echo $c_reply_href;  ?>" onclick="comment_box('<?php echo $comment_id ?>', 'c'); return false;" data-value='<?=$list[$i]['wr_9']?>|<?=$list[$i]['wr_8']?>|<?=$list[$i]['wr_7']?>|<?=$comment_id?>' data-option="<?=$list[$i]['wr_option']?>" class="btn_b03 b_reply">추가요청</a></li><?php } ?>
                	<?php }?>
                <?php }else if($is_admin){?>
                	<?php if($list[$i]['is_reply']) { ?><li><a href="<?php echo $c_reply_href;  ?>" onclick="comment_box('<?php echo $comment_id ?>', 'c'); return false;" data-value='<?=$list[$i]['wr_9']?>|<?=$list[$i]['wr_8']?>|<?=$list[$i]['wr_7']?>|<?=$comment_id?>' data-option="<?=$list[$i]['wr_option']?>" class="btn_b03 b_reply">답변</a></li><?php } ?>
                <?php }?>
                
                <?php if($member['mb_id'] == $list[$i]['mb_id']){?>              
                	<?php if ($list[$i]['is_edit']) { ?><li><a href="<?php echo $c_edit_href;  ?>" onclick="comment_box('<?php echo $comment_id ?>', 'cu'); return false;" data-value='<?=$list[$i]['wr_9']?>|<?=$list[$i]['wr_8']?>|<?=$list[$i]['wr_7']?>|<?=$comment_id?>' class="btn_b03 b_edit">수정</a></li><?php } ?>
                	<?php if($list[$i]['wr_7'] != 2) {?>
                		<?php if ($list[$i]['is_del'])  { ?><li><a href="<?php echo $list[$i]['del_link'];  ?>" onclick="return comment_delete();" class="btn_b03">삭제</a></li><?php } ?>
                	<?php }?>
                <?php }else if($is_admin && $is_admin !="booking"){?>
                	<?php if ($list[$i]['is_edit']) { ?><li><a href="<?php echo $c_edit_href;  ?>" onclick="comment_box('<?php echo $comment_id ?>', 'cu'); return false;" data-value='<?=$list[$i]['wr_9']?>|<?=$list[$i]['wr_8']?>|<?=$list[$i]['wr_7']?>|<?=$comment_id?>' class="btn_b03 b_edit">수정</a></li><?php } ?>
                	<?php if ($list[$i]['is_del'])  { ?><li><a href="<?php echo $list[$i]['del_link'];  ?>" onclick="return comment_delete();" class="btn_b03">삭제</a></li><?php } ?>  
                <?php }?>
                <!-- 벌이뉨 예약 관련 코드 버튼 노출 경우의 수-->              
            </ul>
            <?php } ?>
        </div>
        <span id="edit_<?php echo $comment_id ?>" class="bo_vc_w"></span><!-- 수정 -->
        <span id="reply_<?php echo $comment_id ?>" class="bo_vc_w"></span><!-- 답변 -->

        <input type="hidden" value="<?php echo strstr($list[$i]['wr_option'],"secret") ?>" id="secret_comment_<?php echo $comment_id ?>">
        <textarea id="save_comment_<?php echo $comment_id ?>" style="display:none"><?php echo get_text($list[$i]['content1'], 0) ?></textarea>

    </article>
    <?php } ?>
    
    <?php
        // 벌이뉨 예약관련 코드
        if($total <= $booking_count) $is_booking = false;
        
        if(strtotime($end)<time()-24*60*60 ){
            $is_booking = false;
        }
        
        if($json['mode']=="last"){
            foreach ($days as $k => $v) {
                $temp = $days[$k]-$booking_count;
                $days[$k] = "{$temp} [$booking_count/$days[$k]]";
            }
        }else if($json['mode']=="day"){
            foreach ($days as $k => $v) {
                $temp = $v - $temp_days[$k];
                if($temp<0) $temp = 0;
                if($temp_days[$k]=="")$temp_days[$k]=0;
                $days[$k]= "{$temp} [$temp_days[$k]/$v]";
            }
        }
        // 벌이뉨 예약관련 코드
    ?>    
    <?php if ($i == 0) { //댓글이 없다면 ?><p id="bo_vc_empty">등록된 댓글이 없습니다.</p><?php } ?>

</section>
<!-- } 댓글 끝 -->

<?php if ($is_comment_write) {
    if($w == '')
        $w = 'c';
?>
<!-- 댓글 쓰기 시작 { -->
<aside id="bo_vc_w" class="bo_vc_w">
    <h2>댓글쓰기</h2>
    <form name="fviewcomment" id="fviewcomment" action="<?php echo $comment_action_url; ?>" onsubmit="return fviewcomment_submit(this);" method="post" autocomplete="off">
    <input type="hidden" name="w" value="<?php echo $w ?>" id="w">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="comment_id" value="<?php echo $c_id ?>" id="comment_id">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="is_good" value="">
    <input type="hidden" name="wr_6" value="">
    <input type="hidden" name="wr_8" value="">
    <!-- 벌이뉨 예약관련 -->
    <div class="booking_comment dotline_red"> </div>
    <!-- 벌이뉨 예약관련 -->
	<!-- 벌이뉨 예약관련 필드 -->
    <div class="bo_vc_w_wr">
        <div class="bo_vc_w_info" style="display: flex;">
            <span class="sound_only">옵션</span>
            <select name="wr_7" id="wr_7" class="frm_input wr_7">
                <option value="">일반댓글</option>
                <?php if($is_booking && $is_my_booking){ // $is_booking이 false면 전체 예약 못함?>
                <option value="1">예약</option>
                <?php } ?>
            </select>
            <input type="hidden" value="" class="wr_7_temp">
            <span style="align-self: center; color: red">
            	<?php if(!$is_booking){ ?>예약이 마감되었습니다.<?php }elseif(!$is_my_booking){ ?>1인당 예약 횟수를 초과 하셨습니다.<?php } ?>
            </span>
        </div> 
    </div>
    <!-- 벌이뉨 예약관련 필드 -->
    
    <span class="sound_only">내용</span>
    <?php if ($comment_min || $comment_max) { ?><strong id="char_cnt"><span id="char_count"></span>글자</strong><?php } ?>
    <textarea id="wr_content" name="wr_content" maxlength="10000" required class="required" title="내용" placeholder="댓글내용을 입력해주세요" 
    <?php if ($comment_min || $comment_max) { ?>onkeyup="check_byte('wr_content', 'char_count');"<?php } ?>><?php echo $c_wr_content; ?></textarea>
    <?php if ($comment_min || $comment_max) { ?><script> check_byte('wr_content', 'char_count'); </script><?php } ?>
    <script>
    $(document).on("keyup change", "textarea#wr_content[maxlength]", function() {
        var str = $(this).val()
        var mx = parseInt($(this).attr("maxlength"))
        if (str.length > mx) {
            $(this).val(str.substr(0, mx));
            return false;
        }
    });
    </script>

    <div class="bo_vc_w_wr">
        <div class="bo_vc_w_info add_sell">
            <!-- 벌이뉨 예약 관련 코드 추가 필드 -->
            <label for="wr_9" class="sound_only">예약날짜</label>
            <input type="text" id="wr_9"  class="frm_input wr_9 tooltip" size="25" placeholder="예약날짜" style="display: none;" title="예약날짜">
                    	
                    	
            <div class="boo_date_div goods_op" style="display: none; ">        	
                <select id="boo_date" class="frm_input boo_date tooltip"  title="예약시간">
            	<?php
            	   $tt=0;
            	   $end_timestamp = strtotime("{$start} {$end_time}");
            	   while(true){
            	       
            	       $time_gap = $time_op*$tt;
            	       $timestamp = strtotime("{$start} {$start_time} +{$time_gap} minute");
            	       $tt++;
    
            	       if($timestamp > $end_timestamp){
            	           /*<option value="<?=date("H:i", $end_timestamp)?>">예약시간 : <?=date("H:i", $end_timestamp)?></option>*/
            	           break;
            	       }else{
            	       ?>
            	           <option value="<?=date("H:i", $timestamp)?>">예약시간 : <?=date("H:i", $timestamp)?></option>
            	       <?php
            	       }
            	       if($tt>=1000){break;}
            	   }
            	?>
                </select>
            </div>
            
            
            
            <div class="goods_1ch_div goods_op" style="display: none; ">
                <select id="goods_1ch" class="frm_input goods_1ch tooltip"  title="1차 옵션">
                    <?php for($gg=0; $gg<count($goods_array); $gg++){
                        /*<option value="<?=$goods_array[$gg]?>"><?=$goods_array[$gg]?></option> */
                    ?>
                    <?php }?>                   
                 </select>
            </div> 
            
            
            
            <div class="goods_2ch_div goods_op" style="display: none; ">
                <select id="goods_2ch" class="frm_input goods_2ch tooltip"  title="2차 옵션">                 
                 </select>
            </div>               
            
            
            <?php if($json['mode']!="day" && $num_count==0){?>
                <label for="num_count" class="sound_only">예약갯수</label>
                <input type="number" required id="num_count" title="예약갯수" class="frm_input num_count num_count_text tooltip" size="5" placeholder="예약 갯수" style="display: none; max-width: 78px;" value="1">            
            <?php }else if($json['mode']!="day" && $num_count>=0){?>
                <select id="num_count" class="frm_input num_count tooltip"  title="예약갯수" style="display: none;">
                    <?php for($ii=1; $ii<=$num_count; $ii++){?>
                            <option value="<?=$ii?>"><?=$ii?> 개</option>
                    <?php }?>   
                </select>
            <?php }?>
            
            <?php if(!($boo_option=="")){?>
                <?php for($ii=0; $ii<count($boo_option); $ii++){ 
                        if($boo_option[$ii]=="이름" || $boo_option[$ii]=="성명" || $boo_option[$ii]=="입금자"){
                            $boo_name = $member['mb_name'];
                        }else{
                            $boo_name="";
                        }
                ?>
                        <label for="op_<?=$ii?>" class="sound_only" ><?=$boo_option[$ii]?></label>
                        <input title="<?=$boo_option[$ii]?>" type="text" value="<?=$boo_name?>" required id="op_<?=$ii?>" data-value="<?=$boo_option[$ii]?>"; class="frm_input op_<?=$ii?> boo_option tooltip" size="25" placeholder="<?=$boo_option[$ii]?>" style="display: none; margin-bottom: 2px;"> 
                <?php }?>       
            <?php }?>      
            
        	<!-- 벌이뉨 예약 관련 코드 추가필드 -->        
        
        
        
            <?php if ($is_guest) { ?>
            <label for="wr_name" class="sound_only">이름<strong> 필수</strong></label>
            <input type="text" name="wr_name" value="<?php echo get_cookie("ck_sns_name"); ?>" id="wr_name" required class="frm_input required" size="25" placeholder="이름">
            <label for="wr_password" class="sound_only">비밀번호<strong> 필수</strong></label>
            <input type="password" name="wr_password" id="wr_password" required class="frm_input required" size="25"  placeholder="비밀번호">
            <?php
            }
            ?>
            <?php
            if($board['bo_use_sns'] && ($config['cf_facebook_appid'] || $config['cf_twitter_key'])) {
            ?>
            <span class="sound_only">SNS 동시등록</span>
            <span id="bo_vc_send_sns"></span>
            <?php } ?>
            <?php if ($is_guest) { ?>
                <?php echo $captcha_html; ?>
            <?php } ?>
        </div>

        <div class="btn_confirm">
            <input type="checkbox" name="wr_secret" value="secret" id="wr_secret" >
            <label for="wr_secret"><i class="fa fa-lock" aria-hidden="true"></i><span class="sound_only">비밀글사용</span></label>
            <input type="submit" id="btn_submit" class="btn_submit" value="등록">
        </div>
    </div>
    </form>
</aside>

<script>
var save_before = '';
var save_html = document.getElementById('bo_vc_w').innerHTML;

function good_and_write()
{
    var f = document.fviewcomment;
    if (fviewcomment_submit(f)) {
        f.is_good.value = 1;
        f.submit();
    } else {
        f.is_good.value = 0;
    }
}

function fviewcomment_submit(f)
{
    var pattern = /(^\s*)|(\s*$)/g; // \s 공백 문자

    f.is_good.value = 0;
    var subject = "";
    var content = "";
    $.ajax({
        url: g5_bbs_url+"/ajax.filter.php",
        type: "POST",
        data: {
            "subject": "",
            "content": f.wr_content.value
        },
        dataType: "json",
        async: false,
        cache: false,
        success: function(data, textStatus) {
            subject = data.subject;
            content = data.content;
        }
    });

    if (content) {
        alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
        f.wr_content.focus();
        return false;
    }

    // 양쪽 공백 없애기
    var pattern = /(^\s*)|(\s*$)/g; // \s 공백 문자
    document.getElementById('wr_content').value = document.getElementById('wr_content').value.replace(pattern, "");
    if (char_min > 0 || char_max > 0)
    {
        check_byte('wr_content', 'char_count');
        var cnt = parseInt(document.getElementById('char_count').innerHTML);
        if (char_min > 0 && char_min > cnt)
        {
            alert("댓글은 "+char_min+"글자 이상 쓰셔야 합니다.");
            return false;
        } else if (char_max > 0 && char_max < cnt)
        {
            alert("댓글은 "+char_max+"글자 이하로 쓰셔야 합니다.");
            return false;
        }
    }
    else if (!document.getElementById('wr_content').value)
    {
        alert("댓글을 입력하여 주십시오.");
        return false;
    }

    if (typeof(f.wr_name) != 'undefined')
    {
        f.wr_name.value = f.wr_name.value.replace(pattern, "");
        if (f.wr_name.value == '')
        {
            alert('이름이 입력되지 않았습니다.');
            f.wr_name.focus();
            return false;
        }
    }

    if (typeof(f.wr_password) != 'undefined')
    {
        f.wr_password.value = f.wr_password.value.replace(pattern, "");
        if (f.wr_password.value == '')
        {
            alert('비밀번호가 입력되지 않았습니다.');
            f.wr_password.focus();
            return false;
        }
    }

    
    if(f.wr_7.value >= 1 || $(".wr_7_temp").val() >= 1){
        var data = new Object() ;
        data.num_count = $(".num_count").val();
    
        var boo_option = [];
        $(".boo_option").each(function(index){
        	var op = new Object()
        	op[$(this).attr("data-value")] = $(this).val();
        	boo_option[index] = op;
        });
    
        data.option = boo_option;
        jsonData = JSON.stringify(data);
        f.wr_6.value = jsonData;

        data = new Object();

        if($(".goods_1ch").val() != null)
            data.option = $(".goods_1ch").val(); // 1차 옵션;
        if($(".goods_2ch").val() != null)
            data.suboption = $(".goods_2ch").val(); // 2차 옵션;

        if(data.suboption === undefined || data.suboption == ""){
        	data.date = $(".boo_date").val(); // 예약 시간
        }else{
        	data.date = ""; // 예약 시간
        }

        
        jsonData = JSON.stringify(data);
        f.wr_8.value = jsonData;
        
    }

    
    <?php if($is_guest) echo chk_captcha_js();  ?>

    set_comment_token(f);

    document.getElementById("btn_submit").disabled = "disabled";

    return true;
}

function comment_box(comment_id, work)
{
    var el_id,
        form_el = 'fviewcomment',
        respond = document.getElementById(form_el);

    // 댓글 아이디가 넘어오면 답변, 수정
    if (comment_id)
    {
        if (work == 'c')
            el_id = 'reply_' + comment_id;
        else
            el_id = 'edit_' + comment_id;
    }
    else
        el_id = 'bo_vc_w';

    if (save_before != el_id)
    {
        if (save_before)
        {
            document.getElementById(save_before).style.display = 'none';
        }

        document.getElementById(el_id).style.display = '';
        document.getElementById(el_id).appendChild(respond);
        //입력값 초기화
        document.getElementById('wr_content').value = '';
        
        // 댓글 수정
        if (work == 'cu')
        {
            document.getElementById('wr_content').value = document.getElementById('save_comment_' + comment_id).value;
            if (typeof char_count != 'undefined')
                check_byte('wr_content', 'char_count');
            if (document.getElementById('secret_comment_'+comment_id).value)
                document.getElementById('wr_secret').checked = true;
            else
                document.getElementById('wr_secret').checked = false;
        }

        document.getElementById('comment_id').value = comment_id;
        document.getElementById('w').value = work;

        if(save_before)
            $("#captcha_reload").trigger("click");

        save_before = el_id;
    }
}

function comment_delete()
{
    return confirm("이 댓글을 삭제하시겠습니까?");
}
// 추가해주세요.
<?php if(!$comment_yn){?>
//comment_box('', 'c'); // 댓글 입력폼이 보이도록 처리하기위해서 추가 (root님)
<?php }?>
// 추가해주세요
comment_box('', 'c'); // 댓글 입력폼이 보이도록 처리하기위해서 추가 (root님)
<?php if($board['bo_use_sns'] && ($config['cf_facebook_appid'] || $config['cf_twitter_key'])) { ?>

$(function() {
    // sns 등록
    $("#bo_vc_send_sns").load(
        "<?php echo G5_SNS_URL; ?>/view_comment_write.sns.skin.php?bo_table=<?php echo $bo_table; ?>",
        function() {
            save_html = document.getElementById('bo_vc_w').innerHTML;
        }
    );
});
<?php } ?>


var SelectedDates = {};
var SeletedText = {};  
var board_skin_url = "<?=$board_skin_url?>";
var write_tabl = "<?=$write_table?>";
var view_wr_id = "<?=$view['wr_id']?>";

var closed_day = [0,0,0,0,0,0,0];
<?php if($json['closed_day']!="") {?>
closed_day = eval("<?=json_encode($json['closed_day'])?>")
<?php }

	foreach ($days as $k => $v) {
?>
		SelectedDates['<?=$k?>'] = '<?=$k?>';
		SeletedText['<?=$k?>'] = '<?=$v?>';
<?php
	}

    $day = G5_TIME_YMD ;
    $week = array("일요일" , "월요일"  , "화요일" , "수요일" , "목요일" , "금요일" ,"토요일") ;
    $weekday = $week[ date('w'  , strtotime($day)  ) ] ;     
?>


var jsonData = JSON.parse('<?=$view['wr_10']?>');
var seletJson;
var opCheckJson;

var todayCount = SeletedText['<?=G5_TIME_YMD?>'];
if(todayCount === undefined){
	todayCount = 0;
}else{
	todayCount = todayCount.split('[');
	todayCount = eval(todayCount[0]);
}

var end_ = "<?=$end?>";

</script>
<script src="<?=$board_skin_url?>/js/booking.view.js"></script>
<script>  
$(document).on("focusout",".num_count_text",function(){

    if($(this).val() <= 0) $(this).val(1);    
    if($(this).val() > todayCount) $(this).val(todayCount);

});

$(document).on("change","#goods_1ch",function(){
    var name = $(this).val();
    var json = seletJson;
    var opCheck = opCheckJson.goods.filter (function (object) {
	    if(object['name'] === name){
	        return object;
	    }else{
	    	return "";
	    }
	});

	var op = json.filter (function (object) {
	    if(object['option'] === name){
	        return object;
	    }else{
	    	return "";
	    }
	});

    if(opCheck[0].sub != ""){
        var sub = opCheck[0].sub.split(":");
        var data = "";
        var check = 0;

        for(var y=0; y<sub.length; y++){
            var selOp = op.filter (function (object) {
			    if(object['suboption'] === sub[y]){
			        return object;
			    }else{
			    	return "";
			    }
		    });
		    if(selOp != ""){
		    	data += "<option value='"+sub[y]+"' disabled>"+sub[y]+"</option>"
		    	check ++
			}else{
				data += "<option value='"+sub[y]+"'>"+sub[y]+"</option>"
			}
        }
    	$("#goods_2ch").empty();
        $("#goods_2ch").append(data);
        $(".goods_2ch_div").css("display","inline");
        $('.goods_1ch').val(name);
        $(".boo_date_div").hide();
   
    }else{
    	$(".boo_date_div").css("display","inline");
    	$(".goods_2ch_div").hide();
    	$("#goods_2ch").empty();
		if(op!=""){
			$(".goods_1ch option[value*='"+name+"']").prop('disabled',true);
		}
	} 
	
});

$(function() {            
    //댓글열기
    $(".cmt_btn").click(function(){
        $(this).toggleClass("cmt_btn_op");
        $("#bo_vc").toggle();
    });
    
    $(".wr_7").change( function() {
    	viewDateFild($(this).val());
    });
    
    $(".b_edit").click(function(){ // 수정버튼 누를때
        var wr = $(this).attr("data-value").split("|");
        
        var wr_9=wr[0]; // 예약 날짜

        var wr_8 = JSON.parse(wr[1]);
        
        var wr_7=wr[2]; // 에약모드 ""->일반, 1->예약, 2->예약승인, 3->예약반려
        var wr_id=wr[3];
        $(".wr_7").attr("name","").hide();
        $(".wr_7_temp").attr("name","wr_7");
        
        if(wr_7>=1){
        	viewDateFild(1);

            $.ajax({
                url: board_skin_url+"/edit.select.php",
                type: "POST",
                data: {
                    "write_table": write_tabl,
                    "bo_table" : g5_bo_table ,
                    "wr_id" : wr_id,
                    "date" : wr_9,
                    "pr_id" : view_wr_id
                },
                dataType: "json",
                async: false,
                cache: false,
                success: function(json, textStatus) {
                    var data = json.add;
                    if(data == null) data="";

                    console.log(json);
                	if(json != ""){

                    	checkOptionEdit(wr_9,json.option);
                    	
                    	if(data.num_count != ""){
                    	    $("#num_count").val(data.num_count);
                        }
                        for(var i=0; i<data.option.length; i++){
    
                            $(".boo_option").each(function(){
                                if($(this).attr("data-value") == Object.keys(data.option[i])){
                                    $(this).val(data.option[i][Object.keys(data.option[i])]);
                                    return false;
                                }
                             });
                        	//Object.keys(data.option[i])
                        	
                        }

        	        	if(!(wr_8.date === undefined)){
     	        		   $(".boo_date").val(wr_8.date);
     	        		}if(!(wr_8.option === undefined)){
     	        		   $('.goods_1ch').val(wr_8.option).trigger('change');
     	        		   $('.goods_2ch').val(wr_8.suboption)
            	        }
     	        	    $(".wr_9").val(wr_9);     

            			if(wr_7==2){
            				$(".wr_9").datepicker("disable");
            				$(".wr_9").attr("readonly","readonly");
            				$(".boo_option").attr("readonly","readonly");
            				$(".num_count").attr("readonly","readonly");
            				$(".boo_date option").not(":selected").attr("disabled", "disabled");//selectbox 고정
            			    
            				$(".goods_1ch option").not(":selected").attr("disabled", "disabled");//selectbox 고정
            				$(".goods_2ch option").not(":selected").attr("disabled", "disabled");//selectbox 고정
            			}
                	}
                	
                }
            });

			$(".wr_7_temp").val(wr_7);
        }else{
        	viewDateFild(0);
        }
    });
    
    $(".b_reply").click(function(){ // 답변 버튼 누를때
        viewDateFild(0);
        if($(this).attr("data-option") == "secret"){
        	$("input:checkbox[id='wr_secret']").prop("checked", true);
        }
        $(".wr_7").val("").hide();
        $(".wr_7_temp").val("");      
    });
    

	$(".wr_9").datepicker({ 
		changeMonth: true, 
		changeYear: true, 
		dateFormat: "yy-mm-dd",
		maxDate: end_,
		minDate: 0,
		 
		showButtonPanel: true,
		beforeShowDay: function(date1) {
			date = $.datepicker.formatDate("yy-mm-dd",date1);
			
            var Highlight = SelectedDates[date];
            
            var HighlighText = "예약 가능 수 : "+SeletedText[date];
            if (Highlight) {
            	var jbSplit = SeletedText[date].split('[');
                if(jbSplit[0]==0){
                	return [false, "gazettedHoliday", HighlighText];
                }else{
                    
                	if(closed_day[date1.getDay()] == 1){
                		return [false, "", "휴일"];
                    }else{
                        return [true, "gazettedHoliday", HighlighText];
                    }
                }
            }else {
                return [false, '', ''];
            }
		},
		onClose: function(selectedDate){
			if(selectedDate != ""){
				 checkOption(selectedDate);				 
			}

		}
	});	

	$(".tooltip").tooltipsy({
	    css: {
	        'padding': '10px',
	        'max-width': '200px',
	        'color': '#303030',
	        'background-color': '#f5f5b5',
	        'border': '1px solid #deca7e',
	        '-moz-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
	        '-webkit-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
	        'box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
	        'text-shadow': 'none'
	    }
	});	

	$(".btn_exe").click(function(){
		<?php if($is_admin){?>
        $.ajax({
            url: "<?=$board_skin_url?>/approval.update.php",
            type: "POST",
            data: {
                "write_table": "<?=$write_table?>",
                "bo_table" : g5_bo_table ,
                "wr_id": $(this).attr("data-value"),
                "type" : $(this).attr("data-type") 
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
            	result = data.result;
                msg = data.msg;
                if(result){
	                alert(msg);
	                location.reload();
                }
            }
        });
        <?php }?>
	});
	if(SeletedText['<?=G5_TIME_YMD?>'] === undefined) SeletedText['<?=G5_TIME_YMD?>'] = 0;
    $(".booking_comment").html("전체 예약 상황 [예약 : <?=$booking_count?>/<?=$total?>, 마감일 : <?=$end?>]");
    $(".booking_comment").append("<div style='margin-top:5px;'>금일(<?=G5_TIME_YMD?> <?=$weekday?>) 예약 가능 수 : "+SeletedText['<?=G5_TIME_YMD?>']+"</div>");
	$("#booking_count").html("예약 : <?=$booking_count?>");
    $(".s_cmt").html("내용확인");
    viewDateFild(0);
})
</script>
<?php } ?>
<!-- } 댓글 쓰기 끝 -->