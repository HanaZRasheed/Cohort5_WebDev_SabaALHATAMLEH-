<?php
include './config.php';
 
if(isset($_POST['name'])){
    $data= $mysqli->query("INSERT INTO `fyrhp`.`contacus` ( `name`, `mail`, `subject`, `message`)
    VALUES ('$_POST[name]', '$_POST[email]','$_POST[subject]', '$_POST[message]');");
    if($data)
        echo 'inserted';
    
    else
    {echo 'saba';
    echo $mysqli->error;
    }
};
?>

