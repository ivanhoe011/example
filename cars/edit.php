<?PHP
session_start();
if (!isset($_SESSION[login])) {
     header("Location: index.php");
     exit;
}

  function thaistart1($timego)
	{
		$d1 = substr($timego, 8, 2);
		$m1 = substr($timego, 5, 2);
		$y1 = substr($timego, 0, 4) ;
		$h1 = substr($timego, 10, 6);
		if ($timego == "")
		{
			return "";
		} else
		{
			return $d1 . "-" . $m1 . "-" . $y1. "" . $h1;
		}
	}
  function thaistart2($timeback)
	{
		$d2 = substr($timeback, 8, 2);
		$m2 = substr($timeback, 5, 2);
		$y2 = substr($timeback, 0, 4) ;
		$h2 = substr($timeback, 10, 6);
		if ($timeback == "")
		{
			return "";
		} else
		{
			return $d2 . "-" . $m2 . "-" . $y2. "" . $h2;
		}
	}
	  function thaistart3($arrive)
	{
		$d3 = substr($arrive, 8, 2);
		$m3 = substr($arrive, 5, 2);
		$y3 = substr($arrive, 0, 4) ;
		$h3 = substr($arrive, 10, 6);
		if ($arrive == "")
		{
			return "";
		} else
		{
			return $d3 . "-" . $m3 . "-" . $y3. "" . $h3;
		}
	}

function thaistart4($wantap)
	{
		$d4 = substr($wantap, 8, 2);
		$m4 = substr($wantap, 5, 2);
		$y4 = substr($wantap, 0, 4) ;
		$h4 = substr($wantap, 10, 6);
		if ($wantap == "")
		{
			return "";
		} else
		{
			return $d4 . "-" . $m4 . "-" . $y4. "" . $h4;
		}
	}


	

//$id=$_POST[id];
include 'connect.php';
	mysql_connect($host,$user,$pw) or die("ติดต่อ Host ไม่ได้");
	mysql_select_db($dbname) or die("ติดต่อฐานข้อมูลไม่ได้");
	mysql_query("SET character_set_results=tis620");
	mysql_query("SET character_set_client='tis620'");
	mysql_query("SET character_set_connection='tis620'");
	mysql_query("collation_connection = tis620_thai_ci");
	mysql_query("collation_database = tis620_thai_ci");
	mysql_query("collation_server = tis620_thai_ci");

$sql = "select * from car where id='$id' " ;
$result = mysql_query($sql) or die ("การเชื่อมต่อมีปัญหากรุณา ค้นหาใหม่อีกครั้ง") ;
$sqlquery=mysql_db_query($dbname, $sql); 
$total = mysql_num_rows($sqlquery);

