<?php
    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $query = "select dept_id,name from departments;";
    $departments = mysqli_query($con,$query);    
    if(!mysqli_num_rows($departments) > 0){
        $departments = null;
    }
    $query = "select f.id,f.name,f.img1,f.img2,f.img3,f.img4,f.img5,f.description,d.name as departments from facilities f,departments d where f.dept_id = d.dept_id;";
    $facilities = mysqli_query($con,$query);
    if(!mysqli_num_rows($facilities) > 0){
        $facilities = null;
    }
    $data = [
        'dept' => $departments,
        'facilities' => $facilities
    ];
    $smarty = new Smarty();
    $smarty->assign('data',$data);
    $smarty->display(APPROOT.'/views/template/admin/facility.tpl');
?>