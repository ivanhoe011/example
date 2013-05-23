<?PHP
session_start();

$username=$_POST[username];
$password=$_POST[password];
session_register("sess_username");
session_register("sess_password");
session_register("sess_idadmin");
session_register("sess_uname");
session_register("sess_EDU");
session_register("sess_status");

if (count($sess_username)=="0") {
	$check=1;
} else  if (!in_array($username, $sess_username)) {
	$check=1;
}
if ($check==1) {
include  "connect.php" ;
mysql_connect($host,$user,$pw) or die("ติดต่อ Host ไม่ได้");
mysql_select_db($dbname) or die("ติดต่อฐานข้อมูลไม่ได้");
mysql_query("SET character_set_results=tis620");
mysql_query("SET character_set_client='tis620'");
mysql_query("SET character_set_connection='tis620'");
mysql_query("collation_connection = tis620_thai_ci");
mysql_query("collation_database = tis620_thai_ci");
mysql_query("collation_server = tis620_thai_ci");
$sql = " select * from  adminpr  where uadmin = '$username' and  padmin = '$password'";
$result1=mysql_db_query($dbname,$sql);
	$rs1=mysql_fetch_array($result1);
	$sess_username[]=$rs1[uadmin];
	$sess_password[]=$rs1[padmin];
	$sess_uname[]=$rs1[uname];
	$sess_status[]=$rs1[status];

}

if ($username==""||$password=="")
		{ echo "<script>alert ('กรุณากรอก Username และ Password');history.back();</script>"; 
	
		}	

include  "connect.php" ;
mysql_connect($host,$user,$pw) or die("ติดต่อ Host ไม่ได้");
mysql_select_db($dbname) or die("ติดต่อฐานข้อมูลไม่ได้");
mysql_query("SET character_set_results=tis620");
mysql_query("SET character_set_client='tis620'");
mysql_query("SET character_set_connection='tis620'");
mysql_query("collation_connection = tis620_thai_ci");
mysql_query("collation_database = tis620_thai_ci");
mysql_query("collation_server = tis620_thai_ci");

$sql1 = " select * from  adminpr  where uadmin = '$username' and  padmin = '$password'";
$result3  =  mysql_db_query ( $dbname, $sql1 );
$num =  mysql_num_rows ( $result3);
$rs2=mysql_fetch_array($result3);
	$sess_username[]=$rs2[uadmin];
	$sess_password[]=$rs2[padmin];
	$sess_uname[]=$rs2[uname];
	$sess_status[]=$rs2[status];
mysql_close ( ) ;
if ( $num <= 0 )  {
	session_unregister("sess_idadmin");
	session_unregister("sess_username");
	session_unregister("sess_password");
	session_unregister("sess_uname");
	session_unregister("sess_status");
	echo "<script>alert ('เกิดข้อผิดพลาด Username และ Password ไม่ถูกต้อง');history.back();</script>";
} 

if ($rs2[status]==1){
	$_SESSION[login] = "true";
			echo("<script language='javascript1.2'>");
            echo("window.location='main.php';");
            echo("</script>"); }
	?>
