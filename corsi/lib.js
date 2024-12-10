var request = new XMLHttpRequest();
var params ="";
request.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200){
				//Risposta dal server					
				document.getElementById("alunni").innerHTML+=this.responseText;
			}        		
    };
request.open('POST', 'LeggiAlunni.php', true);
request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
request.send(params);

function apricorsi(){
    var request = new XMLHttpRequest();
    var params ="id="+document.getElementById("alunno").value;
    request.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
                    //Risposta dal server					
                    document.getElementById("corsi").innerHTML=this.responseText;
                }        		
        };
    request.open('POST', 'LeggiCorsoAlunno.php', true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send(params);
}