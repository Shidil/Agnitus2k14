jQuery(document).ready(function($) {
	$('.2k13gallery div').live("click", function() {
		var rel = $(this).attr('rel');
		if (rel != 'b' && rel != 'd' && rel != 'f') {
			$('#lightbox_wrapper').css({
				"opacity" : ".1"
			});
			$('table.tab_content_event_sub').addClass('loading');
			//jQuery(".tab_content_full_events").fadeOut(300);
			var id = '#event_category_' + jQuery(this).attr("rel");
			jQuery.post(ajaxurl, {
				action : "event_click",
				cookie : encodeURIComponent(document.cookie),
				"page" : jQuery(this).attr("id"),
				"rel" : jQuery(this).attr("rel")
			}, function(b) {
				event_response(b)
			});
		}
		return false;
	})
});
function event_response(a) {
	a = a.substr(0, a.length - 1);
	a = a.split("[[SPLIT]]");
	jQuery('table.tab_content_event_sub').removeClass("loading");
	jQuery(".tab_content_full_events").fadeOut(200, function() {
		jQuery('#tab_content_full_center').css({
			"opacity" : "1"
		});
		jQuery("#event_sigle").html(a[1]);
		jQuery("#event_sigle").fadeIn(300)
	})
};
jQuery('.2k13gallery div').bind("click", function(event) {
	var rel = $(this).attr('rel');
	show_lightbox(rel);
	show_loading(rel);
	$.post("ajax.php", {
		type : "John",
		time : "2pm"
	}).done(function(data) {
		alert("Data Loaded: " + data);
	});
});
function show_lightbox(a) {
	jQuery('#lightbox_wrapper').fadeIn(100);
}

function show_loading(a) {
	jQuery('#lightbox_wrapper loading').fadeIn(100);
}

function hide_loading(a) {
	jQuery('#lightbox_wrapper loading').fadeIn(100);
}
