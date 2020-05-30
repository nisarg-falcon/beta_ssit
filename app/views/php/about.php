<?php
    $smarty = new Smarty();
    $nav3_data = [
        'item1' => array("Why SSIT?" => "why-ssit"),
        'item2' => array("About Trust" => "about-trust"),
        // 'item3' => array("SSIT Family" => "ssit-family")
        // 'item4' => array("" => "")
        // 'item5' => array("clubs" => "club"),
        // 'item6' => array("play ground" => "ground")
    ];
    $data = [
        "navitems" => $nav3_data
    ];
    $smarty->assign('data',$data);
    $smarty->display(APPROOT.'/views/template/about.tpl');
?>