function refreshChat()
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
    displayMessages(obj);
    }
  }
xmlhttp.open("GET","chat.php?update_token=1",true);
xmlhttp.send();
}

function displayMessages(msgs) {
  var myDiv = document.getElementById("myDiv");
  for (var i=0;i<msgs.length;i++) {
    var msg = msgs[i];
    var text = msg.user_id + " says " + msg.text + " at " + msg.time;
    var bubble = document.createElement("p");
    bubble.appendChild(document.createTextNode(text));
    myDiv.appendChild(bubble);
    setTimeout(function() { myDiv.removeChild(bubble); }, 5000);
  }
}

var myVar = setInterval(function(){refreshChat()},1000);
