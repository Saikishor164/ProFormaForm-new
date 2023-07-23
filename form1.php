<?php

$Dedutrustname = $_POST["Dedutrustname"];
$educationalname = $_POST["educationalname"];
$educationaladdress = $_POST["educationaladdress"];
$location = $_POST["location"];
$educationalcontact = $_POST["educationalcontact"];
$educationalmobile = $_POST["educationalmobile"];
$educationalemail = $_POST["educationalemail"];
$presidentname = $_POST["presidentname"];
$presidentcontact = $_POST["presidentcontact"];
$Presidentmobile = $_POST["Presidentmobile"];
$presidentemail = $_POST["presidentemail"];
$secretaryname = $_POST["secretaryname"];
$secretarycontact = $_POST["secretarycontact"];
$secretarymobile = $_POST["secretarymobile"];
$secretaryemail = $_POST["secretaryemail"];
$coordinatorname = $_POST["coordinatorname"];
$coordinatorcontact = $_POST["coordinatorcontact"];
$coordinatormobile = $_POST["coordinatormobile"];
$coordinatoremail = $_POST["coordinatoremail"];
$date = $_POST["date"];

//echo '($Dedutrustname, $educationalname, $educationaladdress, $location, $educationalcontact, $educationalmobile, $educationalemail, $presidentname, $presidentcontact, $Presidentmobile, $presidentemail, $secretaryname, $secretarycontact, $secretarymobile, $secretaryemail, $coordinatorname, $coordinatorcontact, $coordinatormobile, $coordinatoremail, $date)';
    $sql = "INSERT INTO `pofoma1` (`Dedutrustname`, `educationalname`, `educationaladdress`, `location`, `educationalcontact`, `educationalmobile`, `educationalemail`, `presidentname`, `presidentcontact`, `Presidentmobile`, `presidentemail`, `secretaryname`, `secretarycontact`, `secretarymobile`, `secretaryemail`, `coordinatorname`, `coordinatorcontact`,`coordinatormobile`, `coordinatoremail`, `date`)
    VALUES ('$Dedutrustname', '$educationalname', '$educationaladdress', '$location', '$educationalcontact', '$educationalmobile', '$educationalemail', '$presidentname', '$presidentcontact', '$Presidentmobile', '$presidentemail', '$secretaryname', '$secretarycontact', '$secretarymobile', '$secretaryemail', '$coordinatorname', '$coordinatorcontact', '$coordinatormobile', '$coordinatoremail', '$date')
    ON DUPLICATE KEY UPDATE
    Dedutrustname = VALUES(Dedutrustname),
    educationalname = VALUES(educationalname),
    educationaladdress = VALUES(educationaladdress),
    location = VALUES(location),
    educationalcontact = VALUES(educationalcontact),
    educationalmobile = VALUES(educationalmobile),
    educationalemail = VALUES(educationalemail),
    presidentname = VALUES(presidentname),
    presidentcontact = VALUES(presidentcontact),
    Presidentmobile = VALUES(Presidentmobile),
    presidentemail = VALUES(presidentemail),
    secretaryname = VALUES(secretaryname),
    secretarycontact = VALUES(secretarycontact),
    secretarymobile = VALUES(secretarymobile),
    secretaryemail = VALUES(secretaryemail),
    coordinatorname = VALUES(coordinatorname),
    coordinatorcontact = VALUES(coordinatorcontact),
    coordinatormobile = VALUES(coordinatormobile),
    coordinatoremail = VALUES(coordinatoremail),
    date = VALUES(date)";
//$rs = mysqli_query();

include 'dbconnect.php';
$rs = mysqli_query($con, $sql);

