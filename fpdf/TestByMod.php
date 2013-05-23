<?php
require ('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Text(10, 10, 'Hello World');
$pdf->Output();

?>