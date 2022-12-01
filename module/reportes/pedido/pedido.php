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
	class PedidoPDF
	{
		private $con;
		public function __construct()
		{
			$this->con = Conexion::getConection();

		}
        public function Pedido()
		{
			$query = $this->con->prepare("SELECT *,CONCAT(nombProv1,' ',apellidoProv1,' / ',empresa)AS proveedor,CONCAT(nombre1,' ',apellido1)AS usuario FROM pedido INNER JOIN usuario ON pedido.id_docUsu=usuario.id_doc INNER JOIN proveedor ON pedido.id_docProv=proveedor.id_docProv");
			$query->execute();
			$resultado = $query->fetchAll();

			$pdf = new PDF("L", 'mm', "A4");
			$pdf->AliasNbPages();
			$pdf->AddPage();
			if ($query->rowCount() == 0) {
				$pdf->SetFont('Arial', 'B', 12);
				$pdf->Text(68,50,"No existen pedidos");
			} else {
				$pdf->SetLeftMargin(30);
				$pdf->SetFillColor(232, 232, 232);
				$pdf->SetFont('Arial', 'B', 12.8);
				$pdf->Cell(50, 6, 'PEDIDO #', 1, 0, 'C', 1);
				$pdf->Cell(40, 6, 'USUARIO', 1, 0, 'C', 1);
				$pdf->Cell(60, 6, 'PROVEEDOR', 1, 0, 'C', 1);
				$pdf->Cell(60, 6, 'FECHA DE INGRESO', 1, 0, 'C', 1);
				$pdf->Cell(30, 6, 'VALOR', 1, 1, 'C', 1);
				$pdf->SetFont('Arial', '', 11);

				foreach ($resultado as $row) {
						$pdf->Cell(50, 6, $row['id_pedido'], 1, 0, 'C');
						$pdf->Cell(40, 6, $row['usuario'], 1, 0, 'C');
						$pdf->Cell(60, 6, $row['proveedor'], 1, 0, 'C');
						$pdf->Cell(60, 6, $row['createIn'], 1, 0, 'C');
						$pdf->Cell(30, 6, '$'.$row['totalPrice'], 1, 1, 'C');
				}
			}
			$pdf->Output();
			$pdf->Close();
		}
		public function PedidowProd($id_pedido)
		{
			$query = $this->con->prepare("SELECT *,CONCAT(nombre1,' ',apellido1,' / ',id_doc) AS usuario FROM pedido INNER JOIN tzProd ON pedido.id_pedido= tzProd.id_pedido INNER JOIN producto ON producto.id_prod=tzprod.id_prod INNER JOIN usuario ON pedido.id_docUsu=usuario.id_doc INNER JOIN proveedor ON pedido.id_docProv=proveedor.id_docProv WHERE pedido.id_pedido= :PED");
			$query->execute(array(':PED'=>$id_pedido));
			$resultado = $query->fetchAll();

			$pdf = new PDF("P", 'mm', "A4");
			$pdf->AliasNbPages();
			$pdf->AddPage();
			if ($query->rowCount() == 0) {
				$pdf->SetFont('Arial', 'B', 12);
				$pdf->Text(68,50,"No existe este numero de pedido");
			} else {
				foreach($resultado as $user){

				}
				$pdf->SetLeftMargin(15);
				$pdf->SetFillColor(232, 232, 232);
				$pdf->SetLeftMargin(15);
				$pdf->SetFont('Arial', 'B', 12.8);
				$pdf->Cell(70, 6, 'FECHA DE LEGADA', 1, 0, 'L', 1);
				$pdf->SetFont('Arial', '', 11);
				$pdf->Cell(110, 6, $user['createIn'], 1, 1, 'C');
				$pdf->SetFont('Arial', 'B', 12.8);
				$pdf->Cell(70, 6, 'INGRESADO POR', 1, 0, 'L', 1);
				$pdf->SetFont('Arial', '', 11);
				$pdf->Cell(110, 6, $user['usuario'], 1, 1, 'C');
				$pdf->SetFont('Arial', 'B', 12.8);
				$pdf->Cell(70, 6, 'FECHA DE INGRESO', 1, 0, 'L', 1);
				$pdf->SetFont('Arial', '', 11);
				$pdf->Cell(110, 6, date('Y-m-d',strtotime($user['modifyIn'])), 1, 1, 'C');
				$pdf->SetFont('Arial', 'B', 12.8);
				$pdf->Cell(70, 6, 'PROVEEDOR', 1, 0, 'L', 1);
				$pdf->SetFont('Arial', '', 11);
				$pdf->Cell(110, 6, $user['empresa'], 1, 1, 'C');
				$pdf->SetFont('Arial', 'B', 12.5);
				$pdf->SetLeftMargin(15);
				$pdf->Ln(15);
				$pdf->Cell(50, 6, 'PEDIDO #', 1, 0, 'C', 1);
				$pdf->Cell(50, 6, 'PRODUCTO', 1, 0, 'C', 1);
				$pdf->Cell(50, 6, 'PRECIO DE LEGADA', 1, 0, 'C', 1);
				$pdf->Cell(30, 6, 'CANTIDAD', 1, 1, 'C', 1);
				$pdf->SetFont('Arial', '', 11);

				foreach ($resultado as $row) {
						$pdf->Cell(50, 6, $row['id_pedido'], 1, 0, 'C');
						$pdf->Cell(50, 6, $row['nombreProd'], 1, 0, 'C');
						$pdf->Cell(50, 6, '$'.$row['priceArrive'], 1, 0, 'C');
						$pdf->Cell(30, 6, $row['cantidadNew'], 1, 1, 'C');
				}				
			}
			$pdf->Output();
			$pdf->Close();
		}
	}
    $pd=new PedidoPDF();
    $pd->Pedido();
    //$pd->PedidowProd('NESTLE2');
    //$pd->PedidowProd('NESTLE1');
}
?>