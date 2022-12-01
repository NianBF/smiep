<?php
ob_end_clean();
session_start();
if (
	$_SESSION['email'] == null or $_SESSION["userName"] == null or
	$_SESSION["pass"] == null
) {
	header("location:../../index.php");
} else {
	include '../clases/plantilla.php';
	require '../../../model/conexion.php';
	class ClientePDF
	{
		private $con;
		public function __construct()
		{
			$this->con = Conexion::getConection();

		}
		public function getCliente()
		{
			$query = $this->con->prepare("SELECT nombreCli1,apellidoCli1,telCli,emailCli FROM cliente WHERE id_cliDoc != 000000 and id_cliDoc != 1234567890");
			$query->execute();
			$resultado = $query->fetchAll();

			$pdf = new PDF("P", 'mm', "A4");
			$pdf->AliasNbPages();
			$pdf->AddPage();
			if ($query->rowCount() == 0) {
				$pdf->SetFont('Arial', 'B', 12);
				$pdf->Text(68,50,"No existen Clientes");
			} else {
				$pdf->SetFillColor(232, 232, 232);
				$pdf->SetFont('Arial', 'B', 12);
				$pdf->Cell(70, 6, 'NOMBRE', 1, 0, 'C', 1);
				$pdf->Cell(30, 6, 'TEL', 1, 0, 'C', 1);
				$pdf->Cell(60, 6, 'E-MAIL', 1, 1, 'C', 1);
				$pdf->SetFont('Arial', '', 10.5);

				foreach ($resultado as $row) {
						$pdf->Cell(70, 6, $row['nombreCli1']." ".$row['apellidoCli1'], 1, 0, 'C');
						$pdf->Cell(30, 6, $row['telCli'], 1, 0, 'C');
						$pdf->Cell(60, 6, $row['emailCli'], 1, 1, 'C');
				}
			}
			$pdf->Output();
			$pdf->Close();
		}
	}
	$pd= new ClientePDF();
	$pd->getCliente();
}
?>