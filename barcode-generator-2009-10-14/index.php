<?php
require_once('barcode.inc.php'); 
$code_number = 'A1M2009999';
new barCodeGenrator($code_number,0,'hello.gif'); 
?> 