<?php
header("Access-Control-Allow-Origin: *");
header('Content-Disposition: Attachment;filename=image.png'); 
header('Content-type: image/png'); 

//Ptuj hacker ban. Another log to prevent spamming log.




$a = 0;
foreach ( $_POST as $key => $value )
{
    
        $pic = $value;

		$data = $pic;

list($type, $data) = explode(';', $data);
list(, $data)      = explode(',', $data);
$data = base64_decode($data);

file_put_contents('/tmp/image.png', $data);
        //echo $pic;
//		echo $pic;
		$fp = fopen('./pic/graphics_' . date("YmdTHis") . ' ' . $a . '.png', 'w');
fwrite($fp, $data);
fclose($fp);



$a++;
echo $a;
}

 
	//exit(0);

?>