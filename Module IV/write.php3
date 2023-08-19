<html>
<body>
<?php
$myfile = fopen("vcb.txt", "w") or die("Unable to open file!");
$txt = "Webtechnology\n";
fwrite($myfile, $txt);
$txt = "Department of computerscience and engineering\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
</body>
</html>