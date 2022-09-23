<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
	include 'plantilla.php';
	require '../../model/conexion.php';
	
    $con = Conexion::getConection();
	$query = "SELECT id_orden, CONCAT(cliente.nombreCli1,cliente.apellidoCli1) AS Cliente,total, CONCAT(usuario.nombre1, usuario.apellido1) AS Usuario,orden.creadoEn FROM usuario,orden,cliente WHERE orden.id_doc=usuario.id_doc AND orden.id_cliDoc=cliente.id_cliDoc";
	$resultado = $con->query($query);
	
	$pdf = new PDF("L",'mm',"A4");
	$pdf->AliasNbPages();
	$pdf->AddPage();

    $pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,6,'ID',1,0,'C',1);
    $pdf->Cell(30,6,'CLIENTE',1,0,'C',1);
    $pdf->Cell(30,6,'Total',1,0,'C',1);
    $pdf->Cell(30,6,'USUARIO',1,0,'C',1);
	$pdf->Cell(40,6,'FECHA',1,1,'C',1);

    $pdf->SetFont('Arial','',10.5);

	while($row = $resultado->fetch(PDO::FETCH_ASSOC))
	{
        $pdf->Cell(20,6,$row['id_orden'],1,0,'C');
        $pdf->Cell(20,6,$row['Cliente'],1,0,'C');
        $pdf->Cell(30,6,$row['total'],1,0,'C');
        $pdf->Cell(33,6,$row['Usuario'],1,0,'C');
		$pdf->Cell(40,6,$row['creadoEn'],1,1,'C');
	}
	$pdf->Output();
    $pdf->Close();
}
?>