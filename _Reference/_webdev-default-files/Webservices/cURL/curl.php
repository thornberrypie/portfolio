<?php
$url = 'http://www.graemethornber.com';
//$data = array('key'=>'value');
//$data_string = json_encode($data);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_REFERER, "http://www.example.org/yay.htm");
curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
curl_setopt($ch, CURLOPT_HEADER, 0);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json'
));*/

curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$result = curl_exec($ch);
//curl_close($ch);

echo $result;
?>