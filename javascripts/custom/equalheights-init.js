/*global $:false */
/*global window: false */

(function(){
  "use strict";


$(function ($) {

        	var widthofscreen = $(window).width();

$(window).load(function(){


        	if (widthofscreen > 992) { 
				//EqualHeights triggering via JS for viewports > 990px
			    $('.equal-height').setAllToMaxHeight();
			    $('.highlights-eq-height').setAllToMaxHeight();
			    $('.calltoaction-eq-height').setAllToMaxHeight();
        	}



});

$( window ).resize(function() {
	
        	var widthofscreenR = $(window).width();
			if (widthofscreenR > 992) { 
				//EqualHeights triggering via JS for viewports > 990px
			    $('.equal-height').setAllToMaxHeight();
			    $('.highlights-eq-height').setAllToMaxHeight();
			    $('.calltoaction-eq-height').setAllToMaxHeight();
	   
        	}


});
	
						
   
});
// $(function ($)  : ends

})();
//  JSHint wrapper $(function ($)  : ends







	






  



	






  

