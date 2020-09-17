<?php
include './config.php';
 
if(isset($_POST['name'])){
    $data= $mysqli->query("INSERT INTO `fyrhp`.`complient_information` (`name`, `mail`, `number`, `type`, `buildname`, `subject`, `compliment`)
    VALUES ('$_POST[name]', '$_POST[mail]', '$_POST[number]', '$_POST[type]', '$_POST[buildingname]', '$_POST[subject]', '$_POST[comptxt]');");
    if($data)
        echo 'inserted';
    
    else
    {echo 'hazim';
    echo $mysqli->error;
    }
};
?>

