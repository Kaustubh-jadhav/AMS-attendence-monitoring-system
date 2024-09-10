<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="../css/student.css">
</head>
<body class="student-page">
    <div class="container">
        <h1>Student Registration</h1>
        <form method="POST" action="register.php">
            <label for="student_name">Name:</label>
            <input type="text" id="student_name" name="student_name" required>

            <label for="student_roll_number">Roll Number:</label>
            <input type="text" id="student_roll_number" name="student_roll_number" required>

            <label for="student_email">Email:</label>
            <input type="email" id="student_email" name="student_email" required>

            <label for="student_password">Password:</label>
            <input type="password" id="student_password" name="student_password" required>

            <label for="student_class">Class:</label>
            <input type="text" id="student_class" name="student_class" required>

            <label for="student_department">Department:</label>
            <input type="text" id="student_department" name="student_department" required>

            <button type="submit" name="register">Register</button>
        </form>
        
        <ul>
            <li><a href="student_login.php">Student Login</a></li>
            <li><a href=".././index.php">Back to Home</a></li>
        </ul>
    </div>
</body>
</html>
