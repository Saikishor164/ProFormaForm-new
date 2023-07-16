<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['first_name'] ?? '';
    $file = $_FILES['file'] ?? '';

    // Minimum file size in bytes (1 MB)
    $minimumFileSize = 2000000;

    // Create a directory if it doesn't exist
    $directory = 'uploads/';
    if (!is_dir($directory)) {
        mkdir($directory, 0777, true);
    }

    try {
        // Check for errors
        if (!isset($file['error']) || is_array($file['error'])) {
            throw new RuntimeException('Invalid parameters.');
        }

        // Check file size
        if ($file['size'] >= $minimumFileSize) {
            $originalFileName = $file['name'];
            $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);

            $filename = $firstName . '.' . $extension;
            $destination = $directory . $filename;

            // Move the uploaded file to the destination directory
            if (move_uploaded_file($file['tmp_name'], $destination)) {
                echo 'File uploaded and saved successfully.';
            } else {
                throw new RuntimeException('Error occurred while uploading the file.');
            }
        } else {
            throw new RuntimeException('File size must be at least 1 MB.');
        }
    } catch (RuntimeException $e) {
        echo $e->getMessage();
    }
}
?>

<!-- HTML form to upload the file -->
<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required><br><br>
        
        <label for="file">Upload File:</label>
        <input type="file" name="file" id="file" required><br><br>
        
        <input type="submit" value="Upload">
    </form>
</body>
</html>
