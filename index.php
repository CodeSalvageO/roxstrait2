<?php
 $path = 'data.txt';
 if (isset($_POST['field1']) && isset($_POST['wow'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['field1'].' - '.$_POST['wow'];
    fwrite($fh,$string); 
    fclose($fh); 
 }
?>
