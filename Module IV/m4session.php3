<?php  
session_start();  
?>  
<html>  
<body>  
<?php  
$_SESSION["user"] = "VIT AP";  
echo "Session information are set successfully.<br/>";  
?>  
<a href="session.php3">Visit next page</a>  
</body>  
</html>