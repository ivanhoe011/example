<?php

/** PHPExcel */
require_once 'Classes/PHPExcel.php';

/**
 * PHPExcel_IOFactory - Reader
 */
include 'Classes/PHPExcel/IOFactory.php';

/**
 * *****************Load data****************************
 */
$inputFileName = "myData.xls";
$inputFileType = PHPExcel_IOFactory::identify ( $inputFileName );
$objReader = PHPExcel_IOFactory::createReader ( $inputFileType );
$objReader->setReadDataOnly ( true );
$objPHPExcel = $objReader->load ( $inputFileName );
/**
 * *****************End Load data****************************
 */

/**
 * *****************หาจำนวน แถว และ คอร์ลัม ใน Excel****************************
 */
$objWorksheet = $objPHPExcel->setActiveSheetIndex ( 0 );
$highestRow = $objWorksheet->getHighestRow (); // หาจำนวนแถวใน File Excel
$highestColumn = $objWorksheet->getHighestColumn (); // หาจำนวนคอลัมใน File Excel
/**
 * *****************END****************************
 */

/**
 * ****************************
 * โหลด หัวตารางออกมา เพื่อที่จะเอาไปใช้ ตอน import Databases
 * ****************************
 */
$headingsArray = $objWorksheet->rangeToArray ( 'A1:' . $highestColumn . '1', null, true, true, true );
// rangeToArray('A1:' . $highestColumn . '1', หมายความว่า A1:F1 จุดเริ่มต้นของ คอร์ลัม และ สิ้นสุด
$headingsArray = $headingsArray [1];
/**
 * *****************End****************************
 */


/**
 * *****************เตรียมขอ้มูล แล้วจัดรูปแบบ เตรียมนำเข้า Databases****************************
 */
$r = - 1;
$namedDataArray = array ();
for($row = 2; $row <= $highestRow; ++ $row) { // โง่จริงๆๆ เลยกรู $row =2 คือ เริ่ม ตนที่ A2 ของ
                                              // Excel โง่ได้ใจ หัดอ่าน Code แล้วทำความเข้าใจด้วยนะ
                                              // สาด...
	$dataRow = $objWorksheet->rangeToArray ( 'A' . $row . ':' . $highestColumn . $row, null, true, true, true );
	if ((isset ( $dataRow [$row] ['A'] )) && ($dataRow [$row] ['A'] > '')) {
		++ $r;
		foreach ( $headingsArray as $columnKey => $columnHeading ) {
			$namedDataArray [$r] [$columnHeading] = $dataRow [$row] [$columnKey];
			echo $columnHeading;
		}
	}
}

/**
 * ***************** End เตรียมขอ้มูล แล้วจัดรูปแบบ เตรียมนำเข้า
 * Databases****************************
 */

echo '<pre>';
var_dump ( $namedDataArray );
echo '</pre><hr />';
break;

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