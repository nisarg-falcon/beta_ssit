<?php
    $smarty = new Smarty();
    $nav3_data = [
        'item1' => array("educational" => "educational"),
        'item2' => array("cultural" => "cultural"),
        'item3' => array("sports" => "sports"),
        'item3' => array("other" => "other")
    ];
    $data = [
        "navitems" => $nav3_data
    ];
    $smarty->assign('data',$data);
    $smarty->display(APPROOT.'/views/template/activities.tpl');
?>