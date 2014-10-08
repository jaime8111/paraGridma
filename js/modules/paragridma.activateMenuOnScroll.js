$.fn.activateMenuOnScroll = function () {
    var menuOffset = 20;

    return this.each(function() {
        var menu = $(this),
            menuItems = menu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function(){
              var item = $($(this).attr("href"));
              if (item.length) { return item; }
            });

        // Bind to scroll
        $(window).scroll(function() {
            // Get container scroll position
            var fromTop = $(this).scrollTop()+menuOffset;

            // Get id of current scroll item
            var cur = scrollItems.map(function(){
                if ($(this).offset().top < fromTop) {
                    return this;
                }
            });

            // Get the id of the current element
            cur = cur[cur.length-1];
            var id = cur && cur.length ? cur[0].id : "";

            // Set/remove active class
            menuItems.removeClass("active");

            menuItems.filter("[href=#"+id+"]").addClass("active");
        });
    });
};