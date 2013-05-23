<?PHP
	session_start();
	session_destroy();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>ตารางการขอใช้รถยนต์ คณะศึกษาศาสตร์</TITLE>
<META content="text/html; charset=windows-874" http-equiv=Content-Type>
<SCRIPT language=JavaScript type=text/javascript>
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized

  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {

    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}

  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();

}

MM_reloadPage(true);

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</SCRIPT>
<META content="MSHTML 6.00.6000.20772" name=GENERATOR>
<STYLE type=text/css>
BODY {
	BACKGROUND-COLOR: #1573a5; MARGIN: 0px
}
.style10 {font-size: 12px; color: #0000FF; font-weight: bold; font-family: Tahoma; }
.style13 {font-size: 12px; color: #CC66FF; font-weight: bold; font-family: Tahoma; }
.style15{font-size: 12px; color: #FF0000; font-weight: bold; font-family: Tahoma; }
.style17{font-size: x-large; color: #336600; font-weight: bold; font-family: Tahoma; }
.style19 {font-size:x-large; color: #7706a0; font-weight: bold; font-family: Tahoma; }
.style55 {color: #FF0000;	font-size: 18px;font-weight: bold;}
</STYLE>
<LINK rel=stylesheet type=text/css href="cars_files/printstyle.css" media=print><br>
<LINK rel=stylesheet type=text/css href="cars_files/chulastyle.css" media=screen>

<STYLE type=text/css>

A:visited {
	COLOR: #4f4f4f; TEXT-DECORATION: none
}

A:active {
	TEXT-DECORATION: none
}
.style62 {	color: #FFFFFF;
	font-weight: bold;
}
.style63 {color: #0066FF}

.linkstyle01{font-family:Microsoft Sans Serif;font-size:14;color:#ece64e; font-weight:bold;font-weight:normal; text-decoration:none;}
.linkstyle01:hover {color:#0066FF;}

.linkstyle02{font-family:Microsoft Sans Serif;font-size:12;color:#000000; text-decoration:none;}
.linkstyle02:hover {color:#0066FF;}
</STYLE>
<SCRIPT type=text/javascript>
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</SCRIPT>
<META name=GENERATOR content="MSHTML 8.00.6001.18812">
<script type="text/javascript" src="datetimepicker_css.js"></script>
<link rel='stylesheet' type='text/css' href='fullcalendar/redmond/theme.css' />
<link rel='stylesheet' type='text/css' href='fullcalendar/fullcalendar.css' />
<script type='text/javascript' src='fullcalendar/jquery/jquery.js'></script>
<script type='text/javascript' src='fullcalendar/jquery/jquery-ui-custom.js'></script>
<script type="text/javascript" src="fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript">
$(function(){
    $('#calendar').fullCalendar({
		header: {
				left: 'month,agendaWeek,agendaDay',
				center: 'title',
				right: 'prev,next today'
		},
		//editable: true, ??????????????????
		theme:true,
		events: "getCalendar2.php?gData=1",
		   	loading: function(bool) {
				if (bool) $('#loading').show();
				else $('#loading').hide();
		}
    });
});
</script>
<style type="text/css">
body{
	padding:0px;
	margin:0px;
 	font-size:12px;	
}
#calendar{
	width:550px;	
	margin:auto;
}
#calendar2{
	width:550px;	
	margin:auto;
}
.style59 {font-size: 24px}
.style62 {font-size: 14px}
</style>
<script type="text/javascript">
function checkvalue(){
if(document.formre.username.value == "" ){ 
alert('กรุณากรอก username'); 
document.formre.username.focus(); 
return false; 
} 
if(document.formre.password.value == "" ){ 
alert('กรุณากรอก password'); 
document.formre.password.focus(); 
return false; 
} 
document.getElementById("formre").submit();
	}
</script>
</HEAD>
<BODY>
<TABLE border=0 cellSpacing=0 cellPadding=0 width=974>
  <TBODY>
  <TR vAlign=top>
    <TD height=405 width=30><IMG 
      src="cars_files/clear.gif" 
      width=1 height=1></TD>
    <TD width=944>
      <TABLE border=0 cellSpacing=0 cellPadding=0 width=944 bgColor=#ffffff>
        <TBODY>
        <TR vAlign=top>
          <TD class=topmenu colSpan=2 td>
		  <TABLE id=Table_01 border=0 cellSpacing=0 cellPadding=0 
                  width=382 height=89>
                    <TBODY>
                    <TR>
                      <TD colSpan=3><img src="cars_files/top-logo-5_01.gif" width="382" height="126"></TD>
					  <TD vAlign=bottom width=344 align=right><img src="cars_files/top-logo-5_02.gif" width="299" height="126"></TD>
                <TD vAlign=bottom width=254 align=right><img src="cars_files/top-logo-5_03.gif" width="263" height="126" border="0" usemap="#Map2">
                  <map name="Map2">
                    <area shape="rect" coords="185,104,209,123" href="http://www.edbuu.com/" target="_blank">
                    <area shape="rect" coords="151,105,176,124" href="http://www.edu.buu.ac.th" target="_blank">
                    <area shape="rect" coords="129,70,253,92" href="http://reg.buu.ac.th" target="_blank">
                    <area shape="rect" coords="131,11,188,36" href="http://www.edu.buu.ac.th" target="_blank">
                    <area shape="rect" coords="122,44,262,66" href="http://www.buu.ac.th" target="_blank">
                  </map>
                  </TD>
                    </TR>
                </TABLE>
		 
            <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
              <TBODY>
              <TR>
                <TD><img src="cars_files/th_button_05.gif" width="300" height="22"><img src="cars_files/th_button_05.gif" width="300" height="22"><img src="cars_files/th_button_05.gif" width="300" height="22"><img src="cars_files/th_button_06.gif" width="43" height="22"></TD>
                </TR></TBODY></TABLE></TD></TR>
        <TR>
          <TD vAlign=top colSpan=2 align=left>            <TABLE border=0 cellSpacing=0 cellPadding=0 width=944>
              <TBODY>
                <TR>
                  <TD class=leftnav bgColor=#6699CC vAlign=top rowSpan=2 
width=196>
<form id="formre" name="formre" method="post" action="checkadmin.php" > 
<!-- <form action="checkadmin.php" method="post" name="formre" id="formre">
<form action="checkadmin.php" method="post" name="formre" id="formre">  -->
		              <TABLE border=0 cellSpacing=3 cellPadding=0 width="100%">
                      <TBODY>
                        <TR>
                          <TD width=15><span class="th_headingboldmedium"><span class="ui-state-default"><a name=menu></a></span></span></TD>
                          <TD class=style62 height=30>เมนู</span></TD>
                        </TR>
                        <TR bgColor=#6f2e43>
						                          <TD bgColor=#1573a5 height=1><IMG 
                        src="cars_files/clear.gif" 
                        width=10 height=1></TD>
                          <TD bgColor=#1573a5 height=1><IMG 
                        src="cars_files/clear.gif" 
                        width=1 height=1></TD>
                        </TR>
                        <TR>
                        <TD width=15>&nbsp;</TD>
						 
<TD class=th_leftlinkdark><A href="showall.php?start=0&page=1" class="linkstyle01">ข้อมูลแบบตาราง</A></TD>
                        </TR>
                        <TR>
						  <TD width=15>&nbsp;</TD>
<TD class=th_leftlinkdark><A href="index.php" class="linkstyle01">ข้อมูลแบบปฎิทิน</A></TD>
                        </TR>
					    <TR>
  <TD width=15>&nbsp;</TD>
  <TD>&nbsp;</TD>
                        </TR>	
						
                          <TR>
						    <TD width=15>&nbsp;</TD>
 <TD class=style62 height=30>เข้าสู่ระบบ</TD>
                        </TR>
						<TR bgColor=#6f2e43>
						                          <TD bgColor=#1573a5 height=1><IMG 
                        src="cars_files/clear.gif" 
                        width=10 height=1></TD>
                          <TD bgColor=#1573a5 height=1><IMG 
                        src="cars_files/clear.gif" 
                        width=1 height=1></TD>
                        </TR>
                          <TR>  <TD width=15>&nbsp;</TD>
<TD class=style10>username : <input name="username" type="text" class="ui-state-error" id="username" size="10"></TD>
                        </TR>
						                          <TR>  <TD width=15>&nbsp;</TD>
<TD class=style10>password : <input name="password" type="password" class="ui-state-error" id="password" size="10"></TD>
                       </TR>
					   <TR>

					     <TD width=15>&nbsp;</TD><TD>
						 <input name="kla" type="button" onClick="checkvalue()" class="ui-state-active" 
		value="    Login    " >
<!-- <input name="Submit" type="submit" class="ui-state-active" value="Login">  
						 <input name="Submit" type="submit" class="ui-state-active" value="Login"> -->
						 </TD></TR>
                      </TBODY>
                    </TABLE>
					 </form>
					
					<!-- #Endเมนู --></TD>
                  <TD vAlign=top width=748><IMG 
                  src="cars_files/pic-depart.jpg" 
                  width=748 height=130></TD>
                </TR>
     
			    <TR>
                  <TD>
	
                    <TABLE border=0 cellSpacing=0 cellPadding=10 width=748>
                      <TBODY>
    <TR>
                          <TD><P class=th_headingboldmedium><span class="ui-state-default">ตารางการขอใช้รถยนต์ คณะศึกษาศาสตร</span>์ &nbsp;</P>                          </TD>
                        <TD vAlign=top width="14%">
                          <P class=th_headingboldmedium>&nbsp;</P>                          </TD></TR>
                        <TR>
                          <TD><IMG 
                        src="cars_files/dot_vertical_long.gif" 
                        width=530 height=20>                            </TD> 
                               
                       
                        <TD vAlign=top width="14%">&nbsp;</TD>
                        </TR>
		<TR><TD>		  <span class="headingboldmedium">
		   <?php

$id=$_GET[id];
//$id= "180";
//echo $id;
//echo "<br>";
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



/* check ว่ามี ค่าตัวแปร $start หรือไม่ ถ้าไม่มีให้ตั้งเป็น 0 
ปล. อันนี้ต้องใช้กับตัวแบ่งนะ ห้ามเอาออก*/
if(!isset($start)){
$start = 0;
}
$limit = "5"; // แสดงผลหน้าละกี่หัวข้อ
/* หาจำนวน record ทั้งหมด
ปล. อันนี้ต้องใช้กับตัวแบ่งนะ ห้ามเอาออก*/
$sql = "select * from car where id='$id' ";
$sqlquery=mysql_db_query($dbname, $sql); 

//$Qtotal = mysql_query("select * from mail"); //คิวรี่ คำสั่ง

 $total = mysql_num_rows($sqlquery); // หาจำนวน record 
/* คิวรี่ข้อมูลออกมาเพื่อแสดงผล */
//$Query = mysql_query("SELECT * FROM `maildata` ORDER BY `maildata` . `id` DESC LIMIT $start,$limit" );
  //$Query = mysql_query("SELECT * FROM `car` ORDER BY `car` . `id` DESC LIMIT $start,$limit" );
//$Query = mysql_query("SELECT * FROM `car` ORDER BY `car` . `timego` DESC LIMIT $start,$limit" );
$Query = mysql_query($sql);
$totalp = mysql_num_rows($Query); // หาจำนวน record ที่เรียกออกมา */

echo "<hr />";
//print "<h3 class=style10>มีการขอใช้รถยนต์ ".mysql_num_rows($sqlquery)." รายการ - หน้านี้แสดง ".$totalp." รายการ ดังนี้ </h3>";
print "<table border = 0>";
			print "<tr bgcolor=CCCCCC>";
				
			//print "<td align = center width = 180>ผู้ขอใช้</td>";
			//print "<td align = center width = 180>ขอใช้เพื่อ</td>";
				print "<td align = center width = 250 class=style10>ผู้ขอใช้</td>";
				print "<td align = center width = 150 class=style10>วันเดินทาง-ไป</td>";
				print "<td align = center width = 150 class=style10>วันเดินทาง-กลับ</td>";	
			//print "<td align = center width = 180>ขอใช้เพื่อ</td>";
				print "<td align = center width = 200 class=style10>รายละเอียด</td>";
				print "<td align = center width = 100 class=style10>ประเภทรถ</td>";
				print "<td align = center width = 100 class=style10>พขร.</td>";
				//print "<td align = center width = 100>วันเดินทาง-ไป</td>";
				//print "<td align = center width = 100>วันเดินทาง-กลับ</td>";
		
				print "</tr>";
				
				/* วนลูปข้อมูล */
for($i=0;$i<=$page;$i++)
$r=$limit*($i-1);
function thaistart1($ttt)
	{
		$d1 = substr($ttt, 8, 2);
		$m1 = substr($ttt, 5, 2);
		$y1 = substr($ttt, 0, 4) ;
		$h1 = substr($ttt, 10, 6);
		$y2=$y1+"543";
	if($m1=="01"){$m1="มกราคม";}
	if($m1=="02"){$m1="กุมภาพันธ์";}
	if($m1=="03"){$m1="มีนาคม";}
	if($m1=="04"){$m1="เมษายน";}
	if($m1=="05"){$m1="พฤษภาคม";}
	if($m1=="06"){$m1="มิถุนายน";}
	if($m1=="07"){$m1="กรกฎาคม";}
	if($m1=="08"){$m1="สิงหาคม";}
	if($m1=="09"){$m1="กันยายน";}
	if($m1=="10"){$m1="ตุลาคม";}
	if($m1=="11"){$m1="พฤศจิกายน";}
	if($m1=="12"){$m1="ธันวาคม";}
		if ($ttt == "")
		{
			return "";
		} else
		{
			//return $y1 . "-" . $m1 . "-" . $d1. "" . $h1;
			return $d1 . "&nbsp;" . $m1 . "&nbsp;" . $y2. "&nbsp;&nbsp;" . $h1;
		}
	}

	
	function thaistart2($bbb)
	{
		$d2 = substr($bbb, 8, 2);
		$m2 = substr($bbb, 5, 2);
		$y3 = substr($bbb, 0, 4) ;
		$h2 = substr($bbb, 10, 6);
		$y4=$y3+"543";
	if($m2=="01"){$m2="มกราคม";}
	if($m2=="02"){$m2="กุมภาพันธ์";}
	if($m2=="03"){$m2="มีนาคม";}
	if($m2=="04"){$m2="เมษายน";}
	if($m2=="05"){$m2="พฤษภาคม";}
	if($m2=="06"){$m2="มิถุนายน";}
	if($m2=="07"){$m2="กรกฎาคม";}
	if($m2=="08"){$m2="สิงหาคม";}
	if($m2=="09"){$m2="กันยายน";}
	if($m2=="10"){$m2="ตุลาคม";}
	if($m2=="11"){$m2="พฤศจิกายน";}
	if($m2=="12"){$m2="ธันวาคม";}
		if ($bbb == "")
		{
			return "";
		} else
		{
			//return $y1 . "-" . $m1 . "-" . $d1. "" . $h1;
			return $d2 . "&nbsp;" . $m2 . "&nbsp;" . $y4. "&nbsp;&nbsp;" . $h2;
		}
	}
	
while($array = mysql_fetch_array($Query))
	
	{
if($bg=="#fde3a8")
		{ $bg = "#bcf4ff";
} else {
$bg = "#fde3a8";
}   
 
 if($ss=="style13")
		{ $ss = "style10";
} else {
$ss = "style13";
}   
   

				$id = $array['id'];
				print "<tr bgcolor=$bg>";
				//print "<td align = center >".$t." </td>";
//				print "<td align = center >".$array['id'] ." </td>";
				print "<td class=$ss>".$array['name'] ." </td>";
				//print "<td>".$array['timego'] ." </td>";
				
		
	$ttt=$array['timego'];
	$start1 =  thaistart1($ttt);
	print "<td class=$ss>".$start1." </td>";
$bbb=$array['timeback'];
$back1 =  thaistart2($bbb);
	print "<td class=$ss>".$back1." </td>";

				//print "<td>".$array['timeback'] ." </td>";
				
				//print "<td >".$array['object'] ." </td>";
				print "<td class=$ss>".$array['locate']." </td>";
				print "<td class=$ss>".$array['typecar']." </td>";
				print "<td class=$ss>".$array['driver']." </td>";
			
				print "</tr>";  

}

 print"</table>";
		   		 
	mysql_close();
					print "<br>";
					print "<br>";
				echo "<hr />";

/* ตัวแบ่งหน้า */
$page = ceil($total/$limit); // เอา record ทั้งหมด หารด้วย จำนวนที่จะแสดงของแต่ละหน้า
/* เอาผลหาร มาวน เป็นตัวเลข เรียงกัน เช่น สมมุติว่าหารได้ 3 เอามาวลก็จะได้ 1 2 3 */


for($i=1;$i<=$page;$i++){
if($_GET['page']==$i){ //ถ้าตัวแปล page ตรง กับ เลขที่วนได้
//echo "[<a href='?start=".$limit*($i-1)."&page=$i'><B>$i</B></A>]"; //ลิ้งค์ แบ่งหน้า เงื่อนไขที่ 1
}else{
//echo "[<a href='?start=".$limit*($i-1)."&page=$i'>$i</A>]"; //ลิ้งค์ แบ่งหน้า เงื่อนไขที่ 2
}
}
?>
		</span></TD>
		</TR>
                        <TR>
                          <TD vAlign=top>
                            <br>                            
                            <P><A class=th_bodytext 
                        href="#menu">กลับด้านบน</A></P></TD>
                        <TD vAlign=bottom width="14%">&nbsp;</TD>
                        </TR></TBODY></TABLE></TD></TR></TBODY>
            </TABLE></TD></TR>
	
        <TR bgColor=#e5b9e3>
          <TD class=bottomnav colSpan=2 td>
		  
            <TABLE border=0 cellSpacing=0 cellPadding=5 width="100%">
              <TBODY>
              <TR>
                <TD class=th_bottomlink width="66%">&nbsp;</TD>
                <TD class=th_bottomlink width="34%"><SPAN 
                  class=style63>Best view with Internet Explorer 7 at 1024 x 
                  768 
pixels</SPAN></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>

</BODY></HTML>
