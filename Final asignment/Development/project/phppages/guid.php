<?php
include './config.php';
 
if(isset($_POST['natnum'])){
    $data= $mysqli->query("INSERT INTO `fyrhp`.`guid_licence` (`natid`, `arname`, `engname`, `socialstatus`, `moname`, `pob`, `dob`, `gender`, `degree`, `field`, `dog`, `uni`) 



    VALUES ('$_POST[natnum]', '$_POST[arname]','$_POST[engname]', '$_POST[status]', '$_POST[moname]', '$_POST[pob]', '$_POST[dob]', '$_POST[gender]', '$_POST[degree]', '$_POST[field]', '$_POST[dog]', '$_POST[uni]');");
    if($data)
     
    echo '<script>     
    function show_alert() {
        alert("لقد قمت بتقديم طلب تجديد رخصة دليل سياحي بنجاح");
    }
    
    show_alert();   
</script>'; 


    
    else
    {echo 'hazim';
    echo $mysqli->error;
    }
};
?>




