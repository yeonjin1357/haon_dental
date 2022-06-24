<?php
// 스킨파일은 단독으로 실행할 수 없다
if(defined('_GNUBOARD_') == false) {
    exit('스킨파일은 단독으로 실행할 수 없습니다.');
}

// 삭제후 파라미터 유지.
$qstr .= '&office_no='.$office_no.'&select='.$select;

?>