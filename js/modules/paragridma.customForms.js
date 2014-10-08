$.fn.customFileInput = function () {

    return this.each(function() {
        var t = $(this),
            input = t.find('input'),
            fakeTrigger = t.find('.bt'),
            fakeInput = t.find('.fileName');

        input.change(function () {
            if ( input.val() ) {
                // get only file name, with out path
                var fileName = input.val().split('\\').pop();
            } else {
                // user doesn't select any file
                var fileName = input.val();
            }
        });

        input.click(function (e) {
            e.stopPropagation();
        })

        t.click(function (e) {
            e.preventDefault();
            input.click();
        });

    });
};