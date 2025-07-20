<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - View Feedback</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2>Feedback Records</h2>
    <table class="table table-bordered mt-3">
        <thead>
            <tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Action</th></tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM feedbacks");
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['message']}</td>
                        <td><a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a></td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
