<?php

$dataFile = 'datafile.dat';

if(isset($_POST["send_message"])){
    $message = trim($_POST['message']);
    $user = trim($_POST['user_name']);

    if(!empty($message)){

        if(empty($user)){
          $user = "nanashi-anonymous";
        }
        $postDate = date('Y-m-d H:i:s');
        $newData  = $message." / ".$user." / ".$postDate."\n";
        $fp = fopen($dataFile,'a');
        fwrite($fp,$newData);
        fclose($fp);
    }
}
?>
