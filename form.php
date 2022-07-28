<html>
<body>
<table align="center" border="2">
<form action="" method="post">
<tr>
	<td>Name:</td>
	<td><input type="text" name="name" id="name" value=""></td>
</tr>	
<tr>
	<td>Email:</td>
	<td><input type="email" name="email" id="email" value=""></td>
</tr>
<tr>
	<td>Contact:</td>
	<td><input type="number" name="contact" id="contact" value=""></td>
</tr>
<tr>
	<td>hobbies</td>
		<td><input type="checkbox" name="hobbie" value="Cricket">Cricket</td>
		<td><input type="checkbox" name="hobbie" value="Music">Music</td>
		<td><input type="checkbox" name="hobbie" value="Dance">Dance</td>
</tr>
	<td>
	<input type="submit" name="btnsubmit" value="register">
	<input type="reset" name="btnclear" value="clear"></td>
</tr>
</form>
</table>
</body>
</html>
<?php	
	include "config.php";
	if(isset($_POST['btnsubmit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$hobbie=$_POST['hobbie'];
		$hobbie=$_POST['hobbie'];  
		$chk="";
		
		foreach($hobbie as $chk1){  
      		 $chk .= $chk1.",";
			//echo "chk1";
   		}    
			//$sql = "INSERT INTO `stud`(hobbie)VALUES( '$chk' )";
		$insert="INSERT INTO `stud`(`name`,`email`,`contact`,`hobbies`)VALUE('$name','$email','$contact','$chk')";  
		$result=mysqli_query($con,$insert);
		// $checkbox1=$_POST['techno'];  
		// $chk="";  
		// foreach($checkbox1 as $chk1){  
      	// 	$chk .= $chk1.",";
   		// }    
		// 	$sql = "INSERT INTO checkbox(techno)VALUES( '$chk' )";
		// if($result==TRUE)
		// 	echo "yes";
		// else
		// 	echo "no";
	}	
	
?>