<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
	include 'plantilla.php';
	require '../../model/conexion.php';
	
    $con = Conexion::getConection();
	$query = "SELECT * FROM categoria";
	$resultado = $con->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

    $pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(50,6,'ID CATEGORIA',1,0,'C',1);
	$pdf->Cell(60,6,'CATEGORIA',1,1,'C',1);

    $pdf->SetFont('Arial','',10.5);

	while($row = $resultado->fetch(PDO::FETCH_ASSOC))
	{
		$pdf->Cell(50,6,$row['id_cat'],1,0,'C');
		$pdf->Cell(60,6,$row['nCategoria'],1,1,'C');
	}
	$pdf->Output();
    $pdf->Close();
}
?>