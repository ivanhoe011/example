<?php
	include 'condb.php';
	$sql="select * from member";
	$rs=mysql_query($sql);
	$arr=mysql_fetch_array($rs);
	echo $arr[0];
	
?>