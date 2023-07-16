<?php include('dbconnect.php') ; ?>

<?php
    // Get form data
    $schooljr = $_POST["schooljr"];
    $school = $_POST["school"];
    $Instructionname = $_POST["Instructionname"];
    $primaryname = $_POST["primaryname"];
    $adid = $_POST["adid"];
    $strength = $_FILES["strength"];
    $teachingstaff = $_FILES["teachingstaff"];
    $secondaryschool = $_POST["secondaryschool"];
    $adid2 = $_POST["adid2"];
    $secstrength = $_FILES["secstrength"];
    $secteachingstaffsec = $_FILES["secteachingstaffsec"];
    $jrschool = $_POST["jrschool"];
    $adid3 = $_POST["adid3"];
    $jrstrength = $_FILES["jrstrength"];
    $jrteachingstaff = $_FILES["jrteachingstaff"];
    $date = $_POST["date"];

   // echo "$schooljr.' - '.$school' - '.$Instructionname' - '.$primaryname' - '.$adid' - '.$strength' - '.$teachingstaff' - '.$secondaryschool' - '.$adid2' - '.$secstrength' - '.$secteachingstaffsec' - '.$jrschool' - '.$adid3' - '.$jrstrength' - '.$jrteachingstaff' - '.$date" ;

// var_dump($_FILES);

if(isset($_FILES["strength"])) {
   $target_dir = "./uploads/total-strength-of-students/";
   $target_file = $target_dir . basename($_FILES["strength"]["name"]);
   
   // Try to upload file
   if (move_uploaded_file($_FILES["strength"]["tmp_name"], $target_file)) {
      //echo "The file ". htmlspecialchars( basename( $_FILES["strength"]["name"])). " has been uploaded.<br><br>";
   } else {
      echo "Sorry, there was an error uploading total strength of students file.";
   }
} else {
   echo "total strength of students file was selected for upload. ";
   
}

if(isset($_FILES["teachingstaff"])) {
    $target_dir = "./uploads/each-member-of-teaching-Staff/";
    $target_file = $target_dir . basename($_FILES["teachingstaff"]["name"]);
    
    // Try to upload file
    if (move_uploaded_file($_FILES["teachingstaff"]["tmp_name"], $target_file)) {
       //echo "The file ". htmlspecialchars( basename( $_FILES["teachingstaff"]["name"])). " has been uploaded.<br><br>";
    } else {
       echo "Sorry, there was an error uploading each-member-of-teaching-Staff file.";
    }
 } else {
    echo "each-member-of-teaching-Staff file was selected for upload.";
 }

 if(isset($_FILES["secstrength"])) {
    $target_dir = "./uploads/Secondary-total-strength-of-students/";
    $target_file = $target_dir . basename($_FILES["secstrength"]["name"]);
    
    // Try to upload file
    if (move_uploaded_file($_FILES["secstrength"]["tmp_name"], $target_file)) {
      // echo "The file ". htmlspecialchars( basename( $_FILES["secstrength"]["name"])). " has been uploaded.<br><br>";
    } else {
       echo "Sorry, there was an error uploading Secondary-total-strength-of-students file.";
    }
 } else {
    echo "Secondary-total-strength-of-students file was selected for upload.";
 }

 if(isset($_FILES["secteachingstaffsec"])) {
    $target_dir = "./uploads/Secondary-each-member-of-teaching-Staff/";
    $target_file = $target_dir . basename($_FILES["secteachingstaffsec"]["name"]);
    
    // Try to upload file
    if (move_uploaded_file($_FILES["secteachingstaffsec"]["tmp_name"], $target_file)) {
      // echo "The file ". htmlspecialchars( basename( $_FILES["secteachingstaffsec"]["name"])). " has been uploaded.<br><br>";
    } else {
       echo "Sorry, there was an error uploading Secondary-each-member-of-teaching-Staff file.";
    }
 } else {
    echo "Secondary-each-member-of-teaching-Staff file was selected for upload.";
 }

 if(isset($_FILES["jrstrength"])) {
    $target_dir = "./uploads/Junoir-total-strength-of-students/";
    $target_file = $target_dir . basename($_FILES["jrstrength"]["name"]);
    
    // Try to upload file
    if (move_uploaded_file($_FILES["jrstrength"]["tmp_name"], $target_file)) {
      // echo "The file ". htmlspecialchars( basename( $_FILES["jrstrength"]["name"])). " has been uploaded.<br><br>";
    } else {
       echo "Sorry, there was an error uploading Junoir-total-strength-of-students file.";
    }
 } else {
    echo "Junoir-total-strength-of-students file was selected for upload.";
 }

 if(isset($_FILES["jrteachingstaff"])) {
    $target_dir = "./uploads/Junoir-each-member-of-teaching-Staff/";
    $target_file = $target_dir . basename($_FILES["jrteachingstaff"]["name"]);
    
    // Try to upload file
    if (move_uploaded_file($_FILES["jrteachingstaff"]["tmp_name"], $target_file)) {
       //echo "The file ". htmlspecialchars( basename( $_FILES["jrteachingstaff"]["name"])). " has been uploaded.<br><br>";
    } else {
       echo "Sorry, there was an error uploading Junoir-each-member-of-teaching-Staff file.";
    }
 } else {
    echo "Junoir-each-member-of-teaching-Staff file was selected for upload.";
 }

    // If there are no errors, insert user data into database
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
        $sql = "INSERT INTO pofoma2 (`schooljr`, `school`, `Instructionname`, `primaryname`, `adid`, `strength`, `teachingstaff`, `secondaryschool`, `adid2`, `secstrength`, `secteachingstaffsec`, `jrschool`, `adid3`, `jrstrength`, `jrteachingstaff`, `date`)
                VALUES ('$schooljr',' $school', '$Instructionname', '$primaryname',' $adid',' $strength',
                '$teachingstaff',' $secondaryschool',' $adid2',' $secstrength',' $secteachingstaffsec',
                '$jrschool',' $adid3',' $jrstrength',' $jrteachingstaff',' $date')";

        if ($conn->query($sql) === TRUE) {
         
         require ("fpdf185/fpdf.php");

         $pdf = new FPDF();
         $pdf->AddPage();

         $pdf->SetFont ("Arial", "B", 16); 
         $pdf->Cell (0, 10, "Profoma submitted for the establishment of P.A Inamdar Computer Lab",0,1, 'C');
         $pdf->Cell (0, 10, "Proforma No.3",0,1, 'C');

         // header("Location: form3.html");
         exit;
   
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        // If there are errors, display them to the user
        foreach($errors as $error) {
            echo "<p>$error</p>";
        }
    }
    
?>
