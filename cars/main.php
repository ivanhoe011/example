<?PHP
session_start();
if (!isset($_SESSION[login])) {
     header("Location: index.php");
     exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>���ҧ��â���ö¹�� ����֡����ʵ�</TITLE>
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

<script type="text/javascript">
function checkvalue(){
if(document.formre.name.value == "" ){ 
alert('��سҡ�͡���ͼ�����'); 
document.formre.name.focus(); 
return false; 
} 
if(document.formre.object.value == "" ){ 
alert('��سҡ�͡������ ��������'); 
document.formre.object.focus(); 
return false; 
} 
if(document.formre.locate.value == "" ){ 
alert('��سҡ�͡������ ʶҹ���'); 
document.formre.locate.focus(); 
return false; 
} 
if(document.formre.timego.value == "" ){ 
alert('��سҡ�͡������ �ѹ�Թ�ҧ�'); 
document.formre.timego.focus(); 
return false; 
} 
if(document.formre.timeback.value == "" ){ 
alert('��سҡ�͡������ �ѹ�Թ�ҧ��Ѻ'); 
document.formre.timeback.focus(); 
return false; 
} 
if(document.formre.car01.checked == false && document.formre.car02.checked == false && document.formre.car03.checked == false && document.formre.car04.checked == false&& document.formre.car05.checked == false&& document.formre.car06.checked == false)
	{
		alert('��س����͡������ö');
		document.formre.car06.focus(); 
		return false;
	}	
if(document.formre.dri01.checked == false && document.formre.dri02.checked == false && document.formre.dri03.checked == false && document.formre.dri04.checked == false && document.formre.dri05.checked == false)
	{
		alert('��س����͡��ѡ�ҹ�Ѻö');
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
                          <TD width=15><span class="th_headingboldmedium"><span class="ui-state-default"><a name=menu></a></span></span></TD>
                          <TD class=style62 height=30>����</span></TD>
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
						 
<TD class=th_leftlinkdark><A href="showall.php?start=0&page=1" class="linkstyle01">������Ẻ���ҧ</A></TD>
                        </TR>
                        <TR>
						  <TD width=15>&nbsp;</TD>
<TD class=th_leftlinkdark><A href="index.php" class="linkstyle01">������Ẻ��ԷԹ</A></TD>
                        </TR>
					  <TR>
  <TD width=17>&nbsp;</TD>
  <TD  class=th_leftlinkdark><A href="main.php" class="linkstyle01">�ѹ�֡�����š�â���ö</A></TD>
                        </TR>	
						<TR>
  <TD width=17>&nbsp;</TD>
  <TD  class=th_leftlinkdark><A href="show.php?start=0&page=1" class="linkstyle01">���ҧ�����䢢�����ö</A></TD></TR>
  <TR>
  <TD width=17>&nbsp;</TD>
  <TD>&nbsp;</TD>
                        </TR>	
                          <TR>
						    <TD width=15>&nbsp;</TD>
 <TD class=style62 height=30>���ͼ����ҹ</TD>
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
<TD class=style10>  <?
if (count($sess_username)==0) {
			echo "<center>�Դ��ͼԴ��Ҵ </center>";
			echo " <center><A HREF='logout.php'> <B>��Ѻ˹����ѡ</B><BR></A><BR></center>";
		} else {	for ($i=1;$i<count($sess_username);$i++){
       echo "<span class=style36 align=right>$sess_uname[$i] </span>";
			  ?>
                      <?

				}}
									  ?></TD>
                        </TR>
						                         
					   <TR>
					     <TD width=15>&nbsp;</TD><TD><?PHP print "<input type = button class=ui-state-active align=right name = button value = �͡�ҡ�к� onClick = window.navigate(\"logout.php\")>"; ?>&nbsp;</TD></TR>
                      </TBODY>
                    </TABLE>
					
					
					<!-- #End���� --></TD>
                  <TD vAlign=top width=748><IMG 
                  src="cars_files/pic-depart.jpg" 
                  width=748 height=130></TD>
                </TR>
     
			    <TR>
                  <TD>
				  <form id="formre" name="formre" method="post" action="addcar.php" > 
	     <table border=0 cellspacing=0 width=748>
           <tbody>
             <tr>
               <td><br><p class=th_headingboldmedium><span class="ui-state-default">Ẻ�ѹ�֡��â���ö¹�� ����֡����ʵ�</span>� &nbsp;</p></td>
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
		     <table width="759" height="685" border="1" bordercolor="#006633" bgcolor="#FFFFFF">
                    <tr>
                      <td width="176" class="style36">���ͼ����� : </td>
                      <td colspan="2"><label>
                        <input name="name" type="text" id="name" class="style36" size="35" maxlength="55">
                      </label></td>
                    </tr>
                    <tr>
                      <td class="style36">�������� : </td>
                      <td colspan="2"><label>
                        <input name="object" type="text" id="object" class="style36" size="60" maxlength="80">
                        <br>
                        <span class="style39">*�ѵ�ػ��ʧ��㹡�â���ö </span></label></td>
                    </tr>
                    <tr>
                      <td class="style36">ʶҹ��� : </td>
                      <td colspan="2"><label>
                        <input name="locate" type="text" id="locate" class="style36" size="60">
                        <br>
                        <span class="style39">*�����Թ�ҧ ʶҹ�����Ѻ ʶҹ����Թ�ҧ� ��� (���ʴ�����ԷԹ) </span></label></td>
                    </tr>
                    <tr>
                      <td class="style36">�ѹ������ҷ���Թ�ҧ(�)</td>
                      <td colspan="2"><label>
                        <input type="text" id="timego" maxlength="25" size="25" name="timego">
                        <span class="style39"><a href="javascript: NewCssCal('timego','ddmmyyyy','arrow',true)"> <img src="images/cal.gif" width="16" height="16" alt="Pick a date"></a></span></label></td>
                      </tr>
                    <tr>
                      <td class="style36">�ѹ������ҷ���Թ�ҧ(��Ѻ) </td>
                      <td colspan="2"><label>
                        <input type="Text" id="timeback" maxlength="25" size="25" name="timeback">
                        <span class="style39"><a href="javascript: NewCssCal('timeback','ddmmyyyy','arrow',true)"> <img src="images/cal.gif" width="16" height="16" alt="Pick a date"></a></span></label></td>
                    </tr>
                                <tr>
                      <td rowspan="3" class="style36">�Ѻʹ���Թ : </td>
                      <td width="223" rowspan="3"><label><span class="style37">���͡ &gt;&gt;&gt;
                            <input name="typeap" type="radio" value="㹻����">
                            <span class="style38">���ǺԹ���㹻���� </span></span><br>
                            <span class="style37">���͡ &gt;&gt;&gt;
                            <input name="typeap" type="radio" value="��ҧ�����">
                            <span class="style38">���ǺԹ��ҧ�����<br>
                            </span>���͡ &gt;&gt;&gt;<span class="style38">
                            <input name="typeap" type="radio" value="����������ͧ�Թ">
                            ������Թ�ҧ������ͧ�Թ</span></span></label></td>
                      <td width="327" height="26"><span class="style36">����ǺԹ </span> :<br> 
                        <input type="Text" id="flight" maxlength="25" size="25" name="flight"></td>
                                </tr>
                                <tr>
                                  <td height="22"><span class="style36">���ҷ���Ҷ֧ʹ���Թ :<br> 
                                    
                                  <input type="Text" id="arrive" maxlength="25" size="25" name="arrive">
                                  <span class="style39"><a href="javascript: NewCssCal('arrive','ddmmyyyy','arrow',true)"> <img src="images/cal.gif" width="16" height="16" alt="Pick a date"></a></span></span></td>
                                </tr>
                                <tr>
                                  <td height="26"><p class="style36">���ҷ���ͧ������ö��Ѻ :  
                                      <br>
                                    <input type="Text" id="wantap" maxlength="25" size="25" name="wantap">
                                    <span class="style39"><a href="javascript: NewCssCal('wantap','ddmmyyyy','arrow',true)"> <img src="images/cal.gif" width="16" height="16" alt="Pick a date"></a></span></p>                                    </td>
                                </tr>
                    <tr>
                      <td height="26" class="style36">&nbsp;</td>
                      <td colspan="2" class="style54">��س����͡��§ 1 ��¡�� </td>
                    </tr>
                    <tr>
                      <td height="109" class="style36">������ö : </td>
                      <td colspan="2" class="style38"><label class="style37"> ���͡ &gt;&gt;&gt;
                            <input name="typecar" type="radio" value="�4528" id="car01">
                            <span class="style38">ö��� : </span><span class="style36">�4528</span>  <span class="style38"><br>
                            </span></label>
                          <label class="style37"><span class="style38"> <span class="style37">���͡ &gt;&gt;&gt;</span>
                          <input name="typecar" type="radio" value="��7118" id="car02">
                            ö��� : </span><span class="style36">��7118</span><span class="style38"> <br>
                            </span><span class="style37">���͡ &gt;&gt;&gt;
                          <input name="typecar" type="radio" value="��625" id="car03">
                          <span class="style52">ö��� : </span></span><span class="style36">��625</span><span class="style37">  <br>
                          ���͡ &gt;&gt;&gt;
                            <input name="typecar" type="radio" value="40-0770" id="car04">
                            <span class="style52">ö��� : </span></span><span class="style36">40-0770</span><span class="style37"> <br>
                            ���͡ &gt;&gt;&gt;
                            <input name="typecar" type="radio" value="��8461" id="car05">
                            <span class="style52">ö��к� : </span></span><span class="style36">��8461</span><span class="style37"><span class="style52"> <br>
                            </span>���͡ &gt;&gt;&gt;<span class="style52">
                            <input name="typecar" type="radio" value="ö���" id="car06">
                            ö��� : </span></span></label></td>
                    </tr>
                    <tr>
                      <td height="71" class="style36">��ѡ�ҹ : </td>
                      <td colspan="2" class="style38">


<label class="style37"> ���͡ &gt;&gt;&gt; 
<input name="driver" type="radio" value="����µ�" id="dri01">
  <span class="style38">����µ�   </span>
  <span class="style38"><br>
  </span></label>

   <label class="style37">
   
   <span class="style38">

   <span class="style37">���͡ &gt;&gt;&gt;</span>
   <input name="driver" type="radio" value="�ԭ�" id="dri02">
   �ԭ�<br> 
   </span>
   
   <span class="style37">���͡ &gt;&gt;&gt;</span><span class="style38">
   <input name="driver" type="radio" value="��ª�" id="dri03">
   ��ª�
   <br>
   </span>
      
   <span class="style37">���͡ &gt;&gt;&gt;</span><span class="style38">
   <input name="driver" type="radio" value="���ط���" id="dri05">
   ���ط���
   <br>
   </span>
   
   
   
   <span class="style37">���͡ &gt;&gt;&gt;
                        <input name="driver" type="radio" value="���" id="dri04">
                        <span class="style52">�͡�� </span></span></label></td>
                    </tr>
                    <tr>
                      <td class="style36">&nbsp;</td>
                      <td colspan="2" class="style43"><p class="style55">��Ǩ�ͺ�������ա���� ��͹ �ѹ�֡������ </p>                        </td>
                    </tr>
                    <tr>
                      <td class="style36">&nbsp;</td>
                      <td colspan="2"><div align="rigth">
					  <input name="kla" type="button" onClick="checkvalue()" class="ui-state-active" 
		value="    �ѹ�֡������    " >
<!-- <input name="Submit" type="submit" class="ui-state-active" value="Login">  
                        <input name="submit" type="submit" class="style37" id="submit" value="�ѹ�֡������"> -->
                       
                      </div></td>
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
