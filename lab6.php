<html>
<head>
   <link href="style.css" rel="stylesheet" type="text/css">
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "lab7.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>

<body>
<header>
<ul id='right-nav'> 
     <li><a href='pro.php'><big>الصفحة الرئيسية </big></a></li></ul>
<ul id='right-nav'>  
     <li><a href= "delete.php" ><big>الغاء الحجز</big> </a></li>
     <li><a href=" add.php"><big>العروض الأضافية</big></a></li>
     <li><a href="date of select.php"><big>تاريخ الحجز</big></a></li>
     <li><a href="hall.php"><big>القاعات</big></a></li>
</ul>
</header></br> </br></br
<p><b>Start typing a name in the input field below:</b></p>
<form action="lab7.php" method="post"> 

First name: <input type="text" onkeyup="showHint(this.value)">

</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>

</html>
