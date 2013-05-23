<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>ติดตั้งฐานข้อมูล</TITLE>
<META content="text/html; charset=windows-874" http-equiv=Content-Type>
<META content="MSHTML 6.00.6000.20772" name=GENERATOR>
<LINK rel=stylesheet type=text/css href="cars_files/printstyle.css" media=print>
<LINK rel=stylesheet type=text/css href="cars_files/chulastyle.css" media=screen>
<script type="text/javascript">
function checkvalue(){
if(document.formre.hostname.value == "" ){ 
alert('ใส่ Hostname'); 
document.formre.hostname.focus(); 
return false; 
} 
if(document.formre.user.value == "" ){ 
alert('ใส่ Username'); 
document.formre.user.focus(); 
return false; 
} 
if(document.formre.pass.value == "" ){ 
alert('ใส่ Password'); 
document.formre.pass.focus(); 
return false; 
} 
if(document.formre.dbname.value == "" ){ 
alert('ใส่ Database'); 
document.formre.dbname.focus(); 
return false; 
} 
if(document.formre.name.value == "" ){ 
alert('ใส่ชื่อผู้ดูแลระบบ'); 
document.formre.name.focus(); 
return false; 
} 
document.getElementById("formre").submit();
	}
</script>
</HEAD>
<BODY>
<p>
  <?php
