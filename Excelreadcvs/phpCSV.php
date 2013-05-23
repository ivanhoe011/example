<html>
<head>
<title>ThaiCreate.Com PHP & Read CSV</title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?
	include("db_connect.php");
	connect();
	//$sql="SET CHARACTER SET UTF8";
	$sql="SET NAMES UTF8";
	query($sql);
	$objCSV = fopen("customer.csv", "r");
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">CustomerID </div></th>
    <th width="98"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">Email </div></th>
    <th width="97"> <div align="center">CountryCode </div></th>
    <th width="59"> <div align="center">Budget </div></th>
    <th width="71"> <div align="center">Used </div></th>
  </tr>
  
<?php
	while (($objArr = fgetcsv($objCSV, 1000, ",")) !== FALSE) {

		$link = mysql_connect("localhost", "root", "l[kpfu");
		mysql_select_db("school", $link);
		mysql_query("SET NAMES UTF8");
		$result = mysql_query("SELECT * FROM excelcvs where customerid = '$objArr[0]' " , $link);
		$num_rows = mysql_num_rows($result);
		if ($num_rows == 0) {
			$data = array("CustomerID" => $objArr[0], "Name" => $objArr[1], "Email" => $objArr[2], "CountryCode" => $objArr[3], "Budget" => $objArr[4], "Used" => $objArr[5],);
			// insert ข้อมูลลงในตาราง province_tmp โดยฃื่อฟิลด์ และค่าตามตัวแปร array ชื่อ $data
			insert("excelcvs", $data) // province_tmp คือชื่อตาราง
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
		} else {

		}
	}
	fclose($objCSV);
?>
</table>
</body>
</html>