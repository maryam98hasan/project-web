<html>
<style type="text/css">

body{

background-image:url('27.jpg');
background-attachment:fixed;
background-position:center;
-webkit-background-size:cover;
}
h1{
color:#fff;
font-size:100px;
margin-top:50px;
background-color:rgba(0,0,0,0.6);
}
#h{
background-color:rgba(255,255,255,0.3);
width:550px;
height:650px;
}
h2{
front-size:35px;
color:rgba(255,0,0);
text-shadow:2px 2px 2px  blue;
}
.in{
width:350px;
height:40px;
front-size:30px;
color :rgba(0,10,228,0.3);
text-shadow:2px 2px 2px red;
background-color:rgba(0,0,0,0);
border-color:red;
border-bottom:4px soild black;
Padding-left:15px;
}
.in:active{
background-color:rgba(0,0,0,0.7);
}
  #sub{
 width:100px;
 height:40px;
 background-color:rgba(0,0,0,0.4);
 font-size:30px;
 color:black.;
 text-shadow:2px 2px 2px bule;
 }
 #sub:hover
 {
 background-color:rgba(0,0,0,0.9);
 color:#fff;
 transparent-duration:0.55;
 cursor:pointer;
 border:black;
 }
</style>
<head>
<title> Forgot page </title>
</head>
<body>
<center>
<br><br><br><br>

<form action ="forget.php" method="post" >
<br>
<div id="h">
 <h1> Welcome in Forgot Password </h1>

 <h2> Please Enter your name :</h2><br>

<input type="text" name ="name"class="in">
<button type="submit"   id ="sub" >new</button>
</form>
</center> 
</body>
</html>