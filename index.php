<?php
	try{
		$con new PDO ("mysql:host=localhost;dbname=kushal","root","");
		if(isset($_POST['signup'])){
			$name = $_POST['name'];
			$email =$_POST['email'];
			$pass =$_POST['pass'];
			$date =$_POST['date'];
			$month =$_POST['month'];
			$year =$_POST['year'];

			$insert = $con->prepare("INSERT INTO users (name,email,pass,date,month,year)  values(:name,:pass,:date,:month,:year)   ");

			$insert->bindParam(':name',$name);
			$insert->bindParam(':email',$email);
			$insert->bindParam(':pass',$pass);
			$insert->bindParam(':date',$date);
			$insert->bindParam(':month',$month);
			$insert->bindParam(':year',$year);
			$insert->execute();
		}
	}
	catch(PDOException $e){
		echo "error".$e->getMessage();
	}
?>

<form method="post">

<input type="text" name="name" placeholder="User Name">
<input type="text" name="email" placeholder="example@example.com">
<input type="text" name="pass" placeholder="************">
<select name="date">
<option value="DATE">DATE</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
</select>
<select name="month">
<option value="MONTH">MONTH</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
</select>
<select name="year">
<option value="YEAR">YEAR</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
</select>
<input type="submit" name="signup" value="SignUp">
</form>
