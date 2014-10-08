<a id="images"></a>
    <h2 class="h2 nm title sectionHeader">Images</h2>
    <p>This is the default way to include an image.</p>
    <p>
        <img src="img/responsiveTest/responsiveTest_large.jpg" alt="" />
    </p>

    <h3 class="h4 title">Responsive Images</h3>
    <div class="todo">
        <p>TODO: We are working in a innovative system to display images in a responsive way</p>
        <p><strong>INSPIRATION:</strong>
            Create Images: https://code.google.com/p/timthumb/<br/>
        </p>
    </div>
    <p>We know several libraries that offer this feature, but none of them fix our needs completly. We need a solution that:</p>
    <ul class="discList">
        <li><strong>Work with out Javascript</strong>: If there is no Javascript on render time, then the large version of the image will be displayed</li>
        <li><strong>The version of the image to show depens of its parent size</strong>. Other libraries rely this on window width, and we thing that this is not the best method to do it.</li>
        <li><strong>Option to set diferent version sizes for different images groups</strong>: In a real project not all the images can be display with the same dimensions.</li>
        <li><strong>Create several version of the image on the server</strong>: First implementation will be in PHP, but we'll do it also for JAVA & Grails.</li>
        <li><strong>Bandwidth detection</strong>: If connection is slow the the lowest quality version of the image will be display.</li>
        <li><strong>Lazy load</strong>: Load images only when they are inside the viewport.</li>
    </ul>
    <p>
        <i class="ri_loader" data-src="http://localhost/paragridma/img/responsiveTest/responsiveTest.jpg"></i>
        <noscript><img src="http://localhost/paragridma/img/responsiveTest/responsiveTest_large.jpg" alt="" /></noscript>
    </p>
    <p>To resize the image we use the PHP script timthumb.php. To make it work you need:</p>
    <ul class="discList">
        <li>Placed in a folder on your website. We like to inlcude it inside our main image folder.</li>
        <li>Create a directory called 'cache' with 775 permisions.</li>
    </ul>
    <div class="todo">
        <p>make timthumb work with relative paths</p>
    </div>