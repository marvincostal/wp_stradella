(function($){
	'use strict';

	var util = {
		global: {
			init: function() {
				this.datePicker();
				this.layout();
				this.headerResize();
			},

			datePicker: function() {
				$('#booking-arrival').datepicker();
				$('#booking-departure').datepicker();
			},

			layout: function() {
				function bannerLayout() {
					var t = $(window).height() + "px";
    
                	$("#carousel").css("height", t);
				}

		        var callback = function() {

		            bannerLayout();
		            
		        };

	            bannerLayout();

	            $(document).ready(callback);
	            $(window).resize(callback);
        	},

        	headerResize: function() {
        		function headResize() {
        		  var scrollSize = $(window).scrollTop(),
        		      setSize = 200;
        		      if ( scrollSize > setSize) {
        		      	$('.t-header-top').addClass('padt10 padb2');
        		      	$('.t-header-bottom').addClass('padt2');
        		      	$('.navbar').addClass('mb2');
        		      	$('.logo').addClass('small-logo ');
        		      } else {
        		      	$('.t-header-top').removeClass('padt10 padb2');
        		      	$('.t-header-bottom').removeClass('padt2');
        		      	$('.navbar').removeClass('mb2');
        		      	$('.logo').removeClass('small-logo ');
        		      }
        		}

        		$(window).on('scroll', headResize);
        	}

		}
	};
	
	util.global.init();
})($);
