<?php
/* Smarty version 3.1.33, created on 2020-07-06 17:55:55
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f03498b8695f2_72769007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87f978763e7bffd1af952fbd1e8ab66bc7dedc83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\admin.tpl',
      1 => 1586625916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f03498b8695f2_72769007 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container row d-flex justify-content-center ">

    <div class="container col-lg-5 bg-light text-center p-3 m-4">
        <h2 class="h2 ">Admin Login</h2>
        <form method="POST" action="<?php echo URLROOT;?>
/admins/login" >
            <div class="form-group">
                <label for="username" class="float-left">Username :</label>
                <input type="text" name="username" placeholder="username" class="form-control" id="username">
            </div>
            <div class="form-group">
                <label for="password" class="float-left">Password :</label>
                <input type="password" name="password" placeholder="password" class="form-control" id="password">
            </div>
            <input type="submit" name="submit" class="btn btn-success form-control ">
        </form> 
    </div>
</div>
    
</body>
</html><?php }
}
