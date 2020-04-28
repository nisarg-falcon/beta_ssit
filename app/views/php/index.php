<?php
    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $smarty = new Smarty();
    // echo getcwd();
    $nav3_data = [
        'item1' => array("courses" => "courses"),
        'item2' => array("director's message" => "director"),
        'item3' => array("About Institute" => "institute"),
        'item4' => array("EVENTS" => "events"),
        'item5' => array("Social Presence" => "socialmedia"),
        'item6' => array("Gallery" => "gallery")
    ];
    $get_departments = "SELECT name from departments;";
    $departments = mysqli_query($con,$get_departments);
    $get_dm = "SELECT message,added_at FROM director_message LIMIT 1;";
    $dm = mysqli_query($con,$get_dm);
    $data = [
        "navitems" => $nav3_data,
        "dept" => $departments,
        "dm" => $dm
    ];
    $smarty->assign('data',$data);
    $smarty->display('../app/views/template/index.tpl');
    
?>