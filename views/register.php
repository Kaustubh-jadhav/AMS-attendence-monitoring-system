<?php
include('database_connection.php');

if (isset($_POST['register'])) {
    $role = '';  // Initialize role

    if (isset($_POST['admin_name'])) {
        $name = $_POST['admin_name'];
        $email = $_POST['admin_email'];
        $password = password_hash($_POST['admin_password'], PASSWORD_DEFAULT);
        $role = 'admin';
    } elseif (isset($_POST['faculty_name'])) {
        $name = $_POST['faculty_name'];
        $email = $_POST['faculty_email'];
        $password = password_hash($_POST['faculty_password'], PASSWORD_DEFAULT);
        $role = 'faculty';
    } elseif (isset($_POST['student_name'])) {
        $name = $_POST['student_name'];
        $email = $_POST['student_email'];
        $password = password_hash($_POST['student_password'], PASSWORD_DEFAULT);
        $class = $_POST['student_class'];
        $department = $_POST['student_department'];
        $role = 'student';
    }

    if ($role == 'student') {
        $query = "INSERT INTO students (name, email, password, class, department, role) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$name, $email, $password, $class, $department, $role]);
    } else {
        $query = "INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$name, $email, $password, $role]);
    }

    if ($stmt) {
        echo "Registration successful!";
        header("Location: index.php");
    } else {
        echo "Error during registration.";
    }
}
?>
