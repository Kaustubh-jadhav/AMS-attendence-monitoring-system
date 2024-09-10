<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="../css/student.css">   
</head>
<body class="student-page">
    <div class="container">
        <h1>Student Login</h1>
        <form method="POST" action="student_dashboard.php">
            <label for="student_email">Email:</label>
            <input type="email" id="student_email" name="student_email" required>
            <label for="student_password">Password:</label>
            <input type="password" id="student_password" name="student_password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <ul>
            <li><a href="student_register.php">Student Registration</a></li>
            <li><a href=".././index.php">Back to Home</a></li>
        </ul>
    </div>
</body>
</html>
