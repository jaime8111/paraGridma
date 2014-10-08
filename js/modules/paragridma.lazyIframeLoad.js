$.fn.lazyIframeLoad = function () {
    console.log("entra");
    return this.each(function() {
        var wrap = $(this);

        wrap.find('a').click( function (e) {
            e.preventDefault();
            e.stopPropagation();
            console.log("click");

            $(this).parent().click();
        });

        wrap.click( function (e) {
            console.log("click 2");
            e.preventDefault();
            e.stopPropagation();

            var wrap = $(this),
                videoURL = wrap.children('.triggerVideoPoster').attr('href'),
                videoID = wrap.attr('data-video-id'),
                videoHeigth = '100%',
                ratio = 0.562;

            if ( navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) ) {
                videoHeigth = parseInt( wrap.width() * ratio );
            }

            wrap.children('.videoPoster, .triggerVideoPoster').hide();
            wrap.find('.responsiveContent').show();

            var videoWrap = $('<div class="responsiveContent"></div>');


            if (wrap.attr('data-video-provider') === 'Vimeo') {
                //videoWrap.find('.iframeWrap').append('<iframe src="//player.vimeo.com/video/'+videoID+'?autoplay=1" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
                videoWrap.append('<iframe src="//player.vimeo.com/video/'+videoID+'?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff&amp;autoplay=1" width="100%" height="'+videoHeigth+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
            } else {
                // https://developers.google.com/youtube/player_parameters?hl=es&csw=1#hd
                videoWrap.append('<iframe width="100%" height="'+videoHeigth+'" src="http://www.youtube.com/embed/'+videoID+'?autoplay=1&html5=1&hd=1&showinfo=0&showsearch=0&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>');
            }


            wrap.append(videoWrap);
        });

    });
};