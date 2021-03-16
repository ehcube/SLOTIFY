<?php
include(“includes/config.php”);

if(isset($_SESSION[‘userLoggedin’])) {
    $userLoggedIn=$_SESSION[‘userLoggedIn’];
}
 else {
       header(“Location: register.php”);
}
  
?>

<html>
<head>
	<title>Welcome to Slotify!</title>
</head>
<body>
	Hello!

</body>
</html>
