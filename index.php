<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple Form</title>
<style>
    /* Styles from your existing code */
</style>
</head>
<body>
<div class="container">
    <h2>Enter Data</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <input type="submit" value="Submit">
    </form>

    <?php
    // Database connection
    $servername = "localhost";
    $username = "hilal";
    $password = "1234";
    $dbname = "testingdb";

    // Check if database is in read-only mode
    $conn = new mysqli($servername, $username, $password, $dbname);
    $isReadOnly = false;

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SHOW VARIABLES LIKE 'read_only'");
    if ($result && $row = $result->fetch_assoc()) {
        $isReadOnly = $row['Value'] === 'ON';
    }

    // If database is in read-only mode, display maintenance message
    if ($isReadOnly) {
        echo "<p style='color: red;'>The database is currently in maintenance mode. Your data cannot be stored at the moment. Please try again later.</p>";
    } else {
        // Insert data into the database
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];

            $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

            if ($conn->query($sql) === TRUE) {
                echo "<p style='color: green;'>New record created successfully</p>";
            } else {
                echo "<p style='color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        }
    }

    $conn->close();
    ?>
</div>
</body>
</html>
