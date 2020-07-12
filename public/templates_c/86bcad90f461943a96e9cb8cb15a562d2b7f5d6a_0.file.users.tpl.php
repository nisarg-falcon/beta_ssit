<?php
/* Smarty version 3.1.33, created on 2020-07-06 17:56:48
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\admin\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0349c09b4852_67682785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86bcad90f461943a96e9cb8cb15a562d2b7f5d6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\admin\\users.tpl',
      1 => 1586625916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0349c09b4852_67682785 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSIT</title>
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="container-fluid p-5 row main no-gutters">
        <div class="form-group p-1 col-12">
            <a href="<?php echo URLROOT;?>
/admins" class="btn btn-danger form-control w-auto">Go Back</a>
        </div>
        <div
            class="container add_user form-group bg-light p-4 mt-5 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <h1 class="h2 mb-4 text-center">Add User</h1>
            <form action="add_user" method="post">
                <input type="text" name="name" placeholder="Enter Name" class="form-control mb-3" required>
                <input type="text" name="username" placeholder="Enter Username" class="form-control mb-3" required>
                <input type="password" name="password" placeholder="Enter Password" class="form-control mb-3" required>
                <?php if ($_smarty_tpl->tpl_vars['data']->value['departments'] != null) {?>
                <select name="department" class="form-control mb-3 custom-select" required>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['departments'], 'department');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['department']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['department']->value['dept_id'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['department']->value['name'];?>

                        </option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <?php }?>
                    
                    <div class="form-group p-1 text-center">
                        <input type="submit" name="submit" value="submit" class="btn btn-primary form-control">
                    </div>

            </form>
        </div>
        <div class="container show_users mt-5 col-sm-12 col-md-8 col-lg-8 col-xl-8 pl-xl-5 pl-lg-4 pl-md-3 pl-sm-0">
            <?php if ($_smarty_tpl->tpl_vars['data']->value['users'] != null) {?>
            <h2 class="h2 mb-4 text-center">Active Users</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['users'], 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                        <td><a href="<?php echo URLROOT;?>
/admins/delete_user/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <?php } else { ?>
            <p>There are no users active</p>
            <?php }?>
        </div>
        
    </div>
</body>
</html><?php }
}
