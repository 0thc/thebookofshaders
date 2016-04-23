<?php
	$path = "../..";
	$subtitle = ": Gallery - Shaping functions";
	$README = "README";
	$language = "";

	if ( !empty($_GET['lan']) ) {
		if (file_exists($README.'-'.$_GET['lan'].'.md')) {
			$language = '-'.$_GET['lan'];
			$README .= $language;
		}
	}

	include("../header.php");
	include("../../chap-header.php");

	echo '<div id="content">';
	include("../../src/parsedown/Parsedown.php");
	$Parsedown = new Parsedown();
	echo $Parsedown->text(file_get_contents($README.'.md'));
	$dir = basename(__DIR__);
	echo "<div class=\"glslChapterGallery\" log=\"{$dir}\"></div>";
	echo '
	</div>
	<hr>
	<ul class="navigationBar" >
		<li class="navigationBar" onclick="window.location.href=\'../index.php\'">Gallery Home </li>
	</ul>';

	include("../../footer.php");
?>

