<?
// This is an example of PHP script using BARCHARTCLASS class.

include("barchartclass.inc");

$quota = 2000;
$bar = new BARCHART(0, 0, $quota);
$total_size = 0;

?>
<html>
<head>
<title>BARCHARTCLASS class example - mailbox usage</title>
</head>
<body>
<h2>BARCHARTCLASS class example - mailbox usage</h2>
<p>
<table border="0" width="100%" cellspacing="1" cellpadding="2">
<tr bgcolor="#c5c5c5">
<td width="40%"><b>Folder</b></td>
<td width="30%"><b>Usage</b></td>
<td width="3%" align="center"><b>%</b></td>
<td width="9%"><b>Messages</b></td>
<td width="9%"><b>New</b></td>
<td width="9%"><b>Size</b></td>
</tr>
<?
$box_size = 519.6;
$total_size+= $box_size;
$bar->setCurrPoint($box_size);
?>
<tr bgcolor="#d7d7d7">
<td><b>Inbox</b></td>
<td><? echo $bar->getBar(); ?></td>
<td align="right"><? echo $bar->getPercentage(); ?>%</td>
<td>10</td>
<td>0</td>
<td align="right"><? echo $box_size ?>KB</td>
</tr>
<?
$box_size = 0;
$total_size+= $box_size;
$bar->setCurrPoint($box_size);
?>
<tr bgcolor="#d7d7d7">
<td><b>Sent Items</b></td>
</td>
<td><? echo $bar->getBar(); ?></td>
<td align="right"><? echo $bar->getPercentage(); ?>%</td>
<td>0</td>
<td>0</td>
<td align="right"><? echo $box_size ?>KB</td>
</tr>
<?
$box_size = 45.8;
$total_size+= $box_size;
$bar->setCurrPoint($box_size);
?>
<tr bgcolor="#d7d7d7">
<td><b>Drafts</b></td>
</td>
<td><? echo $bar->getBar(); ?></td>
<td align="right"><? echo $bar->getPercentage(); ?>%</td>
<td>0</td>
<td>2</td>
<td align="right"><? echo $box_size ?>KB</td>
</tr>
<?
$box_size = 78.0;
$total_size+= $box_size;
$bar->setCurrPoint($box_size);
?>
<tr bgcolor="#d7d7d7">
<td><b>Trash</b></td>
</td>
<td><? echo $bar->getBar(); ?></td>
<td align="right"><? echo $bar->getPercentage(); ?>%</td>
<td>7</td>
<td>0</td>
<td align="right"><? echo $box_size ?>KB</td>
</tr>
<?
$box_size = 324.9;
$total_size+= $box_size;
$bar->setCurrPoint($box_size);
?>
<tr bgcolor="#d7d7d7">
<td><b>PHP Classes</b></td>
</td>
<td><? echo $bar->getBar(); ?></td>
<td align="right"><? echo $bar->getPercentage(); ?>%</td>
<td>18</td>
<td>1</td>
<td align="right"><? echo $box_size ?>KB</td>
</tr>
<?
$box_size = 867.5;
$total_size+= $box_size;
$bar->setCurrPoint($box_size);
?>
<tr bgcolor="#d7d7d7">
<td><b>Clients</b></td>
</td>
<td><? echo $bar->getBar(); ?></td>
<td align="right"><? echo $bar->getPercentage(); ?>%</td>
<td>43</td>
<td>0</td>
<td align="right"><? echo $box_size ?>KB</td>
</tr>
<?
$bar->setCurrPoint($total_size);
?>
<tr bgcolor="#c5c5c5">
<td><b>Total</b></td>
</td>
<td><? echo $bar->getBar(); ?></td>
<td align="right"><? echo $bar->getPercentage(); ?>%</td>
<td>78</td>
<td>3</td>
<td align="right"><? echo $total_size ?>KB</td>
</tr>
</table>


<?
$bar->setCurrPoint($total_size);
$bar->setStrBeforeBar("0MB&nbsp;");
$bar->setStrAfterBar("&nbsp;2MB");
?>

<p><b>Storage space usage</b>
<table border="0" width="100%" cellspacing="0" cellpadding="4">
	<tr>
	<td bgcolor="#e5e5e5" class="medium">Info about your available and used storage space</td>
    <td bgcolor="#e5e5e5" class="medium">&nbsp;</td>
	<td bgcolor="#e5e5e5" align="right" class="medium">INFO</td>
</tr>
</table>
<table border="0" width="100%" cellspacing="1" cellpadding="2">
		<tr bgcolor="#c5c5c5">
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="1">
		<tr>
		<td>You are currently using <? echo $bar->getPercentage() ?>% of your 2MB storage</td>
		<td align=right width="20%">
			<table border="0" width="300" cellspacing="0" cellpadding="0">
			<tr><td>
			<? echo $bar->getBar(); ?>
			</td></tr>
			</table>
		</td>
		</tr>
		</table>
		</td>
		</tr>
</table>

<br><br>
</body>
</html>