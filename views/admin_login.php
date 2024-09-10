<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="admin-page">
    <div class="container">
        <h1>Admin Login</h1>
        <form method="POST" action="login.php">
            <label for="admin_email">Email:</label>
            <input type="email" id="admin_email" name="admin_email" required>
            
            <label for="admin_password">Password:</label>
            <input type="password" id="admin_password" name="admin_password" required>
            
            <button type="submit" name="login">Login</button>
        </form>
        <ul>
            <li><a href="admin_register.php">Admin Registration</a></li>
            <li><a href=".././index.php">Back to Home</a></li>
        </ul>
    </div>
</body>
</html>
