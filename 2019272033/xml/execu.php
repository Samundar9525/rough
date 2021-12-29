<?php
if(isset($_POST['insert1'])){
	echo "you are inside condition ";
	$xml = new DomDocument("1.0","UTF-8");
	$xml->load("data1.xml");
	echo "ypur page open sucessfully";

//fetching data from the form 
	$nam=$_POST['name'];
	$stream=$_POST['stream'];
	$address=$_POST['address'];
	$dob=$_POST['dob'];
	$phone=$_POST['phone'];
	
$detailTag=$xml->getElementsByTagName("detail")->item(0);
$data1Tag=$xml->createElement("data1");
$xml->formatOutput=true;//  data sajane ke liye 

$nameTag=$xml->createElement("name",$nam);
$streamTag=$xml->createElement("stream",$stream);
$addressTag=$xml->createElement("address",$address);
$dobTag=$xml->createElement("dob",$dob);
$phoneTag=$xml->createElement("phone",$phone);

$data1Tag->appendChild($nameTag);
$data1Tag->appendChild($streamTag);
$data1Tag->appendChild($addressTag);
$data1Tag->appendChild($dobTag);
$data1Tag->appendChild($phoneTag);

$detailTag->appendChild($data1Tag);
$xml->save('C:\Users\samun\Desktop\biodataADBMS\data1.xml');
}




?>