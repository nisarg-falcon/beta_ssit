<?php
/* Smarty version 3.1.33, created on 2020-07-06 17:56:10
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\admin_panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f03499a6d4e10_95410306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53ddd9eb2a93f30cd6112e0b3a86c297e3335935' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\admin_panel.tpl',
      1 => 1586625916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f03499a6d4e10_95410306 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSIT</title>
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/admin_panel.css">
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>

<body>
    <div class="container-fluid">
        <a href="<?php echo URLROOT;?>
/admins/logout" class="btn btn-danger m-4">Logout</a>
        <div class="container row mx-auto" id="admin-nav">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <a href="<?php echo URLROOT;?>
/admins/users"
                    class="h-100 w-100 d-flex align-items-center justify-content-center bg-dark  h4 text-white">Users</a></div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <a href="<?php echo URLROOT;?>
/admins/departments"
                    class="h-100 w-100 d-flex align-items-center justify-content-center bg-dark  h4 text-white">Departments</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <a href="<?php echo URLROOT;?>
/admins/designation"
                    class="h-100 w-100 d-flex align-items-center justify-content-center bg-dark  h4 text-white">Designation</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <a href="<?php echo URLROOT;?>
/admins/staff"
                    class="h-100 w-100 d-flex align-items-center justify-content-center bg-dark  h4 text-white">Staff
                    Info</a></div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <a href="<?php echo URLROOT;?>
/admins/facility"
                    class="h-100 w-100 d-flex align-items-center justify-content-center bg-dark  h4 text-white">Facilities</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <a href="<?php echo URLROOT;?>
/admins/material"
                    class="h-100 w-100 d-flex align-items-center justify-content-center bg-dark  h4 text-white">Study
                    Material</a></div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <a href="<?php echo URLROOT;?>
/admins/events"
                    class="h-100 w-100 d-flex align-items-center justify-content-center bg-dark  h4 text-white">Events</a>
            </div>
        </div>

    </div>
</body>

</html><?php }
}
