<!DOCTYPE HTML>
<html lang="en">
<head>
<title>BS15_9_MODALS.PHP</title>
<?php include "c:/wamp/www/testcode/local_cdn/head_inc.php" ?>
<link rel="stylesheet" type="text/css" href="/testcode/local_cdn/testcode.css">
</head>
<body>
<script>
function do_before() { return "Added text as a prefix" };
$(document).ready(function() {
// SCRIPT SPECIFIC CODE
// SCRIPT STANDARD BOILERPLATE
$('h4#code_heading').text("HERE'S THE RELEVANT CODE:").before(do_before());
});
</script>
<h1>BS15_9_MODALS.PHP</h1>
<h4>MODALS</h4>
<p>5/4/17 TEACH YOURSELF BOOTSTRAP LISTING 15.9 on P.251<p>
<?php include "c:/wamp/www/testcode/local_cdn/jq_test.html" ?><br />
<div class="container">
<h4>PROGRAM OUTPUT:</h4>
<div class="container">
<!-- MODAL -->
<a href="#" data-toggle="modal" data-target="#myModal" data-imagetitle="The Dalles Sevenmile" data-imagesource="images/2009_dalles_sevenmile04.jpg"><img src="images/2009_dalles_sevenmile04.jpg" alt="thedalles sevenmile" class="image-thumbnail"></a>
<a href="#" data-toggle="modal" data-target="#myModal" data-imagetitle="Colors" data-imagesource="images/2011_colors07_640.jpg"><img src="images/2011_colors07_640.jpg" alt="colors" class="img-thumbnail"></a>
<div class="modal fade" id="#myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times</span>
</button>
<h4 class="modal-title" id="myModalLabel">Image</h4>
</div>
</div></div></div></div>

<h4 id="code_heading">HEADING</h4> <!-- This heading is modified if JQuery is running OK -->
<h5>HEAD SECTION:</h5>
<div class="well cf_code"><?php echo htmlspecialchars(''); ?></div>
<h5>BODY SECTION:</h5>
<div class="well cf_code"><?php echo htmlspecialchars(''); ?></div>
<h5>SCRIPT NOTES:</h5>
<div class="well cf_code">Demonstrates 4-Column Bootstrap modal</div>
</div> <!-- END CONTAINER -->
</body>
</html>