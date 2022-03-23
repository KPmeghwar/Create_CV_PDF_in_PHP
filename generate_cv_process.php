<?php 

if(isset($_POST['submit']))
   {
   	  
   	  extract($_POST);
      include('fpdf/fpdf.php');
      
      $path = "pics";
	       if (!is_dir($path)) 
		   {
					mkdir($path);
		   }
	  $img = $_FILES['upload'];
	  move_uploaded_file($img['tmp_name'],$path."/".$img['name']);
	  $profile = $path."/".$img['name'];
      $pdf=new FPDF();
      $pdf->AddPage();
      $pdf->Image($profile,150,10,40,0,'JPG');
      $pdf->SetFont('Arial','',20);
      // $pdf->SetFillColor(0,255,255);
      // $pdf->SetTextColor(0,255,200);
      $pdf->Cell(0,15,$name,'',1,'');
      $pdf->SetFont('Arial','',10);
      $pdf->Cell(0,10,'Email:'.$email,'','1','');
      $pdf->Cell(0,10,'Contact No:'.$contact,'','1','');
      $pdf->Cell(0,10,'Address:'.$area,'','1','');
      $pdf->SetFillColor(192,192,192);
      $pdf->SetFont('Arial','',10);
      $pdf->Cell(0,8,'Objective','1','1','L',true);
      $pdf->Ln(2);
      $pdf->MultiCell(0,10,'To work hard with full dedication for the achievement of organization objective under satisfying job contact, hence enhancing my skill and knowledge and ready to learn new thingsPhysically fit Warehouse Picker and Packer with experience in all aspects of inventory, packaging, and shipping operations.','','L',false);
      $pdf->Cell(0,8,'Education','1','1','L',true);
      $pdf->Ln(2);
      $pdf->SetFillColor(119,136,153);
      $pdf->Cell(63,10,'Name','1','','C',true);
      $pdf->Cell(63,10,'Start Date','1','0','C',true); 
      $pdf->Cell(64,10,'End Date','1','1','C',true);
      $pdf->Cell(63,10,$school_name,'1','','C');
      $pdf->Cell(63,10,$start_date,'1','0','C'); 
      $pdf->Cell(64,10,$end_date,'1','1','C'); 
      $pdf->Cell(63,10,$collage_name,'1','','C');
      $pdf->Cell(63,10,$str_date,'1','0','C'); 
      $pdf->Cell(64,10,$nd_date,'1','1','C'); 
      $pdf->Cell(63,10,$university_name,'1','','C');
      $pdf->Cell(63,10,$st_date,'1','0','C'); 
      $pdf->Cell(64,10,$en_date,'1','1','C'); 
      $pdf->Ln(2);
      $pdf->SetFillColor(230,190,138);
      $pdf->Cell(0,8,'Skills & Tools','1','1','L',true);
      $pdf->Ln(2);
      $pdf->Cell(0,10,$check,'','1','L');
      $pdf->Ln(0.2);
      $pdf->Cell(20,10,$check1,'','1','L');
      $pdf->Ln(0.2);
      $pdf->Cell(20,10,$check2,'','1','L');
      $pdf->Ln(0.2);
      $pdf->Cell(20,10,$check3,'','1','L');
      $pdf->Ln(0.2);
      $pdf->Cell(20,10,$check4,'','1','L');
      $pdf->Ln(0.2);
      $pdf->Cell(20,10,$check5,'','1','L');
      $pdf->Cell(20,10,$check6,'','1','L');
      $pdf->SetFillColor(230,190,138);
      $pdf->Cell(0,8,'Current Position','1','1','L',true);
      $pdf->Ln(2);
      $pdf->cell(0,8,'PHP-Developement Intern @ Hidaya Jamshoro','','1');
      $pdf->Ln();
      $pdf->SetFillColor(230,190,138);
      $pdf->Cell(0,8,'Work Experience','1','1','L',true);
      $pdf->Cell(0,8,'Online Wordpress Internship  @ Digiskill','','1','',false,'http:www.digiskills.pk');
      $pdf->Ln(2);
      // $pdf->AddPage();
      $pdf->SetFillColor(230,190,138);
      $pdf->Cell(0,8,'Persnol Data','1','1','L',true);
      $pdf->Ln(2);
      $pdf->Cell(30,8,'Father Name:','1','0');

      $pdf->Cell(55,8,$fname,'1','1');
      $pdf->Ln(2);
      $pdf->Cell(30,8,'Gender:','1','0');
      $pdf->Cell(55,8,$gender,'1','1');
      $pdf->Ln(2);
      $pdf->Cell(30,8,'Date-Of-Birth:','1','0');
      $pdf->Cell(55,8,$dob,'1','1');
      $pdf->Ln(2);
      $pdf->Cell(30,8,'CNIC Number:','1','0');
      $pdf->Cell(55,8,$cnic,'1','1');
      $pdf->Ln(2);
      $pdf->Cell(30,8,'Marital Status:','1','0');
      $pdf->Cell(55,8,$status,'1','1');
      $pdf->Ln(2);
      $pdf->Cell(30,8,'Country:','1','0');
      $pdf->Cell(55,8,$country,'1','1');
      $pdf->SetFillColor(230,190,138);
      $pdf->Ln(2);
      
      $pdf->Cell(0,8,'Languages','1','1','L',true);
      $pdf->Ln(2);
      $pdf->Cell(0,10,$lang1,'','1','L');
      $pdf->Ln(0.2);
      $pdf->Cell(20,10,$lang2,'','1','L');
      $pdf->Ln(0.2);
      $pdf->Cell(20,10,$lang3,'','1','L');
      $pdf->Ln(5);
      $pdf->Cell(0,10,'References will be furnished on request','','','C');
      // $pdf->Cell(0,10,'References will be furnished on request','','','C');
      $pdf->Output('F');
   }
	  


   

   

     
?>