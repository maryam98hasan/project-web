<?php 
	$link = mysqli_connect("localhost", "root", "", "wedding");
			 
 $id=$_POST['id'];
	$name=$_POST['name'];
	$location=$_POST['location'];
	$price=$_POST['price'];
	$size=$_POST['size'];
	$time=$_POST['time'];

	

    $qs=mysqli_query($link,"update halls set id='$id',name='$name',location ='$location',price='$price', 
      size='$size',time  ='$time' where id='".$id."'");	
				echo"
  <script>
  alert('لقد قمت بتحديث معلومات القاعة  ');
  </script>
	
	 ";
 $n1=1;
	  $n2="MANAGER PAGE.php";
    echo"<meta http-equiv='refresh' content='".$n1.";url=".$n2."'/>";
 
	
	
	?>