(function ($, root, undefined) {

    $(function () {

        'use strict';

        var acc = document.getElementsByClassName("accordion-js");
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {

            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            
            if (panel.style.maxHeight){
              // close
              panel.style.maxHeight = null;
              panel.style["overflow"] = "hidden";
            } else {
              // open
              panel.style.maxHeight = panel.scrollHeight + "px"; 
            
              // prevent overflow from being hidden once open
              setTimeout(
                function() {
                  panel.style["overflow"] = "visible";
                },
              250);
            } 
          });
        }

});

})(jQuery, this);
