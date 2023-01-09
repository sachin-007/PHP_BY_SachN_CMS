<?php
$file = "examplelovePHP.txt";

if($handle = fopen($file,'w')){
    fwrite($handle,"i love to code in php");
    fclose($handle);
}else{
    echo "The application was not able to write on the file";
}
?>