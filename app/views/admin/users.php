<?php
    $con = mysqli_connect('localhost','root','','ssit');
    $query = "select dept_id,name from departments;";
    $departments = mysqli_query($con,$query);
    $query2 = "SELECT u.user_id,u.username,d.name from users u, departments d where u.dept_id = d.dept_id;";
    $users = mysqli_query($con,$query2);
    
    if(!mysqli_num_rows($departments) > 0){
        $departments = null;
    }
    if(!mysqli_num_rows($users) > 0){
        $users = null;
    }
    $data = [
        'users' => $users,
        'departments' => $departments
    ];
    $smarty = new Smarty();
    $smarty->assign('data',$data);
    $smarty->display(APPROOT.'/views/template/admin/users.tpl');
?>