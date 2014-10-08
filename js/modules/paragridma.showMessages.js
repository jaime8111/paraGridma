$.fn.showMsg = function (size, type, scroll, title, content) {
    return this.each(function() {
        // Store the object
        var p = $(this);
        p.hide();

        var html = "";
        if (size == 'big') {
            html    += '<div class="pf_fix hidden"></div>';
            html    += '<div class="pf_fluid">';
            var panelClass = 'pf';
        } else if (size == 'small') {
            html    += '<div>';
            var panelClass = '';
        }

        html    += '  <a class="close" href="#">&times;</a>';

        if ( title ) {
            html    += '  <p class="msg_title">' + title + '</p>';
        }
        if ( content ) {
            html    += '  <p class="msg_content">' + content + '</p>';
        }

        html    += '</div>';

        p.attr('class','msg msg_' + type + ' msg_' +  size + ' ' + panelClass)
            .html(html)
            .slideDown(500,function(){
                p.find(".pf_fix").fadeIn("slow");
            });

        if (scroll == '1') {
            var p_pos = p.offset().top - 20;

            $('html,body').animate({scrollTop:p_pos},1000);
        }

        p.find('.close').click(function (e) {
            e.preventDefault();
            p.hideMsg();
        })

    });
};

$.fn.hideMsg = function () {
    return this.each(function() {
        var p = $(this);

        if ( p.find(".pf_fix").size() ) {
            p.find(".pf_fix").fadeOut(300,function(){
                p.fadeOut();
            })
        } else {
            p.fadeOut();
        }
    });
};