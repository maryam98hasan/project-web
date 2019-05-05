<?php
$link = mysqli_connect("localhost", "root", "", "wedding");
	$name=$_POST['name'];
	$password=$_POST['password'];
    $qi=mysqli_query($link,"insert into regis values('$name','$password')");
    if($qi)
   	{	 echo"<h1>";
	echo"
  <script>
  alert(' تم تسجيل الدخول الى الموقع بنجاح');
  </script>
	 
	 ";
 echo"</h1>";
		
		
	  $n1=1;
	  $n2="pro.php";
    echo"<meta http-equiv='refresh' content='".$n1.";url=".$n2."'/>";
	}	
    else
    echo "لم يتم تسجيل الدخول الى الموقع حاول مرة اخرى  ";
?>