<?php
include './config.php';
 
if(isset($_POST['your_name'])){
    $data= $mysqli->query("INSERT INTO `fyrhp`.`contact_form_info` (`name`, `phone`, `email`, `comments`) 
    VALUES ('$_POST[your_name]', '$_POST[your_phone]','$_POST[your_email]', '$_POST[comments]');");
    if($data)
        echo 'inserted';
    
    else
    {echo 'hazim';
    echo $mysqli->error;
    }
};
?>