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
	class VentaPDF
	{

		private $con;
		public function __construct()
		{
			$this->con = Conexion::getConection();

		}
		public function getVenta()
		{
			$query = $this->con->prepare("SELECT * FROM venta INNER JOIN cliente ON venta.id_cliDoc=cliente.id_cliDoc INNER JOIN usuario ON venta.id_doc=usuario.id_doc ORDER BY id_venta ASC");
			$query->execute();
			$resultado = $query->fetchAll();

			$pdf = new PDF("P", 'mm', "A4");
			$pdf->AliasNbPages();
			$pdf->AddPage();

			$pdf->SetFillColor(232, 232, 232);
			$pdf->SetFont('Arial', 'B', 12);
			$pdf->Cell(25, 6, 'ID', 1, 0, 'C', 1);
			$pdf->Cell(50, 6, 'CLIENTE', 1, 0, 'C', 1);
			$pdf->Cell(30, 6, 'TOTAL', 1, 0, 'C', 1);
			$pdf->Cell(50, 6, 'USUARIO', 1, 0, 'C', 1);
			$pdf->Cell(30, 6, 'FECHA', 1, 1, 'C', 1);

			$pdf->SetFont('Arial', '', 10.5);

			foreach ($resultado as $row) {
				$pdf->Cell(25, 6, $row['id_venta'], 1, 0, 'C');
				$pdf->Cell(50, 6, $row['nombreCli1'] . " " . $row['apellidoCli1'], 1, 0, 'C');
				$pdf->Cell(30, 6, $row['total'], 1, 0, 'C');
				$pdf->Cell(50, 6, $row['nombre1'] . " " . $row['apellido1'], 1, 0, 'C');
				$pdf->Cell(30, 6, date('Y-m-d', strtotime($row['modificadoEn'])), 1, 1, 'C');
			}
			$pdf->Output();
			$pdf->Close();
		}
		public function VentabyId($id_venta)
		{
			$query = $this->con->prepare("SELECT * FROM tzProd INNER JOIN venta ON tzProd.id_venta=venta.id_venta INNER JOIN usuario ON tzProd.id_docUsu=usuario.id_doc INNER JOIN producto ON tzProd.id_prod=producto.id_prod WHERE venta.id_venta=:ID AND tzProd.id_venta=:ID");
			$query->execute(array(':ID' => $id_venta));
			$resultado = $query->fetchAll();

			$pdf = new PDF("P", 'mm', "A4");
			$pdf->AliasNbPages();
			$pdf->AddPage();

			$pdf->SetFillColor(232, 232, 232);
			$pdf->SetFont('Arial', 'B', 12.8);
			$pdf->Cell(25, 6, 'ID', 1, 0, 'C', 1);
			$pdf->Cell(70, 6, 'PRODUCTO', 1, 0, 'C', 1);
			$pdf->Cell(30, 6, 'VALOR /U', 1, 0, 'C', 1);
			$pdf->Cell(60, 6, 'CANTIDAD VENDIDA', 1, 1, 'C', 1);

			$pdf->SetFont('Arial', '', 11);

			foreach ($resultado as $row) {
				$pdf->Cell(25, 6, $row['id_venta'], 1, 0, 'C');
				$pdf->Cell(70, 6, $row['nombreProd'], 1, 0, 'C');
				$pdf->Cell(30, 6, $row['precio'], 1, 0, 'C');
				$pdf->Cell(60, 6, $row['cantidadNew'], 1, 1, 'C');
			}
			$pdf->Ln(15);
			$pdf->SetLeftMargin(30);
			$pdf->SetFont('Arial', 'B', 12.8);
			$pdf->Cell(70, 6, 'USUARIO', 1, 0, 'C', 1);
			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(70, 6, $row['nombre1'] . " " . $row['apellido1'] . " / " . $row['id_doc'], 1, 1, 'C');
			$pdf->SetFont('Arial', 'B', 12.8);
			$pdf->Cell(70, 6, 'TOTAL', 1, 0, 'C', 1);
			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(70, 6, "$" . $row['total'], 1, 1, 'C');
			$pdf->SetLeftMargin(12);
			$pdf->Output();
			$pdf->Close();
		}
		public function VentabyDate($fechaI, $fechaF)
		{
			$query = $this->con->prepare("SELECT * FROM venta INNER JOIN cliente ON venta.id_cliDoc=cliente.id_cliDoc INNER JOIN usuario ON venta.id_doc=usuario.id_doc WHERE venta.modificadoEn>=:FECHAI AND venta.modificadoEn<=:FECHAF ORDER BY venta.modificadoEn ASC");
			$query->execute(array(':FECHAI' => $fechaI, ':FECHAF' => $fechaF));
			$resultado = $query->fetchAll();

			$pdf = new PDF("P", 'mm', "A4");
			$pdf->AliasNbPages();
			$pdf->AddPage();

			$pdf->SetFillColor(232, 232, 232);
			$pdf->SetFont('Arial', 'B', 12);
			$pdf->Cell(25, 6, 'ID', 1, 0, 'C', 1);
			$pdf->Cell(50, 6, 'CLIENTE', 1, 0, 'C', 1);
			$pdf->Cell(30, 6, 'TOTAL', 1, 0, 'C', 1);
			$pdf->Cell(50, 6, 'USUARIO', 1, 0, 'C', 1);
			$pdf->Cell(30, 6, 'FECHA', 1, 1, 'C', 1);

			$pdf->SetFont('Arial', '', 11);

			foreach ($resultado as $row) {
				$pdf->Cell(25, 6, $row['id_venta'], 1, 0, 'C');
				$pdf->Cell(50, 6, $row['nombreCli1'] . " " . $row['apellidoCli1'], 1, 0, 'C');
				$pdf->Cell(30, 6, $row['total'], 1, 0, 'C');
				$pdf->Cell(50, 6, $row['nombre1'] . " " . $row['apellido1'], 1, 0, 'C');
				$pdf->Cell(30, 6, date('Y-m-d', strtotime($row['modificadoEn'])), 1, 1, 'C');
			}
			$pdf->Output();
			$pdf->Close();
		}
	}
	$pd = new VentaPDF();
	$pd->getVenta();
	//$fecha1 = '2022-11-14 00:00:00';
	//$fecha2 = '2022-12-01 00:00:00';
	//$pd->VentabyId(1083);
	//$pd->VentabyDate($fecha1, $fecha2);
}
?>