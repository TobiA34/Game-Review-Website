
jQuery(document).ready(function($) {
	$(".toggleDarkMode").click(function() {
		$(".toggleDarkMode").toggleClass("active");
		$("body").toggleClass("night");
		$.cookie("toggleDarkMode", $(".toggleDarkMode").hasClass('active'));
	});

	if ($.cookie("toggleDarkMode") == "true") {
		$(".toggleDarkMode").addClass("active");
		$("body").addClass("night");
	}
});

