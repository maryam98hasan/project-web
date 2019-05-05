<?PHP
$link = mysqli_connect("localhost", "root", "", "wedding");
     
    $name=$_POST['name'];
	$data=$_POST['data'];
	$time=$_POST['time']; 
   $Gmail=$_POST['Gmail']; 
	$qr = "  SELECT * from booking where date='".$data."' and name='".$name."' and time='".$time."'"  ;
	$result = mysqli_query($link,$qr);
	$row = mysqli_num_rows($result);
	
	  if($row>0){
		  	
		$qi=mysqli_query($link,"delete from  BOOKING where date='".$data."' and name='".$name."' and time='".$time."'" );
		 echo"<h1>";
	echo"
  <script>
  alert('لقد قمت بالغاء الحجز');
  </script>
	 
	 ";
 echo"</h1>";
  $n1=1;
	  $n2="pro.php";
    echo"<meta http-equiv='refresh' content='".$n1.";url=".$n2."'/>";

		}
	
	else{
		
	
	echo"
  <script>
  alert('الحجز الذي قمت بأدخاله غير متوفر يرجى التأكد من المعلومات والمحاولة مرة اخرى  ');
  
  </script>
	
	 ";
	 
 echo"</h1>";
  $n1=1;
	  $n2="delete.php";
    echo"<meta http-equiv='refresh' content='".$n1.";url=".$n2."'/>";
		}
		

	
?>
