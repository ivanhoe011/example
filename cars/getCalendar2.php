<?php
header("content-type:text/html;charset=utf-8");   
header("Cache-Control: no-store, no-cache, must-revalidate");             
header("Cache-Control: post-check=0, pre-check=0", false);   
include "connect.php";
$con_db=mysql_connect($host,$user,$pw) or die("Cannot connect db server");
$select_db=mysql_select_db($dbname);
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client='utf8'");
mysql_query("SET character_set_connection='utf8'");
mysql_query("collation_connection = utf8");
mysql_query("collation_database = utf8");
mysql_query("collation_server = utf8");
if($_GET['gData']){
	$event_array=array();
	$i_event=0;
	$q="SELECT * FROM car WHERE date(timego)>='".date("Y-m-d",$_GET['start'])."'  ";
	$q.=" AND date(timeback)<='".date("Y-m-d",$_GET['end'])."' ORDER by id";
	$qr=mysql_query($q);
	while($rs=mysql_fetch_array($qr)){
		$event_array[$i_event]['id']=$rs['id'];
	

//$event_array[$i_event]['title']=$rs['name']$rs['object']$rs['locate'];
//$event_array[$i_event]['title']=$rs['name']."-".$rs['locate']."-".$rs['typecar']."-".$rs['driver'];

//$event_array[$i_event]['title']=$rs['name'].",".$rs['locate'].",".$rs['timego'].",".$rs['timeback'].",".$rs['typecar'].",".$rs['driver'];
//$event_array[$i_event]['title']=$rs['name'].",".$rs['locate'].",".$rs['typecar'].",".$rs['driver'];
	   		$event_array[$i_event]['title']=$rs['name'].",".$rs['locate'].",".$rs['driver'].",".$rs['typecar'];
			$event_array[$i_event]['start']=$rs['timego'];
			$event_array[$i_event]['end']=$rs['timeback'];

		//$event_array[$i_event]['url']='del.php?id=$rs['id']';
		$event_array[$i_event]['url']='show2.php?id='.$rs['id'];
		

//		$event_array[$i_event]['url']=$rs['typeap']."-".$rs['flight']."-".$rs['wantap'];
//		$event_array[$i_event]['allDay']=($rs['event_allDay']=="true")?true:false;
		$i_event++;
	
	}
	echo json_encode($event_array);
    
	exit;	
}
?>