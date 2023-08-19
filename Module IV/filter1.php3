<!DOCTYPE html>
<html>
<body>

<?php
$str = "<h1><li>Hello World!</li></h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>

</body>
</html>