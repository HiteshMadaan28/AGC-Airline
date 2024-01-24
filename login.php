<?php
if(isset($_POST['email'])){
$server="localhost";
$username="root";
$password="";
$con= mysqli_connect($server, $username, $password);
if(!$con){
    die("Connection is failed due to " . mysqli_connect_error());
}

// $email= $_POST['email'];
// $password = $_POST['password'];
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$sql="INSERT INTO `airline_database`.`login` (i`email`, `password`) VALUES ('$email', '$password')";
// echo $sql;

if($con->query($sql) == True )
{
    echo"Key successfuly executed";
}
else{
    echo "Error: $sql <br> $con->error";
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Oxygen&family=Ubuntu&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/login_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="container">
        <div class="box">
            <div id="login_div">
                <h1 id="login">Login</h1>
                <a href="home.html">
                    <div id="cross" class="cross"><i class="fa fa-close"></i></div>
                </a>
            </div>
            <div class="form_div">
                <form class="form" method="POST" id="myform" onsubmit="valid_form()" action="login.php">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required><br>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required maxlength="6">
                    <button class="bttn" id="bttn1">Login</button>
                    <button class="bttn">Sign up</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    // 
    function valid_form() {
        let mail = document.forms["myform"]["email"].value;
        let password = document.forms["myform"]["password"].value;
        if (mail === "" && password === "") {
            alert("All fields must be filled");
        }
        else {
            alert("Login Successfull..");
        }
    }
    document.getElementById("cross").addEventListener("click", function () {
        document.getElementById("container").style.display = "none";
    });
</script>

</html>
