<a id="texts"></a>
<h2 class="h2 nm title sectionHeader">Typography</h2>
    <p>Typography is built with <code>rems</code>, so it easier to adapt the font sizes in different breakpoints.</p>
    <p><a href="http://snook.ca/archives/html_and_css/font-size-with-rem" target="_blank">rem</a>: It is the size relative to the root element (or the HTML element). So we can define a single font size on the html element and it affects to all elements with rem units to be a percentage of that.</p>
    <div class="demoPanel">
        <h4 class="title h4">Paragraph example</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet blandit nunc ut cursus. Integer viverra blandit erat, a feugiat dolor auctor ac. Proin tincidunt pulvinar velit, a tincidunt nisi semper eu.</p>

        <h4 class="title h4 nm">Inline elements</h4>
        <div class="row nm">
            <div class="column g-6">
                <p class="i">Italic Text</p>
                <p><small>&lt;small&gt;: Small text</small></p>
                <p><em>&lt;em&gt;: Emphasys text</em></p>
                <p><strong>&lt;strong&gt;: Emphasys text</strong></p>
                <pre>&lt;pre&gt;: text</pre>

            </div>
            <div class="column g-6">
                <p><a href="javascript:vodi(0)">default link</a></p>
                <p><a href="javascript:vodi(0)" class="nu">link without underline</a> <code>class="nu"</code></p>
                <p><span class="upper">Force uppercase text</span> <code>class="upper"</code></p>
                <p><span class="lower">Force lowercase text</span> <code>class="lower"</code></p>
                <p><code>&lt;code&gt;: text</code></p>
            </div>
        </div>
    </div>

<h3 class="h3 title">Headings</h3>
    <p>Headings exists from <code>h1</code> to <code>h6</code>. Font sizes are defined in <code>em</code></p>
    <p>In addition to heading <strong>you can use add extra text</strong>. You can use the tag <code>&lt;small&gt;</code> inside the heading
     or add an adjacent heading with class <code>subheader</code></p>
    <div class="demoPanel nm">
        <h1 class="h1 title">h1. Heading 1 <small>with extra notes</small></h1>
        <h2 class="subheader h2">Subheader for h1</h2>
        <h2 class="h2 title">h2. Heading 2 <small>with extra notes</small></h2>
        <h3 class="subheader h3">Subheader for h2</h3>
        <h3 class="h3 title">h3. Heading 3 <small>with extra notes</small></h3>
        <h4 class="subheader h4">Subheader for h3</h4>
        <h4 class="h4 title">h4. Heading 4 <small>with extra notes</small></h4>
        <h5 class="subheader h5">Subheader for h4</h5>
        <h5 class="h5 title">h5. Heading 5 <small>with extra notes</small></h5>
        <h6 class="subheader h6">Subheader for h5</h6>
        <h6 class="h6 title">h6. Heading 6 <small>with extra notes</small></h6>
    </div>
<pre class="brush: js; gutter: false; toolbar:false;">
<h1 class="h1 title">h1. Heading 1 <small>with extra notes</small></h1>
</pre>



<h3 class="h3 title">Aligments</h3>
    <div class="demoPanel">
        <p class="al">Align text on left side. <code>class="al"</code></p>
        <p class="ac">Align text on center. <code>class="ac"</code></p>
        <p class="ar">Align text on right side. <code>class="ar"</code></p>
    </div>

