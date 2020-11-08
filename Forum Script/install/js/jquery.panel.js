(function($){
    
    $.fn.xpserkan = function(options) {
          
        // Create Default Settings
        var options = $.extend({
        className : 'tetik',
        buttonName : 'manevra'
        }, options);
        
        // Create Notice
        return this.each(function(){
            
		// Cach options - className
		var menuDiv= $('.' + options.className);
		var buttonDiv= $('.' + options.buttonName);
			 
			 // When Hover Over Notice
			 buttonDiv
				.click(function(){
					if (menuDiv.is(":hidden")) {
						menuDiv
							.slideDown(250, function() {
								// create cookie
								$.cookie('' + options.className + '', 'Visable');
								menuDiv.show();
								$('.' + options.buttonName + ' a').replaceWith('<a id="close" class="close" title="MyBB Kurulum Videosunu Kapat.">Kurulum Videosunu Gizle</a>');
							});
					} else {
						menuDiv
							.slideUp(250, function() {
								// create cookie
								$.cookie('' + options.className + '', 'Hidden');
								menuDiv.hide();
								$('.' + options.buttonName + ' a').replaceWith('<a id="open" class="open" href="#" title="MyBB Kurulum Videosunu İzlemek İçin Tıkla.">Kurulum Videosunu Göster</a>');									
							});
					}	   
				return false;
				});
                
                 // See if cookie exsists
                 if ($.cookie('' + options.className + '') == 'Hidden') { 
                     // remove announcement by cookie
                     menuDiv.hide(); 
					$('.' + options.buttonName + ' a').append('Kurulum Videosunu Göster');
                 }
				 
                 if ($.cookie('' + options.className + '') == 'Visable') { 
                     menuDiv.show(); 
					$('.' + options.buttonName + ' a').append('Videoyu Gizle');
				 }

                 // If no cookies exsists
                 if ($.cookie('' + options.className + '') !== 'Hidden') { 
				   if ($.cookie('' + options.className + '') !== 'Visable') { 
						 menuDiv.hide(); 
						$('.' + options.buttonName + ' a').append('Kurulum Videosunu Göster');
					}
                 }
				 
        });
    }
    
})(jQuery);