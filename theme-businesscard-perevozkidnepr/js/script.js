jQuery(document).ready(function($) {
    $('.popup-call-form').magnificPopup({
        type: 'inline',
        preloader: false,
        callbacks: {
            beforeOpen: function() {
                if ($(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = '#name';
                }
            }
        }


    });

    $('.popup-call-form').click(function() {
        gtag('event', 'Заказать звонок', { 'event_category': 'zakazat_zvonok', 'event_action': 'knopka' });
    });

});

jQuery(document).ready(function($) {
    $('.popup-call-auto').magnificPopup({
        type: 'inline',
        preloader: false,
        callbacks: {
            beforeOpen: function() {
                if ($(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = '#name';
                }
            }
        }
    });


    $('.popup-call-form').click(function() {
        gtag('event', 'Заказать авто', { 'event_category': 'zakazat_avto', 'event_action': 'knopka' });
    });
});

jQuery(document).ready(function($) {
    $('.popup-tel-form').magnificPopup({
        type: 'inline',
        preloader: false,
        callbacks: {
            beforeOpen: function() {
                if ($(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = '#name';
                }
            }
        }
    });
});

document.addEventListener('wpcf7mailsent', function(event) {
    var id = event.detail.contactFormId;
    if (id == 422) {
        gtag('event', 'Заказать звонок отправить', { 'event_category': 'zvonok_otpravit', 'event_action': 'knopka' });
    } else if (id == 509) {
        gtag('event', 'Заказать авто', { 'event_category': 'zakazat_avto', 'event_action': 'knopka' });
    }
}, false);