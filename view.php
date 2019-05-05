<?php
$link = mysqli_connect("localhost", "root", "", "mz");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT id FROM halls ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
       
	 
	   echo "<table>";
            echo "<tr>";
                echo "<td>id</td>";
				echo"<td>Name </td>";
               
              
            echo "</tr>";   
        while($row = mysqli_fetch_array($result)){
			
            echo "<tr>";
                echo "<td>" . $row['id'] .     "</td>";
				 echo "<td>" . $row['Name'] .     "</td>";
              
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } 
else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>