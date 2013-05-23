<?php
/**
QRCode Barcode Generator Class
any advice? feel free to contact me at joandi85 @ yahoo.com
http://www.joandilee.com

Requirement:
php_curl

example:
$qrcode = new zQRCode();
$qrcode->setSize(20); // size up to 40
$qrcode->setData("http://www.joandilee.com"); // size up to 250 chars
$result = $qrcode->run();
header('Content-type: image/png');
echo $result;
*/
class zQRCode {
	private $ch;
	private $size;
	private $data;

	function __construct(){
		$this->ch = curl_init();
		curl_setopt($this->ch, CURLOPT_HEADER, 0);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, TRUE);
	}
	
	// size up to 40
	public function setSize($size){
		$this->size = $size;
	}
	
	// data 1-250 chars
	public function setData($data){
		$this->data = $data;
	}
	
	public function run(){
		$useragent[0] = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.5 (KHTML, like Gecko) Chrome/4.1.249.1036 Safari/532.5";
		$useragent[1] = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.5 (KHTML, like Gecko) Chrome/4.0.249.89 Safari/532.5";
		$useragent[2] = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.9.2) Gecko/20100115 Firefox/3.6";
		$useragent[3] = "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6";
		$useragent[4] = "Opera/9.80 (Windows NT 5.1; U; en) Presto/2.5.22 Version/10.50";
		$useragent[5] = "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; FDM; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)";
		
		curl_setopt($this->ch, CURLOPT_USERAGENT, $useragent[rand(0,5)]);	
		curl_setopt($this->ch, CURLOPT_URL, 'http://qrcode.kaywa.com/img.php?s='.$this->size.'&d='.$this->data);
		$result = curl_exec($this->ch);
		return $result;
	}
}
