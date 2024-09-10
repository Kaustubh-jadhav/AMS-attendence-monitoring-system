<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Registration</title>
    <link rel="stylesheet" href="../css/faculty.css">
</head>
<body>
    <div class="container">
        <h1>Faculty Registration</h1>
        <form method="POST" action="register.php">
            <label for="faculty_name">Name:</label>
            <input type="text" id="faculty_name" name="faculty_name" required>
            <label for="faculty_email">Email:</label>
            <input type="email" id="faculty_email" name="faculty_email" required>
            <label for="faculty_password">Password:</label>
            <input type="password" id="faculty_password" name="faculty_password" required>
            <button type="submit" name="register">Register</button>
        </form>
        <ul>
            <li><a href="faculty_login.php">Faculty Login</a></li>
            <li><a href=".././index.php">Back to Home</a></li>
        </ul>
    </div>
</body>
</html>
