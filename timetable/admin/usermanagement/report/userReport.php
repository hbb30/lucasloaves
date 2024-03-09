<?php
require("../fpdf185/fpdf.php");
class PDF extends FPDF
{

// Colored table
function FancyTable($header, $data)
{
    
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Header
    $w = array(20, 60, 60, 45);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row['userid'],'LR',0,'C',$fill);
        $this->Cell($w[1],6,$row['username'],'LR',0,'C',$fill);
        $this->Cell($w[2],6,$row['name'],'LR',0,'C',$fill);
        $this->Cell($w[3],6,$row['userlevel'],'LR',0,'L',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
// Column headings
$header = array('#', 'Username', 'Name', 'User Level');
require("../../connection.php");
$sql = "SELECT * FROM tbl_user";
$data = $conn->query($sql);
// Data loading
// $data = $pdf->LoadData('countries.txt');
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->Output();
?>
?>