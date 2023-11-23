
<?php include '../../layouts/header.php';?>

<html>
<head>   
<title>  
Login Page  
</title> 
<link rel="stylesheet" type="text/css" href="../../css/mystyle.css"> 
</head>  
<body bgcolor="white">  

<form action="../control/login_control.php" method="POST">
Email: <input type="email" name="email"> 
<br/>
Password: <input type="password" name="password">
<input type="submit" name="login" value="Log In">
<br>
</form>

<?php include '../../layouts/footer.php';?>
</body>

</html>