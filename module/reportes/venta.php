<title>Reporte Venta</title>
<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">

<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
	include 'plantilla.php';
	require '../../model/conexion.php';
	
    $con = Conexion::getConection();
	$query = "SELECT id_venta,cantidadVT,descripcionVT,venta.creadoEn,id_caja,nombre1,nombreCli1 FROM venta INNER JOIN usuario 
    ON usuario.id_doc=venta.id_doc INNER JOIN cliente ON cliente.id_cliDoc=venta.id_cliDoc";
	$resultado = $con->query($query);
	
	$pdf = new PDF("L",'mm',"A4");
	$pdf->AliasNbPages();
	$pdf->AddPage();

    $pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,6,'ID',1,0,'C',1);
    $pdf->Cell(20,6,'CAJA',1,0,'C',1);
    $pdf->Cell(30,6,'CANTIDAD',1,0,'C',1);
    $pdf->Cell(33,6,'DESCRIPCION',1,0,'C',1);
    $pdf->Cell(30,6,'CLIENTE',1,0,'C',1);
    $pdf->Cell(30,6,'USUARIO',1,0,'C',1);
	$pdf->Cell(40,6,'FECHA',1,1,'C',1);

    $pdf->SetFont('Arial','',10.5);

	while($row = $resultado->fetch(PDO::FETCH_ASSOC))
	{
        $pdf->Cell(20,6,$row['id_venta'],1,0,'C');
        $pdf->Cell(20,6,$row['id_caja'],1,0,'C');
        $pdf->Cell(30,6,$row['cantidadVT'],1,0,'C');
        $pdf->Cell(33,6,$row['descripcionVT'],1,0,'C');
        $pdf->Cell(30,6,$row['nombreCli1'],1,0,'C');
        $pdf->Cell(30,6,$row['nombre1'],1,0,'C');
		$pdf->Cell(40,6,$row['creadoEn'],1,1,'C');
	}
	$pdf->Output();
    $pdf->Close();
}
?>