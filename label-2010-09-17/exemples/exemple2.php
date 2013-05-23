<?php

define('CLASS_PATH','../../');

require_once(CLASS_PATH.'tcpdf/config/lang/eng.php');
require_once(CLASS_PATH.'tcpdf/tcpdf.php');
require_once(CLASS_PATH."label/class.label.php");
require_once(CLASS_PATH."label/exemples/class.labelExemple.php");


// Creation tableau de donn�es
$data = array();

$info = 'info';

// Cr�ation d'une ligne par �tiquette (nbre d'etiquettes)
for ($j=0; $j < 5; $j++){
	array_push($data,$info);
}    

// Creation de l'objet label
$pdf = new labelExemple( 1, $data , CLASS_PATH.'label/', '', true);

// Afficher les bordures
$pdf->border = true;


/*
echo "<pre>";
print_r($data);
echo "</pre>";
*/


$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Ludovic RIAUDEL');
$pdf->SetTitle("Planche d'�tiquettes par kiwi");
$pdf->SetSubject("Cr�ation d'�tiquettes avec CAB en publipostage");

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->SetHeaderMargin(0);
$pdf->SetFooterMargin(0);

$pdf->SetAutoPageBreak( true, 0);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  

/*************************/
// Cr�ation
$pdf->Addlabel();
/************************/
// Affichage
$pdf->Output("doc.pdf", "I");

?>