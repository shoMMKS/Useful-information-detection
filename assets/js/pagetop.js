/*global $, jQuery*/
(function ($) {
    "use strict";
    var topBtn = $('#pageTop');
    topBtn.hide();
    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 80) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    
    topBtn.click(function () {
        $('body,html').animate({"scrollTop": 0}, 1000);
        return false;
    });
}(jQuery));