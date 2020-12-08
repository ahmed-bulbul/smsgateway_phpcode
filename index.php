<!DOCTYPE html>
<html>
<head>
<title>Send SMS Registration Form to Mobile</title>
 <style>
        .container{
            width: 300px;
            margin: 50px auto;
			border:2px solid;
			padding: 20px 20px 20px 20px;
			background-color: darkcyan;  
        }  
    </style>
</head>
<body>
<center><h1>Registration Form With Send SMS in Mobile Live Example</h1></center>
<div class="container">

	<form action="" method="post">
		<table>
		<tr>
		<td>Name :</td>
		<td><input type="text" name="name" placeholder="Enter Name"></td>
		</tr>
		<tr>
		<td>Email :</td>
		<td><input type="email" name="email" placeholder="Enter Email"></td>
		</tr>
		<tr>
		<td>Contact No :</td>
		<td><input type="text" name="contact" placeholder="Contact No"></td>
		</tr>
		<tr>
		<td>Message  :</td>
		<td><textarea id="message" name="message" rows="4" cols="30">
  
 		 </textarea></td>
		</tr>
		<tr>
		<td></td>
		<td>
		 <button type="submit"  name="submit">Submit</button>
		</td>
		</tr>
		</table>
	</form>
</div>
</body>
</html>
 <?php
 

	if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$message = $_POST['message'];
	
 
  $dest_mobileno=$contact;
 $sms = urlencode(htmlspecialchars("Congratulation ".$name." you have registration Successfully "));
// $username = "******"; //use your sms api username
// $pass = "*******"; //enter your password
 //$senderid = "********";//BTOYOU use your sms api sender id
 $priority = "ndnd";//BTOYOU use your sms api sender id
 $stype = "normal";//BTOYOU use your sms api sender id
	  
	   $sms_url = sprintf("http://$url/sms/sms/sendSms?snedTo=$dest_mobileno&message=$sms&accessKey=$key");
 
 $ch=curl_init();
 curl_setopt($ch,CURLOPT_URL,$sms_url);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch,CURLOPT_POSTFIELDS,1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch,CURLOPT_TIMEOUT, '3');
 $content = trim(curl_exec($ch));
 curl_close($ch);
 
 //----------SMS Code End Here------------	
		
		echo "<script>alert ('Submited Successfully!')</script>";
	}
	
	?>
