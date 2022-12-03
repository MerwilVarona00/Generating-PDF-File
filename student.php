<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Name: Merwil Garabiles, Varona!', 0, 1);
$pdf->Cell(40,10,'Program: CSS', 0, 1);
$pdf->Cell(40,10,'Email Adress: varona.merwil@auf.edu.ph', 0, 1);
$pdf->Cell(40,10,'Student Id: 19-2679-490', 0, 1);
$pdf->Output();
?>