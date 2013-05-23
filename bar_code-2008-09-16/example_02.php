<?
//Requiring the class source...
require_once('boleto.class.php'); 

//Instancing a new object

/**
 * Prototype: [@object] = new cd_barra([string @code_number], {optional  int @flag_output})
 * 
 * @code_number = The number of the bar code
 * @flag_output = default = 1; if @flag_output = 1 -> output to file specified by [class]->file. else output to screen
 */
//The number to our code.
$code_number = '123456789321654951753852'

//Creates a new object with output to screen
$new_bar_code = new cd_barra($code_number,0); 

//Creates a new object with output to file
$new_bar_code2 = new cd_barra($code_number,1, 'new_bar_code_file.gif'); 
?> 