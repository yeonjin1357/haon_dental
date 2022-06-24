$(function () {
    $(document).ready(function () {
		w_screen = document.body.clientWidth; 
		wBar = Config('wBar');
		if(w_screen<719){
			var wh_con = ($(".wh_con").height())+(wBar*2) ;
			var sH = $(".section").height()-52-40-25;
			if((sH-wh_con)>0){
				sB = (sH-wh_con)/2;
				sB = sB + 70;
				$("#main > .spaceTop").css("height", sB+"px");
			} else {
				$("#main > .spaceTop").css("height", "5px");
			}

		} else {

			var wh_con = ($(".wh_con").height())+97+86+(wBar*2);
			var sH = h_screen;
			if((sH-wh_con-60)>0){
				sB = (sH-wh_con)/2;
				$("#main > .spaceTop").css("height", sB+"px");
			} else {
				$("#main > .spaceTop").css("height", "5px");
			}

		}

		$(window).resize(function (){
			if(w_screen<719){
				var wh_con = ($(".wh_con").height()) ;
				var sH = $(".section").height()-52-40-25;
				if((sH-wh_con)>0){
					sB = (sH-wh_con)/2;
					$("#main > .spaceTop").css("height", sB+"px");
				} else {
					$("#main > .spaceTop").css("height", 0);
				}
				clearInterval(loop);
				/*
				if($('.mbg').length>0){
					$('.mbg').remove();
				}*/
			} else {
				wh_con = ($(".wh_con").height())+97+86;
				sH = $(".section").height(); 
				if((sH-wh_con-60)>0){
					sB = (sH-wh_con)/2;
					$("#main > .spaceTop").css("height", sB+"px");
				} else {
					$("#main > .spaceTop").css("height", 0);
				}
				/*
				if($('.mbg').length<=0){
					$('#s6').find('.fp-tableCell').before(mbg);
				}*/
			}
		});

        if ($('#fullpage .section').length > 0) {
            //pageVisual(1);
        }
        initFullpage();


		if(w_screen>719){
			//sub6(1);
		} else {
			//sub6(0);
		}

		init();

		$('.nTit').click(function(){
			wr_id = $(this).find('a').attr('wr_id');
			boardView('community_05', wr_id, '', 1);
		});
		$('.notice').find('.nMore').click(function(){
			boardList('community_05', 1, '');
		});

    })
});


function boardList(bo_table, page, sca){
	$('#sub').empty()
	$('#sub').append('<div class="noticePopup"></div>');
	$('#sub').find('.noticePopup').load("./bbs/board.php?bo_table="+bo_table+"&page="+page+"&sca="+encodeURI(sca));
	$('#sub').fadeIn(function() {
		disableScroll();
	});
}

function boardView(bo_table, wr_id, sca, page){
	$('#sub').empty()
	$('#sub').append('<div class="noticePopup"></div>');
	$('#sub').find('.noticePopup').load("./bbs/board.php?bo_table="+bo_table+"&wr_id="+wr_id+"&sca="+encodeURI(sca)+"&page="+page);

	$('#sub').fadeIn(function() {
		disableScroll();
	});
}

function initFullpage() {
    if($.fn.fullpage.destroy) {
        $.fn.fullpage.destroy('all');
    }
    if(window.section == undefined) {
       // window.section = 1;
    }

	var bgUrl;
    $('#fullpage').fullpage({
		verticalCentered: true,
		anchors: ['mainPage', '1stPage', '2ndPage', '3rdPage', '4thPage', '5thPage', '6thPage', '7thPage', '8thPage'],
		scrollOverflow: true,
		normalScrollElements: '.scrollBox, #bo_v_con, .tbl_wrap, #map, .noticePopup',
        touchSensitivity: 10,
		navigation: true,
		navigationPosition: 'right',
        onLeave: function (index, nextIndex, direction) {
			$(".bd_wrap").eq(index-1).find(".img").stop().animate({ opacity:0},'1000');
			$(".bd_wrap").eq(nextIndex-1).find(".img, .tit, .con, .more").css({
				opacity: 0,
				top: 40
			});
			$("#main .img").removeClass("tracking-in-contract");
			$('#footer').css('display', 'none');


			if($('.menu_wrap').css("right")=="0px"){
				/*
				$('.menu_wrap').stop().animate({right:"-200%"}, 1000);
				$('.menu_open').stop().animate({opacity:1}, 500);
				*/
				$('.menu_wrap').css('right', '-200%');
				$('.menu_open').css('opacity', '1');
				enableScroll();
			}
			/*
			if(w_screen>320 && index==7)
			{
				loop = 0;
				cnt = 1;
				num = 0;
				$('.mbg').find('li').css('opacity', '0');
				$('.mbg').find('li:eq(0)').css('opacity', '1');
				clearInterval(loop);
			}
			*/
		},
		afterLoad: function(anchorLink, index) {

			currentS = $(this);
			
			if(w_screen<719){
				$('#footer').css('display', 'block');

				obj = $(this);
				$(this).find('.more > a').click(function(){
					alt = $(this).attr('alt');
					mobileSubCon(obj, alt);
				});
			}
			var animateTime = 1000;
			var delay = 0;

			$(this).find(".img, .tit, .con, .more").each(function() { 
				var $target = $(this);
				setTimeout(function() {
					$target.animate({
						opacity: 1,
						top: 0
					}, animateTime, 'easeOutCubic');
				}, delay);
				animateTime = animateTime - 200;
				delay = delay + 200;
			});
			/*
			if(w_screen>320){
				if(index==7)
				{
					loop = setInterval(function(){
						prev = num;
						tot = $('.mbg').find('li').size();
						num = cnt%tot;
						$('.mbg').find('li:eq('+prev+')').stop().animate({opacity:0}, 2000);
						$('.mbg').find('li:eq('+num+')').stop().animate({opacity:1}, 2000);
						cnt++;
					}, 5000);
				} else {
					clearInterval(loop);
				}
			} else {
				clearInterval(loop);
			};
			*/

			$(this).find("#main .img").addClass("tracking-in-contract");
		}
    });
	/*
    setTimeout(function() {
        if (window.section > 1) {
            //$.fn.fullpage.silentMoveTo(window.section);
        }
		if(w_screen>320){
			$('#s6').find('.fp-tableCell').before('<ul class="mbg"><li class="s1bg1"></li><li class="s1bg2"></li><li class="s1bg3"></li><li class="s1bg4"></li><li class="s1bg5"></li></ul>');
		}
    });
	*/
}


