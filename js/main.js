
jQuery(document).ready(function($){

	// if(window.location.href.indexOf("gallery2") > -1) {
		
	// } else if (window.location.href.indexOf("gallery1") > -1) {
		
	// }
	function equalHeight( selector )
{
	var tallest = 0;
	jQuery( selector ).each(function(){
		var thisHeight = jQuery( this ).height();
		if( thisHeight > tallest ){
			tallest = thisHeight;
		}
	});
	jQuery( selector ).height( tallest );
}

equalHeight( ".blog-wp .w-33:not(':first-child') .border-post" );
equalHeight( ".main-p .w-33 .border-post" );

	$(function() {
		$('.tabs-caption').on('click', 'li:not(.active)', function() {
			$(this)
			.addClass('active').siblings().removeClass('active')
			.closest('div.tabs-main').find('.tabs-content').removeClass('active').css({opacity: '0',display: 'none'}).eq($(this).index()).addClass('active').css('display', 'block').animate({opacity: '1'}, 300);

		})
	});


$("a.modal-form").fancybox({
	'hideOnContentClick': true,
	minWidth : 230,
	padding : 0,
	closeBtn : true

});

$("a.fancybox").fancybox({
	'hideOnContentClick': true,
	tpl: {
		closeBtn: '<div title="Close" id="myCloseID"></div>'
	},
	helpers : { 
		overlay:
		{
			css: { 'background': 'rgba(255, 255, 255, 0.83)' },
			closeClick: false
		}
	},
	minWidth : 230,
	maxWidth: 1000,
	padding : 0,
	closeBtn : true

});

// $('header a[href^="#"]').on('click', function(event) {

//     var target = $( $(this).attr('href') );

//     if( target.length ) {
//         event.preventDefault();
//         $('html, body').animate({
//             scrollTop: target.offset().top -85
//         }, 600);
//     }

// });

//  jQuery(function($){ 
//    $(".phone_mask_1").mask("+7(999) 999-9999");
//    $("#phone_mask_2").mask("+7(999) 999-9999");
// });

	// $(window).load(function() {

	// 	$('img').closest('.gallery').find('a').addClass('fancybox').attr('data-fancybox-group','gallery');
	// 	$('img').closest('.gallery').find('a').on('click', function(e){
	// 		e.preventDefault();
	// 	});

	// });

});
