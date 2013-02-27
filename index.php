<!DOCTYPE html>
<html>

<head><title>Buscador</title>


<link rel="stylesheet" type="text/css" href="estilos.css">

<script src="ajax.js"></script>

<script>

function myFunction(){

var n=document.getElementById('bus').value;

if(n==''){

 document.getElementById("myDiv").innerHTML="";
 document.getElementById("myDiv").style.border="0px";

 document.getElementById("pers").innerHTML="";

 return;
}

loadDoc("q="+n,"proc.php",function(){

  if (xmlhttp.readyState==4 && xmlhttp.status==200){

    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    document.getElementById("myDiv").style.border="1px solid #A5ACB2";

    }else{ document.getElementById("myDiv").innerHTML='<img src="load.gif" width="50" height="50" />'; }

  });
}

//-------------------------------

function myFunction2(cod){

document.getElementById("myDiv").innerHTML="";
document.getElementById("myDiv").style.border="0px";

loadDoc("vcod="+cod,"proc2.php",function(){

  if (xmlhttp.readyState==4 && xmlhttp.status==200){

    document.getElementById("pers").innerHTML=xmlhttp.responseText;
    
    }else{ document.getElementById("pers").innerHTML='<img src="load.gif" width="50" height="50" />'; }

  });
}

</script>



</head>

<body>


http://codigojerry.blogspot.com/
<h1><b>Buscador en tiempo real</b></h1>

HTML + CSS + PHP + AJAX + JavaScript + MySQL

<br /><br />

<input type="text" id="bus" onkeyup="myFunction()" size="30" required="required" autofocus="autofocus" placeholder="Buscar" />

<div id="myDiv"></div>

<br />

<div id="pers"></div>

</body>

</html>