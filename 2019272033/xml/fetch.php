<?php
// 	echo'hello';
// 	$nam=$_POST['name'];
// 	$stream=$_POST['stream'];
// 	$address=$_POST['address'];
// 	$dob=$_POST['dob'];
// 	$phone=$_POST['phone'];
// 	$per10=$_POST['per10'];
// 	$per12=$_POST['per12'];
// 	$pergdu=$_POST['pergdu'];
// 	$course=$_POST['course'];
// 	$duration=$_POST['duration'];
// 	$total=$_POST['total'];
// echo($nam);
// echo($stream);
// echo($dob);
// echo($phone);
// echo($per10);
// echo($per12);
// echo($pergdu);
// echo($course);
// echo($duration);
// echo($total);


 
   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = xml";
   $credentials = "user = postgres password=nevada";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
$query = "INSERT INTO students VALUES ('$_POST[name]','$_POST[stream]','$_POST[dob]','$_POST[address]','$_POST[phone]','$_POST[per10]','$_POST[per12]','$_POST[pergdu]','$_POST[course]','$_POST[duration]','$_POST[total]')";

$result = pg_query($query); 
if (!$result) {
  echo "An error occurred.\n";
  exit;

}
?>