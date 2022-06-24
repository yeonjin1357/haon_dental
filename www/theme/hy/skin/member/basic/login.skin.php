<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 로그인 시작 { -->
<div id="login_bg">
    <div id="mb_login" class="mbskin">
        <h1><?php echo $g5['title'] ?></h1>
        <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
        <input type="hidden" name="url" value="<?php echo $login_url ?>">
    
        <fieldset id="login_fs">
            <legend>로그인</legend>
            <input type="text" name="mb_id" id="login_id" placeholder=" 아이디를 입력해주세요" required class="frm_input required" size="20" maxLength="20">
            <input type="password" name="mb_password" placeholder=" 비밀번호를 입력해주세요" id="login_pw" required class="frm_input required" size="20" maxLength="20">
            <input type="submit" value="로그인" class="btn_submit">
            <input type="checkbox" name="auto_login" id="login_auto_login" class="login_auto_login">
            <label for="login_auto_login" class="auto_login">자동로그인</label>
            <!-- <span class="login_info"><a href="<?php echo G5_BBS_URL ?>/password_lost.php" target="_blank" id="login_password_lost">아이디 비밀번호 찾기</a></span> -->
        </fieldset>
        <div class="btn_confirm">
            <a href="<?php echo G5_URL ?>/">메인으로 돌아가기</a>
        </div>
        </form>
    </div>  
</div>

<script>
$(function(){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 끝 -->