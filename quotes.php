<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new FPDF();
$pdf->AddFont('Arial-Black','','Arial_B.php');
$pdf->AddFont('Arial-Narrow','','Arial_N.php');
$pdf->AddFont('Arial-Narrow-Special','','Arial_NS.php');
$pdf->AddFont('Arial-Special','','Arial_S.php');


$pdf->AddPage();
$pdf->SetFont('Arial-Black','',35);
$pdf->Write(10,'"Love is a terrifying thing. Its not safe. Because when you love someone, you have to face the fact that you could lose them. Sometimes, life throws an unexpected wrench in your way. It might be in jeopardy of losing your career, your freedom, or worst of all, you might even found out a loved one has died. These things make you realize how precious life is. How important every second we have on this earth is. And how important the people we care about are to us." -Harvey Specter');
$pdf->Ln(20);

$pdf->SetFont('Arial-Narrow','',35);
$pdf->Write(10,'"Power is dangerous. It corrupts the best and attracts the worst. Power is only given to those who are prepared to lower themselves to pick it up.." -Ragnar Lothbrok');
$pdf->Ln(20);

$pdf->SetFont('Arial-Narrow-Special','',35);
$pdf->Write(10,'"We cannot solve problems with the kind of thinking we employed when we came up with them." -Albert Einstein');
$pdf->Ln(20);

$pdf->SetFont('Arial-Special','',35);
$pdf->Write(10,'"When you give joy to other people, you get more joy in return. You should give a good thought to happiness that you can give out." -Eleanor Roosevelt');
$pdf->Ln(20);

$pdf->Output();
?>