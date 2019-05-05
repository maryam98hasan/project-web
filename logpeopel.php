<?php
$link = mysqli_connect("localhost", "root", "", "wedding");
    $name=$_POST['name'];
	$passowrd=$_POST['passowrd'];
	
    $qi=mysqli_query($link,"insert into regis values('$name' , '$passowrd')");
    if($qi)
    echo "<h1>Successfully recorded</h1>";
    else
    echo "Nothing added ";
?>