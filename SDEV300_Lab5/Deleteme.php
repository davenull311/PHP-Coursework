<?php
$file=$_POST['configdata'];
print ("About to show this configuration file:" . $file);
echo "<p></p>";
$results = system("type $file");

print "data is " . $results;
?>