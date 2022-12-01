<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
	include '../clases/plantilla.php';
	require '../../../model/conexion.php';
	class ProveedorPDF{
		private $con;

		public function __construct(){
			$this->con = Conexion::getConection();
		}

		public function Prov(){
			$query = $this->con->prepare("SELECT * FROM proveedor");
			$query->execute();
			$resultado = $query->fetchAll();

			
			$pdf = new PDF("L",'mm',"A4");
			$pdf->AliasNbPages();
			$pdf->AddPage();
		
			$pdf->SetFillColor(232,232,232);
			$pdf->SetLeftMargin(15);
			$pdf->SetFont('Arial','B',12.8);
			$pdf->Cell(60,7,'NOMBRE',1,0,'C',1);
			$pdf->Cell(40,7,'EMPRESA',1,0,'C',1);
			$pdf->Cell(40,7,'TEL',1,0,'C',1);
			$pdf->Cell(60,7,'E-MAIL',1,0,'C',1);
			$pdf->Cell(70,7,'FECHA DE INCORPORACION',1,1,'C',1);
			$pdf->SetFont('Arial','',11);
		
			foreach($resultado as $row)
			{
				$pdf->Cell(60,7,$row['nombProv1']." ".$row['apellidoProv1'],1,0,'C');
				$pdf->Cell(40,7,$row['empresa'],1,0,'C');
				$pdf->Cell(40,7,$row['numTel1'],1,0,'C');
				$pdf->Cell(60,7,$row['email1'],1,0,'C');
				$pdf->Cell(70,7,$row['creadoEn'],1,1,'C');
			}
			$pdf->Output();
			$pdf->Close();
		}

	}
	

}
?>