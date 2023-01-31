<?php
require('../fpdf/fpdf.php');
require('config.php');

date_default_timezone_set("America/Bogota");


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('../img/logo_pdf.png',60,10,-110);
$pdf->Ln(30);
$pdf->Cell(90,20,'Fecha: '.date('d.m.Y.H.i.s').'',0);
$pdf->Ln(10);
$pdf->Cell(100,20,utf8_decode('REPORTES PDF'));
$pdf->Ln(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,20,'CODIGO');
$pdf->Cell(25,20,'NOMBRE');
$pdf->Cell(30,20,'MARCA');
$pdf->Cell(35,20,'PRECIO');
$pdf->Cell(40,20,'UNIDADES');

$pdf->Ln(10);

$pdf->SetFont('Arial','',8);


$query_select = 'SELECT * FROM Productos';
$result = mysqli_query($conn,$query_select);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($reg = mysqli_fetch_assoc($result)) {
    	

$pdf->Cell(20,20, utg8_decode($reg['val_cod'], 0));

$pdf->Cell(25,20, utg8_decode($reg['val_nom'], 0));

$pdf->Cell(30,20, utf8_decode($reg['val_marca']), 0);

$pdf->Cell(35,20, utf8_decode($reg['val_precio']), 0);

$pdf->Cell(40,20, utf8_decode($reg['uni_pro']), 0);

$pdf->Ln(10);

}
}

$pdf->Output();
mysqli_close($conn);
?>
