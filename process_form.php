<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Handling</title>
</head>
<body>
    <h2>Form Data Submitted</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        echo "Name: $name<br>";
        echo "Email: $email";
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = $_GET["name"];
        $email = $_GET["email"];
        echo "Name: $name<br>";
        echo "Email: $email";
    } else {
        echo "Invalid request method";
    }
    ?>
</body>
</html>
