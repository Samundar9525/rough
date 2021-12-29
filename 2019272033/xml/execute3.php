<?php

 if(isset($_POST['insert3'])){
	echo "you are inside 3nd condition ";
	$xml = new DomDocument("1.0","UTF-8");
	$xml->load("data1.xml");
	echo "\n ypur page open sucessfully";

//fetching data from the form 
	$course=$_POST['course'];
	$duration=$_POST['duration'];
	$total=$_POST['price'];
	
$detailTag=$xml->getElementsByTagName("detail")->item(0);
$data3Tag=$xml->createElement("data3");
$xml->formatOutput=true;//  data sajane ke liye 


$courseTag=$xml->createElement("course",$course);
$durationTag=$xml->createElement("duration",$duration);
$totalTag=$xml->createElement("total",$total);



$data3Tag->appendChild($courseTag);
$data3Tag->appendChild($durationTag);
$data3Tag->appendChild($totalTag);



$detailTag->appendChild($data3Tag);
$xml->save('C:\Users\samun\Desktop\biodataADBMS\data3.xml');
}



?>