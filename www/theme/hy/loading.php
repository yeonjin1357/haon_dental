<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<div class="loading">
	<div class="loader-wrapper">
        <div class="loading_logo-wrapper">
          <div class="loading_logo">
            <img src="<? echo G5_THEME_IMG_URL; ?>/loading_logo.png">
          </div>
        </div>
    </div>
</div>

<style>
.loader-wrapper{position:fixed;z-index:1090;height:100vh;width:100vw;background-color:rgba(240,240,240,0.5);}
.loading_logo-wrapper{height: 200px;width: 200px;border: 4px solid #333;position:absolute;top:50%;left:50%;transform:translateX(-50%) translateY(-50%) scale(0.8);background:white;
  animation:bg 0.5s linear infinite;/* border-bottom:3px solid #404143; */border-radius: 100%;overflow:hidden;box-shadow:inset 0px 0px 10px 4px rgba(0,0,0,0.3),inset 0px 0px 5px 0px #1DD3D6;}
.loading_logo-wrapper:after{content:'로딩중입니다';font-size:20px;position:absolute;bottom:0px;text-align:center;width:100%;border-top:1px solid #1DD3D6;
background: rgb(30,252,200);
background: -moz-linear-gradient(left, rgba(51,51,51,1) 0%, rgba(70,70,70,1) 100%);
background: -webkit-linear-gradient(left, rgba(51,51,51,1) 0%,rgba(70,70,70,1) 100%);
background: linear-gradient(to right, rgba(51,51,51,1) 0%,rgba(70,70,70,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1efcc8', endColorstr='#1dd3d6',GradientType=1 );
  color:white;padding-top:8px;padding-bottom:18px;animation: bg 3s linear infinite;}
.loading_logo{position:absolute; }

.loading img{width: 80%; position: relative; left: 50%; transform:translateX(-50%); top: 10px;}



@keyframes container {
  
  30%{
    transform:rotate(1deg);
  }
  50%{
    top:11px;
  }
  
  70%{
    top:10px;
    transform:rotate(-1deg);
  }
}


@keyframes bg {
  from{
    background-position-x:0px;
  }
  to{
    background-position-x:-400px;
  }
}


</style>