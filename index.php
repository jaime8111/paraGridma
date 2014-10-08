<?php include("includes/header.php"); ?>
<!-- container -->
<div class="container">

    <div id="fixedBar">
    	<div class="content">
	    	<a href="#" id="toggleFixedBar" title="Toggle navigation bar" class="hide-on-desktops hide-on-tablets">toggle</a>
	        <div id="logoWrap" class="ac">
	        	<img src="img/paragridmaLogo_200.png" alt="logo paragridma v3" />
	        </div>

	        <ul id="mainMenu">
	            <li>
	                <a href="#grid">Grid</a>
	            </li>
	            <li>
	                <a href="#texts">Typography</a>
	            </li>
	            <li>
	                <a href="#forms">Forms</a>
	            </li>
	            <li>
	                <a href="#buttons">Buttons</a>
	            </li>
	            <li>
	                <a href="#messages">Messages</a>
	            </li>
	            <li>
	                <a href="#tabs">Tabs</a>
	            </li>
	            <li>
	                <a href="#tables">Tables</a>
	            </li>
	            <li>
	                <a href="#images">Images</a>
	            </li>
	            <li>
	                <a href="#others">Other components</a>
	            </li>
	            <li>
	                <a href="#addons">Add ons</a>
	            </li>
	        </ul>
        </div>
    </div>
	<div class="row">
		<div class="g-12 column">
		    <div id="sectionsContent">

				<?php include("grid.php"); ?>
				<?php include("texts.php"); ?>
				<?php include("forms.php"); ?>
				<?php include("buttons.php"); ?>
				<?php include("messages.php"); ?>
				<?php include("tabs.php"); ?>
				<?php include("tables.php"); ?>
				<?php include("images.php"); ?>
				<?php include("others.php"); ?>
				<?php include("addons.php"); ?>
			</div>
		</div>
	</div>



</div> <!-- container -->

<script>
	$(function () {
		var toggleLink = $('#toggleFixedBar'),
			fixedBar = $('#fixedBar');

		toggleLink.click(function(e) {

			e.preventDefault();


			if ( fixedBar.hasClass('opened') ) {
				console.log("close");
			} else {
				console.log("open");
			}
			fixedBar.toggleClass('opened');
		})
	});
</script>
<?php include("includes/footer.php"); ?>
