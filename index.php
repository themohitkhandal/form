<?php
$insert = false;
$nameErr = "";
if(isset($_POST['name']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    //Initialising Variables
    $username = "root";
    $password = "";
    $server = "localhost";

    //Creating Connection
    $con = mysqli_connect($server, $username, $password);

    //Check Connection
    if(!$con){
        echo "Connection Failed!" . $con->error;
    }
    
    //Define variables and set to empty value
    $name = $phone = $email = $where = "";

    //Function to check any special char
    function test_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    //Collecting Post variables
    $name = test_input($_POST['name']);
    $phone = test_input($_POST['phone']);
    $email = test_input($_POST['email']);
    $where = test_input($_POST['whereTo']);
    

    //SQL Query
    $sql = "INSERT INTO `form`.`formdetails`(`id`, `name`, `phone`, `email`, `whereTo`) VALUES ('id','$name','$phone','$email','$where')";

    //Execute the query
    if($con->query($sql) == true){
        $insert = true;
    }else{
        echo "ERROR: $sql <br> $con->error";
    }

    //Close Connection
    $con->close();

} else{
    $nameErr = "Enter a valid name!";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>School Trip</title>
</head>

<body class="theme1" >
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <div class="container">
            <h1 title="School" id="title">Welcome to School Trip Form</h1>
            <?php if($insert == true){
            echo "<div class='successful'>Success</div>";}
            ?>
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="text" name="phone" id="phone" placeholder="Phone" required>
            <input type="email" name="email" id="email" placeholder="E-Mail" required>
            <input type="text" name="whereTo" id="whereTo" placeholder="Where To" required>
        </div>

        <div class="flex-buttons">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
    <div class="flex-buttons">
        <button class="btn btn-warning" id="changeTheme" style="margin: 20px;">Change Theme</button>
    </div>
    <script src="app.js"></script>
</body>

</html>