<?php

if( isset($_GET['token']) ) {
  $token = $_GET['token'];
	$file = './'. $token .'.txt';
	if( file_exists($file) ) {
		$count = file_get_contents($file, true);
	} else {
		$count = 0;
	}
} else {
	die('Error: No token supplied.');
}

if( isset($_GET['show']) ) {
	// output count
	echo 'Counter: ' . (isset($_GET['show']) ? 'show ' : '') . $_GET['token'] . ' (' . $count . ')';
} else {
	header ("Content-type: image/png");
	$im = @imagecreatetruecolor(1, 1);
	
	imagealphablending($im, false);
	imagesavealpha($im, true);
	
	$white = imagecolorallocatealpha($im, 255, 255, 255, 127);
	imagefill($im, 0, 0, $white);
	imagepng($im);
	imagedestroy($im);
	
	// update count
	$count = $count + 1;
	file_put_contents($file, $count);
}
