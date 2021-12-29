function fetch(){

	console.log("apun fetch ke aanadar hai");
	
  const xhr = new XMLHttpRequest();
    xhr.open('POST', "data1.xml", true);
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

      
	    console.log(name1);
     console.log(stream1);
     console.log(address1);
	    console.log(dob1);
     console.log(phone1);
	//yahan dada show karne ka code hai:

    // document.getElementById("name5").innerHTML=name1;
    // document.getElementById("stream5").innerHTML=stream1;
    // document.getElementById("address5").innerHTML=address1;
    // document.getElementById("dob5").innerHTML=dob1;
    // document.getElementById("phone5").innerHTML=phone1;
   
     

     //yahan data form me bheja ja raha hai taki php me dala ja sake
     // document.getElementById("name").value=name1;
     // document.getElementById("stream").value=stream1;
     // document.getElementById("address").value=address1;
     // document.getElementById("dob").value=dob1;
     // document.getElementById("phone").value=phone1;



   fun2();
  fun3();
 
}
}


function fun2(){
  const xhr = new XMLHttpRequest();
    xhr.open('POST', "data2.xml", true);
  xhr.onload = function(){
     insertphase2(this);
      }
    xhr.send();
    function insertphase2(xml){
     var xmlDoc = xml.responseXML;
     
      var p10=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('per10')[0].childNodes[0].nodeValue;
      var y10=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('year10')[0].childNodes[0].nodeValue;
      var c10=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('clg10')[0].childNodes[0].nodeValue;

      var p12=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('per12')[0].childNodes[0].nodeValue;
      var y12=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('year12')[0].childNodes[0].nodeValue;
      var c12=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('clg12')[0].childNodes[0].nodeValue;

      var pgdu=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('pergdu')[0].childNodes[0].nodeValue;
      var ygdu=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('yeargdu')[0].childNodes[0].nodeValue;
      var cgdu=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data2')[0].getElementsByTagName('clggdu')[0].childNodes[0].nodeValue;

      

       console.log("---------------------------------------")
      console.log(p10);
       console.log(y10);
     console.log(c10);
        console.log(p12);
     console.log(y12);
     console.log(c12);

      //yahan data form me jayega

    //  document.getElementById("p105").innerHTML=p10;
    // document.getElementById("125").innerHTML=p12;
    // document.getElementById("pg5").innerHTML=pgdu;





      //yahan data php me jayega
       // document.getElementById("percent10").value=p10;
       // document.getElementById("percent12").value=p12;
       // document.getElementById("percentgdu").value=pgdu;


      

}
}


function fun3(){
  const xhr = new XMLHttpRequest();
    xhr.open('POST', "data3.xml", true);
  xhr.onload = function(){
     insertphase3(this);
      }
    xhr.send();
    function insertphase3(xml){
     var xmlDoc = xml.responseXML;
     
      var course=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data3')[0].getElementsByTagName('course')[0].childNodes[0].nodeValue;
      var duration=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data3')[0].getElementsByTagName('duration')[0].childNodes[0].nodeValue;
      var total=xmlDoc.getElementsByTagName('detail')[0].getElementsByTagName('data3')[0].getElementsByTagName('total')[0].childNodes[0].nodeValue;

     
      //yahan data form me jayega

    //  document.getElementById("course5").innerHTML=p10;
    // document.getElementById("duration5").innerHTML=p12;
    // document.getElementById("total5").innerHTML=pgdu;


    //yahan data php me jayega
       // document.getElementById("course").value=p10;
       // document.getElementById("duration").value=p12;
       // document.getElementById("total").value=pgdu;


      console.log(course);
      console.log(duration);
     console.log(total);
      
}
}