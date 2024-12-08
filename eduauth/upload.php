<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include database connection
require_once 'includes/dbconnection.php';

// Check database connection
if (!$dbh) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    // Check if file is uploaded
    if (isset($_FILES['upload']) && $_FILES['upload']['error'] == UPLOAD_ERR_OK) {
        $file = $_FILES['upload'];
        
        // Extract form data
        $assigName = $_POST['assigName'];
        $stuclass = $_POST['stuclass'];
        $msg = $_POST['msg'];
        
        // Define file path
        $path = "files/" . basename($file['name']);
        
        // Check for existing assignment
        $ret = "SELECT name FROM file WHERE name = :assigName AND StudentClass = :stuclass";
        $query = $dbh->prepare($ret);
        $query->bindParam(':assigName', $assigName, PDO::PARAM_STR);
        $query->bindParam(':stuclass', $stuclass, PDO::PARAM_STR);
        $query->execute();
        
        if ($query->rowCount() == 0) {
            // Prepare insert statement
            $sql = "INSERT INTO file (file_id, name, file, StudentClass, Message) VALUES (NULL, :assigName, :path, :stuclass, :msg)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':assigName', $assigName, PDO::PARAM_STR);
            $query->bindParam(':path', $path, PDO::PARAM_STR);
            $query->bindParam(':stuclass', $stuclass, PDO::PARAM_STR);
            $query->bindParam(':msg', $msg, PDO::PARAM_STR);
            
            // Move uploaded file and execute query
            if (move_uploaded_file($file['tmp_name'], $path)) {
                if ($query->execute()) {
                    echo '<script>alert("Assignment has been added.")</script>';
                    echo "<script>window.location.href ='add-assignment.php'</script>";
                } else {
                    echo '<script>alert("Database error: Could not insert assignment.");</script>';
                    echo "Error executing query: " . implode(", ", $query->errorInfo());
                }
            } else {
                echo '<script>alert("File upload failed.");</script>';
            }
        } else {
            echo "<script>alert('Assignment or Assignment ID already exists. Please try again.');</script>";
        }
    } else {
        echo '<script>alert("No file uploaded or there was an error.");</script>';
        echo '<pre>';
        print_r($_FILES['upload']);
        echo '</pre>';
    }
}
?>
