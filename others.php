<a id="others"></a>
    <h2 class="h2 nm title sectionHeader">Other components</h2>
    <h3 class="h4 title">Breadcrumbs</h3>
    <p>This is the structure that Google recommens for a breadcrumbs</p>
    <div class="demoPanel">
        <div id="breadcrumb">
            <span class="breadcrumnPreTitle">You are in »</span>
            <div class="breadcrumb" itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                <a itemprop="url" href="/">
                    <span itemprop="title">Home</span>
                </a> ›
            </div>
            <div class="breadcrumb" itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                <a itemprop="url" href="#">
                    <span itemprop="title">Section</span>
                </a> ›
            </div>
            <div class="breadcrumb" itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                <a itemprop="url" href="#">
                    <span itemprop="title">Article</span>
                </a>
            </div>
        </div>
    </div>

    <h3 class="h4 title">Tooltips</h3>

    <p class="todo">TODO: Tooltips</p>

    <h3 class="h4 title">Responsive video embed & Lazy Iframe Video load</h3>

    <p>If your page needs to load an iframe from Youtube or Vimeo you'll notice that you have 2 problems: Page load time became much more slower and the iframe doesn't fix it's responsive parent size.</p>
    <p>To make you <strong>iframe fits the desire width and height</strong> you hace to use this HTML structure and remove every iframe tag related to dimensions.</p>
    <div class="todo">Write code to embed responsive iframe</div>

    <p>The problem with the <strong>page load time</strong> is that this kinds of iframe needs lots of resources to work fine. If we just embed one of those iframes the page will require al those Javascript and CSS, and our cool page'll became slower.</p>
    <p>The solution that we use is to load the iframe only when the user want to see it (on user click).</p>
    <p>At the moment it is only available to load video iframes from youTube and Vimeo.</p>

    <div class="demoPanel">
        <div class="row nm">
            <div class="column g-6">
                <div class="videoPosterWrap Youtube"
                    data-video-id="_veOIvMWazU"
                    data-video-provider="Youtube">
                        <img src="img/video-poster-example.jpg" class="videoPoster">
                        <a href="http://youtube.com/embed/_veOIvMWazU" class="triggerVideoPoster" title="Watch video">
                            <em>Click to watch video</em>
                        </a>
                </div>
            </div>
            <div class="column g-6">
                <div class="videoPosterWrap Vimeo"
                    data-video-id="79183040"
                    data-video-provider="Vimeo">
                        <img src="img/video-poster-example.jpg" class="videoPoster">
                        <a href="http://vimeo.com/79183040" class="triggerVideoPoster" title="Watch video">
                            <em>Click to watch video</em>
                        </a>
                </div>
            </div>
        </div>
    </div>


    <script>
    $(function () {

        $('.videoPosterWrap').lazyIframeLoad();
    })
    </script>

