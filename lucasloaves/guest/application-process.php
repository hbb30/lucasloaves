<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $position = $_POST["position"];
    $resume_name = $_FILES["resume"]["name"];
    $coverletter_name = $_FILES["coverletter"]["name"];

    // File upload handling
    $target_dir = "uploads/";
    $resume_target_file = $target_dir . basename($_FILES["resume"]["name"]);
    $coverletter_target_file = $target_dir . basename($_FILES["coverletter"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($resume_target_file, PATHINFO_EXTENSION));
    $coverletterFileType = strtolower(pathinfo($coverletter_target_file, PATHINFO_EXTENSION));

    // Check if files already exist
    if (file_exists($resume_target_file) || file_exists($coverletter_target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file sizes
    elseif ($_FILES["resume"]["size"] > 900000 || $_FILES["coverletter"]["size"] > 900000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    elseif (!in_array($fileType, ["pdf", "doc", "docx"]) || !in_array($coverletterFileType, ["pdf", "doc", "docx"])) {
        echo "Sorry, only PDF, DOC, and DOCX files are allowed.";
        $uploadOk = 0;
    }

    // Check if the uploads directory exists, if not, create it
    $uploadsDirectory = "uploads/";
    if (!is_dir($uploadsDirectory)) {
        mkdir($uploadsDirectory, 0777, true); // Creates the directory recursively with full permissions
    }


    // If everything is ok, try to upload files and insert data into database
    if ($uploadOk == 1 && move_uploaded_file($_FILES["resume"]["tmp_name"], $resume_target_file) && move_uploaded_file($_FILES["coverletter"]["tmp_name"], $coverletter_target_file)) {
        // Database connection
        include('../conn.php');

        // SQL query to insert data into database
        $sql = "INSERT INTO tbl_jobseekers (firstname, lastname, email, coverletter, resume, position)
        VALUES ('$firstname', '$lastname', '$email', '$coverletter_name', '$resume_name', '$position')";

        if ($conn->query($sql) === TRUE) {
            // Display alert after successful submission
            echo "<script>alert('Thank you for your application, $firstname $lastname!\\nEmail: $email');window.location='career.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        echo "Sorry, there was an error uploading your files.";
    }
}
?>
