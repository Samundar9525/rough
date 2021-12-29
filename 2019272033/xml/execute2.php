<?php

 if(isset($_POST['insert2'])){
	echo "you are inside 2nd condition ";
	$xml = new DomDocument("1.0","UTF-8");
	$xml->load("data1.xml");
	echo "\n ypur page open sucessfully";

//fetching data from the form 
	$per10=$_POST['per10'];
	$year10=$_POST['year10'];
	$clg10=$_POST['clg10'];

	$per12=$_POST['per12'];
	$year12=$_POST['year12'];
	$clg12=$_POST['clg12'];

	$pergdu=$_POST['pergdu'];
	$yeargdu=$_POST['yeargdu'];
	$clggdu=$_POST['clggdu'];
	
$detailTag=$xml->getElementsByTagName("detail")->item(0);
$data2Tag=$xml->createElement("data2");
$xml->formatOutput=true;//  data sajane ke liye 

$per10Tag=$xml->createElement("per10",$per10);
$year10Tag=$xml->createElement("year10",$year10);
$clg10Tag=$xml->createElement("clg10",$clg10);

$per12Tag=$xml->createElement("per12",$per12);
$year12Tag=$xml->createElement("year12",$year12);
$clg12Tag=$xml->createElement("clg12",$clg12);

$pergduTag=$xml->createElement("pergdu",$pergdu);
$yeargduTag=$xml->createElement("yeargdu",$yeargdu);
$clggduTag=$xml->createElement("clggdu",$clggdu);

$data2Tag->appendChild($per10Tag);
$data2Tag->appendChild($year10Tag);
$data2Tag->appendChild($clg10Tag);

$data2Tag->appendChild($per12Tag);
$data2Tag->appendChild($year12Tag);
$data2Tag->appendChild($clg12Tag);

$data2Tag->appendChild($pergduTag);
$data2Tag->appendChild($yeargduTag);
$data2Tag->appendChild($clggduTag);


$detailTag->appendChild($data2Tag);
$xml->save('C:\Users\samun\Desktop\biodataADBMS\data2.xml');
}



?>