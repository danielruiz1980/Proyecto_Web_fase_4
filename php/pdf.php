<?php
require('../fpdf/fpdf.php');
require('config.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('../img/logo_pdf.png',10,9,50);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->SetFillColor(207, 164, 155);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(2);
    $this->SetFont('Arial','B',12);
    $this->SetTextColor(255);
    
    $this->Cell(80,12,'INVENTARIO DE BASE DE DATOS',1,0,'C',true);
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
date_default_timezone_set("America/Bogota");
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(90,20,'Fecha: '.date('d.m.Y.H.i.s').'',0);
$pdf->Ln(10);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,5,'CODIGO',1);
$pdf->Cell(45,5,'NOMBRE',1);
$pdf->Cell(45,5,'MARCA',1);
$pdf->Cell(35,5,'PRECIO',1);
$pdf->Cell(25,5,'UNIDADES',1);
$pdf->Ln(5);
$pdf->SetFont('Arial','',8);
$query_select = 'SELECT * FROM productos';
$result = mysqli_query($conn,$query_select);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($reg = mysqli_fetch_assoc($result)) {
        $pdf->Cell(20,5, $reg['val_cod'], 1);

        $pdf->Cell(45,5, utf8_decode($reg['val_nom']), 1);
        
        $pdf->Cell(45,5, utf8_decode($reg['val_marca']), 1);
        
        $pdf->Cell(35,5, utf8_decode($reg['val_precio']), 1);

        $pdf->Cell(25,5, utf8_decode($reg['uni_pro']), 1);
        
        $pdf->Ln(5);
        
        }
        }
$pdf->Output();
?>
