<?php
    require_once('connectionDB.php');
    include_once('header.php');

    $sql = "SELECT * FROM students";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $students = $stmt->fetchAll();
?>
<h1>Liste Etudiants</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Department</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Contact No</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($students as $student): ?>
            <tr>
                <td><?php echo $student['first_name']; ?></td>
                <td><?php echo $student['last_name']; ?></td>
                <td><?php echo $student['department']; ?></td>
                <td><?php echo $student['user_name']; ?></td>
                <td><?php echo $student['email']; ?></td>
                <td><?php echo $student['contact_no']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>