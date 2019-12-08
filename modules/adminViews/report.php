<?php
require "../../fpdf181/fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=project_portal','root','');
class MyPdf extends FPDF{
	function header(){
		$this->Image("../../img/bmsit.png",10,6);
		$this->SetFont('Arial','B',22);
		$this->Cell(50);
		$this->Ln(20);
		$this->Cell(50);
		$this->Cell(276,10,'BMS INSTITUTE OF TECHNOLOGY AND MANAGEMENT','C');
		$this->Ln();
		$this->SetFont('Times','B',18);
		$this->Ln(40);
		$this->Cell(100);
		$this->Cell(276,5,'PROJECT DETAILS','C');
		$this->Ln(20);


	}

	function footer(){	
		$this->SetY(-15);
		$this->SetFont('Arial','',0);
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0);
	}
	function headerTable()
	{
		$this->SetFont('Times','B',12);
		$this->Cell(45,10,'Name',1,0,'C');
		$this->Cell(30,10,'Department',1,0,'C');
		$this->Cell(20,10,'Semester',1,0,'C');
		$this->Cell(30,10,'Phone',1,0,'C');
		$this->Cell(55,10,'Email',1,0,'C');
		$this->Cell(40,10,'Venture',1,0,'C');
		$this->Cell(55,10,'Website',1,0,'C');
		$this->Ln();
	}
	function viewTable($db)
	{
		$this->SetFont('Times','',12);
		$stmt=$db->query('SELECT * FROM edc');
		while($data=$stmt->fetch(PDO::FETCH_OBJ)){
		$this->SetFont('Times','B',12);
		$this->Cell(45,10,$data->Name,1,0,'L');
		$this->Cell(30,10,$data->Department,1,0,'L');
		$this->Cell(20,10,$data->Sem,1,0,'L');
		$this->Cell(30,10,$data->Phone,1,0,'L');
		$this->Cell(55,10,$data->Email,1,0,'L');
		$this->Cell(40,10,$data->Venture,1,0,'L');
		$this->Cell(55,10,$data->Website,1,0,'L');
		$this->Ln();
	} 



		}


	}	




$pdf=new MyPdf();
$pdf->AliasNBPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();