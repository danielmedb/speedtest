<?php
    require('config.inc.php');

    if(isset($_POST['type'])){
        $mysqli->query("INSERT INTO highscore (`date`, `score`) VALUES('2019-01-01', '".$_POST['score']."')");
    }else{

        $mysqli->query("INSERT INTO highscore (`date`, `name`, `score`) VALUES('".$yearMonthDay."', '".$_POST['name']."', '".$_POST['highscore']."')");

        if(mysqli_affected_rows($mysqli) > 0){
            echo json_encode(array('message' => 'success'));
        }else{
            echo json_encode(array('message' => 'fail'));
        }
    }
?>