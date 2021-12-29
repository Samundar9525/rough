<?php

    include"action_page.php"

?>

<!DOCTYPE HTML>
<html lang="zxx">
<head>
    <title>Student singup form</title>
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
            background-color: black;
        }
        
        * {
            box-sizing: border-box;
        }

        
        .container {
            background-color: rgba(241, 241, 241, 0);
        }

        
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
        }
        
        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }
        
        .registerbtn:hover {
            opacity: 1;
        }
        
        a {
            color: dodgerblue;
        }
     
        .signin {
            background-color: #f1f1f100;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="w3ls-login box">
        <img src="images/logo.png" alt="logo_img" />
        
        <?php

        $email=$psw=$uname="";
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $email=$_POST["email"];
                $uname=$_POST["uname"];
                $psw=$_POST["psw"];

                if( $email != "" && $uname !="" && $psw !="")
                {
                    $sql_insert = "INSERT INTO studentsform(email,uname,psw)VALUES('$email','$uname',md5('$psw'))";
                    if($conn->query($sql_insert)===TRUE)
                    {
                        echo "";
                    }
                    else{
                        echo "".$conn->error;
                    }
                    header('location:sucess/regsucess.php');
                }
            }

        ?>


        <form method="post">
            <div class="container">
                <h3 style="font-size: 40px;"  style="color: #000;">Register Now</h3>
                    <br>
                <p>Please fill in this form to singup</p>
                <hr>

                <label for="email"><p style="text-align: left;">Email</p></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required>

                <label for="uname"><p style="text-align: left;">username</p></label>
                <input type="text" placeholder="Enter Password" name="uname" id="uname" required>

                <label for="psw"><p style="text-align: left;">Password</p></label>
                <input type="password" placeholder="Repeat Password" name="psw" id="psw" required>

                <button type="submit" class="registerbtn">Register</button>


                <div class="container signin">
                    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
                </div>
            </div>
        </form>
    </div>
    <div class="copy-wthree">
        <p>© 2020 Student Login Form. All Rights Reserved.| Design by
            <a href="http://jaseem.tech" target="_blank">Jaseem</a></p>
    </div>
</body>
</html>