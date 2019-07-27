(function ($, root, undefined) {

    $(function () {

        'use strict';
});

$(document).ready(function(){
    $('#top').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0              // Scroll to top of body
        }, 500);
    });
});

})(jQuery, this);
