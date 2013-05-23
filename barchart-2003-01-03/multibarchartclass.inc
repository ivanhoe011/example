<?
/*
 * Class produce HTML code to display multiple a'la bar chart, based on BARCHART class.
 * Author: Viatcheslav Ivanov, E-Witness Inc., Canada;
 * mail: ivanov@e-witness.ca, v_iv@hotmail.com;
 * web: www.e-witness.ca; www.coolwater.ca; www.strongpost.net;
 * version: 1.0 /12.09.2002
 *
 */
if ( !defined("MULTIBARCHARTCLASS_INC") ) {

	define("MULTIBARCHARTCLASS_INC",1);

	class MULTIBARCHART extends BARCHART {
	    var $arr_curr_point = array();				// current values, important: size of this array defines size of chart

	    var $arr_before_bar = array(); 				// any number, word ... before bars
	    var $arr_after_bar = array();				// any number, word ... after bars
	    var $arr_img_compound = array();			// images to complete bar
	    var $arr_img_bg = array();					// images to complete background
	    var $arr_color_compound = array();			// colors to complete bar
	    var $arr_color_bg = array();				// colors to complete background
	    var $arr_color_border = array();			// border colors, if not specified it doesn't draw border at all
	    var $display_percentage = false;			// display percentage values (values: false or (int) precision)
	    var $align_before = "left";					// align of word before bar (value: right, center, left)
	    var $align_after = "left";					// align of word after bar (value: right, center, left)

		// INITIALIZATION
		function MULTIBARCHART($init_min_point = 0, $init_curr_point = array(), $init_max_point = 0, $init_arrbeforebar = array(), $init_arrafterbar = array()) {
			$this->setArrBeforeBar($init_arrbeforebar);
			$this->setArrAfterBar($init_arrafterbar);
			$this->setMinPoint($init_min_point);
			$this->setMaxPoint($init_max_point);
			$this->setArrCurrPoint($init_curr_point);
		}

		// SET METHODS
		// set any array of strings before bar
		function setArrBeforeBar($anyarray) {
			if (is_array($anyarray)) $this->arr_before_bar = $anyarray;
		}
		// set any array of strings after bar
		function setArrAfterBar($anyarray) {
			if (is_array($anyarray)) $this->arr_after_bar = $anyarray;
		}
		// set array of current values
		function setArrCurrPoint($arrpoint) {
			if (is_array($arrpoint)) $this->arr_curr_point = $arrpoint;
		}
		// set array of images to complete bars
		function setArrIMGCompound($arr_img_url) {
			if (is_array($arr_img_url)) $this->arr_img_compound = $arr_img_url;
		}
		// set array of images to complete backgrounds
		function setArrIMGBg($arr_img_url) {
			if (is_array($arr_img_url)) $this->arr_img_bg = $arr_img_url;
		}
		// set array of borders colors
		function setArrColorBorder($arr_color) {
			if (is_array($arr_color)) $this->arr_color_border = $arr_color;
		}
		// set array of colors to complete bars
		function setArrColorCompound($arr_color) {
			if (is_array($arr_color)) $this->arr_color_compound = $arr_color;
		}
		// set array of colors to complete backgrounds
		function setArrColorBg($arr_color) {
			if (is_array($arr_color)) $this->arr_color_bg = $arr_color;
		}
		// set display percentage values
		function setDisplayPercentage($precision = false) {
			$this->display_percentage = $precision;
		}
		// set align of word before bar (value: right, center, left)
		function setAlignBefore($align = "left") {
			$this->align_before = $align;
		}
		// set align of word after bar (value: right, center, left)
		function setAlignAfter($align = "left") {
			$this->align_after = $align;
		}

		// GET CHART METHOD
		function getChart() {
			$output = "";
			if (sizeof($this->arr_curr_point)) {
				$size_arr_before_bar = sizeof($this->arr_before_bar);
				$size_arr_after_bar = sizeof($this->arr_after_bar);
				$size_img_compound = sizeof($this->arr_img_compound);
				$size_img_bg = sizeof($this->arr_img_bg);
				$size_arr_color_border = sizeof($this->arr_color_border);
				$size_arr_color_compound = sizeof($this->arr_color_compound);
				$size_arr_color_bg = sizeof($this->arr_color_bg);
				$old_img_compound = $this->img_compound;
				$old_img_bg = $this->img_bg;
				$old_color_border = $this->color_border;
				$old_color_compound = $this->color_compound;
				$old_color_bg = $this->color_bg;
				reset ($this->arr_curr_point);
				$output.= "<table border=0 cellspacing=1 cellpadding=0";
				if (strstr($this->bar_length, "%")) {
					$output.= " width='".$this->bar_length."'>\n";
					$this->bar_length = "100%";
				} else {
					$output.= ">\n";
				}
				while (list($key, $value) = each ($this->arr_curr_point)) {
					$output.= "<tr>\n";
					if ($size_arr_before_bar) $output.= ($this->arr_before_bar[$key])? "<td align='".$this->align_before."'>".$this->arr_before_bar[$key]."</td>\n" : "<td align='".$this->align_before."'>&nbsp;</td>\n";
					$this->setCurrPoint($value);
					if ($this->arr_img_compound[$key]) {
						$old_img_compound = $this->img_compound;
						$this->setIMGCompound($this->arr_img_compound[$key]);
					}
					if ($this->arr_img_bg[$key]) {
						$old_img_bg = $this->img_bg;
						$this->setIMGBg($this->arr_img_bg[$key]);
					}
					if ($this->arr_color_border[$key]) {
						$old_color_border = $this->color_border;
						$this->setColorBorder($this->arr_color_border[$key]);
					}
					if ($this->arr_color_compound[$key]) {
						$old_color_compound = $this->color_compound;
						$this->setColorCompound($this->arr_color_compound[$key]);
					}
					if ($this->arr_color_bg[$key]) {
						$old_color_bg = $this->color_bg;
						$this->setColorBg($this->arr_color_bg[$key]);
					}
					if ((string)((int)$this->display_percentage) == (string)$this->display_percentage) {
						$output.= "<td align='right'>".$this->getPercentage($this->display_percentage)."%</td>\n";
					}
					$output.= "<td width='100%'>".$this->getBar()."</td>\n";
					$this->setIMGCompound($old_img_compound);
					$this->setIMGBg($old_img_bg);
					$this->setColorBorder($old_color_border);
					$this->setColorCompound($old_color_compound);
					$this->setColorBg($old_color_bg);
					if ($size_arr_after_bar) $output.= ($this->arr_after_bar[$key])? "<td align='".$this->align_after."'>".$this->arr_after_bar[$key]."</td>\n" : "<td align='".$this->align_after."'>&nbsp;</td>\n";
					$output.= "</tr>\n";
				}
				$output.= "</table>\n";
			}
			return $output;
		}
	}
} // if ( !defined("MULTIBARCHARTCLASS_INC") )
?>