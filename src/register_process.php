<?php
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $gender = $_POST['gender'];
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    try {
        $sql = "INSERT INTO tbl_users (user_firstname, user_lastname, user_gender, user_email, user_password) 
                VALUES (?, ?, ?, ?, ?)";
        
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute([$firstname, $lastname, $gender, $email, $password])) {
            header("Location: login.php?registration=success");
            exit();
        }
    } catch(PDOException $e) {
        if ($e->getCode() == 23000) {
            // Duplicate email error
            header("Location: registration.php?error=email_exists");
            exit();
        } else {
            die("Registration error: " . $e->getMessage());
        }
    }
} else {
    header("Location: registration.php");
    exit();
}
?>
