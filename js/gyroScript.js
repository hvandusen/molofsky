(function ($) {
	var start;

	$(document).ready(function(){
		var count = 0;
		var current = 0;
		var angle = 3;
		var show = 3;
		//if(gyro.hasFeature('devicemotion'))
		gyro.frequency = 5;
		console.log(gyro.hasFeature('devicemotion'))
		
			//if(gyro.hasFeature('devicemotion'))
			gyro.startTracking(function(o) {
	        // o.x, o.y, o.z for accelerometer
	        // o.alpha, o.beta, o.gamma for gyro
	        if(count==0)
	        	start = o;
	        
	        
	        show = Math.floor(3.5+(o.x/5)*3.5)

	        if(show<7 && show>=0 && show!=angle)
	        	{

					classes = $('.book_image')[current].classList
		        	$($('.book_image')[current]).addClass('-position-'+show+'-of-7');
		        	$($('.book_image')[current]).removeClass(classes[1]);
		        	angle = show;
		        		
	        	}
	        count++;
	    	});
	});
})(jQuery);