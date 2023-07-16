<?php
    // Get form data
    $computerlab = $_POST["computerlab"];
    $computerdetailsname = $_POST["computerdetailsname"];
    $intenet = $_POST["intenet"];
    $connectivity = $_POST["connectivity"];
    $electricity = $_POST["electricity"];
    $upsbattery = $_POST["upsbattery"];
    $upscapacity = $_POST["upscapacity"];
    $compteachtable = $_POST["compteachtable"];
    $copyoftimetable = $_POST["copyoftimetable"];
    $yesno = $_POST["yesno"];
    $compcourse = $_POST["compcourse"];
    $exampass = $_POST["exampass"];
    $equivalentto = $_POST["equivalentto"];
    $teacherisnotavailable = $_POST["teacherisnotavailable"];
    $hallforcomputerlab = $_POST["hallforcomputerlab"];
    $sizeofhall = $_POST["sizeofhall"];
    $hallsecured = $_POST["hallsecured"];
    $date = $_POST["date"];
    

   if(isset($_FILES["copyoftimetable"])) {
    $target_dir = "./uploads/copy-of-time-table-3/";
    $target_file = $target_dir . basename($_FILES["copyoftimetable"]["name"]);
    
    // Try to upload file
    if (move_uploaded_file($_FILES["copyoftimetable"]["tmp_name"], $target_file)) {
       
    } else {
       echo "Sorry, there was an error uploading copy-of-time-table file.";
    }
 } else {
    echo "copy-of-time-table file was selected for upload.";
 }
    
    if(empty($errors)) {
        // Connect to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "proforma";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert data into database
        $sql = " INSERT INTO `pofoma3`(`pofoma3ID`, `computerlab`, `computerdetailsname`, `intenet`, `connectivity`, `electricity`, `upsbattery`, `upscapacity`, `compteachtable`, `copyoftimetable`, `yesno`, `compcourse`, `exampass`, `equivalentto`, `teacherisnotavailable`, `hallforcomputerlab`, `sizeofhall`, `hallsecured`, `date`)  VALUES ( '$pofoma3ID', '$computerlab',' $computerdetailsname', '$intenet', '$connectivity', '$electricity', '$upsbattery',' $upscapacity', '$compteachtable', '$copyoftimetable', '$yesno',' $compcourse',' $exampass', '$equivalentto',' $teacherisnotavailable',' $hallforcomputerlab',' $sizeofhall', '$hallsecured',' $date')";

        if ($conn->query($sql) === TRUE) {
            
            echo " thank you"; 

            require ("fpdf185/fpdf.php");

            $pdf = new FPDF();
            $pdf->AddPage();
            
            $pdf->SetFont ("Arial", "", 12); 
            $pdf->Cell (0, 10, "Profoma submitted for the establishment of P.A Inamdar Computer Lab",1,1, 'C');
            $pdf->Cell (0, 10, "Proforma No.3",1,1, 'C');
           
            $pdf->output();
           
            $pdf->AddPage();
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        // If there are errors, display them to the user
        foreach($errors as $error) {
            echo "<p>$error</p><br>";
        }
    }


?>
