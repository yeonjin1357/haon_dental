<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
include_once(G5_THEME_LIB_PATH.'/thumbnail2.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

$thumb_width  = isset($options['thumb_width']) ? $options['thumb_width'] : $board['bo_gallery_width'];
$thumb_height = isset($options['thumb_height']) ? $options['thumb_height'] : $board['bo_gallery_height'];
$content_length = isset($options['content_length']) ? $options['content_length'] : 30;
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<div class="gallery">
    <ul>
        <?php
        for ($i=0; $i<count($list); $i++) {
            $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);
			
    
            if($thumb['src']) {
                $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'">';
            } else {
                $noimg = $latest_skin_path.'/img/no_img.gif';
                $img_content = '<span>'.get_noimage_thumbnail($bo_table, $noimg, $thumb_width, $thumb_height, $class='no_img').'</span>';
            }

            $href_id = 'p_player_btn'.$i;
        ?>
            <li class="col-md-3 col-xs-12 col-sm-6">
                <div class="lt_image2">
                    <a href="<?php echo $list[$i]['href']; ?>">
                        <?php echo $img_content; ?>
                        <div class="re_more"></div>
                    </a>
                </div>
                <?php
                echo "<a href=\"".$list[$i]['href']."\" class=\"lt_tit2\">";
                if ($list[$i]['is_notice'])
                    echo "<strong>".$list[$i]['subject']."</strong>";
                else
                    echo $list[$i]['subject'];
                echo "</a>";
                 ?>
                <span class="lt_detail"><?php echo get_text(cut_str(strip_tags($list[$i]['wr_content']), $content_length), 1); ?></span>
            </li>
        <?php }  ?>
    
        <?php if ($i == 0) { //게시물이 없을 때  ?>
            <li class="no_bd">게시물이 없습니다.</li>
        <?php }  ?>
    </ul>
</div>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->