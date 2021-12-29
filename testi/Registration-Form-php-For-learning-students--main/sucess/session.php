<?php
    include"action_page.php";
    session_start();
    $usercheck=$_SESSION['uname'];
    $variname=mysqli_query($conn,"SELECT uname FROM studentsform WHERE uname='$usercheck'");
    $row=mysqli_fetch_array($variname,MYSQLI_ASSOC);
    $login=$row['uname'];
   
   if(!isset($_SESSION['uname']))
   {
     // header("location:loginsucess.php");
      die();
   }
?> 