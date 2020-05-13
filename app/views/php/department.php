<?php
    $smarty = new Smarty();
    if($data['department'] == 'all'){
        $nav3_data = [
            'item1' => array("civil" => "civil"),
            'item2' => array("computer" => "computer"),
            'item3' => array("electrical" => "electrical"),
            'item4' => array("Electronics and communication" => "ec"),
            'item5' => array("mechanical" => "mechanical"),
            'item6' => array("mca" => "mca")
        ];
    }
    else{
        $nav3_data = [
            'item1' => array("brochure" => "brochure"),
            'item2' => array("industrial visit" => "computer"),
            'item3' => array("labs" => "electrical"),
            'item4' => array("placements" => "ec"),
            'item5' => array("events" => "mechanical"),
            'item6' => array("staff" => "mca")
        ];
    }
    $data = [
        "navitems" => $nav3_data,
        "department" => $data['department']
    ];
    $smarty->assign('data',$data);
    $smarty->display('../app/views/template/department.tpl');
?>