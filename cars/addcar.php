<?PHP
session_start();
if (!isset($_SESSION[login])) {
     header("Location: index.php");
     exit;
}
$name=$_POST[name];
$object=$_POST[object];
$locate=$_POST[locate];
$timego=$_POST[timego];
$timeback=$_POST[timeback];
$typeap=$_POST[typeap];
$flight=$_POST[flight];
$arrive=$_POST[arrive];
$wantap=$_POST[wantap];
$typecar=$_POST[typecar];
$driver=$_POST[driver];

  function thaistart1($timego)
	{
		$d1 = substr($timego, 0, 2);
		$m1 = substr($timego, 3, 2);
		$y1 = substr($timego, 6, 4) ;
		$h1 = substr($timego, 10, 6);
		if ($timego == "")
		{
			return "";
		} else
		{
			return $y1 . "-" . $m1 . "-" . $d1. "" . $h1;
		}
	}

	 function thaiend1($timeback)
	{
		$d2 = substr($timeback, 0, 2);
		$m2 = substr($timeback, 3, 2);
		$y2 = substr($timeback, 6, 4) ;
		$h2 = substr($timeback, 10, 6);
		if ($timeback == "")
		{
			return "";
		} else
		{
			return $y2 . "-" . $m2 . "-" . $d2. "" . $h2;
		}
	}
	
	 function thaistart2($arrive)
	{
		$d3 = substr($arrive, 0, 2);
		$m3 = substr($arrive, 3, 2);
		$y3 = substr($arrive, 6, 4) ;
		$h3 = substr($arrive, 10, 6);
		if ($arrive == "")
		{
			return "";
		} else
		{
			return $y3 . "-" . $m3 . "-" . $d3. "" . $h3;
		}
	}

	 function thaiend2($wantap)
	{
		$d4 = substr($wantap, 0, 2);
		$m4 = substr($wantap, 3, 2);
		$y4 = substr($wantap, 6, 4) ;
		$h4 = substr($wantap, 10, 6);
		if ($wantap == "")
		{
			return "";
		} else
		{
			return $y4 . "-" . $m4 . "-" . $d4. "" . $h4;
		}
	}
	
	$start1 =  thaistart1($timego);
	$end1 =  thaiend1($timeback);	
	$start2 =  thaistart1($arrive);
	$end2 =  thaiend1($wantap);	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>ตารางการขอใช้รถยนต์ คณะศึกษาศาสตร</TITLE>
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
.style36 {
	FONT-SIZE: 14px;
	FONT-FAMILY: "MS Sans Serif";
	font-weight: bold;
	color: #0000FF;
}
.style10 {font-size: 12px; color: #0000FF; font-weight: bold; font-family: Tahoma; }
.style13 {font-size: 12px; color: #CC66FF; font-weight: bold; font-family: Tahoma; }
.style15{font-size: 12px; color: #FF0000; font-weight: bold; font-family: Tahoma; }
.style17{font-size: x-large; color: #336600; font-weight: bold; font-family: Tahoma; }
.style19 {font-size:x-large; color: #7706a0; font-weight: bold; font-family: Tahoma; }
.style55 {color: #FF0000;	font-size: 18px;font-weight: bold;}
</STYLE>
<LINK rel=stylesheet type=text/css href="cars_files/printstyle.css" media=print>
<style type="text/css">
<!--
.style64 {color: #FF0000;	font-size: 18px;font-weight: bold;}
.style64 {	color: #FF0000;
	font-size: 24px;
}
-->
</style>
<br>
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
.style37 {FONT-SIZE: 14px; FONT-FAMILY: "MS Sans Serif"; font-weight: bold; color: #003333; }
.style38 {color: #CC0000}
.style39 {FONT-SIZE: 14px; FONT-FAMILY: "MS Sans Serif"; font-weight: bold; color: #CC0000; }
.style41 {FONT-SIZE: 16px; FONT-FAMILY: "MS Sans Serif"; font-weight: bold; color: #FF0000; }
.style43 {FONT-SIZE: 14px; FONT-FAMILY: "MS Sans Serif"; font-weight: bold; color: #003300; }
.style52 {color: #CE0000}
.style54 {FONT-SIZE: 14px; FONT-FAMILY: "MS Sans Serif"; font-weight: bold; color: #660000; }
.style55 {
	color: #FF0000;
	font-size: 24px;
}
.style58 {
	color: #CE0000;
	font-weight: bold;
	font-size: 14px;
}
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

		              <TABLE border=0 cellSpacing=3 cellPadding=0 width="100%">
                      <TBODY>
                        <TR>
                          <TD width=17><span class="th_headingboldmedium"><span class="ui-state-default"><a name=menu></a></span></span></TD>
                          <TD width="142" height=30 class=style62>เมนู</span></TD>
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
                        <TD width=17>&nbsp;</TD>
						 
<TD class=th_leftlinkdark><A href="showall.php?start=0&page=1" class="linkstyle01">ข้อมูลแบบตาราง</A></TD>
                        </TR>
                        <TR>
						  <TD width=17>&nbsp;</TD>
<TD class=th_leftlinkdark><A href="index.php" class="linkstyle01">ข้อมูลแบบปฎิทิน</A></TD>
                        </TR>
					    <TR>
  <TD width=17>&nbsp;</TD>
  <TD  class=th_leftlinkdark><A href="main.php" class="linkstyle01">บันทึกข้อมูลการขอใช้รถ</A></TD>
                        </TR>	
						<TR>
  <TD width=17>&nbsp;</TD>
  <TD  class=th_leftlinkdark><A href="show.php?start=0&page=1" class="linkstyle01">ตารางการแก้ไขข้อมูลรถ</A></TD></TR>
  <TR>
  <TD width=17>&nbsp;</TD>
  <TD>&nbsp;</TD>
                        </TR>	
                          <TR>
						    <TD width=17>&nbsp;</TD>
 <TD class=style62 height=30>ชื่อผู้ใช้งาน</TD>
                        </TR>
						<TR bgColor=#6f2e43>
						                          <TD bgColor=#1573a5 height=1><IMG 
                        src="cars_files/clear.gif" 
                        width=10 height=1></TD>
                          <TD bgColor=#1573a5 height=1><IMG 
                        src="cars_files/clear.gif" 
                        width=1 height=1></TD>
                        </TR>
                          <TR>  <TD width=17>&nbsp;</TD>
<TD class=style10>  <?
if (count($sess_username)==0) {
			echo "<center>เกิดข้อผิดพลาด </center>";
			echo " <center><A HREF='logout.php'> <B>กลับหน้าหลัก</B><BR></A><BR></center>";
		} else {	for ($i=1;$i<count($sess_username);$i++){
       echo "<span class=style36 align=right>$sess_uname[$i] </span>";
			  ?>
                      <?

				}}
									  ?></TD>
                        </TR>
						                         
					   <TR>
					     <TD width=17>&nbsp;</TD>
					     <TD><?PHP print "<input type = button class=ui-state-active align=right name = button value = ออกจากระบบ onClick = window.navigate(\"logout.php\")>"; ?>&nbsp;</TD></TR>
                      </TBODY>
                    </TABLE>
					
					
					<!-- #Endเมนู --></TD>
                  <TD vAlign=top width=748><IMG 
                  src="cars_files/pic-depart.jpg" 
                  width=748 height=130></TD>
                </TR>
     
			    <TR>
                  <TD>
	   <form name="form1" method="post" action="main.php">
	     <table border=0 cellspacing=0 width=748>
           <tbody>
             <tr>
               <td><br><p class=th_headingboldmedium><span class="ui-state-default">แบบบันทึกการขอใช้รถยนต์ คณะศึกษาศาสตร</span>์ &nbsp;</p></td>
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
		    <?php 

include "connect.php";
		
mysql_connect($host,$user,$pw) or die("ติดต่อ Host ไม่ได้");
mysql_select_db($dbname) or die("ติดต่อฐานข้อมูลไม่ได้");
mysql_query("SET character_set_results=tis620");
mysql_query("SET character_set_client='tis620'");
mysql_query("SET character_set_connection='tis620'");
mysql_query("collation_connection = tis620_thai_ci");
mysql_query("collation_database = tis620_thai_ci");
mysql_query("collation_server = tis620_thai_ci");
$sql = "INSERT INTO car 
	(name ,object ,locate ,timego ,timeback ,typeap ,flight ,arrive ,wantap ,typecar ,driver) 
		VALUES 
	('$name' ,'$object' ,'$locate','$start1' ,'$end1' ,'$typeap' ,'$flight' ,'$start2' ,'$end2' ,'$typecar' , '$driver')"; 


	$sqlquery=mysql_db_query($dbname, $sql); 
           

	mysql_close();
	
	?>
		      <table width="754" height="84" border="1" bordercolor="#006633" bgcolor="#FFFFFF">
                    <tr>
                      <td width="744" height="40"><div align="center"><span class="style41">ได้ทำการบันทึกข้อมูลเป็นที่เรียบร้อยแล้ว</span></div></td>
                    </tr>
					<tr>
                      <td height="36"> <div align="center"><span class="style41">
					 
                        <input name="submit" type="submit" class="style41" id="submit" value="กลับหน้าบันทึก">
                                         
					  
					  </span></div></td>
                    </tr>
                  </table>
	   </form>					  </TD></TR></TBODY>
            </TABLE></TD>
        </TR>
	
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
