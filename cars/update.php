 <?php 
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

include "connect.php";
mysql_connect($host,$user,$pw) or die("ติดต่อ Host ไม่ได้");
mysql_select_db($dbname) or die("ติดต่อฐานข้อมูลไม่ได้");
mysql_query("SET character_set_results=tis620");
mysql_query("SET character_set_client='tis620'");
mysql_query("SET character_set_connection='tis620'");
mysql_query("collation_connection = tis620_thai_ci");
mysql_query("collation_database = tis620_thai_ci");
mysql_query("collation_server = tis620_thai_ci");

$sql = "UPDATE car SET name = '$name', object = '$object', locate = '$locate' , timego = '$start1' , timeback = '$end1' , typeap = '$typeap' , flight = '$flight', arrive = '$start2' , wantap = '$end2' , typecar = '$typecar' , driver = '$driver' WHERE id=$id";


$sqlquery=mysql_db_query($dbname, $sql); 


	mysql_close();

					
echo "<script>alert('ได้ทำการแก้ไข เป็นที่เรียบร้อย'); window.location='show.php?start=0&page=1';</script> ";
	?>