<?php


$link=mysqli_connect('localhost','root','','logindb');


if (!$link){
    echo 'connection failed';
}

if (isset($_POST['name'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm-password'];
    
    if($confirm_password!=$password){
        echo "<script> alert('Please Check your password' );</script> ";
    } 

    $sql="INSERT INTO `login db` (`username`, `email`, `password`) VALUES ('$name', '$email', '$password');";
    
    
    $res=mysqli_query($link,$sql);


    if ($res){
        echo "<script> alert('Your Account is created ' );</script>";

        

    }


    $link->close();




}



?>








<!--    ---------------------------------HTML STARTS ---------------------------- -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>


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
        <form id="form" method="POST">

            <img src="images/apple-touch-icon.png" alt="logo" width="72" height="72">
            <h3 style="color: #fff;">Please sign in</h3>



            <input type="name"  name="name" class="form-control" 
                placeholder="Enter name">

            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
            


            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            
            <input type="password"  name="confirm-password"   class="form-control" id="exampleInputPassword1" placeholder=" Confirm Password">


            <div class="form-check">

                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" style="color: #fff;" for="exampleCheck1">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-lg btn-block btn-primary">Create Account</button>

            <div class="special_login">
                <button type="submit" style="background-color: brown;" class="btn btn-lg  btn-block btn-primary"><i
                        class="fab fa-google "></i> Sign Up with google</button>

                <button type="submit" style="background-color: #142850;" class="btn btn-lg btn-block btn-primary"><i
                        class="fab fa-facebook-f  "></i> Sign Up with facebook</button>
            </div>

        </form>












    <script src="index.js"></script>
    </div>
</body>

    




</html>