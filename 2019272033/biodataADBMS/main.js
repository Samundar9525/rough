console.log("connection sucess ful");


function fun1(){
	console.log("apun 1st  function ke aanadar hai");

	var name=document.getElementById("name").value;
	var stream=document.getElementById("stream").value;
	var address=document.getElementById("address").value;
	//gender wala baaad me banayenge hai
	var dob=document.getElementById("dob").value;
	var phone=document.getElementById("phone").value;
	
	const xhr = new XMLHttpRequest();
    xhr.open('POST', "data.xml", true);
	xhr.onload = function(){
     insertphase1(this);
      }
    xhr.send();
    function insertphase1(xml){
     var xmlDoc = xml.responseXML;
      var name1=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data1')[0].getElementsByTagName('name')[0].childNodes[0].nodeValue=name;
      var stream1=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data1')[0].getElementsByTagName('stream')[0].childNodes[0].nodeValue=stream;
      var address1=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data1')[0].getElementsByTagName('address')[0].childNodes[0].nodeValue=address;
      var dob1=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data1')[0].getElementsByTagName('dob')[0].childNodes[0].nodeValue=dob;
      //var gender1=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data1')[0].getElementsByTagName('gender')[0].childNodes[0].nodeValue;
      var phone1=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data1')[0].getElementsByTagName('phone')[0].childNodes[0].nodeValue=phone;
      console.log(name1);
      console.log(stream1);



}     
}


function fun2(){
	console.log("apun 2nd function ke aanadar hai");

	var per10=document.getElementById("per10").value;
	var year10=document.getElementById("year10").value;
	var clg10=document.getElementById("clg10").value;

	var per12=document.getElementById("per12").value;
	var year12=document.getElementById("year12").value;
	var clg12=document.getElementById("clg12").value;

	var pergdu=document.getElementById("pergdu").value;
	var yeargdu=document.getElementById("yeargdu").value;
	var clggdu=document.getElementById("clggdu").value;
	
	const xhr = new XMLHttpRequest();
    xhr.open('POST', "data.xml", true);
	xhr.onload = function(){
     insertphase2(this);
      }
    xhr.send();
    function insertphase2(xml){
     var xmlDoc = xml.responseXML;
     
      var p10=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('per10')[0].childNodes[0].nodeValue=per10;
      var y10=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('year10')[0].childNodes[0].nodeValue=year10;
      var c10=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('college10')[0].childNodes[0].nodeValue=clg10;

      var p12=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('per12')[0].childNodes[0].nodeValue=per12;
      var y12=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('year12')[0].childNodes[0].nodeValue=year12;
      var c12=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('college12')[0].childNodes[0].nodeValue=clg12;

      var g10=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('graduationper')[0].childNodes[0].nodeValue=pergdu;
      var g10=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('graduationyear')[0].childNodes[0].nodeValue=yeargdu;
      var g10=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('graduationcollege')[0].childNodes[0].nodeValue=clggdu;

     // console.log(p10);
     // console.log(y10);
     // console.log(c10);
     

}
}

function fun3(){
	console.log("apun 3rd function ke aanadar hai");

	var course=document.getElementById("corse").value;
	var duration=document.getElementById("duration").value;
	var total=document.getElementById("price").value;
	
	const xhr = new XMLHttpRequest();
    xhr.open('POST', "data.xml", true);
	xhr.onload = function(){
     insertphase3(this);
      }
    xhr.send();
    function insertphase3(xml){
     var xmlDoc = xml.responseXML;
      var cou=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data3')[0].getElementsByTagName('course')[0].childNodes[0].nodeValue;
      var dur=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data3')[0].getElementsByTagName('duration')[0].childNodes[0].nodeValue;
      var tot=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data3')[0].getElementsByTagName('total')[0].childNodes[0].nodeValue;
      
      console.log(cou);
     console.log(dur);
     console.log(tot)
}
}


function fetch(){
	console.log("apun fetch ke aanadar hai");
	const xhr = new XMLHttpRequest();
    xhr.open('POST', "data.xml", true);
	xhr.onload = function(){
     fetchphase1(this);
      }
    xhr.send();
    function fetchphase1(xml){
     
     var xmlDoc = xml.responseXML;
      var name1=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data1')[0].getElementsByTagName('name')[0].childNodes[0].nodeValue;
      var stream1=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data1')[0].getElementsByTagName('stream')[0].childNodes[0].nodeValue;
      var address1=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data1')[0].getElementsByTagName('address')[0].childNodes[0].nodeValue;
      var dob1=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data1')[0].getElementsByTagName('dob')[0].childNodes[0].nodeValue;
      //var gender1=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data1')[0].getElementsByTagName('gender')[0].childNodes[0].nodeValue;
      var phone1=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data1')[0].getElementsByTagName('phone')[0].childNodes[0].nodeValue;

      var p10=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('per10')[0].childNodes[0].nodeValue;
      var y10=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('year10')[0].childNodes[0].nodeValue;
      var c10=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('college10')[0].childNodes[0].nodeValue;
	

	console.log(name1);
     console.log(stream1);
     console.log(address1);
	console.log(dob1);
     console.log(phone1);
     console.log(c10);
	console.log(p10);
     console.log(y10);
     console.log(c10);

}
}




