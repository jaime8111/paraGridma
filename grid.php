<a id="grid"></a>
<h2 class="title h2 sectionHeader">Grid</h2>
    <p>ParaGRIDma uses a very standard method to display grid (very similar to popular frameworks like bootstrap or foundation). It has some basic rules:</p>
    <ul class="discList">
        <li>The grid system is based on a 12 column layout, with a max-width defined on CSS (<code>@row-max-width</code>)</li>

        <li><strong>All the columns in a row</strong> must be wrapper in a container with the class <code>row</code></li>
        <li>Each column must have a <strong>class from g-1 to g-12</strong> depending of the desired with</li>
        <li>If you desire to remove default margin in rows you must add the class <code>nm</code> to the row tag</li>
    </ul>
    <div class="show-grid">
        <?php for($i = 12; $i > 0; $i-- ) { ?>
            <div class="row nm">
                <div class="column g-<?=$i?>">
                    <?php if ( $i != 1 ) { ?><code>column g-<?=$i?></code><?php } else {  ?> <code><?=$k?></code> <?php } ?>
                </div>
                <?php
                if ( $i < 12 ) {
                    $k = 12 - $i;
                ?>
                    <div class="column g-<?=$k?>">
                        <?php if ( $k != 1 ) { ?><code>column g-<?=$k?></code><?php } else { ?> <code><?=$k?></code> <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
<pre class="brush: js; gutter: false; toolbar:false;">
<div class="row">
    <div class="column g-[0-12]">
    </div>
</div>
</pre>
    </div>

<h3 class="title h3">Centered columns</h3>
    <p>If you want to center a column you must add the class <code>centered</code> to the column. You can also add class <code>ac</code> to center text inside the column.</p>
    <div class="show-grid">
        <?php for($i = 4; $i < 12; $i=$i+2 ) { ?>

            <div class="row nm">
                <div class="column g-<?=$i?> centered ac">
                    Content of column <code>column g-<?=$i?></code> centered
                </div>
            </div>
        <?php } ?>
<pre class="brush: js; gutter: false; toolbar:false;">
<div class="row">
    <div class="column g-[0-12] centered">
    </div>
</div>
</pre>
    </div>

<h3 class="title h3">Columns with no padding</h3>
    <p>If we add the class <code>np</code> to the columns we can remove its padding.</p>

    <div class="show-grid">
        <div class="row nm">
            <div class="column g-4 np">
                no padding
            </div>
            <div class="column g-8 np">
                column with no padding with the class <code>np</code>
            </div>

        </div>
<pre class="brush: js; gutter: false; toolbar:false;">
<div class="row">
    <div class="column g-[0-12] np">
        ...
    </div>
</div>
</pre>
    </div>

<h3 class="title h3">Nested columns</h3>
    <p>The grid allows for nesting down. You can create complex layouts using nesting columns</p>

    <div class="show-grid">
        <div class="row nm">
            <div class="column g-4">
                <code>column g-4</code>
                <div class="row nm">
                    <div class="column g-8">
                        <code>column g-8</code>
                    </div>
                </div>
            </div>
            <div class="column g-8">
                <code>column g-8</code>
                <div class="row nm">
                    <div class="column g-4">
                        <code>column g-4</code>
                    </div>
                    <div class="column g-8">
                        <code>column g-8</code>
                    </div>

                </div>
            </div>

        </div>
<pre class="brush: js; gutter: false; toolbar:false;">
<div class="row">
    <div class="column g-[0-12]">
        <div class="row nm">
            <div class="column g-[0-12]">
                ...
            </div>
        </div>
    </div>
</div>
</pre>
    </div>

<h3 class="title h3">Columns like there is no tomorrow</h3>
    <p>If you want to add a lot of columns, but you don't want to create a row element for each line you can simply add a class <code>first</code> to the column in which you want to start a new row.</p>
    <div class="show-grid">
        <div class="row nm">
            <div class="column g-4">
                Column
            </div>
            <div class="column g-4">
                Column
            </div>
            <div class="column g-4">
                Column
            </div>
            <div class="column g-4 first">
                Start new row
            </div>
            <div class="column g-4">
                Column
            </div>
            <div class="column g-4">
                Column
            </div>
            <div class="column g-4 first">
                Start new row
            </div>
            <div class="column g-4">
                Column
            </div>
            <div class="column g-4">
                Column
            </div>
        </div>
<pre class="brush: js; gutter: false; toolbar:false;">
<div class="row">
    <div class="column g-6">
        ...
    </div>
    <div class="column g-6">
        ...
    </div>
    <div class="column g-6 first">
        ...
    </div>
</div>
</pre>
    </div>
<h3 class="title h3">Split Columns on big mobiles</h3>
    <p>Sometimes we want to reduce the amount of columns in small screens, but don't want to show them 100% width. In those cases we can add the class <code>split-on-mobile</code> on the row element.</p>
    <ul class="disc">
        <li>This change take effect between size of <code>@screen-smal</code> and <code>@screen-medium</code></li>
        <li>To test it reduce the size of the browser. You will see that the following 4 columns will be shown in groups of 2.</li>
    </ul>
    <div class="show-grid">
        <div class="row split-on-big-mobile">
            <div class="column g-3">
                Four columns that are shown in groups of two on big mobiles.
            </div>
            <div class="column g-3">
                Four columns that are shown in groups of two on big mobiles.
            </div>
            <div class="column g-3">
                Four columns that are shown in groups of two on big mobiles.
            </div>
            <div class="column g-3">
                Four columns that are shown in groups of two on big mobiles.
            </div>
        </div>
        <div class="row nm split-on-big-mobile">
            <div class="column g-6">
                Two columns that are shown in groups of two on big mobiles.
            </div>
            <div class="column g-6">
                Two columns that are shown in groups of two on big mobiles.
            </div>
        </div>
<pre class="brush: js; gutter: false; toolbar:false;">
<div class="row split-on-big-mobile">
    <div class="column g-6">
        ...
    </div>
    <div class="column g-6">
        ...
    </div>
</div>
</pre>
    </div>

<h3 class="title h3">Split Columns even on small mobiles</h3>
    <p>Sometimes we want to reduce the amount of columns in small screens, but don't want to show them 100% width. In those cases we can add the class <code>split-on-mobile</code> on the row element.</p>
    <ul class="disc">
        <li>This change take effect between size of <code>@screen-smal</code> and <code>@screen-medium</code></li>
        <li>To test it reduce the size of the browser. You will see that the following 4 columns will be shown in groups of 2.</li>
    </ul>
    <div class="show-grid">
        <div class="row nm split-on-mobile">
            <div class="column g-3">
                Four columns that are shown in groups of two on big mobiles.
            </div>
            <div class="column g-3">
                Four columns that are shown in groups of two on big mobiles.
            </div>
            <div class="column g-3">
                Four columns that are shown in groups of two on big mobiles.
            </div>
            <div class="column g-3">
                Four columns that are shown in groups of two on big mobiles.
            </div>
        </div>
<pre class="brush: js; gutter: false; toolbar:false;">
<div class="row split-on-mobile">
    <div class="column g-6">
        ...
    </div>
    <div class="column g-6">
        ...
    </div>
</div>
</pre>
    </div>
<?php /*
<h3 class="title h3">Fixed Block (always)</h3>

    <p>Frameworks defualt values: 50px, 100px, 150px, 200px and 250px. You can create new sizes editing the css file. Look for the classes <code>.pf</code></p>
    <div class="demoPanel">
        <div class="pf pf_g200">
            <div class="pf_fix">
                <img src="img/test_180.jpg">
            </div>
            <div class="pf_fluid">
                <h4 class="title h4">FLUID COLUMN</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus, ac egestas augue laoreet a. Quisque varius ligula non est porta sit amet dictum orci consequat. Morbi pellentesque luctus ligula, sit amet vehicula sapien imperdiet a. Suspendisse sed lacus at eros tristique vehicula eget sit amet sem.</p>
            </div>
        </div>
        <br/>
        <div class="pf_r pf_g200">
            <div class="pf_fix ar">
                <img src="img/test_180.jpg">
            </div>
            <div class="pf_fluid">
                <h4 class="title h4">FLUID COLUMN</h4>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus, ac egestas augue laoreet a. Quisque varius ligula non est porta sit amet dictum orci consequat. Morbi pellentesque luctus ligula, sit amet vehicula sapien imperdiet a. Suspendisse sed lacus at eros tristique vehicula eget sit amet sem.
            </div>
        </div>
    </div>

*/ ?>
<h3 class="title h3">Fixed Block <small>(with negative values)</small></h3>
    <p>Those panels have two columns. One of them has a fixed width, and the other one is fluid.</p>
    <p>On this mockup the fixed side is always displayed with 250px width. If you need another width you'll have to overwrite the classes: <code>fluid-column, fluid-column-inner, fix-column</code></p>

    <div class="demoPanel nm clearfix">
        <div class="fluid-column">
            <div class="fluid-column-inner">
                <h4 class="title h4">FLUID COLUMN ON LEFT SIDE</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus, ac egestas augue laoreet a. Quisque varius ligula non est porta sit amet dictum orci consequat. Morbi pellentesque luctus ligula, sit amet vehicula sapien imperdiet a. Suspendisse sed lacus at eros tristique vehicula eget sit amet sem.
                </p>
            </div>
        </div>
        <div class="fix-column demoPanel np">
            <h4 class="title h4">FIXED COLUMN</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus, ac egestas augue laoreet a. Quisque varius ligula non est porta sit amet dictum orci consequat. Morbi pellentesque luctus ligula, sit amet vehicula sapien imperdiet a. Suspendisse sed lacus at eros tristique vehicula eget sit amet sem.
            </p>
        </div>
     </div>
<pre class="brush: js; gutter: false; toolbar:false;">
<div class="fluid-column">
    <div class="fluid-column-inner">
        ...
    </div>
</div>
<div class="fix-column">
    ...
</div>
</pre>

    <div class="demoPanel nm clearfix">

        <div class="fix-column-left demoPanel np">
            <h4 class="title h4">FIXED COLUMN</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus, ac egestas augue laoreet a. Quisque varius ligula non est porta sit amet dictum orci consequat. Morbi pellentesque luctus ligula, sit amet vehicula sapien imperdiet a. Suspendisse sed lacus at eros tristique vehicula eget sit amet sem.
            </p>
        </div>
        <div class="fluid-column-left">
            <div class="fluid-column-left-inner">
                <h4 class="title h4">FLUID COLUMN ON RIGHT SIDE</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus, ac egestas augue laoreet a. Quisque varius ligula non est porta sit amet dictum orci consequat. Morbi pellentesque luctus ligula, sit amet vehicula sapien imperdiet a. Suspendisse sed lacus at eros tristique vehicula eget sit amet sem.
                </p>
            </div>
        </div>


    </div>
<pre class="brush: js; gutter: false; toolbar:false;">
<div class="fluid-column-left">
    <div class="fluid-column-left-inner">
        ...
    </div>
</div>
<div class="fix-column-left">
    ...
</div>
</pre>

<h3 class="title h3">Conditional Display</h3>
    <p>Some elements can be visible in some screen sizes and invisible in other. You can choose:</p>
    <ul class="discList">
        <li>Hide something on mobiles: <code>hide-on-phones</code></li>
        <li>Hide something on tablets: <code>hide-on-tablets</code></li>
        <li>Hide something on desktops: <code>hide-on-desktops</code></li>
    </ul>
    <div class="row nm">
        <div class="column g-4">
            <div class="demoPanel hide-on-phones">
                This Panel is not visible on <strong>phones</strong>
            </div>
        </div>
        <div class="column g-4">
            <div class="demoPanel hide-on-tablets">
                This Panel is not visible on <strong>tablets</strong>
            </div>
        </div>
        <div class="column g-4">
            <div class="demoPanel hide-on-desktops">
                This Panel is not visible on <strong>desktop</strong>
            </div>
        </div>
    </div>

