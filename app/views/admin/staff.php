<?php
    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $query = "select designation_id,name from designation;";
    $designations = mysqli_query($con,$query);
    $query = "select dept_id,name from departments;";
    $departments = mysqli_query($con,$query);
    $query = "select * from staff;";
    $staff = mysqli_query($con,$query);

    if(mysqli_num_rows($designations) == 0){
        $designations = null;
    }

    if(mysqli_num_rows($departments) == 0){
        $departments = null;
    }

    $data = [
        'departments' => $departments,
        'designations' => $designations,
        'staff' => $staff
    ];

    $smarty = new Smarty();
    $smarty->assign('data',$data);
    
    if(!empty($data['message'])){

        $smarty->assign('message',$data['message']);        
    }
    $smarty->display(APPROOT.'/views/template/admin/staff.tpl');
