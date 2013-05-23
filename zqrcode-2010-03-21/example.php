<?php
include 'zqrcode.php';

$qrcode = new zQRCode();
$qrcode->setSize(20); // size up to 40
$qrcode->setData("http://www.joandilee.com"); // size up to 250 chars
$result = $qrcode->run();
header('Content-type: image/png');
echo $result;