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
			echo"
  <script>
  alert('القاعة التي قمت بأدخاله محجوزة قم بتغير أسم القاعة او تاريخ الحجز ');
  
  </script>
	
	 ";
	 
 echo"</h1>";
  $n1=1;
	  $n2="date of select.php";
    echo"<meta http-equiv='refresh' content='".$n1.";url=".$n2."'/>";
		}
	
	else{
		
		$qi=mysqli_query($link,"insert into BOOKING values('$name','$data','$Gmail','$time')");;
		 echo"<h1>";
	echo"
  <script>
  alert('لقد قمت بحجز القاعة ');
  </script>
	 
	 ";
 echo"</h1>";
  $n1=1;
	  $n2="pro.php";
    echo"<meta http-equiv='refresh' content='".$n1.";url=".$n2."'/>";	
		}
		

	
?>
