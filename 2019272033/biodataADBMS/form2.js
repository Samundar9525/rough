console.log("heloo samundar you are in java script page");


                        function validatedata(){
                             var nam=document.getElementById("corse").value;
   

                           const xhr = new XMLHttpRequest();
                           xhr.open('GET', "form2.xml", true);

                          xhr.onload = function(){
                           fun1(this);
                            }

                            xhr.send();

                    function fun1(xml){
                    var xmlDoc = xml.responseXML;
                             var cou1=xmlDoc.getElementsByTagName('sub')[0].getElementsByTagName('course')[0].childNodes[0].nodeValue;
                                var cou2=xmlDoc.getElementsByTagName('sub')[0].getElementsByTagName('course')[1].childNodes[0].nodeValue;
                                 var cou3=xmlDoc.getElementsByTagName('sub')[0].getElementsByTagName('course')[2].childNodes[0].nodeValue;
                                   var cou4=xmlDoc.getElementsByTagName('sub')[0].getElementsByTagName('course')[3].childNodes[0].nodeValue;
                                     var cou5=xmlDoc.getElementsByTagName('sub')[0].getElementsByTagName('course')[4].childNodes[0].nodeValue;
                                        
                                                      if( nam==cou1){
                                                         var i=0;
                                                         autofill(i);
                                                      
                                                      }
                                                      else if(nam==cou2){
                                                       var i=1;
                                                         autofill(i);

                                                      }
                                                      else if(nam==cou3){
                                                        var i=2;
                                                         autofill(i);
                                                      }    
                                                      else if(nam==cou4){
                                                        var i=3;
                                                         autofill(i);
                                                      }   
                                                      else if(nam==cou5){
                                                        var i=4;
                                                         autofill(i);
                                                      }     

                                                      function autofill(i){
                                                        var duration=xmlDoc.getElementsByTagName('sub')[0].getElementsByTagName('duration')[i].childNodes[0].nodeValue;
                                                         var price=xmlDoc.getElementsByTagName('sub')[0].getElementsByTagName('total')[i].childNodes[0].nodeValue;
                                                          var sylab=xmlDoc.getElementsByTagName('sub')[0].getElementsByTagName('syllabus')[i].childNodes[0].nodeValue;

                                                         document.getElementById('duration').value=duration +" months";
                                                         document.getElementById('price').value=price;
                                                         document.getElementById('syllabus').innerHTML=sylab;
                     

                                                      }



                                                        

}

}



 