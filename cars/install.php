<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>�Դ��駰ҹ������</TITLE>
<META content="text/html; charset=windows-874" http-equiv=Content-Type>
<META content="MSHTML 6.00.6000.20772" name=GENERATOR>
<LINK rel=stylesheet type=text/css href="cars_files/printstyle.css" media=print>
<LINK rel=stylesheet type=text/css href="cars_files/chulastyle.css" media=screen>
<script type="text/javascript">
function checkvalue(){
if(document.formre.hostname.value == "" ){ 
alert('��� Hostname'); 
document.formre.hostname.focus(); 
return false; 
} 
if(document.formre.user.value == "" ){ 
alert('��� Username'); 
document.formre.user.focus(); 
return false; 
} 
if(document.formre.pass.value == "" ){ 
alert('��� Password'); 
document.formre.pass.focus(); 
return false; 
} 
if(document.formre.dbname.value == "" ){ 
alert('��� Database'); 
document.formre.dbname.focus(); 
return false; 
} 
if(document.formre.name.value == "" ){ 
alert('�����ͼ������к�'); 
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
<p class="th_headingbolddark">&nbsp;���蹡�͹...�����������á �·Ӻѹ�֡������� google calendar ���ҧ���� �������ѹ����Ѿഷ 
��Һ�ҧ �ѭ����þѹ (����Դ�ҡ��Ǽ����ҹ) �֧�������Ҿǡ��ԷԹ�Ԩ������ҧ � ����͵�� 
fullcalendar �֡������ѡ�˭� �ҹ�ҡ���Ҩ����͡��Ẻ��ͧ��� ��������ҹ��ԧ<br>
�֧�������ҹ�ҹ��˹���ҹ ��Ѻ������š��Ҩеç㨼������������˹��������͹�ѹ
  ����ǹ��Ǽ����֡������ǡѺ Code ��ǹ����ͧ html <br>
  ������ͧ webmaster �繤��Ѵ��� 
�ѧ��鹡����ҹ css style ��ҧ � ����������� ���Щ�������Ҩ�ͺ��</p>
<p class="th_headingbolddark">�ٻẺ��÷ӧҹ�ͧ�к�</p>
<p class="th_headingbolddark">&nbsp;<img src="cars_files/system.jpg" width="729" height="715"></p>
<form id="formre" name="formre" method="post" action="install.php" > 
	 <table border=0 cellspacing=0 width=748>
           <tbody>
             <tr>
               <td><br>
               <p class=th_headingboldmedium><span class="ui-state-default">��õԴ��駰ҹ������</span></p></td>
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
                      <td height="31" class="th_headingboldmedium">���ͼ������к�</td>
                      <td class="th_headingboldmedium"><label>
                        <input name="name" type="text" id="name" class="th_headingboldmedium" size="35">
                      </label></td>					  
                    </tr>
                    <tr>
                      <td height="28" class="th_headingboldmedium">&nbsp;</td>
                      <td class="th_headingboldmedium"><div align="rigth">
	
		<input name="kla" type="button" onClick="checkvalue()" class="th_tableheading" 
		value="   �������õԴ���    " >
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
echo "���ͼ������к� :: ".$name."<br>";
$conhost =mysql_connect($hostname,$user,$pass);
if (!$conhost) {
//����÷ӧҹ�ͧʤ�Ի����¿ѧ���� exit()   ��Ш�����ش��÷ӧҹ�ͧ˹�ҹ��
exit("�������ö�������͡Ѻ MySQL server �� ��سҵ�Ǩ�ͺ������ʵ�, ���ͼ���� ������ʼ�ҹ ��Ҷ١��ͧ�������");
}
mysql_query("SET character_set_results=tis620");
mysql_query("SET character_set_client='tis620'");
mysql_query("SET character_set_connection='tis620'");
mysql_query("collation_connection = tis620_thai_ci");
mysql_query("collation_database = tis620_thai_ci");
mysql_query("collation_server = tis620_thai_ci");

//����� SQL ��������ҧ�ҹ�����Ū��� dbname
$sql = "CREATE DATABASE $dbname";
$result = mysql_query($sql);                       
if ($result) {                                                           
echo "�س���ҧ�ҹ�����Ū��� " .$dbname ." ���������<br><br>";
}else {                                                                             
echo "�س�������ö���ҧ�ҹ�����Ū��� ". $dbname." ��<br><br>";
}

//���͡�ӧҹ�Ѻ�ҹ������ (Database) ���� $dbname
$sql2 = "USE $dbname";
$result2 = mysql_query($sql2);  

//����� SQL ��������ҧ���ҧ (Table) ���� adminpr
$sql3 = "CREATE TABLE `adminpr` (
  `idadmin` int(11) NOT NULL auto_increment,
  `uadmin` varchar(20) character set tis620 NOT NULL default '',
  `padmin` varchar(20) character set tis620 NOT NULL default '',
  `uname` varchar(50) character set tis620 NOT NULL default '',
  `status` int(1) NOT NULL default '0',
  PRIMARY KEY  (`idadmin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ";
$result3= mysql_query($sql3);

//����� SQL ������˹������к� ����¹�ŧ��
$sql4 = "INSERT INTO `adminpr` VALUES (1, '".$user."', '".$pass."', '".$name."', 1)";
$result4= mysql_query($sql4); 
echo "����Ѻ�������к� <br>";
echo "username :: ".$user."<br>";
echo "password :: ".$pass."<br>";
echo "���ͼ������к� :: ".$name."<br>";
echo "�ҡ��ͧ�������¹�ŧ�������������ҧ adminpr ��Ѻ<br>";

//����� SQL ��������ҧ���ҧ (Table) ���� adminpr
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
$strText2 = "//�����ǹ��� \r\n";
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
echo "������ҧ���ҧ���������<br>";









}
else {
echo "�������ö���ҧ���ҧ�� <br>";
}


mysql_close($conhost);  // �Դ����������� MySQL 



}

?>
</HTML>