if($rs)
{
    require ("fpdf185/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();

    // Title and heading
 $pdf->SetFont ("Arial", "B", 16); 
 $pdf->Cell (0, 10, "Profoma submitted for the establishment of P.A Inamdar Computer Lab",0,1, 'C');
 $pdf->Cell (0, 10, "Proforma No.3",0,1, 'C');

// Trust Details
 $pdf->Cell (0, 10, "Trust Details", 0, 1, 'C');
 $pdf->SetFont ("Arial", "", 12); 
 $pdf->Cell (60, 10, "Name of the Educational Trust: ",1,0, 'C');
 $pdf->Cell (0, 10, "$Dedutrustname",1,1, 'L');
 $pdf->Cell (20, 10, "Others:",1,0, 'C');
 $pdf->Cell (0, 10, "$educationalname",1,1, 'L');
 $pdf->Cell (30, 10, "Trust Address:",1,0, 'C');
 $pdf->Cell (0, 10, "$educationaladdress",1,1, 'L');
 $pdf->Cell (25, 10, "Conact No:", 1, 0, 'C');
 $pdf->Cell (0, 10, "$educationalcontact", 1, 1, 'L');
 $pdf->Cell (25, 10, "Mobile No:", 1, 0, 'C');
 $pdf->Cell (0, 10, "$educationalmobile", 1, 1, 'L');
 $pdf->Cell (20, 10, "Email:", 1, 0, 'C');
 $pdf->Cell (0, 10, "$educationalemail", 1, 1, 'L');

//  President/Chairman Details Start
//heading start
 $pdf->SetFont ("Arial", "B", 16); // 16 font for the heading and "B" for Bold
 $pdf->Cell (0, 10, "", 0, 1, 'C');
 $pdf->Cell (0, 10, "President/Chairman Details", 0, 1, 'C');
//heading ended

 $pdf->SetFont ("Arial", "", 12); // 12 font fot the table design remove B for Bold
 $pdf->Cell (67, 10, "Name of the Prsident Chairman: ", 1, 0, 'L');
 $pdf->Cell (0, 10, "$presidentname", 1, 1, 'L');
 $pdf->Cell (25, 10, "Conact No:", 1, 0, 'C');
 $pdf->Cell (0, 10, "$presidentcontact", 1, 1, 'L');
 $pdf->Cell (25, 10, "Mobile No:", 1, 0, 'C');
 $pdf->Cell (0, 10, "$Presidentmobile", 1, 1, 'L');
 $pdf->Cell (20, 10, "Email:", 1, 0, 'C');
 $pdf->Cell (0, 10, "$presidentemail", 1, 1, 'L');
//president/Chairman Details Ended

//  Hon.Secretary Details Start
//heading start
$pdf->SetFont ("Arial", "B", 16); // 16 font for the heading and "B" for Bold
$pdf->Cell (0, 10, "", 0, 1, 'C');
$pdf->Cell (0, 10, "Hon'ble Secretary Details", 0, 1, 'C');
//heading ended

$pdf->SetFont ("Arial", "", 12); // 12 font fot the table design remove B for Bold
$pdf->Cell (60, 10, "Name of the Hon.Secretary: ", 1, 0, 'L');
$pdf->Cell (0, 10, "$secretaryname", 1, 1, 'L');
$pdf->Cell (25, 10, "Conact No:", 1, 0, 'C');
$pdf->Cell (0, 10, "$secretarycontact", 1, 1, 'L');
$pdf->Cell (25, 10, "Mobile No:", 1, 0, 'C');
$pdf->Cell (0, 10, "$secretarymobile", 1, 1, 'L');
$pdf->Cell (20, 10, "Email:", 1, 0, 'C');
$pdf->Cell (0, 10, "$secretaryemail", 1, 1, 'L');
//Hon.Secretary Details Ended
 
//  Coordinator With PAI-ICT Academy Pune Details Start
//heading start
$pdf->SetFont ("Arial", "B", 16); // 16 font for the heading and "B" for Bold
$pdf->Cell (0, 10, "", 0, 1, 'C');
$pdf->Cell (0, 10, "Coordinator With PAI-ICT Academy Pune Details", 0, 1, 'C');
//heading ended

$pdf->SetFont ("Arial", "", 12); // 12 font fot the table design remove B for Bold
$pdf->Cell (110, 10, "Name of the Coordinator With PAI-ICT Academy Pune: ", 1, 0, 'L');
$pdf->Cell (0, 10, "$coordinatorname", 1, 1, 'L');
$pdf->Cell (25, 10, "Conact No:", 1, 0, 'C');
$pdf->Cell (0, 10, "$coordinatorcontact", 1, 1, 'L');
$pdf->Cell (25, 10, "Mobile No:", 1, 0, 'C');
$pdf->Cell (0, 10, "$coordinatormobile", 1, 1, 'L');
$pdf->Cell (20, 10, "Email:", 1, 0, 'C');
$pdf->Cell (0, 10, "$coordinatoremail", 1, 1, 'L');
//Coordinator With PAI-ICT Academy Pune Details Ended

$pdf->Cell (0, 50, "$date", 0, 1, 'R');

 $pdf->output();

 $pdf->AddPage();
 if(isset($_POST['submit'])) {

    header("Location: form2.html");
    exit;
   }
}
?>
