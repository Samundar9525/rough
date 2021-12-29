
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Student Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Student Login Form Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        form {
            border: 3px solid #f1f1f110;
        }
        
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid rgb(7, 0, 0);
            box-sizing: border-box;
        }
        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        
        button:hover {
            opacity: 0.8;
        }
        
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
        
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }
        
        img.avatar {
            width: 40%;
            border-radius: 50%;
        }
        
        .container {
            padding: 10px;
        }
        
        span.psw {
            float: right;
            padding-top: 10px;
        }
        /* Change styles for span and cancel button on extra small screens */
        
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<?php
session_start();
include 'action_page.php';

$username = $password = "";

if (isset($_POST['login']) && !empty($_POST['uname']) && !empty($_POST['psw'])) {
    $username = mysqli_real_escape_string($conn, $_POST["uname"]);
    $password = mysqli_real_escape_string($conn, $_POST["psw"]);
    $pw = md5($password);


    $select = "SELECT * FROM studentsform WHERE uname='" . $username . "'AND psw='" . $pw . "'";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        if ($row['uname'] == $username || $row['psw'] == $pw) {
            $_SESSION['uname'] = $username;
            
            header('location:sucess/loginsucess.php');
        }
        
    }
    else{

        header('location:sucess/error.html');

        }
}
?>

    <div class="w3ls-login box">
        <img src="images/logo.png" alt="logo_img" />
        <form method="post">
            <div class="container">
            <h3 style="font-size: 40px;"  style="color: #000;">Login Here<h3>
                    <br>
                <p>Please Enter your credentials to login.</p>
                <hr><br><br>
                <label for="uname"><p style="text-align: left;">Username</p></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <br>
                <label for="psw"><p style="text-align: left;">Password</p></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit" name="login">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
            <center>
            <div class="container"> ‎‏‏‎ ‎
                <p>New Student  <a href="Register.php">Register </a> ‎‏‏‎ 
            </div>
            </center>
        </form>

        </form>
    </div>
    <div class="copy-wthree">
        <p>© 2020 Student Login Form. All Rights Reserved.| Developed by
            <a href="http://jaseem.tech" target="_blank">Jaseem</a></p>
    </div>
</body>

</html>