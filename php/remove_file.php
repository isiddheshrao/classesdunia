<?php
if(isset($_POST['file'])){
    $class = $_POST['file'];
    $file = '../'.$class.'/'.$class.'_logo.png';
    if(file_exists($file)){
        unlink($file);
    }
}
?>
