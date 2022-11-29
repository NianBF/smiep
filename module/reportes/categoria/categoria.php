<?php
session_start();
	include '../clases/plantilla.php';
	require '../../../model/conexion.php';
	
	class CategoriaPDF{
		private $con;
		public function __construct(){
			$this->con = Conexion::getConection();

		}
		public function getCategoria(){
			$query = $this->con->prepare("SELECT * FROM categoria");
			$query->execute();
			$resultado= $query->fetchAll();
			
			$pdf = new PDF();
			$pdf->AliasNbPages();
			$pdf->AddPage();
			$pdf->SetLeftMargin(50);
		
			$pdf->SetFillColor(232,232,232);
			$pdf->SetFont('Arial','B',12.8);
			$pdf->Cell(50,6,'ID CATEGORIA',1,0,'C',1);
			$pdf->Cell(60,6,'CATEGORIA',1,1,'C',1);
		
			$pdf->SetFont('Arial','',11);
		
			foreach($resultado as $row)
			{
				$pdf->Cell(50,6,$row['id_cat'],1,0,'C');
				$pdf->Cell(60,6,$row['nCategoria'],1,1,'C');
			}
			$pdf->SetLeftMargin(10);
			$pdf->Output();
			$pdf->Close();
		}
	}
	$pd= new CategoriaPDF();
	$pd->getCategoria();

?>