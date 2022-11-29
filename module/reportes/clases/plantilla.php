<?php
	require '../fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			if($this->DefOrientation=='L'){
				$this->Image('../../../img/favicon.png',50, 5, 30,30 );
				$this->SetFont('Arial','B',25);
				/* $this->Cell(30); */
				$this->Cell(300,10, 'S.M.I.E.P',0,1,'C',);
				$this->SetFont('Arial','B',12);
				$this->Cell(300,10, 'Software de Manejo de Inventarios para Empresas Pequenas',0,1,'C',);
				$this->Cell(300,5, 'REPORTES',0,0,'C',);
				$this->Ln(15);
			}else{
			$this->Image('../../../img/favicon.png',5, 5, 30,30 );
			$this->SetFont('Arial','B',25);
			$this->Cell(30);
			$this->Cell(143,10, 'S.M.I.E.P',0,1,'C',);
			$this->SetFont('Arial','B',12);
			$this->Cell(200,10, 'Software de Manejo de Inventarios para Empresas Pequenas',0,1,'C',);
			$this->Cell(200,5, 'REPORTES',0,0,'C',);
			$this->Ln(15);
			}
		}
		function User(){
			date_default_timezone_set('America/Bogota');
			$this->Cell(65,10,date("Y-m-d H:i:s"),0,0,'C');
			$this->Cell(65,10,"Usuario: ".$_SESSION["userName"],0,0,'C');
		}
		function Footer()
		{
			if($this->DefOrientation=='L'){
			$this->SetLeftMargin(50);
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->User();
			$this->Cell(65,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
			}else{
				$this->SetY(-15);
				$this->SetFont('Arial','I', 8);
				$this->User();
				$this->Cell(65,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
			}
			
		}		
	}
?>