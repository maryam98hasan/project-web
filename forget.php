<?php 

$link = mysqli_connect("localhost", "root", "", "wedding");
	$name=$_POST['name'];
	

$query = mysqli_query($link,"select * from register where name='$name'");


 if (mysqli_num_rows ($query)==1) 
 {
$password=rand(100,999);

$query2 = mysqli_query($link,"update register set password='$password' where name='$name' ");
echo"
  <script>
  alert('لقد قمت يتحديث الرمز السري الخاص بك ".$password."  ' );
  </script>
	
	 ";

	  $n1=1;
	  $n2="LOGIN.php";
    echo"<meta http-equiv='refresh' content='".$n1.";url=".$n2."'/>";	

}
else
{
echo 'لقد قمت بأدخال أسم خطاء حاول مرة اخرى ';

}

?>
