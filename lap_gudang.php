<?php
include 'koneksi.php';
require('assets/pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('logo/logo.png',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'KIOS MALANG',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 0038XXXXXXX',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL. KIOS MALANG',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.malang.com email : malangan@gmail.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Barang di Gudang",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'Nama', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jumlah Terjual', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Harga Penjualan', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;

$query= mysqli_query($conn, "SELECT * FROM gudang ORDER BY nom DESC");
while($lihat=mysqli_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(5, 0.8, $lihat['nama'], 1, 0,'C');
	$pdf->Cell(3, 0.8, $lihat['jumlah_terjual'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['harga_penjualan'],1, 1, 'C');
	$no++;
}

$pdf->Output("laporan_barang_gudang.pdf","I");

?>

