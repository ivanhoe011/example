<?php
 
//1.สร้างชุดตัวอักษรตั้งแต่ a-z
 
$arr_a_z = range( "a" , "z" ) ;
 
//2.สร้างชุดตัวอักษรตั้งแต่ A-Z
 
$arr_A_Z = range( "A" , "Z" ) ;
 
//3.สร้างชุดตัวอักษรตั้งแต่ 0-9
 
$arr_0_9 = range( 0 , 9 ) ;
 
//4.เอาชุดตัวอักษรทั้ง 3 มารวมกัน
 
$arr_a_9 = array_merge( $arr_a_z , $arr_A_Z , $arr_0_9 ) ;
 
$str_a_9 = implode( $arr_a_9 ) ;
 
//5.ทำการสับเปลี่ยนตำแหน่งตัวอักษร
 
$str_a_9 = str_shuffle( $str_a_9 ) ; 
 
//6.ตัดเอามาแค่ 10 ตัวอักษร
 
$verify_code = substr( $str_a_9 , 0 , 10 ) ;
 
echo $verify_code ;
 
?>