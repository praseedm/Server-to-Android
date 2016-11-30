<?php
if(isset($_POST['name']))
{
	 $name = $_POST['name'];

	/* echo "Entered ... s";

	 $name = "hai";*/

	 require_once('connect.php');
	 $query = "INSERT INTO `apitest`.`check` (`name`) VALUES ('$name')";

  	if(empty($dbc)){
  		echo "...empty...";
  	}			
	  if(mysqli_query($dbc, $query)){
	 echo "Sucessfully Entered .....".$name;
	 }else{
	 echo "Could not, Data error !!!".$name;
	 
	 }
	
}
else{
	echo 'error';
}
?>