function init(){
	$('.more > a').click(function() {
		var url = $(this).attr('alt');
		SubCon(url);
	});
	$('.sub_more > a').click(function() {
		var url = $(this).attr('alt');
		SubCon(url);
	});
	$('.sub_more2 > a').click(function() {
		var url = $(this).attr('alt');
		SubCon2(url);
	});
	$('.morepage > a').click(function() {
		var url = $(this).attr('alt');
		SubConpage(url);
	});

	$('.menu_open').click(function(){
		$('.menu_wrap').stop().animate({right:0}, 500);
		$('.menu_open').stop().animate({opacity:0}, 500);
		disableScroll();
	});

	$('.menuClose').click(function(){
		$('.menu_wrap').stop().animate({right:"-200%"}, 1000);
		$('.menu_open').stop().animate({opacity:1}, 500);
		enableScroll();
	});

	$('#memWrap ul li a').click(function() {
		$('.menu_wrap').stop().animate({right:"-200%"}, 1000);
		$('.menu_open').stop().animate({opacity:1}, 500);
		enableScroll();
	});

	$("#Navi > li span").click(function() {
		var url = $(this).attr('alt');
		NavUrl(url);
	});
	$("#myMenu > li span").click(function() {
		$(".menu_wrap").stop().animate({right:"-200%"}, 1000);
		$('.menu_open').stop().animate({opacity:1}, 500);
		var url = $(this).attr('alt');
		NavUrl(url);
	});

  /*
	$(".login").click(function() {
		var loginWidth = $(".loginPopup").width();                               
		var qLeftVal = (w_screen/2)-(loginWidth/2);
		  
		var loginHeight = $(".loginPopup").height();                               
		var qTopVal = (h_screen/2)-(loginHeight/2);
		if(h_screen<600) qTopVal=0;
		  
		$(".loginPopup").css("left", qLeftVal+"px");
		$(".loginPopup").css("top", qTopVal+"px");
		$(".loginPopup").fadeIn(function(){
			$(this).find('.close').addClass('active');
			disableScroll();
		});
	});

	$('.loginPopup').find('.close').click(function() {
		$('.loginPopup').fadeOut(function() {
			$(this).find('.close').removeClass('active');
			enableScroll();
		});
	});

	$(".logout").click(function() {
		if(getDomain()=="misoraum.misosmile365.com"){
			location.href="http://www.misosmile365.com/bbs/logout.php?url=http://misoraum.misosmile365.com";
		} else {
			location.href="/bbs/logout.php?url=/misoraum/";
		}
	});
	
	$(".online").click(function() {
		if(is_member=='1') {
			var loginWidth = $(".onlinePopup").width();                               
			var qLeftVal = (w_screen/2)-(loginWidth/2);
			  
			var loginHeight = $(".onlinePopup").height();                               
			var qTopVal = (h_screen/2)-(loginHeight/2);
			if(h_screen<600) qTopVal=0;
			  
			$(".onlinePopup").css("left", qLeftVal+"px");
			$(".onlinePopup").css("top", qTopVal+"px");
			$(".onlinePopup").fadeIn(function(){
				disableScroll();
			});
		} else {
			alert('회원 분들만 상담이 가능합니다.\n로그인 해주세요.');
		}
	});
	$('.onlinePopup').find('.close').click(function() {
		$(this).fadeOut(function() {
			enableScroll();
		});
	});

	$(".kakao").click(function() {
		var kakaoWidth = $(".kakaoPopup").width();                               
		var qLeftVal = (w_screen/2)-(kakaoWidth/2);
		  
		var kakaoHeight = $(".kakaoPopup").height();                               
		var qTopVal = (h_screen/2)-(kakaoHeight/2);
		if(h_screen<600) qTopVal=0;
		  
		$(".kakaoPopup").css("left", qLeftVal+"px");
		$(".kakaoPopup").css("top", qTopVal+"px");
		$(".kakaoPopup").fadeIn(function(){
			$(this).find('.close').addClass('active');
			disableScroll();
		});
	});
	$('.kakaoPopup').find('.close').click(function() {
		$(this).fadeOut(function() {
			enableScroll();
		});
	});

	$('.policy').click(function() {
		window.open('/register_content.html');
	});
	*/
}

