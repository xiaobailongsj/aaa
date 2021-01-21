<?php
$key = "abc";
$data = "hangjia";
$hash_str=hash('sha256',$data.$key);

$url=file_get_contents("http://b.2006.com/receive.php?data=$data&sing=$hash_str");
echo $url;