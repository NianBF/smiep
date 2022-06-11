<?php
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../../img/favicon.png',5, 5, 30 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Reporte De Estados',0,0,'C');
			$this->Ln(20);
		}
		function User(){
			session_start();
			date_default_timezone_set('America/Bogota');
			$this->Cell(65,10,date("Y-m-d H:i:s"),0,0,'C');
			$this->Cell(65,10,"Usuario: ".$_SESSION["userName"],0,0,'C');
		}
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->User();
			$this->Cell(65,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
			
		}		
	}
?>