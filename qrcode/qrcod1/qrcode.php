<?
// อ่างอิง http://www.superiorwebsys.com/blog/66/Generate_QR_Code_with_PHP_Using_Google_API/
$urlToEncode="http://superiorwebsys.com";
generateQRwithGoogle($urlToEncode);
function generateQRwithGoogle($url,$widthHeight ='150',$EC_level='L',$margin='0') {
    $url = urlencode($url); 
    echo '<img src="http://chart.apis.google.com/chart?chs='.$widthHeight.
'x'.$widthHeight.'&cht=qr&chld='.$EC_level.'|'.$margin.
'&chl='.$url.'" alt="QR code" widthHeight="'.$widthHeight.
'" widthHeight="'.$widthHeight.'"/>';
}
?>