<?php
session_start();
include '../clases/plantilla.php';
require '../../../model/conexion.php';

class SesionPDF
{
    private $con;
    public function __construct()
    {
        $this->con = Conexion::getConection();
    }
    public function RepobyDocUsu($id_doc)
    {
        $query = $this->con->prepare("SELECT initsession.dateSess,CONCAT(usuario.nombre1,' ',usuario.apellido1) AS Nombre,usuario.id_doc FROM initsession INNER JOIN usuario ON initsession.id_doc=usuario.id_doc WHERE initsession.id_doc=:DOC");
        $query->execute(array(':DOC' => $id_doc));
        $resultado = $query->fetchAll();

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();

        $pdf->SetFillColor(232, 232, 232);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60, 6, 'IDENTIFICACION', 1, 0, 'C', 1);
        $pdf->Cell(50, 6, 'USUARIO', 1, 0, 'C', 1);
        $pdf->Cell(60, 6, 'FECHA', 1, 1, 'C', 1);

        $pdf->SetFont('Arial', '', 10.5);

        foreach ($resultado as $row) {
            $pdf->Cell(60, 6, $row['id_doc'], 1, 0, 'C');
            $pdf->Cell(50, 6, $row['Nombre'], 1, 0, 'C');
            $pdf->Cell(60, 6, $row['dateSess'], 1, 1, 'C');
        }
        $pdf->Output();
        $pdf->Close();
    }
    public function RepobyDate($dateInit, $dateFin)
    {
        $query = $this->con->prepare("SELECT initsession.dateSess,CONCAT(usuario.nombre1,' ',usuario.apellido1) AS Nombre,usuario.* FROM initsession INNER JOIN usuario ON initsession.id_doc=usuario.id_doc WHERE initsession.dateSess>=:DAT AND  initsession.dateSess<=:DATE1");
        $query->execute(array(':DAT' => $dateInit, ':DATE1' => $dateFin));
        $resultado = $query->fetchAll();

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        if ($query->rowCount() == 0) {
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Text(68, 50, "No existe registros en esta fecha");
        } else {
            $pdf->SetFillColor(232, 232, 232);
            $pdf->SetLeftMargin(15);
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(60, 6, 'IDENTIFICACION', 1, 0, 'C', 1);
            $pdf->Cell(60, 6, 'USUARIO', 1, 0, 'C', 1);
            $pdf->Cell(60, 6, 'FECHA', 1, 1, 'C', 1);

            $pdf->SetFont('Arial', '', 10.5);

            foreach ($resultado as $row) {
                $pdf->Cell(60, 6, $row['id_doc'], 1, 0, 'C');
                $pdf->Cell(60, 6, $row['Nombre'], 1, 0, 'C');
                $pdf->Cell(60, 6, $row['dateSess'], 1, 1, 'C');
            }
        }
        $pdf->Output();
        $pdf->Close();
    }
    public function RepobyDaDoc($id_doc, $dateInit, $dateFin)
    {
        $query = $this->con->prepare("SELECT initsession.dateSess,CONCAT(usuario.nombre1,' ',usuario.apellido1) AS Nombre,usuario.* FROM initsession INNER JOIN usuario ON initsession.id_doc=usuario.id_doc WHERE initsession.dateSess>=:DAT AND  initsession.dateSess<=:DATE1 AND initsession.id_doc=:DOC");
        $query->execute(array(':DAT' => $dateInit, ':DATE1' => $dateFin, ':DOC' => $id_doc));
        $resultado = $query->fetchAll();

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        if ($query->rowCount() == 0) {
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Text(68, 50, "No existe registros de este usuario en esta fecha");
        } else {
            $pdf->SetFillColor(232, 232, 232);
            $pdf->SetLeftMargin(15);
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(60, 6, 'IDENTIFICACION', 1, 0, 'C', 1);
            $pdf->Cell(60, 6, 'USUARIO', 1, 0, 'C', 1);
            $pdf->Cell(60, 6, 'FECHA', 1, 1, 'C', 1);

            $pdf->SetFont('Arial', '', 10.5);

            foreach ($resultado as $row) {
                $pdf->Cell(60, 6, $row['id_doc'], 1, 0, 'C');
                $pdf->Cell(60, 6, $row['Nombre'], 1, 0, 'C');
                $pdf->Cell(60, 6, $row['dateSess'], 1, 1, 'C');
            }
        }

        $pdf->Output();
        $pdf->Close();
    }
}
$pd= new SesionPDF();
$fecha1= '2022-11-15 00:00:00';
$fecha2='2022-11-30 00:00:00';
$pd->RepobyDate($fecha1,$fecha2);
//$pd->RepobyDaDoc(123456789,$fecha1,$fecha2);
?>