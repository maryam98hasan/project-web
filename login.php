
<html>
<head>
<title>SMART WEB</title>
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
</head>
<body>
<?php
if(isset($_POST['submit']))
{
  $name=$_POST['username'];
  $pass=$_POST['password'];
  
  include("z.php");
  $query=mysqli_query($con,"SELECT * FROM register WHERE name='".$name."' AND password='".$pass."' ");
  if(mysqli_num_rows($query)>=1)
  {
	  $n1=1;
	  $n2="MANAGER PAGE.php";
    echo"<meta http-equiv='refresh' content='".$n1.";url=".$n2."'/>";
  
  }
  
  else
  {
     echo"
	 
  <script>
  alert('username or password is Error');
  </script>
	 
	 ";
  
  }
 }
?>
<center>
<div id="h">
<h1> WELCOME</h1>
  <form action="" method='post' >
    <h2> USERNAME</h2><br>
    <input class="in" type="text" name ="username" /> <br>
    <H2> PASSWORD</H2><br>
    <input class="in" type="password" name ="password" />
    <br> 
	<br> 
	<br>
   <input  id ="sub" type="submit"  name='submit' value="LOGIN" />
   </form>
  <form action="Forgotconnect.php" method="post">
     <input  id ="sub" type="submit"  name='submit' value="Forgot" />
 </form>
</div>
</center>
</HTML>

	
	
	