<html>
<body>
<?php
$myfile = fopen("sample.txt", "r") or die("Unable to open file!");
/*#echo fgets($myfile)."<br>";
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}*/
#echo fgetc($myfile);
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>
</body>
</html>