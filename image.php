<?php
$dir = "data/";
if(!is_dir($dir)) mkdir($dir, 0777, true);
$header = apache_request_headers();
file_put_contents($dir.$header['Host']."_".date('c'), print_r(json_encode($header), true));
header('Content-Type: image/gif');
print_r(base64_decode("R0lGODlhAQABAIAAAAUEBAAAACwAAAAAAQABAAACAkQBADs="));
?>
