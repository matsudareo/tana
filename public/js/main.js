$(function(){

  $(window).scroll(function (){
		$('.wrap').each(function(){
			let headerPos = $('.wrap').offset().top;
			let scroll = $(window).scrollTop();
			if(scroll > headerPos){
				$(this).addClass('header-fadeIn');
			}
            if (scroll == 0) {
                $(this).removeClass('header-fadeIn');
            }
		});
	});

 
  //マウスで色が変わる
    $(".korona a").on("mouseover",function(){
      $(this).css("color","gainsboro");
    }).mouseout(function() {
      $(this).css("color","white");
    })
  
    $(".link a").on("mouseover",function(){
      $(this).css("color","gainsboro");
    }).mouseout(function() {
      $(this).css("color","white");
    })
  
    $(".sain").on("mouseover",function(){
      $(this).css("color","gainsboro");
    }).mouseout(function() {
      $(this).css("color","white");
    })
  
  
    $(".on").on("mouseover",function(){
      $(this).css("color","	#A9A9A9");
    }).mouseout(function() {
      $(this).css("color","rgb(79, 76, 76)");
    })
  
  //トップに戻る
  var pato = $(".pagetop");
  pato.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 600) {
      pato.fadeIn();
    } else {
      pato.fadeOut();
    }
  });
  pato.click(function() {
    $("body,html").animate({scrollTop:0}, 500);
    return false;
  });
  
  // $(".logo").click(function() {
  //   $("body,html").animate({scrollTop:0},1);
  //   return false;
  // });
  
  
  $(".footerin li").click(function() {
    $("body,html").animate({scrollTop:0},1);
    return false;
  });
  
  $(".footerin h3").click(function() {
    $("body,html").animate({scrollTop:0},1);
    return false;
  });
  
  //はじめに戻る
  $(".hajimetobi").click(function() {
    $("body,html").animate({scrollTop:$("#fast").offset().top - 150 }, "swing");
  });
  
  
  $(".taikentobi").click(function() {
    $("body,html").animate({scrollTop:$("#experience").offset().top - 70 }, "swing");
  });
  
  
  //クリック処理
  // $(".sainmark").click(function() {
  //   $(".kakusi").toggle();
  // });
  $(".sainmark").click(function () {
    $(".kakusi").fadeIn();
  });
  $("footer,main,section").click(function () {
    $(".kakusi").fadeOut();
  })
  
  
  
  $(".sp_link a").on("mouseover",function(){
    $(this).css("color","gray");
  }).mouseout(function() {
    $(this).css("color","black");
  })
  $(".sainmark").on("mouseover",function(){
    $(this).css("color","gray");
  }).mouseout(function() {
    $(this).css("color","white");
  })
  $(".sp_sain").on("mouseover",function(){
    $(this).css("color","gray");
  }).mouseout(function() {
    $(this).css("color","black");
  })
  
  
  
  
  });