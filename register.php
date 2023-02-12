<?php
    require_once('connectionDB.php');

    if(isset($_POST['first_name']) && !empty($_POST['first_name'])){
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $department = $_POST['department'];
        $userName = $_POST['user_name'];
        $user_password = $_POST['user_password'];
        $email = $_POST['email'];
        $contact_no = $_POST['contact_no'];
    
        $sql = "INSERT INTO students (first_name, last_name, department, user_name, user_password, email, contact_no) VALUES ('$firstName', '$lastName', '$department', '$userName', '$user_password', '$email', '$contact_no')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    
        echo "New record created successfully";
        header("Location: list_students.php");
    }

