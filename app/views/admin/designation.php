<?php
    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $query = "select designation_id,name from designation;";
    $designations = mysqli_query($con,$query);
    
    if(mysqli_num_rows($designations) == 0){
        $designations = null;
    }

    $smarty = new Smarty();
    $smarty->assign('designations',$designations);
    
    if(!empty($data['message'])){

        $smarty->assign('message',$data['message']);        
    }
    $smarty->display(APPROOT.'/views/template/admin/designation.tpl');
?>