<html>
<body>
<?php
$myfile = fopen("sample.txt", "r") or die("Unable to open file!");
#echo fread($myfile,filesize("sample.txt"));
fgetc($myfile);
fclose($myfile);
?>
</body>
</html>