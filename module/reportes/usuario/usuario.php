<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
	include '../clases/plantilla.php';
	require '../../../model/conexion.php';
	class UsuarioPDF{

    }
    $con = Conexion::getConection();
	$query = "SELECT id_doc,nombre1,apellido1,userName,email,tEstado,rol FROM usuario 
    INNER JOIN estado ON usuario.id_estado=estado.id_estado AND rol='Empleado'";
	$resultado = $con->query($query);
	
	$pdf = new PDF("L",'mm',"A4");
	$pdf->AliasNbPages();
	$pdf->AddPage();

    $pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,6,'NOMBRE',1,0,'C',1);
    $pdf->Cell(50,6,'APELLIDO',1,0,'C',1);
    $pdf->Cell(30,6,'USERNAME',1,0,'C',1);
    $pdf->Cell(60,6,'E-MAIL',1,0,'C',1);
	$pdf->Cell(30,6,'ESTADO',1,1,'C',1);

    $pdf->SetFont('Arial','',10.5);

	while($row = $resultado->fetch(PDO::FETCH_ASSOC))
	{
        $pdf->Cell(50,6,$row['nombre1'],1,0,'C');
        $pdf->Cell(50,6,$row['apellido1'],1,0,'C');
        $pdf->Cell(30,6,$row['userName'],1,0,'C');
        $pdf->Cell(60,6,$row['email'],1,0,'C');
		$pdf->Cell(30,6,$row['tEstado'],1,1,'C');
	}
	$pdf->Output();
    $pdf->Close();
}
?>