<html>
<body>
<?php
$myfile = fopen("vcb.txt", "a") or die("Unable to open file!");
$txt = "welcome to VITAP university\n";
fwrite($myfile, $txt);
$txt = "Amaravathi\n";
fwrite($myfile, $txt);
fclose($myfile);
#rename("vcb.txt","wt.txt");
#unlink("vcb.txt");
?>
</body>
</html>