<?php
session_start();
// store session data
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
<p>watching as <?= $email ?></p>
<script>
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    var response = xmlhttp.responseText;
    var obj = JSON.parse(response);
    //alert(obj[1].user_id);
    document.getElementById("myDiv").innerHTML=obj[0].user_id + " says " + obj[0].text;//xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","chat.php?update_token=1",true);
xmlhttp.send();

}
var myVar = setInterval(function(){loadXMLDoc()},1000);
</script>
</head>
<body>

<div id="myDiv"><h2>Let AJAX change this text</h2></div>
<button type="button" onclick="loadXMLDoc()">Change Content</button>

</body>
</html>

