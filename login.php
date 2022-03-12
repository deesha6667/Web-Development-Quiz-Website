<?php
	session_start();
	require_once('C:\xampp\htdocs\PHP\dbconfig\config.php');
?>

<!DOCTYPE html>
<html lang="en" and dir="Itr">
<head>
    <meta charset="utf-8">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form class="box" action="login.php" method="POST">

        <h1>login</h1>
        <div class="imgcontainer">
            <form class="form" id="form">
            <img src="images/avatar.png" alt="Avatar" class="avatar" style="height: 150px;
             width: 150px; image-resolution: center;">
          </div>
        <input type="text" name="Email" placeholder="Email" id="Email" required>
        <input type="password" name="password" placeholder="password" id="password" required>
        <input type="submit" name="submit" value="submit">
    </form>
	
	<?php
			if(isset($_POST['submit']))
			{
				@$Email=$_POST['Email'];
				@$password=$_POST['password'];
				$query = "select * from user where Email='$Email' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				
					if(mysqli_num_rows($query_run)>0)
					{
						
					
						$_SESSION['Email'] = $Email;
						$_SESSION['password'] = $password;
					
						header( "Location: quizpage.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				
				
			}
			
		?>
</body>
</html>