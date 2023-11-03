
<!DOCTYPE html>
<html>
<head>
    <title>Admin Approval Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #553cc5;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        td form {
            display: inline;
            margin: 0;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
// Connect to the database
include("./config/adminDatabase.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['approve'])) {
        // Handle user approval
        $user_id = $_POST['user_id'];

        // Update the user's status to approved (1)
        $update_query = "UPDATE sign_up SET status = 1 WHERE id = $user_id";
        $conn->query($update_query);
    }
}

// Retrieve unapproved users
$unapproved_query = "SELECT * FROM sign_up WHERE status = 0";
$result = $conn->query($unapproved_query);

echo '<table border="1">';
echo '<tr><th>Username</th><th>Email</th><th>Action</th></tr>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>';
        echo '<form method="post">';
        echo '<input type="hidden" name="user_id" value="' . $row['id'] . '">';
        echo '<input type="submit" name="approve" value="Approve">';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="3">No unapproved users.</td></tr>';
}

echo '</table>';
?>

</body>
</html>