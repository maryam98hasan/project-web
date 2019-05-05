<?php 

$link = mysqli_connect("localhost", "root", "", "wedding");
	$name=$_POST['name'];
	

$query = mysqli_query($link,"select * from regis where name='$name'");


 if (mysqli_num_rows ($query)==1) 
 {
$password=rand(100,999);

$query2 = mysqli_query($link,"update regis set password='$password' where name='$name' ");
echo"
  <script>
  alert('you are update your password user  ' );
  </script>
	
	 ";

echo $name;
echo "<br>";
echo" The new Password is ";
echo$password;

}
else
{
echo 'you entered wrong name please check the name when entering';

}

?>