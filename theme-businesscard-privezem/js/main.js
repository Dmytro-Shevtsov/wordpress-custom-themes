jQuery(document).ready(function($) {
    $(window).scroll(function() {
		var height = $(window).scrollTop();
		 /*Если сделали скролл на 100px задаём новый класс для header*/
		if(height > 50){
		$('header').addClass('header-fixed');
		} else{
		/*Если меньше 100px удаляем класс для header*/
		$('header').removeClass('header-fixed');
		}
	});
});
 
jQuery(document).ready(function($) {
	$('.popup-tel-form').magnificPopup({
		type: 'inline',
		preloader: false,
		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});
});

jQuery(document).ready(function($) {
	$('.popup-form-form').magnificPopup({
		type: 'inline',
		preloader: false,
		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});
});