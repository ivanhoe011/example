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
.style13 {font-size: 12px; color: #7706a0; font-weight: bold; font-family: Tahoma; }
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
<!-- <form action="checkadmin.php" method="post" name="formre" id="formre"> -->
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
<!-- <input name="Submit" type="submit" class="ui-state-active" value="Login">  -->
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
                          <TD><P class=th_headingboldmedium><span class="ui-state-default">ตารางการขอใช้รถยนต์ คณะศึกษาศาสตร์</span>&nbsp;</P>  
						  <P class=th_headingboldmedium><span class="ui-state-default">ตรวจสอบรายละเอียดการเดินทางโดยคลิกไฮไลที่ปฏิทิน </span>&nbsp;</P>
						  </TD>
                        <TD vAlign=top width="14%">
                          <P class=th_headingboldmedium>&nbsp;</P>                          </TD></TR>
                        <TR>
                          <TD><IMG 
                        src="cars_files/dot_vertical_long.gif" 
                        width=530 height=20>
						<!-- ส่วนที่เรียกปฎิทินมาวาง -->
                            <div align="center" id="calendar"></div>						
						<!-- ส่วนที่เรียกปฎิทินมาวาง -->	
							
							</TD> 
                               
                       
                        <TD vAlign=top width="14%">&nbsp;</TD>
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
