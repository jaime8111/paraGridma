$.fn.responsiveImages = function () {

    return this.each(function() {
        var t = $(this),
            parentW = t.parent().width(),
            imgSrc = t.attr('data-src'),
            newImg = $('<img class="ri_img ' + t.attr('class')+ '" src="img/timthumb.php?src=' + imgSrc + '&w='+parentW+'" />')

        // insert new image
        newImg.removeClass('ri_loader').insertAfter(t);

        t.remove(); // remove image placeholder
    });
};