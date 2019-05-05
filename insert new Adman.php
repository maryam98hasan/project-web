<?php

$link=mysqli_connect('localhost','root','','wedding');
    $name=$_POST['name'];
    $password=$_POST['password'];
	
	$qs=mysqli_query($link,"insert into register values('$name','$password')");
	
     echo"
	 
  <script>
  alert('لقد قمت بأضافة مدير جديد');
  </script>
	 
	 ";
  $n1=1;
	  $n2="MANAGER PAGE.php";
    echo"<meta http-equiv='refresh' content='".$n1.";url=".$n2."'/>";
 
	


?>