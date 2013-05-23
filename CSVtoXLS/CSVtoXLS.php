<?php
// Performant Systems 2007, Alan Gruskoff linux@performantsystems.com
// A process to turn a CSV file into a formatted XLS file.
//
// Dependant on the PHP include directory containing /OLE and /Spreadsheet
// sourced from http://pear.php.net/package/Spreadsheet_Excel_Writer/
// by Mika Tuupola & Xavier Noguer.
//
// Note: the /OLE and /Spreadsheet directories need to be in the php include_path.
//
// Command line syntax is: php -f CSVtoXLS.php {InputFile}.csv {OutputFile}.xls
// If CSVtoXLS.php is not in the currect directory, provide the full path to it.
//
// The first line of CSV data is expected to be the Title only (in Quotes).
// The second line of CSV data is expected to be the Column Formats (in Quotes).
// The third line of CSV data is expected to be the Column Headings (in Quotes).
// Live data is expected to start on CSV file line 4. (Quotes on Text Fields or All Fields).
//
// Dates are expected in either the ISO date format 'YYYY-MM-DD', or 'DD/MM/YYYY'.
// Decimal numbers expected with just the decimal included, no other formatting. ("8.2","1995.23")
//
// Line 2 Column formatting should be associated 1 to 1 with the Column Headings on Line 3.
// Choices for Column Formatting are:
// "TextLeft","TextRight","Date","Decimal0","Decimal1","Decimal2","Decimal3","Decimal4"
//
require_once 'Spreadsheet/Excel/Writer.php';
function conv_to_xls_date($Date) {
// Returns the Excel/Calc internal date integer from either an ISO date YYYY-MM-DD or MM/DD/YYYY formats.
	return (int) (25569 + (strtotime("$Date 12:00:00") / 86400));
}
//
// import the command line arguments into an array
//
$argv = $_SERVER["argv"];
$argv_count = count($argv);
$InputFile = $argv[1];
if ($InputFile == "") {
	print "InputFile name not supplied\n"."Command line syntax is: php -f CSVtoXLS.php {InputFile}.csv {OutputFile}.xls";
	exit;
}
$OutputFile = $argv[2];
if ($OutputFile == "") {
	print "OutputFile name not supplied\n"."Command line syntax is: php -f CSVtoXLS.php {InputFile}.csv {OutputFile}.xls";
	exit;
}
if (!file_exists($InputFile)) {
    print "$InputFile not found.\n";
    exit;
}
$Infile = fopen($InputFile,"r");
//
print "Converting ".$InputFile." into => ".$OutputFile."\n";
$workbook = new Spreadsheet_Excel_Writer($OutputFile);
//
//	setup some standard formats
//
$format_bold =& $workbook->addFormat();
$format_bold->setBold();
//
$TextLeft_format =& $workbook->addFormat();
$TextLeft_format->setHAlign('left');
//
$TextRight_format =& $workbook->addFormat();
$TextRight_format->setHAlign('right');
//
$date_format =& $workbook->addFormat();
$date_format->setNumFormat('YYYY-MM-DD');   //  or could be MM-DD-YYYY as display format
$date_format->setHAlign('right');
//
$D0_format =& $workbook->addFormat();
$D0_format->setNumFormat('#,##0');
$D0_format->setHAlign('right');
//
$D1_format =& $workbook->addFormat();
$D1_format->setNumFormat('#,##0.0');
$D1_format->setHAlign('right');
//
$D2_format =& $workbook->addFormat();
$D2_format->setNumFormat('#,##0.00');
$D2_format->setHAlign('right');
//
$D3_format =& $workbook->addFormat();
$D3_format->setNumFormat('#,##0.000');
$D3_format->setHAlign('right');
//
$D4_format =& $workbook->addFormat();
$D4_format->setNumFormat('#,##0.0000');
$D4_format->setHAlign('right');
//
$format_title =& $workbook->addFormat();
$format_title->setBold();
$format_title->setColor('white');
$format_title->setFgColor('blue');
$format_title->setAlign('merge');
//
// A Workbook can have multiple Worksheets
$worksheet =& $workbook->addWorksheet('Sheet1');
//
$Row = 1; $First = True; $MaxCols = 0;
$ColHeads = Array();
$ColFormats = Array();
//
While(!feof($Infile)) {
	$Fields = fgetcsv($Infile, 1024);
	If ($First) {
		$First = False;
//	grab the first row as the title
		$Title = $Fields[0];
		$worksheet->write(0, 0, $Title, $format_title);
//	merge empty cells to contain the title
		for ($Col = 1; $Col < 10; $Col++) {
			$worksheet->write(0, $Col, "", $format_title);
		}
//	get column formats from the second row
		$Fields = fgetcsv($Infile, 1024);
		for ($Col = 0; $Col < count($Fields); $Col++) {
			switch ($Fields[$Col]) {
			case "TextLeft":
				$ColFormats[$Col] = "TextLeft";
				$Wid = 20.0;
				$worksheet->setColumn($Col,$Col,$Wid);
				break;
			case "TextRight":
				$ColFormats[$Col] = "TextRight";
				$Wid = 10.0;
				$worksheet->setColumn($Col,$Col,$Wid);
				break;
			case "Date":
				$ColFormats[$Col] = "Date";
				$Wid = 10.0;
				$worksheet->setColumn($Col,$Col,$Wid);
				break;
			case "Decimal0":
				$ColFormats[$Col] = "Decimal0";
				$Wid = 11.0;
				$worksheet->setColumn($Col,$Col,$Wid);
				break;
			case "Decimal1":
				$ColFormats[$Col] = "Decimal1";
				$Wid = 12.0;
				$worksheet->setColumn($Col,$Col,$Wid);
				break;
			case "Decimal2":
				$ColFormats[$Col] = "Decimal2";
				$Wid = 12.0;
				$worksheet->setColumn($Col,$Col,$Wid);
				break;
			case "Decimal3":
				$ColFormats[$Col] = "Decimal3";
				$Wid = 12.0;
				$worksheet->setColumn($Col,$Col,$Wid);
				break;
			case "Decimal4":
				$ColFormats[$Col] = "Decimal4";
				$Wid = 12.0;
				$worksheet->setColumn($Col,$Col,$Wid);
				break;
			default:
				$ColFormats[$Col] = "TextLeft";
			}
		}
//	get column headings from the third row,
		$Fields = fgetcsv($Infile, 1024);
		$MaxCols = count($Fields);
		for ($Col = 0; $Col < $MaxCols; $Col++) {
			$ColHeads[$Col] = $Fields[$Col];
		}
		$Row++;
		for ($Col = 0; $Col < $MaxCols; $Col++) {
			$worksheet->write($Row, $Col, $ColHeads[$Col], $format_bold);
		}
	} Else {
//	now, process the csv file line contents as rows and columns 
		If (is_array($Fields) && count($Fields) > 0 ) {
			$Row++;
			for ($Col = 0; $Col < count($Fields); $Col++) {
				switch ($ColFormats[$Col]) {
				case "TextLeft":
					$worksheet->write($Row, $Col, $Fields[$Col], $TextLeft_format);
					break;
				case "TextRight":
					$worksheet->write($Row, $Col, $Fields[$Col], $TextRight_format);
					break;
				case "Date":
					$Date = $Fields[$Col];
					$Val = conv_to_xls_date($Date);
					$worksheet->write($Row, $Col, $Val, $date_format);
					break;
				case "Decimal0":
					$worksheet->write($Row, $Col, $Fields[$Col], $D0_format);
					break;
				case "Decimal1":
					$worksheet->write($Row, $Col, $Fields[$Col], $D1_format);
					break;
				case "Decimal2":
					$worksheet->write($Row, $Col, $Fields[$Col], $D2_format);
					break;
				case "Decimal3":
					$worksheet->write($Row, $Col, $Fields[$Col], $D3_format);
					break;
				case "Decimal4":
					$worksheet->write($Row, $Col, $Fields[$Col], $D4_format);
					break;
				default:
					$worksheet->write($Row, $Col, $Fields[$Col], "");
				}
			}
		}
	}
}
//
//	create totals lines for any Decimal formatted Column, ex: =SUM(D4:D1185)
//
$LastRow = $Row + 1;
$Row++;
for ($Col = 0; $Col < $MaxCols; $Col++) {
	$CF = $ColFormats[$Col];
	if (substr($CF,0,3) == "Dec") {
		$worksheet->writeString($Row, $Col, "==========", $TextRight_format);
		$FromCell = chr($Col + 65).'4';
		$ToCell   = chr($Col + 65).($LastRow);
		$Formula = '=SUM('.$FromCell.':'.$ToCell.')';
		switch ($CF) {
		    case "Decimal0":
			$worksheet->write($Row+1, $Col, $Formula, $D0_format);
			break;
		    case "Decimal1":
			$worksheet->write($Row+1, $Col, $Formula, $D1_format);
			break;
		    case "Decimal2":
			$worksheet->write($Row+1, $Col, $Formula, $D2_format);
			break;
		    case "Decimal3":
			$worksheet->write($Row+1, $Col, $Formula, $D3_format);
			break;
		    case "Decimal4":
			$worksheet->write($Row+1, $Col, $Formula, $D4_format);
			break;
		}
	}
}
//
//	wrap it up, write the file.
//
$workbook->close();
print "$OutputFile Conversion Completed.\n";
exit;
?>