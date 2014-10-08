$(function () {



});


window.onload = function() {
  console.timeEnd("window.load time");
};



/* TABS --------------------------------- */
    /* Remove if you don't need :) */

    var tabs = $('.tabs');


    tabs.each(function(i) {

        //Get all tabs
        var tab = $(this).find('a');
        tab.click(function(e) {
            var t = $(this);

            // Get Location of tab's content
            var contentLocation = t.attr("href")
            contentLocation = contentLocation + "Tab";

            // Check if links start with hash symbol
            if(contentLocation.charAt(0)=="#") {
                e.preventDefault();

                // Make Tab Active
                tab.removeClass('active');
                t.addClass('active');

                // Show Tab Content
                $(contentLocation).parent('.tabs-content').children().hide();
                $(contentLocation).show();
            }
        });
    });
/* end of tabs */




/* ADJUST TEXT SIZE --------------------------------- */
    /* Remove if you don't need :) */
    $('.js-adjust-text').adjustTextSize(false, 12);
    $('.js-adjust-text-limit').adjustTextSize(true, 30);
    /* end of adjust font size */