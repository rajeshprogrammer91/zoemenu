<?php
//include connection file 
include_once("connection.php");
include_once("fpdf/fpdf.php");

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image("logo.jpg",12,12,16,16);
    $this->SetFont('Arial','B',20);
    // Move to the right
    //$this->Cell(10);
    // Title
    $this->Cell(190,20,'OSS Certification Services Private Limited',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$db = new dbObj();

$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();

$pdf->SetFont('Arial','I',12);

    $pdf->MultiCell(190,5,'Registered Office: 
Plot No 4 3rd Floor Block 1 A Sector - 23 State Bank of India Building Dwarka New Delhi - 110075 
Phone # + 91-11-28054243 Toll Free No. # 1800-123-0579 Website- www.osscertification.com',1);
    $pdf->SetFont('Arial','I',23);
        $pdf->setFillColor(219,229,241); 
        $pdf->Cell(190,10,'Invoice',1,0,'C',TRUE);
    $pdf->SetFont('Arial','I',10);
    $pdf->Ln(10);
        $pdf->Cell(80,10,'GSTIN',1,0,'L');$pdf->Cell(110,10,'07AABCO1437B1Z0',1,0,'L');
    $pdf->Ln(10);
        $pdf->Cell(80,10,'PAN No.',1,0,'L');$pdf->Cell(110,10,'AABCO1437B',1,0,'L');
    $pdf->Ln(10);
        $pdf->Cell(80,10,'Invoice No:',1,0,'L');$pdf->Cell(110,10,'OSS/INV/1868',1,0,'C');
    $pdf->Ln(10);
        $pdf->Cell(80,10,'Invoice Date:',1,0,'L');$pdf->Cell(110,10,'16-02-2018',1,0,'C');
    $pdf->Ln(10);
        $pdf->Cell(80,10,'Reverse Charge (Y/N):',1,0,'L');$pdf->Cell(110,10,'No',1,0,'C');
    $pdf->Ln(10);
        $pdf->Cell(70,10,'State',1,0,'L');$pdf->Cell(50,10,'Delhi',1,0,'C');
        $pdf->setFillColor(219,229,241); $pdf->Cell(30,10,'Code',1,0,'C');$pdf->Cell(40,10,'07',1,0,'C');
    $pdf->Ln(10);
        $pdf->Cell(190,10,'',1,0,'L');
    $pdf->Ln(10);
        $pdf->setFillColor(219,229,241);
        $pdf->Cell(190,10,'Detail of Recipient (Billed to)',1,0,'C',TRUE);
    $pdf->Ln(10);
        $pdf->Cell(80,10,'Name',1,0,'L');$pdf->Cell(110,10,'',1,0,'L');
    $pdf->Ln(10);
        $pdf->Cell(190,50,'Address',1,0,'L');
        $pdf->Ln(50);
    $pdf->Cell(70,10,'GSTIN:',1,0,'L');$pdf->Cell(120,10,'Unregistered',1,0,'L');
    $pdf->Ln(10);
        $pdf->Cell(70,10,'State',1,0,'L');$pdf->Cell(50,10,'Delhi',1,0,'C');
        $pdf->setFillColor(219,229,241); $pdf->Cell(30,10,'Code',1,0,'C');$pdf->Cell(40,10,'07',1,0,'C');
    $pdf->Ln(10);
        $pdf->Cell(120,10,'Description',1,0,'C',TRUE);
        $pdf->Cell(30,10,'SAC',1,0,'C',TRUE);
        $pdf->Cell(40,10,'Amount(In Rs.)',1,0,'C',TRUE);
    $pdf->Ln(10);
        $pdf->Cell(120,30,'',1,0,'C');
        $pdf->Cell(30,30,'',1,0,'C');$pdf->Cell(40,30,'',1,0,'C');
    $pdf->Ln(20);
        $pdf->Cell(120,10,'',1,0,'C');
        $pdf->Cell(30,10,'Total',1,0,'C');$pdf->Cell(40,10,'0',1,0,'C');
    $pdf->Ln(10);
        //$pdf->Cell(90,10,'',1,0,'C');
        $pdf->Cell(150,10,'Other Charges',1,0,'R');$pdf->Cell(40,10,'0',1,0,'C');
    $pdf->Ln(10);
        //$pdf->Cell(90,10,'',1,0,'C');
        $pdf->Cell(150,10,'Add: CGST (9%)',1,0,'R');$pdf->Cell(40,10,'0',1,0,'C');
    $pdf->Ln(10);
        //$pdf->Cell(90,10,'',1,0,'C');
        $pdf->Cell(150,10,'Add: SGST/UTGST (9%)',1,0,'R');$pdf->Cell(40,10,'0',1,0,'C');
    $pdf->Ln(10);
        //$pdf->Cell(90,10,'',1,0,'C');
        $pdf->Cell(150,10,'Add: IGST (18%)',1,0,'R');$pdf->Cell(40,10,'0',1,0,'C');
    $pdf->Ln(10);
        $pdf->Cell(150,10,'Total Amount Inclusive of all tax',1,0,'R');$pdf->Cell(40,10,'0',1,0,'C');
    $pdf->Ln(10);
        //$pdf->Cell(90,10,'',1,0,'C');
        $pdf->Cell(190,10,'Amount (in words):',1,0,'L');//$pdf->Cell(40,10,'0',1,0,'C');
    $pdf->Ln(10);
        $pdf->Cell(190,10,'Bank Details',1,0,'C',TRUE);
    $pdf->Ln(10);
        $pdf->Cell(90,10,'Bank A/C: 025005003152',1,0,'C');
        $pdf->Cell(100,10,'For OSS Certification Services Private Limited',1,0,'C');
    $pdf->Ln(10);
        $pdf->MultiCell(90,5,'Name of the Banker and Branch:
    ICICI Bank Ltd.
    Dwarka, Sector-5, New Delhi - 110075',1,0);
        $pdf->Image("sign.jpg",115,100,16,16);
        
    //$pdf->Ln(10);
        $pdf->Cell(90,10,'Bank IFSC/ RTGS/NEFT-',1,0,'C');
        $pdf->Cell(100,10,'',1,0,'C');
    $pdf->Ln(10);
        $pdf->Cell(90,20,'ICIC0000250',1,0,'C',TRUE);
        $pdf->MultiCell(100,10,'Manju Singh
Authorized Signatory',1,0,'L');
       
        //$pdf->Cell(100,10,'Authorized Signatory',1,0,'C');
    $pdf->Output();
?>                             