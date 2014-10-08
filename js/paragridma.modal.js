$.fn.showModal = function () {
    console.log('TODO: Los dialogos no estan hechos. este código es el usado en QMP');
    function positionModal(overlay) {
        overlay.width('auto').height('auto');

        overlay.width($(document).width())
            .height($(document).height());

        var modal = overlay.find('.modal-win'),
            modalTopOffset = $(document).scrollTop(),
            modalLeftOffset = modal.width() / 2;

        modal.css({
            'top': modalTopOffset+'px',
            'margin-left': '-'+modalLeftOffset+'px'
        });


    }

    return this.each(function() {
        var overlay = $(this);

        overlay.show();

        positionModal(overlay);

        var modalResize = 0;
        $(window).resize(function () {
            clearTimeout(modalResize);
            modalResize = setTimeout(function(){
                positionModal(overlay);
            }, 300);
        })
    });
};