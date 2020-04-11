<?php
    $smarty = new Smarty();
    $nav3_data = [
        'item1' => array("Admission" => "admission"),
        'item2' => array("mq-admission" => "mq"),
        'item3' => array("merit list" => "merit-list"),
        'item4' => array("faqS" => "faq")
        // 'item5' => array("clubs" => "club"),
        // 'item6' => array("play ground" => "ground")
    ];
    $data = [
        "navitems" => $nav3_data
    ];
    $smarty->assign('data',$data);
    $smarty->display(APPROOT.'/views/template/admission.tpl');
?>