<!DOCTYPE html>
<html>

<head>
    <title>PHP Form Handling</title>
</head>

<body>
    <h2>PHP Form Handling Example (GET)</h2>
    <form action="process_form.php" method="get">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="Teo Yi Yang"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="p4489@tarc.edu.my"><br>
        <input type="submit" value="Submit">
    </form>
    <h2>PHP Form Handling Example (POST)</h2>
    <form action="process_form.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="Teo Yi Yang"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="p4489@tarc.edu.my"><br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>