if($hostname==""||$user==""||$pass==""||$dbname==""){
?>
</p>
<p class="th_headingbolddark">&nbsp;เกริ่นก่อน...ตั้งแต่เริ่มแรก เคยทำบันทึกข้อมูลใน google calendar แต่บ้างครั้ง ข้อมูลมันไม่อัพเดท 
ช้าบ้าง ปัญหาสารพัน (ที่เกิดจากตัวผู้ใช้งาน) จึงทำให้ค้นหาพวกปฏิทินกิจกรรมต่าง ๆ จนไปเจอตัว 
fullcalendar ศึกษาอยู่พักใหญ่ นานมากกว่าจะได้ออกมาแบบต้องการ ตามการใช้งานจริง<br>
จึงเอาไปให้งานยานพาหนะใช้งาน ปรับแก้ข้อมูลกว่าจะตรงใจผู้ใช้ก็เล่นเอาเหนื่อยเหมือนกัน
  โดยส่วนตัวผมจะศึกษาเกี่ยวกับ Code ส่วนเรื่อง html <br>
  จะให้น้อง webmaster เป็นคนจัดการ 
ดังนั้นการใช้งาน css style ต่าง ๆ ผมไม่แน่ใจเลย เพราะฉนั้นไม่อาจตอบได้</p>
<p class="th_headingbolddark">รูปแบบการทำงานของระบบ</p>
<p class="th_headingbolddark">&nbsp;<img src="cars_files/system.jpg" width="729" height="715"></p>
<form id="formre" name="formre" method="post" action="install.php" > 
	 <table border=0 cellspacing=0 width=748>
           <tbody>
             <tr>
               <td><br>
               <p class=th_headingboldmedium><span class="ui-state-default">การติดตั้งฐานข้อมูล</span></p></td>
               <td valign=top width="14%">&nbsp;</td>
             </tr>
             <tr>
               <td><img 
                        src="cars_files/dot_vertical_long.gif" 
                        width=748 height=20> </td>
               <td valign=top width="14%">&nbsp;</td>
             </tr>
             <tr>
               <td>&nbsp;</td>
             </tr>
           </tbody>
  </table>

		     <table width="759" height="141" border="1" bordercolor="#006633" bgcolor="#FFFFFF">
                    <tr>
                      <td width="176" height="37" class="th_headingboldmedium">Hostname</td>
                      <td width="327" class="th_headingboldmedium"><label>
                        <input name="hostname" type="text" class="th_headingboldmedium" id="hostname" value="localhost" size="35">
                      </label></td>
                    </tr>
                    <tr>
                      <td height="33" class="th_headingboldmedium">Username</td>
                      <td class="th_headingboldmedium"><label>
                        <input name="user" type="text" class="th_headingboldmedium" id="user" value="root" size="35">
                      </label></td>
                    </tr>
                    <tr>
                      <td height="31" class="th_headingboldmedium">Password</td>
                      <td class="th_headingboldmedium"><label>
                        <input name="pass" type="password" id="pass" class="th_headingboldmedium" size="35">
                      </label></td>					  
                    </tr>
					<tr>
                      <td height="31" class="th_headingboldmedium">Database</td>
                      <td class="th_headingboldmedium"><label>
                        <input name="dbname" type="text" id="dbname" class="th_headingboldmedium" size="35">
                      </label></td>					  
                    </tr>
					<tr>
                      <td height="31" class="th_headingboldmedium">ชื่อผู้ดูแลระบบ</td>
                      <td class="th_headingboldmedium"><label>
                        <input name="name" type="text" id="name" class="th_headingboldmedium" size="35">
                      </label></td>					  
                    </tr>
                    <tr>
                      <td height="28" class="th_headingboldmedium">&nbsp;</td>
                      <td class="th_headingboldmedium"><div align="rigth">
	
		<input name="kla" type="button" onClick="checkvalue()" class="th_tableheading" 
		value="   เริ่มการติดตั้ง    " >
                      </div></td>
                    </tr>
  </table>
</form>				
</BODY>
<?php


}else{

$hostname=$_POST[hostname];
$user=$_POST[user];
$pass=$_POST[pass];
$dbname=$_POST[dbname];
$name=$_POST[name];
echo "Hostname :: ".$hostname."<br>";
echo "Username :: ".$user."<br>";
echo "Password :: ".$pass."<br>";
echo "Database :: ".$dbname."<br>";
echo "ชื่อผู้ดูแลระบบ :: ".$name."<br>";
$conhost =mysql_connect($hostname,$user,$pass);
if (!$conhost) {
//จบการทำงานของสคริปต์ด้วยฟังก์ชั่น exit()   และจะสิ้นสุดการทำงานของหน้านี้
exit("ไม่สามารถเชื่อมต่อกับ MySQL server ได้ กรุณาตรวจสอบชื่อโฮสต์, ชื่อผู้ใช้ และรหัสผ่าน ว่าถูกต้องหรือไม่");
}
mysql_query("SET character_set_results=tis620");
mysql_query("SET character_set_client='tis620'");
mysql_query("SET character_set_connection='tis620'");
mysql_query("collation_connection = tis620_thai_ci");
mysql_query("collation_database = tis620_thai_ci");
mysql_query("collation_server = tis620_thai_ci");

//คำสั่ง SQL ที่ใช้สร้างฐานข้อมูลชื่อ dbname
$sql = "CREATE DATABASE $dbname";
$result = mysql_query($sql);                       
if ($result) {                                                           
echo "คุณสร้างฐานข้อมูลชื่อ " .$dbname ." สำเร็จแล้ว<br><br>";
}else {                                                                             
echo "คุณไม่สามารถสร้างฐานข้อมูลชื่อ ". $dbname." ได้<br><br>";
}

//เลือกทำงานกับฐานข้อมูล (Database) ชื่อ $dbname
$sql2 = "USE $dbname";
$result2 = mysql_query($sql2);  

//คำสั่ง SQL ที่ใช้สร้างตาราง (Table) ชื่อ adminpr
$sql3 = "CREATE TABLE `adminpr` (
  `idadmin` int(11) NOT NULL auto_increment,
  `uadmin` varchar(20) character set tis620 NOT NULL default '',
  `padmin` varchar(20) character set tis620 NOT NULL default '',
  `uname` varchar(50) character set tis620 NOT NULL default '',
  `status` int(1) NOT NULL default '0',
  PRIMARY KEY  (`idadmin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ";
$result3= mysql_query($sql3);

//คำสั่ง SQL ที่ใช้กำหนดผู้ดูระบบ เปลี่ยนแปลงได้
$sql4 = "INSERT INTO `adminpr` VALUES (1, '".$user."', '".$pass."', '".$name."', 1)";
$result4= mysql_query($sql4); 
echo "สำหรับผู้ดูแลระบบ <br>";
echo "username :: ".$user."<br>";
echo "password :: ".$pass."<br>";
echo "ชื่อผู้ดูแลระบบ :: ".$name."<br>";
echo "หากต้องการเปลี่ยนแปลงเข้าไปแก้ไขได้ที่ตาราง adminpr ครับ<br>";

//คำสั่ง SQL ที่ใช้สร้างตาราง (Table) ชื่อ adminpr
$sql5 ="CREATE TABLE `car` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `object` varchar(255) NOT NULL default '',
  `locate` varchar(255) NOT NULL default '',
  `timego` datetime NOT NULL default '0000-00-00 00:00:00',
  `timeback` datetime NOT NULL default '0000-00-00 00:00:00',
  `typeap` varchar(15) NOT NULL default '',
  `flight` varchar(15) NOT NULL default '',
  `arrive` datetime NOT NULL default '0000-00-00 00:00:00',
  `wantap` datetime NOT NULL default '0000-00-00 00:00:00',
  `typecar` varchar(10) character set tis620 collate tis620_bin NOT NULL default '',
  `driver` varchar(10) character set tis620 collate tis620_bin NOT NULL default '',
  PRIMARY KEY  (`id`)
) ";
$result5= mysql_query($sql5);

$strFileName = "connect.php";
$objCreate = fopen($strFileName, 'w');
$strText1 = "<?PHP\r\n";
fwrite($objCreate, $strText1);
$strText2 = "//แก้ไขส่วนนี้ \r\n";
fwrite($objCreate, $strText2);
$strText3 = "$";
fwrite($objCreate, $strText3);
$strText4 = "host='$hostname';\r\n";
fwrite($objCreate, $strText4);
$strText5 = "$";
fwrite($objCreate, $strText5);
$strText6 = "user='$user';\r\n";
fwrite($objCreate, $strText6);
$strText7 = "$";
fwrite($objCreate, $strText7);
$strText8 = "pw='$pass';\r\n";
fwrite($objCreate, $strText8);
$strText9 = "$";
fwrite($objCreate, $strText9);
$strText10 = "dbname='$dbname';\r\n";
fwrite($objCreate, $strText10);
$strText11 = "?>\r\n";
fwrite($objCreate, $strText11);
fclose($objCreate);

if ($result3&&$result4&&$result5) {
echo "การสร้างตารางสำเร็จแล้ว<br>";









}
else {
echo "ไม่สามารถสร้างตารางได้ <br>";
}


mysql_close($conhost);  // ปิดการเชื่อมต่อ MySQL 



}

?>
</HTML>