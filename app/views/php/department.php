<?php
    $smarty = new Smarty();
    $nav3_data = [
        'item1' => array("civil" => "civil"),
        'item2' => array("computer" => "computer"),
        'item3' => array("electrical" => "electrical"),
        'item4' => array("Electronics and communication" => "ec"),
        'item5' => array("mechanical" => "mechanical"),
        'item6' => array("mca" => "mca")
    ];
    $data = [
        "navitems" => $nav3_data
    ];
    $smarty->assign('data',$data);
    $smarty->display('../app/views/template/department.tpl');
?>