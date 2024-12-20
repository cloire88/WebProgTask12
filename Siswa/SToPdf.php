<?php

require_once('../fpdf/fpdf.php');
include("../config.php");


$pdf = new FPDF('l','mm','A5');
$pdf->AddPage();
$pdf->SetFont('times','B',16);
$pdf->Cell(190,7,'SMA GARUDA',0,1,'C');
$pdf->SetFont('times','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA SMA GARUDA',0,1,'C');
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('times','B',10);
$pdf->Cell(10,20,'NO',1,0, 'C');  
$pdf->Cell(30,20,'FOTO',1,0, 'C');  
$pdf->Cell(40,20,'NAMA SISWA',1,0, 'C');  
$pdf->Cell(30,20,'JENIS KELAMIN',1,0, 'C');  
$pdf->Cell(50,20,'ALAMAT',1,0, 'C');  
$pdf->Cell(30,20,'JURUSAN',1,0, 'C');  

$pdf->SetFont('times','',10);

$query = mysqli_query($dbPPDB_SMA_Garuda, "SELECT * FROM calon_siswa ORDER BY id ASC");

$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $pdf->Cell(10, 20, $no++, 1, 0, 'C');

    $photoPath = 'image/'.$row['foto'];
    if (file_exists($photoPath)) {
        $pdf->Image($photoPath, $pdf->GetX(), $pdf->GetY(), 15, 20); 
    } else {
        $pdf->Cell(30,20,'No Image',1,0, 'C');  
    }

    $pdf->Cell(40,20,$row['nama'],1,0);  
    $pdf->Cell(30,20,$row['jenis_kelamin'],1,0, 'C'); 
    $pdf->Cell(50,20,$row['alamat'],1,0); 
    $pdf->Cell(30,20,$row['jurusan'],1,0);  
 

    
    $pdf->Ln();
}

$pdf->Output();
?>