CSVtoXLS.php Program Notes
Performant Systems 2007, Alan Gruskoff, linux (at) performantsystems.com

A utility to convert CSV data into business class XLS spreadsheet files, tested as compatible with OpenOffice 2.0 Calc and Excel 2000. The Spreadsheet_Excel_Writer module provides for a high level of formatting and also offers formulas. CSVtoXLS.php takes advantage of those features and provides meaningful formatting and a simple Column SUM automaticly generated at the bottom of any Decimal Column.
Download http://performantsystems.com/CSVtoXLS.zip

The distribution CSVtoXLS.zip file contains:
	CSVtoXLS.php
	example.csv
	/OLE and /Spreadsheet directories
	README.txt	(this file)

Note: the /OLE and /Spreadsheet directories need to be copied to the php include_path directory. Sourced from http://pear.php.net/package/Spreadsheet_Excel_Writer/ by Mika Tuupola & Xavier Noguer.


Command line syntax is: php -f CSVtoXLS.php {InputFile}.csv {OutputFile}.xls

If CSVtoXLS.php is not in the current directory, provide the full path to it.

In order to get more formatting that just a data dump, three lines of META data are inserted into the top of the CSV data file. This allows the developer to define a Title, Column Headings and Column Formats in  Spreadsheet terms.

The first line of CSV data is expected to be the Title only (in Quotes).
The second line of CSV data is expected to be comma delimited Column Formats (in Quotes).
The third line of CSV data is expected to be comma delimited Column Headings (in Quotes).
Live data is expected to start on CSV file line 4. (Quotes on Text Fields or All Fields).

Dates are expected in either the ISO date format 'YYYY-MM-DD', or 'DD/MM/YYYY'.

Decimal numbers expected with just the decimal included, no other formatting. ("8.2","1995.23")

Line 2 Column formatting should be associated 1 to 1 with the Column Headings on Line 3.
Choices for Column Formatting are:
"TextLeft","TextRight","Date","Decimal0","Decimal1","Decimal2","Decimal3","Decimal4"

Install steps:
1)	Find your PHP include_path; ex: php -i|grep include_path
2)	Copy the /OLE and /Spreadsheet directories to the PHP include_path
3)	Copy the CSVtoXLS.php and example.csv files somewhere ($HOME is fine).

Test it
1)	Navigate (cd) to where the CSVtoXLS.php and example.csv files are.
2)	At a command line, do: php -f CSVtoXLS.php example.csv example.xls
3)	Open example.xls in a Spreadsheet App,, compare it to the example.csv text content.

***