$.fn.comboAsTags = function () {
    return this.each(function() {

        var combo = $(this),
            tags = $('<div class="tags-list"></div>');

        // remove previous tag list if it exist
        combo.parent().find('.tags-list').remove();

        combo.hide().find('option').each( function () {
            tags.append('<a href="#" data-combo-val="'+$(this).attr('value')+'">'+$(this).html()+'</a>');
        });

        tags.insertBefore(combo)
            .find('a').click(function (e) {
                e.preventDefault();

                var preValues = combo.val(),
                    link = $(this),
                    itemVal = link.data('combo-val');

                console.log(itemVal);
                if ( !preValues ) {
                    preValues = itemVal;
                    link.addClass('selected');
                } else {
                    if( $.inArray( itemVal, preValues ) < 0 ) {
                        // value where unselected
                        preValues.push($(this).data('combo-val'));

                        link.addClass('selected');
                    } else {
                        // value was selected, so we unselected it
                        preValues.splice( $.inArray(itemVal, preValues), 1 );

                        link.removeClass('selected');
                    }
                }

                combo.val( preValues ).trigger('change');
            })
    })
}