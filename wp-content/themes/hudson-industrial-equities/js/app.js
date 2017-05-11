// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs

jQuery(function ($) {

	$(document).foundation();

	var $mobileMenu = $('#header nav');
	var $mobileMenuVisible;
	checkViewportSetNav();

	$( window ).resize(function() {
		checkViewportSetNav();
	});

	$( "#mobile-menu-btn" ).click(function() {
		if (!$mobileMenuVisible) {
			$mobileMenu.show("fast");
			$mobileMenuVisible = true;
		} else {
			$mobileMenu.hide("fast");
			$mobileMenuVisible = false;
		}
	});

	function checkViewportSetNav(){
		if (document.documentElement.clientWidth > 640) {
			$mobileMenu.show();
			$mobileMenuVisible = true;
		} else {
			$mobileMenu.hide();
			$mobileMenuVisible = false;
		}
	}

	function scrollIncrement(ev){
		var $logoHolder = $('#logo-holder');
		var $header = $('#header');
	    if (window.pageYOffset > 10 && document.documentElement.clientWidth > 640) {
	    	if (!$header.hasClass("minimized")) {
	    		$header.addClass("minimized");	
	    	}
	    } else {
	    	if ($header.hasClass("minimized")) {
	    		$header.removeClass("minimized");	
	    	}
	    }
	}
	window.onscroll = scrollIncrement;

	var devListNewestFirst = true;
	var devListDateToggle = $('#developments a.filter-toggle');
	devListDateToggle.click(devListToggleDate);
	function devListToggleDate() {
		if ( devListDateToggle.hasClass('oldest-first') ) {
			devListDateToggle.removeClass('oldest-first');
			devListNewestFirst = true;
		} else {
			devListDateToggle.addClass('oldest-first');
			devListNewestFirst = false;
		}
	}

	var $devDetailsPage = $('#dev-details');
	var $devROIChart = $('.roi-section');
	var $roiValueInvestment = $('span#roi-data-investment').html();
	var $roiValueReturn = $('span#roi-data-return').html();
	var $roiBarInvestment = $('#roi-bar-investment');
	var $roiBarReturn = $('#roi-bar-return');
	if ($devDetailsPage.length != 0) {
		console.log("it's a dev-details page");
		if ($devROIChart.length != 0) {
			console.log('has roi chart');
			console.log("investment value is: " + $roiValueInvestment);
			console.log("return value is: " + $roiValueReturn);
			$roiBarInvestment.css({width: "1px"});
			$roiBarReturn.css({width: "1px"});
			var flag = $(window).scrollTop() > 115 ? 1 : 2;
			var chartTriggered = false;
		    $(window).scroll(function () {
		        var scrollTop = $(window).scrollTop();
		        if (scrollTop > 115 && flag != 1 && chartTriggered == false) {
		            flag = 1;
		            //triggered at scroll point
		            adjustROIChart();
		            chartTriggered = true;
		        } else if (scrollTop <= 115 && flag != 2) {
		            flag = 2;
		            //do something when the user scrolls back to the top after flag
		        }
		    });
		}
	}

	function transformROIValues() {
		$roiValueInvestment = $roiValueInvestment.split("$")[1];
		$roiValueInvestment = $roiValueInvestment.split("M")[0];
		$roiValueReturn = $roiValueReturn.split("$")[1];
		$roiValueReturn = $roiValueReturn.split("M")[0];
		console.log("roiValueInvestment transformed is: " + $roiValueInvestment);
		console.log("roiValueReturn transformed is: " + $roiValueReturn);
		var $multiplier = $roiValueInvestment / $roiValueReturn;
		return $multiplier;
	}

	function adjustROIChart() {
		console.log('adjusting ROI chart');
		var $multiplier = transformROIValues();
		console.log($multiplier);
		var $investmentWidth = ($multiplier * 100) * 0.78;
		console.log($investmentWidth);
		$roiBarInvestment.animate({width: $investmentWidth + "%"}, 2000);
		$roiBarReturn.delay(250).animate({width: "78%"}, 2000);
	}

});









