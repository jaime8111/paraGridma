<?php include("includes/header.php"); ?>
<!-- container -->
<div class="container">
    <div class="row">
        <div class="g-16 column">
            <div id="">
                <a id="grid"></a>
<h2 class="title h2 sectionHeader">Grid</h2>
    <p>ParaGRIDma uses a very standard method to display grid (very similar to popular frameworks like bootstrap or foundation). It has some basic rules</p>
    <ul class="disc">
        <li>The grid system is based on a 12 column layout, with a max-width defined on CSS (@row-max-width)</li>
        <li>All the <strong>rows</strong> must be wrapped in a a container with the class <code>container</code></li>
        <li><strong>All the columns in a row</strong> must be wrapper in a container with the class <code>row</code></li>
        <li>Each column must have a <strong>class from g-1 to g-12</strong> depending of the desired with</li>
    </ul>
    <div class="show-grid">
        <?php for($i = 16; $i > 0; $i-- ) { ?>
            <?php if ($i == 1) { ?>
            <div class="row">
            <?php } else { ?>
            <div class="row nm">
            <?php } ?>
                <div class="column g-<?=$i?>">
                    <?php if ( $i != 1 ) { ?><code>column g-<?=$i?></code><?php } else {  ?> <code><?=$k?></code> <?php } ?>
                </div>
                <?php
                if ( $i < 16 ) {
                    $k = 16 - $i;
                ?>
                    <div class="column g-<?=$k?>">
                        <?php if ( $k != 1 ) { ?><code>column g-<?=$k?></code><?php } else { ?> <code><?=$k?></code> <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>


            </div>
        </div>
    </div>



</div> <!-- container -->


<?php include("includes/footer.php"); ?>
