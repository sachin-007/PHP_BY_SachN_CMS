<?php
$file = "examplelovePHP.txt";

if($handle = fopen($file,'r')){
    echo $content = fread($handle,filesize($file));
    fclose($handle);
}else{
    echo "The application was not able to read on the file";
}

?>