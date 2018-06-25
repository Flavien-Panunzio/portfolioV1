/*Alert Créa en cours*/
	$(window).on('load', function () {
		var isshow = localStorage.getItem('isshow');
		if (isshow== null) {
			localStorage.setItem('isshow', 1);
			alert("Ce Portfolio est encore en cours de création !");
		}
	});
	/**************************************************************************************************/

/*Remplissage Nav au Scroll*/
	$(document).scroll(function() {
		var dHeight = $('header').height();
		$('.navbar').css('background', 'rgba(31,38,79,' + $(this).scrollTop() / dHeight + ')');
	});
	/**************************************************************************************************/

/*Effect Scroll clic ancre*/
	$(document).ready(function(){
		$('a.ancre').on('click', function(evt){
			evt.preventDefault(); 
			var target = $(this).attr('href');
			$('html, body')
			.stop()
			.animate({scrollTop: -100+$(target).offset().top}, 1000 );
		});
	});
	/**************************************************************************************************/

/*Ratraisissement Navicon au clic*/
	$(document).ready(function(){
		$('.navbar-collapse ul li a').click(function(){ 
			var dWidth= $('.header').width();
			if (dWidth<960) {
				$('.navbar-toggler').click();
			}	
		});
	});
	/**************************************************************************************************/

/*Ratraisissement Navbar Scroll*/
	$(document).ready(function() {
		var Width= $(document).width();
		if (Width<960) {
			var dHeight = $('.header').height();
			var lastScrollTop = 0;
			$(window).scroll(function() {
				var scroll = $(window).scrollTop();
				var currScrollTop = $(this).scrollTop();
				if (scroll >= dHeight && currScrollTop > lastScrollTop) {
					$(".navbar").fadeOut("fast");
				} else {
					$(".navbar").fadeIn("fast");
				}
				lastScrollTop = currScrollTop;

			});
		}

	});
	/**************************************************************************************************/

/*Portfolio*/
	$(document).ready(function(){
		$(".fond").hide();
		$( ".crea" ).hover(function() {
			$(this).children(".fond").fadeToggle(200);
		});
		$("#TOUT").click(function(){
			$(".WEB, .PRINT ,.VIDEO").removeClass('cache');
			$(".WEB, .PRINT, .VIDEO").addClass('visible');
			$('#PRINT, #WEB, #VIDEO').removeClass('Active');
			$(this).addClass('Active');
			animationarticles();
		});
		$("#PRINT").click(function(){
			$(".WEB, .VIDEO").addClass('cache');
			$(".WEB, .VIDEO").removeClass('visible');
			$(".PRINT").removeClass('cache');
			$(".PRINT").addClass('visible');
			$("#TOUT, #WEB, #VIDEO").removeClass('Active');
			$(this).addClass('Active');
			animationarticles();
		});
		$("#WEB").click(function(){
			$(".PRINT, .VIDEO").addClass('cache');
			$(".PRINT, .VIDEO").removeClass('visible');
			$(".WEB").removeClass('cache');
			$(".WEB").addClass('visible');
			$("#PRINT, #TOUT, #VIDEO").removeClass('Active');
			$(this).addClass('Active');
			animationarticles();
		});
		$("#VIDEO").click(function(){
			$(".PRINT, .WEB").addClass('cache');
			$(".PRINT, .WEB").removeClass('visible');
			$(".VIDEO").removeClass('cache');
			$(".VIDEO").addClass('visible');
			$("#PRINT, #WEB, #TOUT").removeClass('Active');
			$(this).addClass('Active');
			animationarticles();
		});

		function animationarticles () {
			$(".cache").transition({ scale : 0.5 }, 150, 'linear');
			$(".visible").transition({ scale : 1 }, 150, 'linear');
		}
	});
	/**************************************************************************************************/

/*Apercu Image*/
	$(document).ready(function(){
		$(".plus").click(function(){
			var url = $(this).closest(".crea").css("background-image").replace('url(','').replace(')','');
			$("body").append('<div class="fondapercu"><img class="visu" src='+url+'></div>');
			$(".fondapercu").hide(0,ouvrirapercu);
			fermerapercu();
		});

		function ouvrirapercu () {
			$(".fondapercu").fadeIn("slow");
		}

		function fermerapercu () {
			$(document).ready(function(){
				$(".fondapercu").click(function(){
					$(".fondapercu").fadeOut("slow",supprimer);
				});
			});
			function supprimer () {
				$(".fondapercu").remove();
			}
		}

	});
	/**************************************************************************************************/
	
/*Annimation Compétences*/
	$(document).ready(function() {
		var dHeight = $('.header').height()+$('.portfolio').height()-($(window).height()/2);
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			if (scroll >= dHeight) {
				$(".path").stop().animate({"stroke-dashoffset": 0},1500);
			}
			else{
				$(".path").stop().animate({"stroke-dashoffset": 1300},1500);
			}
		});
	});
	/**************************************************************************************************/
