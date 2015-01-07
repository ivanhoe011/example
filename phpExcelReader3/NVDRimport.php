<?php

/** PHPExcel */
require_once 'Classes/PHPExcel.php';

/**
 * PHPExcel_IOFactory - Reader
 */
include 'Classes/PHPExcel/IOFactory.php';

$inputFileName = "myData1.xls";
$inputFileType = PHPExcel_IOFactory::identify ( $inputFileName );
$objReader = PHPExcel_IOFactory::createReader ( $inputFileType );
$objReader->setReadDataOnly ( true );
$objPHPExcel = $objReader->load ( $inputFileName );

$objWorksheet = $objPHPExcel->setActiveSheetIndex ( 0 );
$highestRow = $objWorksheet->getHighestRow ();
$highestColumn = $objWorksheet->getHighestColumn ();

$headingsArray = $objWorksheet->rangeToArray ( 'A2:' . $highestColumn . '2', null, true, true, true );
$headingsArray = $headingsArray [2];

$bar = $objPHPExcel->getActiveSheet ()->getCell ( 'A2' )->getValue ();
$foo = $objPHPExcel->getActiveSheet ()->getCellByColumnAndRow ( 'A', 2 )->getValue ();

echo '<pre>';
var_dump ( $foo );
echo '</pre><hr />';

// break;

$r = - 1;
$namedDataArray = array ();
for($row = 3; $row <= $highestRow; ++ $row) { // โง่จริงๆๆ เลยกรู $row =2 คือ เริ่ม ตนที่ A2 ของ
                                              // Excel โง่ได้ใจ หัดอ่าน Code แล้วทำความเข้าใจด้วยนะ
                                              // สาด...
	$dataRow = $objWorksheet->rangeToArray ( 'A' . $row . ':' . $highestColumn . $row, null, true, true, true );
	if ((isset ( $dataRow [$row] ['A'] )) && ($dataRow [$row] ['A'] > '')) {
		++ $r;
		foreach ( $headingsArray as $columnKey => $columnHeading ) {
			$namedDataArray [$r] [$columnHeading] = $dataRow [$row] [$columnKey];
		}
	}
}

echo '<pre>';
var_dump ( $namedDataArray );
echo '</pre><hr />';

// *** Connect to MySQL Database ***//

$objConnect = mysqli_connect ( "localhost", "root", "l[kpfu", "phpexcel" ) or die ( mysqli_error () );
?>
<table width="500" border="1">
	<tr>
		<td>CustomerID</td>
		<td>Name</td>
		<td>Email</td>
		<td>CountryCode</td>
		<td>Budget</td>
		<td>Used</td>
		<td>Status</td>
	</tr>
<?php

$i = 0;
foreach ( $namedDataArray as $result ) {
	$i ++;
	$strSQL = "";
	$strSQL .= "INSERT INTO customer ";
	$strSQL .= "(CustomerID,Name,Email,CountryCode,Budget,Used) ";
	$strSQL .= "VALUES ";
	$strSQL .= "('" . $result ["CustomerID"] . "','" . $result ["Name"] . "' ";
	$strSQL .= ",'" . $result ["Email"] . "','" . $result ["CountryCode"] . "' ";
	$strSQL .= ",'" . $result ["Budget"] . "','" . $result ["Used"] . "') ";
	mysqli_query ( $objConnect, $strSQL ) or die ( mysqli_error () );
	// echo "Row $i Inserted...Ok <br>";
	?>

  	  <tr>
		<td><?php echo $result["CustomerID"];?></td>
		<td><?php echo $result["Name"];?></td>
		<td><?php echo $result["Email"];?></td>
		<td><?php echo $result["CountryCode"];?></td>
		<td><?php echo $result["Budget"];?></td>
		<td><?php echo $result["Used"];?></td>
		<td><?php echo "Row $i Inserted...Ok  <br>";?></td>
	</tr>

		
<?php
}
mysqli_close ( $objConnect );

?>