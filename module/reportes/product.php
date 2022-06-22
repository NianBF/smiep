<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
	include 'plantilla.php';
	require '../../model/conexion.php';
	
    $con = Conexion::getConection();
	$query = "SELECT nombreProd, precio, cantidadDisp FROM producto";
	$resultado = $con->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'PRODUCTO',1,0,'C',1);
	$pdf->Cell(20,6,'PRECIO',1,0,'C',1);
	$pdf->Cell(70,6,'DISPONIBLE',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch(PDO::FETCH_ASSOC))
	{
		$pdf->Cell(70,6,$row['nombreProd'],1,0,'C');
		$pdf->Cell(20,6,$row['precio'],1,0,'C');
		$pdf->Cell(70,6,$row['cantidadDisp'],1,1,'C');
	}
	$pdf->Output();
    $pdf->Close();
}
?>