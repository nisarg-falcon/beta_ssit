<?php   
$smarty = new Smarty();
$message = $data;
if(!empty($message['message'])){
    // print_r($message['counter']);
    echo $message['message'];
}

$smarty->display('../app/views/template/auth/login.tpl');