<h3 class="h3 title">Responsive typhography</h3>
    <p>For headings and other big size text we need to adapt font-size in relation to display width. We can do this width <strong>media queries</strong> and width <strong>a javascript function call</strong> <code>adjustTextSize</code>.</p>
    <p>This function accept 3 parameters:</p>
    <ol>
        <li><code>strings</code>: Elements to be resized</li>
        <li><code>set_max_size</code>: boolean to limit maximum font size to its defined size in CSS</li>
        <li><code>min_size</code>: Integer number to limit minimum font size.</li>
    </ol>
    <p>All elements with class <code>js-adjust-text</code> will be adjusted</p>
    <h4 class="title h4">Default adjust text <small>with no size limitations</small></h4>
    <div class="demoPanel nm">
        <h2 class="h2 nm title js-adjust-text">Lorem ipsum</h2>
        <h2 class="h2 nm title js-adjust-text">Lorem ipsum dolor sit</h2>
        <h2 class="h2 nm title js-adjust-text">Lorem ipsum dolor sit amet, consectetur</h2>
        <h2 class="h2 nm title js-adjust-text">Lorem ipsum dolor sit amet, consectetur kfdkfd fkk ckdsfn kjkjd fkjdfkjd ftur</h2>

    </div>
    <pre class="brush: js; gutter: false; toolbar:false;">$('.js-adjust-text').adjustTextSize(false, 12);</pre>

    <h4 class="title h4">Adjust text <small>with limitations</small></h4>
    <div class="demoPanel nm">
        <h2 class="h2 nm title js-adjust-text-limit" style="font-size:100px;">Lorem ipsum</h2>
        <h2 class="h2 nm title js-adjust-text-limit" style="font-size:100px;">Lorem ipsum dolor sit</h2>
        <h2 class="h2 nm title js-adjust-text-limit" style="font-size:100px;">Lorem ipsum dolor sit amet, consectetur</h2>
        <h2 class="h2 nm title js-adjust-text-limit" style="font-size:100px;">Lorem ipsum dolor sit amet, consectetur kfdkfd fkk ckdsfn kjkjd fkjdfkjd ftur</h2>

    </div>

    <pre class="brush: js; gutter: false; toolbar:false;">$('.js-adjust-text-limit').adjustTextSize(true, 30);</pre>

<h3 class="h3 title">Lists</h3>
    <p>You can choose between different types of lists: empty list (default), unordered lists, ordered lists, and definition lists. In default <code>ul</code> lists we remove list styles, because in our apps most of times we don't want that our lists look like lists</p>
    <div class="demoPanel">
        <div class="row">
            <div class="column g-4">
                <h4 class="title h4">Default list</h4>
                <p><code>&lt;ul&gt;</code></p>
                <ul>
                   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                   <li>Aliquam tincidunt mauris eu risus.</li>
                   <li>Vestibulum auctor dapibus neque.</li>
                </ul>
            </div>
            <div class="column g-4">
                <h4 class="title h4">List with Discs</h4>
                <p><code>&lt;ul class="discList"&gt;</code></p>
                <ul class="discList">
                   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                   <li>Aliquam tincidunt mauris eu risus.</li>
                </ul>
            </div>
            <div class="column g-4">
                <h4 class="title h4">Definition List</h4>
                <p><code>&lt;dl&gt;&lt;dt&gt;</code></p>
                <dl>
                  <dt>definition list dt</dt>
                  <dd>definition list dd</dd>
                  <dt>definition list dt</dt>
                  <dd>definition list dd</dd>
                </dl>
            </div>
            <div class="column g-4 first">
                <h4 class="title h4">Order List</h4>
                <p><code>&lt;ol&gt;</code></p>
                <ol class="circleList">
                   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                   <li>Aliquam tincidunt mauris eu risus.</li>
                </ol>
            </div>
            <div class="column g-4">
                <h4 class="title h4">List with Squares</h4>
                <p><code>&lt;ul class="squareList"&gt;</code></p>
                <ul class="squareList">
                   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                   <li>Aliquam tincidunt mauris eu risus.</li>
                </ul>
            </div>
            <div class="column g-4">
                <h4 class="title h4">Horizontal list</h4>
                <p><code>&lt;ul class="horizontalList"&gt;</code></p>
                <ul class="horizontalList">
                   <li>Item 1</li>
                   <li>Item 2</li>
                   <li>Item 3</li>
                </ul>
            </div>
            <div class="column g-4 first">

            </div>
            <div class="column g-4">
                <h4 class="title h4">List with Circles</h4>
                <p><code>&lt;ul class="circleList"&gt;</code></p>
                <ul class="circleList">
                   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                   <li>Aliquam tincidunt mauris eu risus.</li>
                </ul>
            </div>
            <div class="column g-4">
                <h4 class="title h4">Horizontal list centered</h4>
                <p><code>&lt;ul class="horizontalList ac"&gt;</code></p>
                <ul class="horizontalList ac">
                   <li>Item 1</li>
                   <li>Item 2</li>
                   <li>Item 3</li>
                </ul>
            </div>
        </div>
    </div>








