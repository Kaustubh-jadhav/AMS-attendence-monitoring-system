<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="admin-page">
    <div class="container">
        <h1>Admin Registration</h1>
        <form method="POST" action="register.php">
            <label for="admin_name">Name:</label>
            <input type="text" id="admin_name" name="admin_name" required>
            
            <label for="admin_email">Email:</label>
            <input type="email" id="admin_email" name="admin_email" required>
            
            <label for="admin_password">Password:</label>
            <input type="password" id="admin_password" name="admin_password" required>
            
            <label for="admin_role">Role:</label>
            <input type="text" id="admin_role" name="admin_role" value="admin" readonly>
            
            <button type="submit" name="register">Register</button>
        </form>
        <ul>
            <li><a href="admin_login.php">Admin Login</a></li>
            <li><a href=".././index.php">Back to Home</a></li>
        </ul>
    </div>
</body>
</html>
