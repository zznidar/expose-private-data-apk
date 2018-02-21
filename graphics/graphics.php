<?php
header("Access-Control-Allow-Origin: *");
header('Content-Disposition: Attachment;filename=image.png');
header('Content-type: image/png');

$a = 0; // initialize a variable to be added to filename to prevent override

foreach($_POST as $key => $value) {
	$pic = $value;
	$data = $pic;
	list($type, $data) = explode(';', $data);
	list(, $data) = explode(',', $data);
	$data = base64_decode($data);
	file_put_contents('/tmp/image.png', $data);

	$fp = fopen('./pic/graphics_' . date("YmdTHis") . ' ' . $a . '.png', 'w');
	fwrite($fp, $data);
	fclose($fp);
	$a++;
	echo $a; // give feedback for debug purposes
}

// exit(0);

?>