while($array = mysql_fetch_array($result))
	{
  
	$ttt=$array['timego'];
	$start1 =  thaistart1($ttt);

	$bbb=$array['timeback'];
	$back1 =  thaistart2($bbb);

	$qqq=$array['arrive'];
	$arr =  thaistart3($qqq);

	$rrr=$array['wantap'];
	$wan =  thaistart4($rrr);

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
.style39 {FONT-SIZE: 14px; FONT-FAMILY: "MS Sans Serif"; font-weight: bold; color: #CC0000; }
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
if(document.formre.name.value == "" ){ 
alert('กรุณากรอกชื่อผู้ขอใช้'); 
document.formre.name.focus(); 
return false; 
} 
if(document.formre.object.value == "" ){ 
alert('กรุณากรอกข้อมูล ขอใช้เพื่อ'); 
document.formre.object.focus(); 
return false; 
} 
if(document.formre.locate.value == "" ){ 
alert('กรุณากรอกข้อมูล สถานที่'); 
document.formre.locate.focus(); 
return false; 
} 
if(document.formre.timego.value == "" ){ 
alert('กรุณากรอกข้อมูล วันเดินทางไป'); 
document.formre.timego.focus(); 
return false; 
} 
if(document.formre.timeback.value == "" ){ 
alert('กรุณากรอกข้อมูล วันเดินทางกลับ'); 
document.formre.timeback.focus(); 
return false; 
} 
if(document.formre.car01.checked == false && document.formre.car02.checked == false && document.formre.car03.checked == false && document.formre.car04.checked == false&& document.formre.car05.checked == false&& document.formre.car06.checked == false)
	{
		alert('กรุณาเลือกประเภทรถ');
		document.formre.car06.focus(); 
		return false;
	}	
if(document.formre.dri01.checked == false && document.formre.dri02.checked == false && document.formre.dri03.checked == false && document.formre.dri04.checked == false && document.formre.dri05.checked == false)
	{
		alert('กรุณาเลือกพนักงานขับรถ');
		document.formre.dri05.focus(); 
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
	
                    <TABLE border=0 cellSpacing=0 cellPadding=10 width=748>
                      <TBODY>
    <TR>
                          <TD><P class=th_headingboldmedium><span class="ui-state-default">แบบบันทึกการแก้ไขการขอใช้รถยนต์ คณะศึกษาศาสตร์</span> &nbsp;</P>                          </TD>
                        <TD vAlign=top width="14%">
                          <P class=th_headingboldmedium>&nbsp;</P>                          </TD></TR>
                        <TR>
                          <TD><IMG 
                        src="cars_files/dot_vertical_long.gif" 
                        width=530 height=20>                            </TD> 
                               
                       
                        <TD vAlign=top width="14%">&nbsp;</TD>
                        </TR>
		 <TR>
                <TD vAlign=top>
				 <form id="formre" name="formre" method="post" action="update.php" > 
	              
				 <table width="687" height="685" border="1" bordercolor="#006633" bgcolor="#FFFFFF">
                    <tr>
                      <td width="147" class="style36">ชื่อผู้ขอใช้ : </td>
                      <td colspan="2"><label>
					  <input type="hidden" name="id" value="<?php print $array['id'] ?>">
                        <input name="name" type="text" class="style36" id="name" value="<?php print $array['name'] ; ?>" size="35" maxlength="55">
                      </label></td>
                    </tr>
                    <tr>
                      <td class="style36">ขอใช้เพื่อ : </td>
                      <td colspan="2"><label>
                        <input name="object" type="text" class="style36" id="object" value="<?php print $array['object'] ; ?>" size="80" maxlength="80">
                        <br>
                        <span class="style39">*วัตถุประสงค์ในการขอใช้รถ </span></label></td>
                    </tr>
                    <tr>
                      <td class="style36">รายละเอียด : </td>
                      <td colspan="2"><label>
                        <input name="locate" type="text" class="style36" id="locate" value="<?php print $array['locate'] ; ?>" size="80" maxlength="80">
                        <br>
                        <span class="style39">*เวลาเดินทาง สถานที่ไปรับ สถานที่เดินทางไป ฯลฯ </span></label></td>
                    </tr>
                    <tr>
                      <td class="style36">วันและเวลาที่เดินทาง(ไป)</td>
                      <td colspan="2"><label>
                        <input name="timego" type="text" id="timego" class="style36" value="<?php echo $start1 ; ?>" size="25" maxlength="25">
                        <span class="style39"><a href="javascript: NewCssCal('timego','ddmmyyyy','arrow',true)"> <img src="images/cal.gif" width="16" height="16" alt="Pick a date"></a></span></label></td>
                      </tr>
                    <tr>
                      <td class="style36">วันและเวลาที่เดินทาง(กลับ) </td>
                      <td colspan="2"><label>
                        <input name="timeback" type="Text" id="timeback" value="<?php echo $back1; ?>" size="25" maxlength="25" class="style36">
                        <span class="style39"><a href="javascript: NewCssCal('timeback','ddmmyyyy','arrow',true)"> <img src="images/cal.gif" width="16" height="16" alt="Pick a date"></a></span></label></td>
                    </tr>
                                <tr>
                      <td rowspan="3" class="style36">รับสนามบิน : </td>
                      <td width="247" rowspan="3"><label><span class="style37">
                        <input name="typeap2" type="text" class="style36" value="<? {echo $array['typeap'] ;   ?>" size="15" maxlength="50" readonly="true">
                        </span><span class="style39">*ที่เลือกไว้</span><span class="style37"><br>
                        เลือก &gt;&gt;&gt;
                        <input name="typeap" type="radio" value="ในประเทศ">
                            <span class="style38">เทียวบินภายในประเทศ </span></span><br>
                            <span class="style37">เลือก &gt;&gt;&gt;
                            <input name="typeap" type="radio" value="ต่างประเทศ">
                            <span class="style38">เทียวบินต่างประเทศ<br>
                            </span>เลือก &gt;&gt;&gt;<span class="style38">
                            <input name="typeap" type="radio" value="ไม่ได้ไปเครื่องบิน">
                            ไม่ได้เดินทางโดยเครื่องบิน</span></span></label></td>
                      <td width="271" height="26"><span class="style36">เที่ยวบิน </span> : 
                        <input name="flight" type="Text" id="flight" value="<?php print $array['flight'] ; ?>" size="25" maxlength="25" class="style36"></td>
                                </tr>
                                <tr>
                                  <td height="22"><span class="style36">เวลาที่มาถึงสนามบิน : 
                                    
                                    <br>  <input name="arrive" type="Text" id="arrive" value="<?php 
										print $arr ; ?>" size="25" maxlength="25" class="style36">
                                      <span class="style39"><a href="javascript: NewCssCal('arrive','ddmmyyyy','arrow',true)"> <img src="images/cal.gif" width="16" height="16" alt="Pick a date"></a></span></span></td>
                                </tr>
                                <tr>
                                  <td height="26"><span class="style36">เวลาที่ต้องการให้รถไปรับ :
                                   <br> <input name="wantap" type="Text" id="wantap" value="<?php print $wan ; ?>" size="25" maxlength="25" class="style36">
                                    <span class="style39"><a href="javascript: NewCssCal('wantap','ddmmyyyy','arrow',true)"> <img src="images/cal.gif" width="16" height="16" alt="Pick a date"></a></span></span></td>
                                </tr>
                    <tr>
                      <td height="26" class="style36">&nbsp;</td>
                      <td colspan="2" class="style54">กรุณาเลือกเพียง 1 รายการ </td>
                    </tr>
                    <tr>
                      <td height="109" class="style36">ประเภทรถ : </td>
					            
                      <td colspan="2" class="style38"> <input name="typecar" type="text" class="style36" value="<?php echo $array['typecar'] ;  ?>" size="15" maxlength="50"	 readonly="true">
                        <span class="style39">*ที่เลือกไว้ กรุณาเลือกใหม่</span><BR> 
						 <label class="style37"> เลือก &gt;&gt;&gt;
                            <input name="typecar" type="radio" value="ย4528" id="car01">
                            <span class="style38">รถตู้ : </span><span class="style36">ย4528</span>  <span class="style38"><br>
                            </span></label>
                          <label class="style37"><span class="style38"> <span class="style37">เลือก &gt;&gt;&gt;</span>
                          <input name="typecar" type="radio" value="นค7118" id="car02">
                            รถตู้ : </span><span class="style36">นค7118</span><span class="style38"> <br>
                            </span><span class="style37">เลือก &gt;&gt;&gt;
                          <input name="typecar" type="radio" value="นง625" id="car03">
                          <span class="style52">รถตู้ : </span></span><span class="style36">นง625</span><span class="style37">  <br>
                          เลือก &gt;&gt;&gt;
                            <input name="typecar" type="radio" value="40-0770" id="car04">
                            <span class="style52">รถบัส : </span></span><span class="style36">40-0770</span><span class="style37"> <br>
                            เลือก &gt;&gt;&gt;
                            <input name="typecar" type="radio" value="ผบ8461" id="car05">
                            <span class="style52">รถกระบะ : </span></span><span class="style36">ผบ8461</span><span class="style37"><span class="style52"> <br>
                            </span>เลือก &gt;&gt;&gt;<span class="style52">
                            <input name="typecar" type="radio" value="รถเช่า" id="car06">
                            รถเช่า : </span></span></label></td>
                    </tr>
                    <tr>
                      <td height="71" class="style36">พนักงาน : <span class="style38">
                        <input type="hidden" name="id2" value="<?=$id?>">
                      </span></td>
                      <td colspan="2" class="style38"><input name="driver" type="text" class="style36" value="<? echo $array['driver'] ;  }}?>" size="15" maxlength="50" readonly="true">
                        <span class="style39">*คนขับเดิมที่เลือกไว้ กรุณาเลือกใหม่!!ทุกครั้ง</span><BR>
<label class="style37"> เลือก &gt;&gt;&gt; 
<input name="driver" type="radio" value="มนชัยต์" id="dri01">
  <span class="style38">มนชัยต์   </span>
  <span class="style38"><br>
  </span></label>

   <label class="style37"><span class="style38"> <span class="style37">เลือก &gt;&gt;&gt;</span>
   <input name="driver" type="radio" value="ภิญโญ" id="dri02">
   ภิญโญ<br> 
   </span><span class="style37">เลือก &gt;&gt;&gt;</span><span class="style38">
   <input name="driver" type="radio" value="สายชล" id="dri03">
   สายชล
   <br>
   </span>
   <span class="style37">เลือก &gt;&gt;&gt;</span><span class="style38">
   <input name="driver" type="radio" value="วิสุทธิ์" id="dri05">
   วิสุทธิ์
   <br>
   </span>
   <span class="style37">เลือก &gt;&gt;&gt;
                        <input name="driver" type="radio" value="เช่า" id="dri04">
                        <span class="style52">เอกชน </span></span></label></td>
                    </tr>
                    <tr>
                      <td class="style36">&nbsp;</td>
                      <td colspan="2" class="style43"><p class="style55">ตรวจสอบข้อมูลอีกครั้ง ก่อน บันทึกข้อมูล </p>                        </td>
                    </tr>
                    <tr>
                      <td class="style36">&nbsp;</td>
                      <td colspan="2"><div align="rigth">
					   <input name="kla" type="button" onClick="checkvalue()" class="ui-state-active" 
		value="    บันทึกข้อมูล    " >
                        <!--<input name="submit" type="submit" class="style37" id="submit" value="บันทึกข้อมูล"> -->
                      </div></td>
                    </tr>
                  </table>
                    </form>                </TD></TR>
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
