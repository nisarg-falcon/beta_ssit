<?php
    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $query = "select name,code,description,dept_id from departments;";
    $departments = mysqli_query($con,$query);
    
    if(!mysqli_num_rows($departments) > 0){
        $departments = null;
    }

    $smarty = new Smarty();
    $smarty->assign('departments',$departments);
    $smarty->display(APPROOT.'/views/template/admin/departments.tpl');
?>