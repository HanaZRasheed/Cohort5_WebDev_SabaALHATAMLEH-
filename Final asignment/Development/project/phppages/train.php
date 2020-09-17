<?php
include './config.php';
 
if(isset($_POST['name'])){
    $data= $mysqli->query("INSERT INTO `fyrhp`.`training` (`name`, `natid`, `email`, `pob`, `gender`, `dob`, `addrss`, `uni`, `field`, `from`, `to`)
    VALUES ('$_POST[name]', '$_POST[natid]', '$_POST[mail]', '$_POST[pob]', '$_POST[gender]', '$_POST[dob]', '$_POST[address]', '$_POST[uni]', '$_POST[field]', '$_POST[from]', '$_POST[to]');");
    if($data)
        echo 'inserted';
    
    else
    {echo 'hazim';
    echo $mysqli->error;
    }
};
?>







