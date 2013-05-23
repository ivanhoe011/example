<?php

define('CLASS_PATH','../../');
require_once(CLASS_PATH.'tcpdf/config/lang/eng.php');
require_once(CLASS_PATH.'tcpdf/tcpdf.php');
require_once(CLASS_PATH."label/class.label.php");
require_once(CLASS_PATH."label/exemples/class.labelExemple.php");

// Déclaration du tableau $data
$data = array();
$label_id = "1";

// On crée notre tableau $info
$info= array (
	'typeCAB'=> 'C128B',
	'cab' => '012845888852'
);

// On ajoute ($info) à $data autant de fois que l'on veux l'étiquette
for ($i=0; $i < 3; $i++){
	array_push($data,$info);
}  

$pdf = new labelExemple( $label_id, $data , CLASS_PATH."label/", "labels.xml", true);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor("Ludovic RIAUDEL");
$pdf->SetTitle("Etiquettes par kiwi");
$pdf->SetSubject("Création d'étiquettes Code Barre");
$pdf->SetKeywords("TCPDF, PDF, example, test, guide, kiwi");

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// remove default margin
$pdf->SetHeaderMargin(0);
$pdf->SetFooterMargin(0);

$pdf->SetAutoPageBreak( true, 0);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); 

$pdf->Addlabel();

// Affichage du document dans le navigateur
$pdf->Output("doc.pdf", "I");
?>