<?php
include('library/tcpdf.php');
//Utworzenie objektu TCPDF
$pdf=new TCPDF('P', 'mm', 'A4');
//Usunięcie nagłówka i stopki
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();
$pdf->Cell(200, 10, "Komórka", 1, 1, 'C');
$tresc_html="<table>
<tr>
<td>wartość1</td>
<td>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum </td>
</tr>
<tr>
<td>wartość2</td>
<td>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum </td>
</tr>
<tr>
<td>wartość3</td>
<td>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum </td>
</tr>
</table>
";
$pdf->WriteHTMLCell(0, 0, '', '', $tresc_html, 1, 0);
$pdf->Output();