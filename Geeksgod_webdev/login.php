<?php


$server="localhost";
$username="root";
$password="";
$db='logindb';


$link=mysqli_connect($server,$username,$password,$db);

// if (!$link){
//     echo 'connection failed';
// }


if (isset($_POST['Email'])){
    $email=$_POST['Email'];
    $pass_word=$_POST['Password'];

    // $sql="select * from login db where email = '".$email."'; ";
    $sql="SELECT * FROM `login db` WHERE email ='$email'";

    
    $result = mysqli_query($link,$sql);


    if(mysqli_num_rows($result)>0)
    {
    
        $row=mysqli_fetch_array($result);

        echo "<h1>email correct</h1>";

        if($row['password']==$pass_word){
            echo "<h2> Login - Successful </h2>"; 
            
        }
        else{
            echo " <h2>Password-Incorrect</h2>";
        }
    }
    else{
        echo "<h2>You have entered incorrect password</h2>";

    }

    $link->close();

}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>




    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />


    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/9f6d055f67.js" crossorigin="anonymous"></script>

    <!-- style sheets -->
    <link rel="stylesheet" href="style.css" />
    <!-- icon -->
    <link rel="icon" href="favicon_io (1)/favicon-16x16.png" />
</head>




<body class="login-form">


    <div class="form-container">
        <form  method="POST" id="form">

            <img src="images/apple-touch-icon.png" alt="logo" width="72" height="72">
            <h3 style="color: #fff;">Please sign in</h3>


            <input type="email" name="Email" class="form-control" 
                placeholder="Enter email">


            <input type="password"  name="Password" class="form-control" 
                placeholder="Password">


            <div class="form-check">

                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" style="color: #fff;" for="exampleCheck1">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-lg btn-block btn-primary">Sign In</button>

            <div class="special_login">
                <!-- google sign in -->
                <button type="submit" style="background-color: brown;" class="btn btn-lg  btn-block btn-primary"><i
                        class="fab fa-google "></i> Sign In with google</button>
                <!--  facebook sign in -->
                <button type="submit" style="background-color: #142850;" class="btn btn-lg btn-block btn-primary"><i
                        class="fab fa-facebook-f  "></i> Sign In with facebook</button>
            </div>

        </form>
    </div>












    <script src="index.js"></script>
</body>

</html>