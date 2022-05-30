<?php 

require_once('../../model/conexion1.php');


$db=Db::conectar();

$fechaI = $_POST["fecha-i"];
$fechaAct = $_POST["fechaAct"];

$sql = "SELECT nombreProd,precio,cantidadDisp FROM producto where creadoEn >= '$fechaI' and creadoEn <= '$fechaAct'"; 
//$resultset = mysqli_query($db, $sql) or die("database error:".  mysqli_error($db)); 
require('../../fpdf/fpdf.php'); 
$pdf = new FPDF(); 
$pdf->AddPage(); 
$pdf->SetFont('times','B',12); 
$pdf->Image("../../img/marca_agua.png",null,50,200);
while ($field_info = mysqli_fetch_field($resultset)) { 
$pdf->Cell(47,12,$field_info->name,1,0,'C'); 
 } 
while($rows = mysqli_fetch_assoc($resultset)) { 
$pdf->SetFont('times','',12); 
$pdf->Ln(); 
foreach($rows as $column) { 

$pdf->Cell(47,12,$column,1,null,); 
 } 
 } 
$pdf->Output(); 
 ?>