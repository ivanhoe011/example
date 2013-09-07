<html>
<head>
<title>ThaiCreate.Com PHP & CSV To MySQL</title>
</head>
<body>
<?
echo "<br /> " . $_POST ['fileCSV'];
echo "<br /> " . $_FILES ['fileCSV'] ['name']; // แสดงชื่อ File
echo "<br /> " . $_FILES ['fileCSV'] ['size']; // แสดงขนาด File เป็น bytes
echo "<br /> " . $_FILES ['fileCSV'] ['type']; // ประเภทของไฟล์ที่อัพโหลด (uploaded file)
echo "<br /> " . $_FILES ['fileCSV'] ['tmp_name']; // คือ ชื่อไฟล์ชั่วคราวที่คัดลอกไว้ในเซิร์ฟเวอร์
echo "<br /> " . $_FILES ['fileCSV'] ['error']; // คือ ข้อผิดพลาดของการอัพโหลดไฟล์ (file upload)
echo "<br />";

$filename = $_FILES ['fileCSV'] ['name']; // เอาชื่อ File ออกมาเก็บ
$typefile = strrchr ( $_FILES ['fileCSV'] ['name'], '.' ); // เอานามสกุล File ออกมา
                                                      // $filename = "111.$typefile"; //เอาชื่อ File ออกมาเก็บ
echo $typefile . '<br/>';
$uploads_dir = 'uploads/'; // Folder ที่จะเก็บ File
if (move_uploaded_file ( $_FILES ["fileCSV"] ["tmp_name"], $uploads_dir . $filename )) {
	$objConnect = mysql_connect ( "localhost", "root", "l[kpfu" ) or die ( "Error Connect to Database" ); // Conect to MySQL
	$objDB = mysql_select_db ( "school" );
	// $objCSV = fopen("customer.csv", "r");
	$objCSV = fopen ( $uploads_dir . $filename, "r" );
	?>
<table width="600" border="1">
		<tr>
			<th width="91">
				<div align="center">CustomerID</div>
			</th>
			<th width="98">
				<div align="center">Name</div>
			</th>
			<th width="198">
				<div align="center">Email</div>
			</th>
			<th width="97">
				<div align="center">CountryCode</div>
			</th>
			<th width="59">
				<div align="center">Budget</div>
			</th>
			<th width="71">
				<div align="center">Used</div>
			</th>
		</tr>
 <?php
	while ( ($objArr = fgetcsv ( $objCSV, 1000, "," )) !== FALSE ) {

		$comsql = "select CustomerID,Name from excelcvs where CustomerID = '$objArr[0]' ";
		$querysql = mysql_query ( $comsql );
		$arr = mysql_fetch_array ( $querysql );
		$cnt = mysql_num_rows ( $querysql );
		// echo $arr[Name].'<br/>';
		echo $cnt . '<br/>';
		// echo $objArr[0] . '<br/>';
		if (empty ( $cnt )) {
?>
    <tr>
			<td><div align="center"><?= $objArr[0]; ?></div></td>
			<td><?= $objArr[1]; ?></td>
			<td><?= $objArr[2]; ?></td>
			<td><div align="center"><?= $objArr[3]; ?></div></td>
			<td align="right"><?= $objArr[4]; ?></td>
			<td align="right"><?= $objArr[5]; ?></td>
		</tr>

<?php
			$strSQL = "INSERT INTO excelcvs ";
			$strSQL .= "(CustomerID,Name,Email,CountryCode,Budget,Used) ";
			$strSQL .= "VALUES ";
			$strSQL .= "('" . $objArr [0] . "','" . $objArr [1] . "','" . $objArr [2] . "' ";
			$strSQL .= ",'" . $objArr [3] . "','" . $objArr [4] . "','" . $objArr [5] . "') ";
			$objQuery = mysql_query ( $strSQL );
		}
	}
	echo "File uploaded and Import data to mysql successful";
	fclose ( $objCSV );
} else {
	echo "File upload failed";
	}
?>
</table>
</body>
</html>

