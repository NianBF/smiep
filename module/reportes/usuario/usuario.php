<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
	include '../clases/plantilla.php';
	require '../../../model/conexion.php';
	class UsuarioPDF{

		private $con;
		public function __construct()
		{
			$this->con = Conexion::getConection();

		}

        public function getUsuario(){
            $query=$this->con->prepare("SELECT * FROM usuario INNER JOIN estado ON usuario.id_estado=estado.id_estado AND rol='Empleado'");;
            $query->execute();
            $resultado = $query->fetchAll();
            
            $pdf = new PDF("L",'mm',"A4");
            $pdf->AliasNbPages();
            $pdf->AddPage();
        
            $pdf->SetFillColor(232,232,232);
            $pdf->SetFont('Arial','B',12.8);
            $pdf->Cell(40,6,'DOCUMENTO',1,0,'C',1);
            $pdf->Cell(60,6,'USUARIO',1,0,'C',1);
            $pdf->Cell(40,6,'USERNAME',1,0,'C',1);
            $pdf->Cell(68,6,'E-MAIL',1,0,'C',1);
            $pdf->Cell(30,6,'ESTADO',1,0,'C',1);
            $pdf->Cell(40,6,'VINCULACION',1,1,'C',1);
            $pdf->SetFont('Arial','',11);
        
            foreach($resultado as $row)
            {
                $pdf->Cell(40,6,$row['id_doc'],1,0,'C');
                $pdf->Cell(60,6,$row['nombre1']." ".$row['apellido1'],1,0,'C');
                $pdf->Cell(40,6,$row['userName'],1,0,'C');
                $pdf->Cell(68,6,$row['email'],1,0,'C');
                $pdf->Cell(30,6,$row['tEstado'],1,0,'C');
                $pdf->Cell(40,6,$row['creadoEn'],1,1,'C');                
            }
            $pdf->Output();
            $pdf->Close();
        }
    }
    $pd= new UsuarioPDF();
    $pd->getUsuario();
}
?>