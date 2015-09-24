<?php

$ch = curl_init('http://s3.amazonaws.com/codecademy-blog/assets/ninja_zpsa5dbe37a.jpg');
$fp = fopen('/wamp/www/Pinterest/img/flower.jpg', 'wb');
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);
echo "it worked";

?>