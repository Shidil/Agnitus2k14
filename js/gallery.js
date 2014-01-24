/*
 * 	Code for general purpose lightbox
 * 	ajax lightbox
 */
$(document).ready(function() {
	$("html").niceScroll({styler:"fb",cursorcolor:"#000"});
	
});
$(document).ready(function() {
	jQuery('.2k13gallery div').on("click", function(event) {

		var rel = $(this).attr('rel');
		var prel = $(this).parent().attr('rel');
		$.post("ajax.php", {
			type : "event",
			item : rel,
			cat : prel
		}).done(function(data) {

			$.fancybox(this,{
				helpers : {
					overlay : {
						css : {
							'background' : 'rgba(20, 19, 20, 0.89)'
						}
					}
				},
				live : false,
				maxWidth : 1100,
				minWidth : 1000,
				minHeight : 400,
				maxHeight : 500,
				fitToView : false,
				width : '1100px',
				height : '500px%',
				autoSize : false,
				closeClick : false,
				openEffect : 'elastic',
				closeEffect : 'elastic',
				content : data
			});
			$("#lightbox_description").niceScroll({styler:"fb",cursorcolor:"#000"});
		});
	});
});
$(document).ready(function() {
	$('.lightbox_tabs li').live("click", function(event) {
		var a = $(this);
		var id = $(this).attr('rel');
		var id1 = $('.lightbox_tabs li.selected').attr('rel');
		$('#' + id1).fadeOut("swift", function() {
			$('.lightbox_tabs li.selected').removeClass('selected');
			$('#' + id).removeClass("hidden");
			$('#' + id).fadeIn("slow");
			$(a).addClass('selected');
		});
	});
});
$(document).ready(function() {
	$('#events_tabs li.events_tab').live("click", function(event) {
		var title = $(this).attr('title');
		$('ul#event_list').fadeOut("slow", function() {
			// ajax load lisst
			$.post("ajax.php", {
				type : "list",
				cat : title
			}).done(function(data) {
				$('ul#event_list').html(data);
				$('ul#event_list').fadeIn("slow")
			});
		});

	});
});
$(document).ready(function() {
	$('#register_dob').datepick({
		dateFormat : 'dd-mm-yyyy'
	});
});
$(document).ready(function() {
	jQuery('#contactus_button1').on("click", function(event) {
event.preventDefault();
		$.fancybox(this,{
			helpers : {
				overlay : {
					css : {
						'background' : 'rgba(20, 19, 20, 0.89)'
					}
				}
			},
			live : false,
			overlayShow: true,
			maxWidth : 1100,
			minWidth : 1000,
			minHeight : 400,
			maxHeight : 500,
			fitToView : false,
			width : '1000px',
			height : '450px%',
			autoSize : false,
			closeClick : false,
			openEffect : 'elastic',
			closeEffect : 'elastic',
			content : $('#contactlist').html()
		});
		return false;
	});
});
$(document).ready(function() {
	$('#register_button').on("click", function(event) {
		var email1 = $('#register_email').val();
		var phone1 = $('#register_phone').val();
		var name1 = $('#register_name').val();
		var dob1 = $('#register_dob').val();
		var gender1 = $('#register_gender').val();
		var college1 = $('#register_college').val();
		var dept1 = $('#register_dept').val();
		var accom1 = $('#register_accom').val();
		if (email1 && phone1 && name1 && dob1 && gender1 && college1 && dept1 && accom1) {
			if (!phone1 == parseInt(phone1)) {
				regFail('Invalid Phone Number');
			} else {
				$('register_loading').fadeIn('slow');
				$.post("ajax.php", {
					type : "register",
					email : email1,
					phone : phone1,
					name : name1,
					dob : dob1,
					gender : gender1,
					college : college1,
					dept : dept1,
					accom : accom1,
				}).done(function(data) {
					if (data == "true")
						regSuccess('Thanks for registering');
					else {
						regFail('Please check values and try again.');
					}
				});
			}
		} else {
			regFail('Please fill all feilds');
		}
	});
	function regSuccess(msg) {
		$('register_loading').fadeOut('fast');
		$('#register_form').slideUp();
		$('#register_message').css({
			color : "green"
		});
		$('#register_message').html(msg);
		$('#register_message').fadeIn("fast", function() {
			$('#register_message').css({
				top : "51%"
			});
		});
	}

	function regFail(msg) {
		$('register_loading').fadeOut(10);
		$('#register_message').css({
			color : "red"
		});
		$('#register_message').html(msg);
		$('#register_message').fadeIn("fast");
		$("#register_form").css({
			border : "1px solid red"
		});
		$("#register_form").effect("shake");
	}

});
