<?
// This is an example of PHP script using MULTIBARCHARTCLASS class.

include("barchartclass.inc");
include("multibarchartclass.inc");

?>
<html>
<head>
<title>MULTIBARCHARTCLASS class example</title>
</head>
<body>
<h2>MULTIBARCHARTCLASS class example - project activity</h2>
<h4>fixed length of diagram - 300px.</h4>
<p>

<?
$maxhours = 1000;
$hours = array(234, 45, 653, 723, 998, 123, 342, 234, 618, 111, 2, 835);
for ($i = 1; $i <= 12; $i++)
    $captions[] = "<b>".strftime("%B", mktime( 0,0,0,$i,1,2000 ))."&nbsp;</b>";

$projectchart = new MULTIBARCHART(0, $hours, $maxhours);
$projectchart->setArrBeforeBar($captions);
$projectchart->setLengthBar("300");
$projectchart->setColorBorder("");
$projectchart->setIMGCompound("http://coolwater.ca/images/gradient.gif");
// if use image, better set bgcolor same as compound color
$projectchart->setColorBg("#dddddd");
$projectchart->setColorCompound($projectchart->color_bg);
$projectchart->setDisplayPercentage(1);

echo $projectchart->getChart();
?>

<h2>MULTIBARCHARTCLASS class example - annual sales chart</h2>
<h4>resizable length of diagram - try to resize your window</h4>
<p align="center">
<table border="0" width="100%" cellspacing="1" cellpadding="2">
<tr><td>
<?
$maxsales = 1000000;
$sales = array(254432, 45623, 653893, 723932, 1000000, 123123, 342437, 234528, 618943, 111223, 2322, 835984);
while (list(, $val) = each ($sales)) {
    $totals[] = "$".number_format($val, 2);
    if ($val < 250000)
    	$colors_compaund[] = "red";
    elseif ($val >= 250000 && $val < 500000)
    	$colors_compaund[] = "yellow";
    elseif ($val >= 500000 && $val < 750000)
    	$colors_compaund[] = "#66cc66";
    else
    	$colors_compaund[] = "#009900";
}
reset ($sales);

$saleschart = new MULTIBARCHART(0, $sales, $maxsales);
$saleschart->setArrBeforeBar($captions);
$saleschart->setArrAfterBar($totals);
$saleschart->setAlignAfter("right");
$saleschart->setArrColorCompound($colors_compaund);
$saleschart->setColorBg("white");

echo $saleschart->getChart();

?>
</td></tr>
</table>

<br><br>
</body>
</html>