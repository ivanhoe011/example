<?php

$interest = "arts";
$homepage = "http://www.java2s.com";
$query = "homepage=".urlencode( $homepage );
$query .= "&interest=".urlencode( $interest );
echo $query;
?>
