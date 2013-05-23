BARCHART Class:

The class produces pure HTML code to display a'la bar chart. It will work in
any browser, with or without styleseet and it doesn't required GD library
installed on your server at all!

HOW TO:

1. Copy class BARCHART to your includes directory.
2. Create PHP script that will include this class:
	include("barchartclass.inc");
3. Make instance of the BARCHART object:
	$bar = new BARCHART();
4. Use all "set" methods to initialize parameters of bar
	$bar->setMaxPoint(1000);
5.  Use getBar method to get result
	$bar->getBar();


OPTIONS AND FEATURES:

1. In constructor of the class you have parameters with default values.
	BARCHART($min_point = 0, $curr_point = 0, $max_point = 0, $init_strbeforebar = "", $init_strafterbar = "")

	$min_point - value to start count from (minimum value, ex.: 0).
	$curr_point - current value, should be between minimum and maximum values (ex.: 55).
	$max_point - value to finish count (maximum value, ex.: 100).
	$init_strbeforebar - Anything that you want to see before output bar (caption, title...).
	$init_strafterbar - Anything that you want to see after output bar (values, words ...).
2. You may change any of parameters at any time, without create additional instances
of object:
	$bar->setMinPoint("20");
	$bar->setCurrPoint("111");
	$bar->setMaxPoint("320");
	$bar->setStrBeforeBar("Today");
	$bar->setStrAfterBar("Good work");
3. There are few additional "set" methods of the class available, you may use it
to set "nice" look of bar:
	setIMGCompound($img_url) - set image to complete bar.
	setIMGBg($img_url) - set image to complete background.
	setColorBorder("black") - set border color around bar, if not specified won't be displayed.
	setColorCompound("red") - set color to complete bar.
	setColorBg("white") - set color to complete background.
	Note: If you use images, better to set background and compound colors same.
	setLengthBar("200") - set length of bar in percentage or in pixels ("100%" or "200").
4. Get methods available for this class:
	getPercentage($precision) - calculate percentage value of current point
	and return with precision specified.
	getBar() - return result horisontal bar


MULTIBARCHART Class:

The class produces pure HTML code to display multiple a'la bar chart, based on
BARCHART class.

HOW TO:

1. Copy class MULTIBARCHART to your includes directory.
2. Create PHP script that will include this class and BARCHART class:
	include("barchartclass.inc");
	include("multibarchartclass.inc");
3. Make instance of the MULTIBARCHART object:
	$chart = new MULTIBARCHART();
Note: You will automatically get access to all properties and methods of BARCHART
class.
4. Use all "set" methods to initialize parameters of chart
	$chart->setArrBeforeBar($captions);
5.  Use getChart method to get result
	$chart->getChart();


OPTIONS AND FEATURES:

1. In constructor of the class you have parameters with default values.
	MULTIBARCHART($init_min_point = 0, $init_curr_point = array(), $init_max_point = 0, $init_arrbeforebar = array(), $init_arrafterbar = array())

	$init_min_point - value to start count from (minimum value, ex.: 0).
	$init_curr_point - array of current values, each value should be between minimum
	and maximum values (ex.: 55, 34, 67).
	Important: size of this array defines size of chart.
	$init_max_point - value to finish count (maximum value, ex.: 100).
	$init_arrbeforebar - array with values, anything that you want to see before
	output each bar (array("test1", "test2", "test3")).
	$init_arrafterbar - array with values, anything that you want to see after
	output each bar.
2. You may change any of parameters at any time, without create additional instances
of object:
	$bar->setMinPoint("20");
	$bar->setArrCurrPoint(array("12", "45", "89"));
	$bar->setMaxPoint("320");
	$bar->setArrBeforeBar($array_captions);
	$bar->setArrAfterBar($array_numbers);
3. There are few additional "set" methods of the class available, you may use it
to set "nice" look of chart:
	setArrIMGCompound($array_img_url) - set array of images to complete bars.
	setArrIMGBg($array_img_url) - set array of images to complete backgrounds.
	setArrColorBorder($array_color_borders) - set set array of borders colors around bars.
	setArrColorCompound($array) - set array of colors to complete bars.
	setArrColorBg($array) - set array of colors to complete backgrounds.
	Note: if some array not specified will be displayed settings from BARCHART class.
	setDisplayPercentage(2) - set display percentage values with precision specified or not.
	setAlignBefore("right") - set align of word before bar (value: right, center, left).
	setAlignAfter("center") - set align of word after bar (value: right, center, left).
4. Get methods available for this class:
	getChart() - return result horisontal chart
5. + All methods from BARCHART class.

Author: Viatcheslav Ivanov, E-Witness Inc., Canada;
mail: ivanov@e-witness.ca;
web: www.e-witness.ca; www.coolwater.ca; www.strongpost.net;
version: 1.0 /11.22.2002
