<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Submitted user Details</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    echo "Name: " . $name . "<br><br>";
    echo "Email: " . $email . "<br><br>";
    echo "Age: " . $age . "<br><br>";
    echo "Gender: " . $gender . "<br><br>";
}
?>

</body>
</html>