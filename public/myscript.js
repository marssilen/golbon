$(function (){
	$(".demo").mousemove(smo).click(smo);
	function smo(e) {
        currentDiv($(this).attr('n'));
    }
	/*alert("das");
	$(".l1,.l2,.l3,.l4,.l5,.l6,.l7,.l8,.l9,.l10,.l11,.l12").each(function(){
         //$(this).removeClass("m1 m2 m3 m4 m5 m6 m7 m8 m9 m10 m11 m12");
		 //$(this).removeClass("s1 s2 s3 s4 s5 s6 s7 s8 s9 s10 s11 s12");
    });
	$(".m1,.m2,.m3,.m4,.m5,.m6,.m7,.m8,.m9,.m10,.m11,.m12").each(function(){
         $(this).removeClass("s1 s2 s3 s4 s5 s6 s7 s8 s9 s10 s11 s12");
    });
	$(".s1,.s2,.s3,.s4,.s5,.s6,.s7,.s8,.s9,.s10,.s11,.s12").each(function(){
         $(this).removeClass("m1 m2 m3 m4 m5 m6 m7 m8 m9 m10 m11 m12");
    });
	
	$(".m1,.m2,.m3,.m4,.m5,.m6,.m7,.m8,.m9,.m10,.m11,.m12").each(function(){
         $(this).addClass("w3-red");
    });
	$(".l1,.l2,.l3,.l4,.l5,.l6,.l7,.l8,.l9,.l10,.l11,.l12").each(function(){
         $(this).addClass("w3-yellow");
    });
	$(".s1,.s2,.s3,.s4,.s5,.s6,.s7,.s8,.s9,.s10,.s11,.s12").each(function(){
         $(this).addClass("w3-green");
    });
	*/
	/*
    $(".mycard").mouseenter(function(){
         $(this).addClass("w3-card-4");
    }); 
	$(".mycard").mouseleave(function(){
         $(this).removeClass("w3-card-4");
    });
	*/

	$(".hover-opacity").delegate("img",'click',function(){
		alert("ds");
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
	
	
	$('.mobile-con').each(function(){
        var $this = $(this);
        var el = $this.get(0);
        if (isElementInViewport(el)) {
          // $(this).addClass("w3-border");
		   var do_load=$(this).attr('load');
		   if(do_load!='y'){
			   $(this).attr('load','y');
			   load_ajax($(this));
		   }
		   
		   //alert($(this).attr('load'));
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
	
	////new
	
	
	$("a").click(function(){
		var c=$(this).parent().siblings(".mobile-con");
		 var fun=$(this).attr('fun');
                 var cat=$(this).attr('cat');
                 if(cat==null)cat=0;
		 if(fun!=null){
		 var m;
		 if(fun==0){
			 m=$(c).children().attr('last');
		 }else{
			 m=$(c).children().attr('first');
		 }
		 var container=$(c);
		load_ajax(container,fun,m,cat);
		}
	});
function load_ajax(container,fun=0,m=0,cat=0){
	if(m==null)m=0;
	var url="ajax/"+fun+'/'+m+'/'+cat;
		alert(url);
		
		
		$(container).empty();
		$(container).load(url, function(responseTxt, statusTxt, xhr){
        if(statusTxt == "success"){

		}
           
        if(statusTxt == "error"){
			alert("Error: " + xhr.status + ": " + xhr.statusText);
		}
        // alert();   
		var he=$(this).children().height();
		$(this).height(he);
		$(this).attr('load','y');
   		 });
}
		function scto(move){
			
			var body = $("body");
			var top = body.scrollTop(); // Get position of the body
			var topasset = $("#"+move).position().top;
			
		//	$("#"+move).hide();
			alert(topasset+move);
			if(top!=0)
			{
			  body.animate({scrollTop:topasset}, '500');
			}
		}
		
	
	
});
