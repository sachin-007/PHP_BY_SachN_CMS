<?php
$file="forGetDelete.txt";
$handle = fopen($file,'w');
fclose($handle);

unlink($file);
// unlink("forGetDelete.txt");
?>