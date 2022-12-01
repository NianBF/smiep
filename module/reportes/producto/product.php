<?php
session_start();
if (
	$_SESSION['email'] == null or $_SESSION["userName"] == null or
	$_SESSION["pass"] == null
) {
	header("location:../../index.php");
} else {
	include '../clases/plantilla.php';
	require '../../../model/conexion.php';
	class ProductoPDF
	{
		private $con;
		public function __construct(){
			$this->con =Conexion::getConection();

		}
		public function ProdComplete()
		{
			$query=$this->con->prepare("SELECT nombreProd, precio, cantidadDisp FROM producto");
			$query->execute();
			$resultado = $query->fetchAll();

			$pdf = new PDF();
			$pdf->AliasNbPages();
			$pdf->AddPage();
			$pdf->SetLeftMargin(30);
			$pdf->SetFillColor(232, 232, 232);
			$pdf->SetFont('Arial', 'B', 12);
			$pdf->Cell(90, 6, 'PRODUCTO', 1, 0, 'C', 1);
			$pdf->Cell(35, 6, 'DISPONIBLE', 1, 1, 'C', 1);
			$pdf->Cell(20, 6, 'PRECIO', 1, 0, 'C', 1);
			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 10);

			foreach ($resultado as $row) {

				$pdf->Cell(90, 6, $row['nombreProd'], 1, 0, 'C');
				$pdf->Cell(35, 6, $row['cantidadDisp'], 1, 1, 'C');
				$pdf->Cell(20, 6, $row['precio'], 1, 0, 'C');
				$pdf->Ln(1);

			}
			$pdf->Output();
			$pdf->Close();
		}
		public function ProdbyCat($id_cat){
			$query=$this->con->prepare("SELECT nombreProd, precio, cantidadDisp, categoria.nCategoria FROM producto INNER JOIN categoria ON producto.id_cat=categoria.id_cat WHERE producto.id_cat=:CAT");
			$query->execute(array(':CAT'=>$id_cat));
			$resultado = $query->fetchAll();
			$pdf = new PDF();
			$pdf->AliasNbPages();
			$pdf->AddPage();
			if($query->rowCount()==0){
				$pdf->SetFont('Arial', 'B', 12);
				$pdf->Text(68,50,"No existen productos en esta categoria");
			}else{
			$pdf->SetLeftMargin(15);
			$pdf->SetFillColor(232, 232, 232);
			$pdf->SetFont('Arial', 'B', 12);
			$pdf->Cell(90, 6, 'PRODUCTO', 1, 0, 'C', 1);
			$pdf->Cell(20, 6, 'PRECIO', 1, 0, 'C', 1);
			$pdf->Cell(35, 6, 'DISPONIBLE', 1, 0, 'C', 1);
			$pdf->Cell(35, 6, 'CATEGORIA', 1, 1, 'C', 1);
			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 10);
			foreach ($resultado as $row) {

				$pdf->Cell(90, 6, $row['nombreProd'], 1, 0, 'C');
				$pdf->Cell(20, 6, $row['precio'], 1, 0, 'C');
				$pdf->Cell(35, 6, $row['cantidadDisp'], 1, 0, 'C');
				$pdf->Cell(35, 6, $row['nCategoria'], 1, 1, 'C');
				$pdf->Ln(1);

			}
		}
			$pdf->Output();
			$pdf->Close();
		}
	}
	$pd= new ProductoPDF();
	$pd->ProdComplete();
}
?>