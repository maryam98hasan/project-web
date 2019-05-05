<?PHP
$link=mysqli_connect("localhost", "root", "", "wedding");
    $name=$_POST['name'];
	
$sql="delete  from halls where name='".$name."'";  
 mysqli_query($link,$sql);
 echo"<h1>";
	echo"
  <script>
  alert('لقد قمت بحذف القاعة  ');
  </script>
	 
	 ";
 echo"</h1>";
  $n1=1;
	  $n2="MANAGER PAGE.php";
    echo"<meta http-equiv='refresh' content='".$n1.";url=".$n2."'/>";
?>
