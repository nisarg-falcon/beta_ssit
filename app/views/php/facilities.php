<?php
 $smarty = new Smarty();
 $nav3_data = [
    'item1' => array("labs" => "labs"),
    'item2' => array("hostel" => "hostel"),
    'item3' => array("library" => "library"),
    'item4' => array("canteen" => "canteen"),
    'item5' => array("clubs" => "club"),
    'item6' => array("play ground" => "ground")
];
$data = [
    "navitems" => $nav3_data
];
$smarty->assign('data',$data);
$smarty->display(APPROOT.'/views/template/facilities.tpl');
?>
