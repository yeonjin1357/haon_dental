<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/css/timepicki.css">', 0);
add_javascript('<script src="'.$board_skin_url.'/js/timepicki.js"></script>', 101);

// <!-- 벌이뉨 마감날짜 달력 -->
include_once(G5_PLUGIN_PATH.'/jquery-ui/datepicker.php');
// <!-- 벌이뉨 마감날짜 달력 -->


$json = json_decode($wr_10,true);
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
    $goods_array = implode( ':', $goods_array);
}

if($json['mode'] == "last" && $num_count==""){
    $num_count = 1;
}

?>
<style>
<!--
.booking{
	max-width: 100px;
	width: 25%;
}

.booking_time{
	max-width: 100px;
	width: 30%;
}

.dotline{

    margin-top: 5px; 
    padding: 10px 5px 10px 5px; 
    border: 0.1em dashed #bcbcbc;
}
.margin_top_5{
    margin-top: 5px;
}

.write_div > div{
    line-height:200%
}
.write_div{
    line-height:200%
}
-->
</style>

<section id="bo_w">
    <h2 class="sound_only"><?php echo $g5['title'] ?></h2>

    <!-- 게시물 작성/수정 시작 {  action="<?php echo $action_url ?>"-->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <textarea rows="2" cols="2" name="wr_10" class="wr_10" style="display: none;"><?php echo $wr_10 ?></textarea>
    
    <!-- <input type="hidden" name="wr_10" value=''> -->
    
    <?php
    $option = '';
    $option_hidden = '';
    if ($is_notice || $is_html || $is_secret || $is_mail) {
        $option = '';
        if ($is_notice) {
            $option .= "\n".'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'."\n".'<label for="notice">공지</label>';
        }

        if ($is_html) {
            if ($is_dhtml_editor) {
                $option_hidden .= '<input type="hidden" value="html1" name="html">';
            } else {
                $option .= "\n".'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="html">HTML</label>';
            }
        }

        if ($is_secret) {
            if ($is_admin || $is_secret==1) {
                $option .= "\n".'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'."\n".'<label for="secret">비밀글</label>';
            } else {
                $option_hidden .= '<input type="hidden" name="secret" value="secret">';
            }
        }

        if ($is_mail) {
            $option .= "\n".'<input type="checkbox" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'."\n".'<label for="mail">답변메일받기</label>';
        }
    }

    echo $option_hidden;
    ?>

    <?php if ($is_category) { ?>
    <div class="bo_w_select write_div">
        <label for="ca_name"  class="sound_only">분류<strong>필수</strong></label>
        <select name="ca_name" id="ca_name" required>
            <option value="">분류를 선택하세요</option>
            <?php echo $category_option ?>
        </select>
    </div>
    <?php } ?>

    <div class="bo_w_info write_div">
    <?php if ($is_name) { ?>
        <label for="wr_name" class="sound_only">이름<strong>필수</strong></label>
        <input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" placeholder="이름">
    <?php } ?>

    <?php if ($is_password) { ?>
        <label for="wr_password" class="sound_only">비밀번호<strong>필수</strong></label>
        <input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input <?php echo $password_required ?>" placeholder="비밀번호">
    <?php } ?>

    <?php if ($is_email) { ?>
            <label for="wr_email" class="sound_only">이메일</label>
            <input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input email " placeholder="이메일">
    <?php } ?>
    </div>

    <?php if ($is_homepage) { ?>
    <div class="write_div">
        <label for="wr_homepage" class="sound_only">홈페이지</label>
        <input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="frm_input full_input" size="50" placeholder="홈페이지">
    </div>
    <?php } ?>

    <?php if ($option) { ?>
    <div class="write_div">
        <span class="sound_only">옵션</span>
        <?php echo $option ?>
    </div>
    <?php } ?>

    <div class="bo_w_tit write_div">
        <label for="wr_subject" class="sound_only">제목<strong>필수</strong></label>
        
        <div id="autosave_wrapper write_div">
            <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input full_input required" size="50" maxlength="255" placeholder="제목">
            <?php if ($is_member) { // 임시 저장된 글 기능 ?>
            <script src="<?php echo G5_JS_URL; ?>/autosave.js"></script>
            <?php if($editor_content_js) echo $editor_content_js; ?>
            <button type="button" id="btn_autosave" class="btn_frmline">임시 저장된 글 (<span id="autosave_count"><?php echo $autosave_count; ?></span>)</button>
            <div id="autosave_pop">
                <strong>임시 저장된 글 목록</strong>
                <ul></ul>
                <div><button type="button" class="autosave_close">닫기</button></div>
            </div>
            <?php } ?>
        </div>
        
    </div>
    
    <!-- 벌이뉨 마감수 마감날짜 추가 -->
    <div class="write_div">        
        <label for="start" class="sound_only">시작날짜<strong>필수</strong></label>
        <input type="text" name="start" value="<?php echo $start ?>" id="start" required class="frm_input required booking" placeholder="시작날짜" >
        ~
        <label for="end" class="sound_only">마감날짜<strong>필수</strong></label>
        <input type="text" name="end" value="<?php echo $end ?>" id="end" required class="frm_input required booking" placeholder="마감날짜" >
        
        <div style="padding-top: 10px; " class="time_pick_div">
            <label for="start_time" class="sound_only">시작시간<strong>필수</strong></label>
            <input type="text" name="start_time" value="<?php echo $start_time ?>" id="start_time" required class="frm_input required booking_time" placeholder="시작시간" >
            ~
            <label for="end_time" class="sound_only">마감시간<strong>필수</strong></label>
            <input type="text" name="end_time" value="<?php echo $end_time ?>" id="end_time" required class="frm_input required booking_time" placeholder="마감시간" >  
            
                            예약 시간 단위 :  
            <span class="sound_only">옵션</span>
            <input type="radio" name="time_op" class="time_op" value="10" <?=($time_op=="10" || $time_op=="") ? "checked='checked'" : ""?>>10분 
    		<input type="radio" name="time_op" class="time_op" value="30" <?=$time_op=="30" ? "checked='checked'" : ""?>>30분 
    		<input type="radio" name="time_op" class="time_op" value="60" <?=$time_op=="60" ? "checked='checked'" : ""?>>1시간   
    		<input type="radio" name="time_op" class="time_op" value="120" <?=$time_op=="120" ? "checked='checked'" : ""?>>2시간   
    		<input type="radio" name="time_op" class="time_op" value="180" <?=$time_op=="180" ? "checked='checked'" : ""?>>3시간   
        </div> 
         
        
        <div style="padding-top: 10px; ">
        	<select class="frm_input" name="boo_count" id="boo_count">
        		<option value="0">1인 예약 제한 : 무제한</option>
        		<?for($r=1; $r<=10; $r++){?>
        		<option value="<?=$r?>" <?=$boo_count==$r ? "selected='selected'" : "" ?> >1인 예약 제한 : <?=$r?>회</option>
        		<?}?>
        	</select>
        	&nbsp;
            <span class="sound_only">옵션</span>
            <input type="radio" name="last_day" class="last_day" value="last" <?= $json['mode']=="last" ? "checked='checked'" : ($json['mode']=="day" ? "" : "checked='checked'")?>>마감(최종)
    		<input type="radio" name="last_day" class="last_day" value="day" <?= $json['mode']=="day"? "checked='checked'" : ""?>>마감(일별)
    		
            <div class="day_week_div"  <?=$json['mode']=="last" || $json['mode']=="" ? "style='display: none;'" : "style='display: inline;'"?>>
                <span class="sound_only">옵션</span>
            <?php for($yy=0; $yy<7; $yy++){?>
                <input type="checkbox" name="week_<?=$yy?>"  data-value="<?=$yy?>" class="week_<?=$yy?> check_week" <?= $bMode[$yy]=="1" ? "checked='checked'" : ""?>>
                <span ><?=$day_name[$yy]?> 제외</span>
    		<?php }?>
    		</div>
    		
            <div class="last_week_div" <?=$json['mode']=="day" ? "style='display: none;'" : "style='display: inline; '"?>>
                <span class="sound_only">옵션</span>
            <?php for($yy=0; $yy<7; $yy++){?>
                <input type="checkbox" name="last_week_<?=$yy?>"  data-value="<?=$yy?>" class="last_week_<?=$yy?> last_check_week" <?= $json['closed_day'][$yy]=="1" ? "checked='checked'" : ""?>>
                <span ><?=$day_name[$yy]?> 휴무</span>
    		<?php }?>
    		</div>    		
    		
    		
        </div>  
    </div>
    
    <div class="write_div last_people" <?=$total=="" ? ($avg=="" ? "" : "style='display: none;'") : ""?>>  
        <label for="last_people" >마감 갯수 : </label>
        <input type="number" name="last_people" value='<?=$total=="" ? 1 : $total?>' id="last_people" class="frm_input booking" placeholder="마감인원">
    	<select class="frm_input" name="num_count" id="num_count">
    		<option value="0">예약시 갯수 제한 : 무제한</option>
    		<?for($r=1; $r<=50; $r++){?>
    		<option value="<?=$r?>" <?=$num_count==$r ? "selected='selected'" : "" ?> >예약시 갯수 제한 : <?=$r?>개</option>
    		<?}?>
    	</select>        
            
    </div>
    
    
    
    <!-- 벌이뉨 제품 테이블 등 옵션 DIV -->
    <div class="write_div boo_goods dotline" <?=$avg=="" ? "style='display: none;'" : ""?> >
        <label for="boo_goods" >제품(룸,테이블 등)옵션 : </label>
        
        <?php 

        ?>
        <input type="text" value="<?=$goods_array?>" name="boo_goods" id="boo_goods" class="frm_input booking" style="width: 60%; max-width: 280px;" placeholder="제품 옵션 필드(:으로 구분, 사용 안할시 빈공간)">
        <div class="ex_goods" style="display: inline;">예 : 장미룸:백합룸:벛꽃룸 <span style="color:red;">※ 중요(사용 안할시 빈공간)</span></div> 
                
        <div id="boo_price" class="boo_price" style="margin-buttom: 15px;">
        
        </div>
        <div id="view_price" class="view_price" style="margin-buttom: 15px;"></div>      
    </div>
    <!-- 벌이뉨 제품 테이블 등 옵션 DIV -->      
    
    <!-- 벌이뉨 복사할 DIV -->
    <div class="co_price" style="display: none;">
        <div style=" margin-buttom: 5px; margin-top: 15px; ">
            <span style="color:red;">2차 옵션 예</span> : 3시간권(입실 11시):3시간권(입실 15시):종일권(입실 18시) <span style="color:red;">※ 중요(사용 안할시 빈공간)</span>
        </div>
    </div>
    <div id="temp_boo_price" class="temp_boo_price" style="display: none;">
        <div style="margin-top: 5px;" class="div_price">
            <div class="span_price" style="display: inline-block; min-width: 50px; max-width: 50px;"></div>
            <span> : </span>
            <input type="text" class="frm_input booking input_price" placeholder="2차 옵션(사용시 예약시간 무시)" style="min-width: 340px;">
            <div style="display: inline-block;" class="coment_price"></div>
        </div>       
    </div>
    <!-- 벌이뉨 복사할 DIV -->
    
    
    
    <div class="write_div avg_people" <?=$avg=="" ? "style='display: none;'" : ""?>>  
        <label for="avg_people" >평균 마감 예약 : </label>
        <input type="number" name="avg_people" value='<?=$avg==""? 1 : $avg?>' id="avg_people" class="frm_input booking" placeholder="평균 마감인원">  

		<button type="button" id="add_day" class="btn_frmline">예외 날짜 추가</button>
    </div>
    

    
    
    <div class="write_div dotline">
        <label for="boo_option" >추가 옵션 : </label>
        <input type="text" value="<?=$boo_option?>" name="boo_option" id="boo_option" class="frm_input booking" style="width: 60%; max-width: 280px;" placeholder="추가로 받을 필드(:으로 구분)">
        <div style="display: inline;">예 : 이름:전화번호:입금자</div>  
    </div> 
    
	<div class="write_div add_day_div">
	
	</div>   
	
	<div class="write_div add_week_div" style="max-height: 300px; overflow-y:scroll;">
	
	</div> 
    

    <div class="hide_add_day" style="display: none; "> 
    	<label for="add_date" >예외 날짜 : </label>
        <input type="text" name="add_date" class="frm_input add_date booking" placeholder="예외날짜" >
        <label for="add_num" >마감 예약 : </label>
        <input type="number" name="add_num" class="frm_input add_num booking" placeholder="마감 예약" value="1">  
    </div>
    
    
    <!-- 벌이뉨 마감수 마감날짜 추가 -->

    <div class="write_div">
        <label for="wr_content" class="sound_only">내용<strong>필수</strong></label>
        
        <div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
            <?php } ?>
            <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <div id="char_count_wrap"><span id="char_count"></span>글자</div>
            <?php } ?>
        </div>
        
    </div>

    <?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
    <div class="bo_w_link write_div">
        <label for="wr_link<?php echo $i ?>"><i class="fa fa-link" aria-hidden="true"></i><span class="sound_only"> 링크  #<?php echo $i ?></span></label>
        <input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo $write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="frm_input full_input" size="50">
    </div>
    <?php } ?>

    <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
    <div class="bo_w_flie write_div">
        <div class="file_wr write_div">
            <label for="bf_file_<?php echo $i+1 ?>" class="lb_icon"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only"> 파일 #<?php echo $i+1 ?></span></label>
            <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
        </div>
        <?php if ($is_file_content) { ?>
        <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
        <?php } ?>

        <?php if($w == 'u' && $file[$i]['file']) { ?>
        <span class="file_del">
            <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
        </span>
        <?php } ?>
        
    </div>
    <?php } ?>


    <?php if ($is_use_captcha) { //자동등록방지  ?>
    <div class="write_div">
        <?php echo $captcha_html ?>
    </div>
    <?php } ?>


    <div class="btn_confirm write_div">
        <a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_cancel btn">취소</a>
        <input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="btn_submit btn">
    </div>
    </form>

    <script>
    <?php if($write_min || $write_max) { ?>
    // 글자수 제한
    var char_min = parseInt(<?php echo $write_min; ?>); // 최소
    var char_max = parseInt(<?php echo $write_max; ?>); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
        $("#wr_content").on("keyup", function() {
            check_byte("wr_content", "char_count");
        });
    });

    <?php } ?>
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.wr_subject.value,
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
        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_wr_content) != "undefined")
                ed_wr_content.returnFalse();
            else
                f.wr_content.focus();
            return false;
        }

       
        if(Number(($("#start_time").val().replace(":", "")).replace(/(^0+)/, "")) >= 
            Number(($("#end_time").val().replace(":", "")).replace(/(^0+)/, ""))){

        	$("#start_time").focus();
        	alert("시작시간이 마감시간보다 클 수 없습니다.");
        	return false;
        }

        getJsonFild();

        if (document.getElementById("char_count")) {
            if (char_min > 0 || char_max > 0) {
                var cnt = parseInt(check_byte("wr_content", "char_count"));
                if (char_min > 0 && char_min > cnt) {
                    alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                    return false;
                }
                else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }

        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }

    /* 벌이뉨 예약 관련 스크립트 */
    
    var count_html=0; /* 예외 날짜 추가 id 유일값 가지게 함 */

    var start_time_val =  ["08", "00"];
    var end_time_val = ["18", "00"];
    var view_time;
    
    <?php if($start_time !=""){?>
    view_time = '<?=$start_time?>'.split(":");
    start_time_val = view_time; 
    <?php }?>
    
    <?php if($end_time !=""){?>
    view_time = '<?=$end_time?>'.split(":");
    end_time_val = view_time;
    <?php }?>   

    </script>
    <script src="<?=$board_skin_url?>/js/booking.js"></script>
    <script>	    
    $(document).on("focusout",".d_boo_goods",function(){ /* 예외 날짜 추가에서 1차 옵션 나갈때 */

    	var id = $(this).attr("data-value");  
		if($(this).val() != ""){
			
			var v = $(this).val().split(":");
			v = v.reduce(function(a,b){if(a.indexOf(b)<0)a.push(b);return a;},[]);  /* 중복값 제거 */
			$(this).val(v.join(':')); /* 중복된 값 제거후 다시 넣기 */

			$("#add_num_"+id).val(v.length).attr("readonly","readonly");

			if($(".span_price_copy_"+id).length == 0){
				 
			    $("#d_boo_price_"+id).html($(".co_price").html());
		
			    for(var i=0; i<v.length; i++){
				    var $p=$("<div>"+$(".temp_boo_price").html()+"</div>"); 
				    $p.find(".div_price").removeClass("div_price").addClass("div_price_"+id);
				    $p.find(".span_price").addClass("span_price_copy_"+id).html(v[i]);
				    $p.find(".input_price").addClass("input_price_copy_"+id).attr("data-value",i).attr("data-name",v[i]).attr("data-fild",id);
				    $p.find(".coment_price").addClass("coment_price_"+id+"_"+i);
				    
				    $("#boo_price_"+id).append($p.html());
				}
			}else{

				
				var i=0
				for(i=0; i<v.length; i++){
					if($(".span_price_copy_"+id).eq(i).html() != v[i] && !($(".span_price_copy_"+id).eq(i).html() === undefined)){

						$(".span_price_copy_"+id).eq(i).html(v[i]);
						$(".input_price_copy").eq(i).attr("data-value",i).attr("data-name",v[i]);
						
					}else if($(".span_price_copy_"+id).eq(i).html() === undefined){							
						
					    var $p=$("<div>"+$(".temp_boo_price").html()+"</div>"); 
					    $p.find(".div_price").removeClass("div_price").addClass("div_price_"+id);
	    				
    				    $p.find(".span_price").addClass("span_price_copy_"+id).html(v[i]);
    				    $p.find(".input_price").addClass("input_price_copy_"+id).attr("data-value",i).attr("data-name",v[i]).attr("data-fild",id);
    				    $p.find(".coment_price").addClass("coment_price_"+id+"_"+i);
    				    $("#boo_price_"+id).append($p.html());
					}
				}

				var end = $(".span_price_copy_"+id).length;

			    if(end != v.length){
				    for(i=v.length; i<end; i++){
				    	  $(".span_price_copy_"+id).eq(i).closest(".div_price_"+id).addClass("remove_preic");
				    }			 			
			    }
			    $(".remove_preic").remove();

			}
		}else{
			$("#boo_price_"+id).html("");
			$("#add_num_"+id).removeAttr("readonly");
		}

		 $(".input_price_copy_"+id).eq(0).trigger("focusout");

	});

    $(document).on("click",".del_day",function(){ /* 예외 날짜 추가 제거 */
        if($(".d_boo_goods").length == 1) count_html=0;
		$(".add_html_"+$(this).attr("value")).remove();
		addSelectCopy();
    });

    $(document).on("focusout",".input_price",function(){ /* 벌이뉨 예외 날짜 추가에서 2차 옵션 나갈때  */
        var id = $(this).attr("data-fild");
    	var count=0;
    	var is_check=false;
        $(".input_price_copy_"+id).each(function(){
        	if($(this).val() != ""){
        		var v = $(this).val().split(":");
    			v = v.reduce(function(a,b){if(a.indexOf(b)<0)a.push(b);return a;},[]);  /* 중복값 제거 */
    			$(this).val(v.join(':')); /* 중복된 값 제거후 다시 넣기 */

    			if(v.length!=1){
        			var html = "미리보기 : <select class='frm_input'>";
        			for(var i=0; i<v.length; i++){
        				html+="<option>"+v[i]+"</option>";
            		}
        			html+="</select>";
        		    $(".coment_price_"+$(this).attr("data-fild")+"_"+$(this).attr("data-value")).html(html);
    			}
    			count+=v.length;
    			is_check=true;
            }else{
            	$(".coment_price_"+$(this).attr("data-fild")+"_"+$(this).attr("data-value")).html("");
            	count++;
            }
        });
        
        if(is_check){
            $("#add_num_"+id).val(count).attr("readonly","readonly");
        }else{
        	$("#add_num_"+id).val(count);
        } 
    });

    $(document).on("focusout",".input_price_copy",function(){ /* 최 상단 제품 제품 옵션에서 2차 옵션 나갈때 (1차 나가는건 $("#boo_goods").focusout()에 있음 )*/

    	var count=0;
    	var is_check=false;
        $(".input_price_copy").each(function(){
        	if($(this).val() != ""){
        		var v = $(this).val().split(":");
    			v = v.reduce(function(a,b){if(a.indexOf(b)<0)a.push(b);return a;},[]); /* // 중복값 제거 */
    			$(this).val(v.join(':')); /* // 중복된 값 제거후 다시 넣기 */

    			var html = "미리보기 : <select class='frm_input'>";
    			for(var i=0; i<v.length; i++){
    				html+="<option>"+v[i]+"</option>";
        		}
    			html+="</select>";
    		    $(".coment_price_"+$(this).attr("data-value")).html(html);
    	
    			count+=v.length;
    			is_check=true;
            }else{
            	$(".coment_price_"+$(this).attr("data-value")).html("");
            	count++;
            }
        });
        
        if(is_check){
            $("#avg_people").val(count).attr("readonly","readonly");
            /* $(".time_pick_div").hide(); */

            if($("#start_time").val()==""){$("#start_time").val(start_time_val.join(":"))};
            if($("#end_time").val()==""){$("#end_time").val(end_time_val.join(":"))};
    
        }else{
        	$("#avg_people").val(count);
        	$(".time_pick_div").show();
        } 

        /* console.log(is_check); */
              
    });    

    var save_temp_filed = [];
    var save_temp_div = [];
    var save_trmp_div_fild = [];
    var save_count_div = [];
    
    $(document).on("change",".copy_fild",function(){
        var my_num = $(this).attr("data-value");
        if(save_count_div[my_num] === undefined){
        	save_count_div[my_num]=1; /* 최초접근 */
        }else{
        	save_count_div[my_num]=0;
        }

        if($(this).val() != 0){
            if(save_count_div[my_num]==1){
                save_temp_filed[my_num] = $("#boo_goods_"+my_num).val();
                save_temp_div[my_num] = $("#boo_price_"+my_num).html();
                var fild=[];
                $(".input_price_copy_"+my_num).each(function(index){
                	fild[index] = $(this).val();
                });
                
                save_trmp_div_fild[my_num] = fild;
            }
            var copy_num = $(".d_boo_goods").eq($(this).val()-1).attr("data-value");

            $("#boo_goods_"+my_num).val($("#boo_goods_"+copy_num).val());
            var $p=$("<div>"+$("#boo_price_"+copy_num).html()+"</div>");

            $p.find(".div_price_"+copy_num).removeClass("div_price_"+copy_num).addClass("div_price_"+my_num);
            $p.find(".span_price_copy_"+copy_num).removeClass("span_price_copy_"+copy_num).addClass("span_price_copy_"+my_num);
            $p.find(".input_price_copy_"+copy_num).removeClass("input_price_copy_"+copy_num).addClass("input_price_copy_"+my_num).attr("data-fild",my_num);
            $p.find(".input_price_copy_"+my_num).each(function(){
                console.log($(this).attr("data-value"))
                $p.find(".coment_price_"+copy_num+"_"+$(this).attr("data-value")).removeClass("coment_price_"+copy_num+"_"+$(this).attr("data-value")).addClass("coment_price_"+my_num+"_"+$(this).attr("data-value"));
                
            })
            $("#boo_price_"+my_num).html($p.html());

            $(".input_price_copy_"+copy_num).each(function(index){
                $(".input_price_copy_"+my_num).eq(index).val($(this).val());
            });
            
        }else{
            $("#boo_goods_"+my_num).val(save_temp_filed[my_num]);
            $("#boo_price_"+my_num).html(save_temp_div[my_num]);

            for(var i=0; i<save_trmp_div_fild[my_num].length; i++){
            	$(".input_price_copy_"+my_num).eq(i).val(save_trmp_div_fild[my_num][i]);
            }
            save_count_div[my_num] = undefined;
        }
        $(".input_price_copy_"+my_num).eq(0).trigger("focusout");        
    });
    

    $(function(){

    	$('#start_time').timepicki({
    		show_meridian:false,
    		min_hour_value:5,
    		max_hour_value:20,
    		step_size_minutes:10,
    		overflow_minutes:true,
    		increase_direction:'up',
    		disable_keyboard_mobile: true,
    		start_time: start_time_val
        });

        
    	$('#end_time').timepicki({
    		show_meridian:false,
    		min_hour_value:6,
    		max_hour_value:23,
    		step_size_minutes:10,
    		overflow_minutes:true,
    		increase_direction:'up',
    		disable_keyboard_mobile: true,
    		start_time: end_time_val
        });

        $(".check_week").click(function(){ /*예외 요일 추가 클릭시 */
        	del_week($(this));
        });


		$("#boo_option").focusout(function(){ /* 입력옵션(이름:전화번호:입금자) 필드*/
			var v = $(this).val().split(":");
			v = v.reduce(function(a,b){if(a.indexOf(b)<0)a.push(b);return a;},[]); // 중복값 제거
			$(this).val(v.join(':')); /* 중복된 값 제거후 다시 넣기 */
		});

		$("#boo_goods").focusout(function(){ /*제품(룸,테이블 등)옵션*/
			setGoods("#boo_goods");
		});
		
        $(".last_day").click(function(){/* 마감(최종) 마감(일별) 클릭시 */
			if($(this).val()=="last"){
				$(".avg_people").hide();
				$(".last_people").show();
				$(".boo_goods").hide();
				$(".add_week_div").hide(); 
				$(".add_day_div").hide();				
				$(".day_week_div").hide();
				$(".last_week_div").show().css("display","inline");
			
			}else{
				$(".last_people").hide();
				$(".avg_people").show();
				$(".boo_goods").show();


				$(".add_week_div").show(); 
				$(".add_day_div").show();
				
				$(".day_week_div").show().css("display","inline");
				$(".last_week_div").hide();
			}
        });
		
        $("#add_day").click(function(){ /* 외예 날짜 추가 */
        	addDay();
        });

    	$.datepicker.setDefaults($.datepicker.regional['ko']); 
        $('#start').datepicker({
            showButtonPanel: true,
            dateFormat: "yy-mm-dd",             
            changeMonth: true,                 
            changeYear: true,
            onClose: function( selectedDate ) {                 
                $(".check_week").each(function(){
                	if($(this).is(":checked")){
            			$(".week_div_"+$(this).attr("data-value")).remove();
                		del_week($(this));
                	}
                });
                $("#end").datepicker( "option", "minDate", selectedDate );
            }                
        });

        $('#end').datepicker({
            showButtonPanel: true,
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            onClose: function( selectedDate ) {
                $(".check_week").each(function(){
                	if($(this).is(":checked")){
                		$(".week_div_"+$(this).attr("data-value")).remove();
                		del_week($(this));
                	}
                });
                $("#start").datepicker( "option", "maxDate", selectedDate );
            }                
        });
	
        <?php 
        if($goods_sub_array != ""){
        ?>
        	var goods_sub = [];
        <?php
        	for($k=0; $k < count($goods_sub_array); $k++){
        ?>
        		goods_sub[<?=$k?>] = "<?=$goods_sub_array[$k]?>";
        <?php 	
        	} 	
        ?>		
        	setGoods("#boo_goods",goods_sub);
        <?php 		
        }else{
        ?>
        	setGoods("#boo_goods");
        <?php 	
        }
	    ?>
    	 

    	 <?php 
    	   for($tt=0; $tt<7; $tt++){
    	       if($bMode[$tt] == 1){
    	 ?>
    	            calcDate($('#start').val(), $('#end').val(), <?=$tt?>);
    	 
    	 <?php 
                }
            }
         ?>

 	    <?
 	    	for($k=0; $k < count($json['data']); $k++){
 	    		if($json['data'][$k][option] == 7){
 	    			
 	    ?>		
 	    			addDay('<?=$json['data'][$k]['day']?>', '<?=$json['data'][$k]['num']?>', eval('<?=json_encode($json['data'][$k]['goods'])?>'));
 	    <?
 	    		}
 	    	}    	
         
         ?>
         
 
    });
 	// <!-- 벌이뉨 마감날짜 달력 -->
    
    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->