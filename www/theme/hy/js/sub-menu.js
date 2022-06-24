// 스크롤 감지 애니메이션
$(document).ready(function () {
  var windowWidth = $(window).width();

  if (windowWidth > 1201) {
    $(window).scroll(function () {
      //var boxHeight = $(".box").height();
      var top = $(this).scrollTop();
      // 스크롤 높이 값 구하기
      if (top >= 540) {
        // 스크롤 높이가 558보다 크거나 같으면
        $(".tab-menu").css("position", "absolute");
        // h2에 since 클래스 붙히기
      } else {
        $(".tab-menu").css("position", "absolute");
        // 만약 둘 다 아니라면 h2에 since 클래스 지우기
      }
    });
  } else if (windowWidth < 1201) {
    $(window).scroll(function () {
      //var boxHeight = $(".box").height();
      var top = $(this).scrollTop();
      // 스크롤 높이 값 구하기
      if (top >= 332) {
        // 스크롤 높이가 558보다 크거나 같으면
        $(".tab-menu").css("position", "fixed");
        // h2에 since 클래스 붙히기
      } else {
        $(".tab-menu").css("position", "absolute");
        // 만약 둘 다 아니라면 h2에 since 클래스 지우기
      }
    });
  } else if (windowWidth < 1025) {
    $(window).scroll(function () {
      //var boxHeight = $(".box").height();
      var top = $(this).scrollTop();
      // 스크롤 높이 값 구하기
      if (top >= 294) {
        // 스크롤 높이가 558보다 크거나 같으면
        $(".tab-menu").css("position", "fixed");
        // h2에 since 클래스 붙히기
      } else {
        $(".tab-menu").css("position", "absolute");
        // 만약 둘 다 아니라면 h2에 since 클래스 지우기
      }
    });
  } else if (windowWidth < 769) {
    $(window).scroll(function () {
      //var boxHeight = $(".box").height();
      var top = $(this).scrollTop();
      // 스크롤 높이 값 구하기
      if (top >= 200) {
        // 스크롤 높이가 558보다 크거나 같으면
        $(".tab-menu").css("position", "fixed");
        // h2에 since 클래스 붙히기
      } else {
        $(".tab-menu").css("position", "absolute");
        // 만약 둘 다 아니라면 h2에 since 클래스 지우기
      }
    });
  } else if (windowWidth < 425) {
    $(window).scroll(function () {
      //var boxHeight = $(".box").height();
      var top = $(this).scrollTop();
      // 스크롤 높이 값 구하기
      if (top >= 5) {
        // 스크롤 높이가 558보다 크거나 같으면
        $(".tab-menu").css("position", "fixed");
        // h2에 since 클래스 붙히기
      } else {
        $(".tab-menu").css("position", "absolute");
        // 만약 둘 다 아니라면 h2에 since 클래스 지우기
      }
    });
  }

  $(".tab-menu div")
    .mouseover(function () {
      $(this).children("ul").css("display", "block");
      $(this).prev().addClass("hover");
    })
    .mouseout(function () {
      $(this).children("ul").css("display", "none");
      $(this).prev().removeClass("hover");
    });

  // 서브메뉴 클릭 시 해당 내용 바뀌게

  //$('.sub-menu02 li a').click(function(){
  //$(this).addClass('active');
  //var menu_text = $(this).text();
  //$('.change_text').text(menu_text);
  //});
});
