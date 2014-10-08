<a id="tables"></a>
    <h2 class="h2 nm title sectionHeader">Tables</h2>
    <p>This component give you the core styles and javascript functions to let you use tables.</p>
    <table class="hover">
        <?php include("includes/tableContent.php"); ?>
    </table>

    <h3 class="h4 title">Condensed Tables</h3>
    <table class="table-small">
        <?php include("includes/tableContent.php"); ?>
    </table>

    <h3 class="h4 title">Responsive Tables</h3>
    <p>You can make your tables responsive just wrapping the table with a panel with the class <code>table-responsive</code>.
        <strong>In small widths the table will scroll horizontally</strong></p>
    <div class="table-responsive">
        <table>
            <?php include("includes/tableContent.php"); ?>
        </table>
    </div>

    <h3 class="h4 title">Pagination</h3>
    <div class="demoPanel">
        <div class="pagination">
            <ul>
                <li class="prev disabled"><a href="#">« Previous</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">52</a></li>
                <li><a href="#">108</a></li>
                <li class="next"><a href="#">Next »</a></li>
            </ul>
        </div>
    </div>


