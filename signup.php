<?php
$succes=false;
if(isset($_POST['username']) && isset($_POST['name']))
{
    $server="localhost";
    $username="root";
    $password="";
    
    $con=mysqli_connect($server, $username, $password);
    if(!$con){
        die("Connection is failed due to " . mysqli_connect_error());
    }

    $username=isset($_POST['username'])? $_POST['username']: '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phonenumber = isset($_POST['phonenumber']) ? $_POST['phonenumber'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $sql="INSERT INTO `airline_database`.`signup`(`username`, `name`, `email`, `phonenumber`, `password`) VALUES ('$username','$name',' $email','$phonenumber',' $password')";
    // echo $sql;  
    if($con->query($sql) == True )
        {
            $success=true;
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
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/login_style.css">
    <link rel="stylesheet" href="css/signup_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</head>

<body>
    <div id="container">
        <div class="box">
            <div id="login_div">
                <h1 id="signup">Sign Up</h1>
                <a href="home.html" target="_self">
                    <div id="cross" class="cross"><i class="fa fa-close"></i></div>
                </a>
            </div>

            <form class="form" id="myform" onsubmit="return valid_form()" method="POST" action="signup.php">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
                <label for="Email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="Phone_Number">Phone Number</label>
                <input type="number" id="Phone_Number" name="phonenumber" maxlength="10">
                <label type="password" for="password">Password</label>
                <input type="password" name="password" id="password" required maxlength="6">
                <label type="password" for="con_password">Confirm Password</label>
                <input type="password" name="con_password" id="con_password" required>
                <input type="submit" value="Submit" class="bttn">
            </form>
        </div>
    </div>
</body>
<script>

    function valid_form() {
        let username = document.forms["myform"]["username"].value;
        let name = document.forms["myform"]["name"].value;
        let mail = document.forms["myform"]["email"].value;
        let num = document.forms["myform"]["Phone_Number"].value;
        let password = document.forms["myform"]["password"].value;
        let con_pass = document.forms["myform"]["con_password"].value;
        if (username === "" && name === "" && mail === "" && num === "" && password === "" && con_pass === "") {
            alert("Form must be filled.");
            return false;

        }
        if (password != con_pass) {
            alert("Confirm Password must be same as password.");
            return false;
        }
        else {
   
            alert("Singed up successfully");
            return true;
        }
    }

</script>
<!-- <script src="singup_jv.js"></script> -->
<!-- <?php 
    // if($success=true){
    //     echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js'></script>";
    //     echo "<script>
    //     swal({
    //         title: 'Congratulation',
    //         text: 'Sign Up successfully',
    //         icon: 'success',
    //         button: 'OK'
    //     });
    //     </script>";
    // }
    ?> -->

</html>