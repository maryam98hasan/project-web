<?PHP
$link = mysqli_connect("localhost", "root", "", "wedding");
    $id=$_POST['id'];
    $name=$_POST['name'];
	$location=$_POST['location'];
	$price=$_POST['price'];
	$size=$_POST['size']; 
	$time=$_POST['time']; 
	

	
	
	
	$qr = "SELECT * from halls where id='".$id."' and name='".$name."'"   ;

	$result = mysqli_query($link,$qr);
	$row = mysqli_num_rows($result);
	
	
	if($row>0){
			echo"
  <script>
  alert('لقد قمت بأدخال معلومات قاعة محجوزة مسبقا  ');
  </script>
	
	 ";

		}
	
	else{
		
		$qi=mysqli_query($link,"insert into halls values('$id','$name','$location','$price','$size','$time')");;
		 
   echo"
	 
  <script>
  alert('لقد قمت بأضافة قاعة جديدة ');
  </script>
	 
	 ";
  $n1=1;
	  $n2="MANAGER PAGE.php";
    echo"<meta http-equiv='refresh' content='".$n1.";url=".$n2."'/>";
	}
		
?>