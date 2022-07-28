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
	<td>hobbies<input name="hobbies"></td>
		<td><input type="checkbox" name="brands" value="Mi">Mi</td>
		<td><input type="checkbox" name="brands" value="Oppo">Oppo</td>
		<td><input type="checkbox" name="brands" value="samsung">Samsung</td>
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
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$contact=$_REQUEST['contact'];
        $hobbies=$_REQUEST['hobbies'];
		$brands=$_POST['brands'];  
		$chk="";
		//$chk1="";  
		foreach($brands as $item){  
      		 $chk .= $item.",";
			// echo $item;
   		   
			//$insert = "INSERT INTO stud(hobbies)VALUES('$item')";
            
        }
        
		$insert="INSERT INTO `stud`(`name`,`email`,`contact`,`hobbies`)VALUE('$name','$email','$contact','$chk')";
		$result=mysqli_query($con,$insert);
		//$result=mysqli_query($con,$insert);
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