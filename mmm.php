<HTML>
<BODY>
<FORM> </FORM>
<BUTTON> BOOKING </BUTTON>
</BODY>
</HTML>
<?PHP
$link = mysqli_connect("localhost", "root", "", "wedding");
     
    $name=$_POST['name'];
$qm = "  SELECT * from halls where name='".$name."' "  ;
	
	$result2 = mysqli_query($link,$qm);
	
	
	if($result2<0 )
	{
			echo"
  <script>
  alert('dont have this hall');
  
  </script>
	
	 ";
	 
 echo"</h1>";
  $n1=1;
	  $n2="date of select.php";
    echo"<meta http-equiv='refresh' content='".$n1.";url=".$n2."'/>";
		}
	
	else{
		
	echo"
  <script>
  alert(' we have ');
  </script>
	 
	 ";
 echo"</h1>";
  $n1=1;
	  $n2="booking.php";
    echo"<meta http-equiv='refresh' content='".$n1.";url=".$n2."'/>";	
		}
		
	
	
?>
