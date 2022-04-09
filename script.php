<!DOCTYPE html>
<html lang="en">
<head>
    <title>Script</title>
</head>
<body>
    <?php
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $where = $_POST['whereTo'];

        echo "<h1> Student Details </h1>";

        echo "Student Name : " . $name . "</br>";
        echo "Student phone : " . $phone . "</br>";
        echo "Student email : " . $email . "</br>";
        echo "Where To : " . $where . "</br>";

?>
</body>
</html>