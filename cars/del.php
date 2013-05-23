<?php
session_start();
if (!isset($_SESSION[login])) {
     header("Location: index.php");
     exit;
}
/*Connect ฐานข้อมูล */
//mysql_connect('localhost','root',''); // connect mysql
//mysql_select_db('mail'); // select database 
include 'connect.php';


	mysql_connect($host,$user,$pw) or die("ติดต่อ Host ไม่ได้");
	mysql_select_db($dbname) or die("ติดต่อฐานข้อมูลไม่ได้");
	mysql_query("SET character_set_results=tis620");
	mysql_query("SET character_set_client='tis620'");
	mysql_query("SET character_set_connection='tis620'");
	mysql_query("collation_connection = tis620_thai_ci");
	mysql_query("collation_database = tis620_thai_ci");
	mysql_query("collation_server = tis620_thai_ci");

// คำสั่ง SQL และสั่งให้ทำงาน
$sql = "delete from car where id='$id'"; // กำหนดคำสั่ง SQL เพื่อลบข้อมูล กำหนดให้ลบตาม ID ที่เรากำหนด
$dbquery = mysql_db_query($dbname, $sql);
header("Location:show.php?start=0&page=1");

?>
