$(function(){
	alert("dsa");
});

$(document).ready(function(){
	$(".demo").mousemove(smo).click(smo);
	function smo(e) {
        currentDiv($(this).attr('n'));
    }
    $(".mycard").mouseenter(function(){
         $(this).addClass("w3-card-4");
    }); 
	$(".mycard").mouseleave(function(){
         $(this).removeClass("w3-card-4");
    });
	
	 $(".hover-opacity").mouseenter(function(){
         $(this).animate({opacity: '0.7',});
    }); 
	$(".hover-opacity").mouseleave(function(){
         $(this).animate({opacity: '1.0',});
    });
	//cat section
	$("#child2").hide()
	$("#menu1 li").mouseenter(function(){
		show_cat($(this).attr("cat_num"));
    }); 
	$("#menu1").mouseleave(function(){
        hide_cat();
    });
	;
	$("#child2").mouseenter(function(){
         show_cat();
    });
	$("#child2").mouseleave(function(){
         hide_cat();
    });
		//end section
	function show_cat(n){
		$("#child2").show();
		if(n!=null){
			
			$.get("a.php?&n="+n, function(data, status){
            //alert("Data: " + data + "\nStatus: " + status);
			$("#child2").empty();
			$("#child2").append(data);
			});
	
		}
		//
	}
	function hide_cat(){
		$("#child2").hide();

	}
		setTimeout(resize, 100);
	 $(window).resize(function(){
		resize();
    });

	var a=$("#menu-con").height();
	var c=$("#menu1").height();
	function resize(){
	var b=$("#slider1").height();
		var d=a-c;
		
		if(a>b){
			$("#menu1").height($("#slider1").height()-d);
			$("#menu1").css("overflow-y","scroll");
		}else{
			$("#menu1").height($("#slider1").height()-d);
			$("#menu1").css("overflow-y","hidden");
		}
		$("#big-ad").height($("#other-items").height());
		
		var h=$(document).width();
		if(h<601){
			//only mobile
			$("#slider").hide();
			$(".sc_ts").hide();
		}else{
			//tablset and screen
			$("#slider").show();
			$(".sc_ts").show();
		}
		if(h<976){
			//tablet and mobile
			$("#slide1").parent().hide();
			$("#menu").removeClass("w3-green w3-third");
			$("#menu").addClass("w3-red w3-col s12");
			
			$("#menu_parent").removeClass("w3-half");
			$("#menu_parent").addClass("w3-col s3");
			
			$("#menu_parent_next").removeClass("w3-half");
			$("#menu_parent_next").addClass("w3-col s9");
			
			$(".only_screen").hide();
			
		}
		if(h<976 && h>=601){
			//only tablet

		}
		if(h>=976){
			//screen
			$(".only_screen").show();
			$("#slide1").parent().show();
		    $("#menu").removeClass("w3-red w3-col s12");
			$("#menu").addClass("w3-green w3-third");
		}
        
	};
	resize();
	
	function isElementInViewport (el) {
    var rect = el.getBoundingClientRect();

    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
        rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
    );
	};
	
	$(window).scroll(function(){
    $('#top-tool').each(function(){
        var $this = $(this);
        var el = $this.get(0);
        if (isElementInViewport(el)) {
           // $this.removeClass("w3-top");
        } else {
			$this.addClass("w3-top w3-border");
        }       
    });
	$('.top_background').each(function(){
        var $this = $(this);
        var el = $this.get(0);
        if (isElementInViewport(el)) {
           $('#top-tool').removeClass("w3-top w3-border");
        } else {
			
        }       
    });
	
	
	});
	

	
	
	
	//slide1
	var slideIndex = 1;
showDivs(slideIndex);
carousel();
function carousel() {
	currentDiv(slideIndex);
	slideIndex+=1;
	setTimeout(carousel, 1000);
}
function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x=$(".mySlides");
  var dots =$(".demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
	 $(x[i]).hide();
  }
  for (i = 0; i < dots.length; i++) {
	  $(dots[i]).removeClass("w3-white");
  }
  $(x[slideIndex-1]).show();
  $(dots[slideIndex-1]).addClass("w3-white");
}
////////////end slide1


var slide2=1;
slide2auto();
function slide2auto(){
	slide2show(slide2);
	slide2+=1;
	if(slide2>$(".slide2").length){
		slide2=1
	}
	setTimeout(slide2auto, 4000);
}
function slide2show(num){
var slide2num=$(".slide2");
var slide2Index=num;
  if (num > slide2num.length) {slide2Index = 1;}    
  if (num < 1) {slide2Index = slide2num.length} ;
  
 for (i = 0; i < slide2num.length; i++) {
     $(slide2num[i]).hide(); 
  }
$(slide2num[slide2Index-1]).fadeIn();
}

///end slide2

var slide3=1;
slide3auto();
function slide3auto(){
	slide3show(slide3);
	slide3+=1;
	if(slide3>$(".slide3").length){
		slide3=1
	}
	setTimeout(slide3auto, 2000);
}
function slide3show(num){
var slide3num=$(".slide3");
var slide3Index=num;
  if (num > slide3num.length) {slide3Index = 1;}    
  if (num < 1) {slide3Index = slide3num.length} ;
  
 for (i = 0; i < slide3num.length; i++) {
     $(slide3num[i]).hide(); 
  }
$(slide3num[slide3Index-1]).fadeIn();
}

//end slide3
	
	
	
	
});
