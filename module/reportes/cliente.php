<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
	include 'plantilla.php';
	require '../../model/conexion.php';
	
    $con = Conexion::getConection();
	$query = "SELECT nombreCli1,apellidoCli1,telCli,emailCli FROM cliente";
	$resultado = $con->query($query);
	
	$pdf = new PDF("P",'mm',"A4");
	$pdf->AliasNbPages();
	$pdf->AddPage();

    $pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,6,'NOMBRE',1,0,'C',1);
    $pdf->Cell(50,6,'APELLIDO',1,0,'C',1);
    $pdf->Cell(30,6,'TEL',1,0,'C',1);
	$pdf->Cell(60,6,'E-MAIL',1,1,'C',1);

    $pdf->SetFont('Arial','',10.5);

	while($row = $resultado->fetch(PDO::FETCH_ASSOC))
	{
        $pdf->Cell(50,6,$row['nombreCli1'],1,0,'C');
        $pdf->Cell(50,6,$row['apellidoCli1'],1,0,'C');
        $pdf->Cell(30,6,$row['telCli'],1,0,'C');
		$pdf->Cell(60,6,$row['emailCli'],1,1,'C');
	}
	$pdf->Output();
    $pdf->Close();
}
?>