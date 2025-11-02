<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php?error=login_required");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - HealthRwanda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .success-message {
            color: #27ae60;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .user-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .logout-btn:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">🏥 HealthRwanda</div>
        <div class="success-message">Well logged in!</div>
        
        <div class="user-info">
            <h3>Welcome, <?php echo htmlspecialchars($_SESSION['user_firstname'] . ' ' . $_SESSION['user_lastname']); ?>!</h3>
            <p>Email: <?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
            <p>You have successfully accessed the HealthRwanda Hospital Management System.</p>
        </div>
        
        <p>You can now view your medical records, doctor information, and payment details.</p>
        
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
