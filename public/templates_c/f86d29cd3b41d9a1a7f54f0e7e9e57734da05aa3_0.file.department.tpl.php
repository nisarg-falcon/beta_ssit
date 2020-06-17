<?php
/* Smarty version 3.1.33, created on 2020-06-14 22:02:18
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\department.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee6824a199e51_92854772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f86d29cd3b41d9a1a7f54f0e7e9e57734da05aa3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\department.tpl',
      1 => 1592164933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/includes/header.tpl' => 1,
    'file:../template/includes/header2.tpl' => 1,
    'file:../template/includes/header3.tpl' => 1,
    'file:../template/department/alldepartment.tpl' => 1,
    'file:../template/department/".((string)$_smarty_tpl->tpl_vars[\'data\']->value[\'department\']).".tpl' => 1,
    'file:../template/includes/footer.tpl' => 1,
  ),
),false)) {
function content_5ee6824a199e51_92854772 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="icon" href="<?php echo URLROOT;?>
/img/logo.png">
    <?php if ($_smarty_tpl->tpl_vars['data']->value['department'] != 'all') {?>
        <title>SSIT | Department | <?php echo ucfirst($_smarty_tpl->tpl_vars['data']->value['department']);?>
</title>    
    <?php } else { ?>
        <title>SSIT | Departments</title>
    <?php }?>
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/header.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/department.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/footer.css">
    <?php if ($_smarty_tpl->tpl_vars['data']->value['department'] != 'all') {?>
        <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/branch.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <?php }?>
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
        <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
        <div class="header-section position-relative">
            <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
            <div class="container-fluid media-container position-absolute">
                <img src="<?php echo URLROOT;?>
/img/landing/dept.jpg" class="video1 container-fluid">
            </div>             
        </div>
        <div class="header-txt position-absolute">
            <div class="txt-container container">
                <?php if ($_smarty_tpl->tpl_vars['data']->value['department'] == 'all') {?>
                    <p>Departments</p>
                    <p>At SSIT</p>
                <?php } else { ?>
                    <p><?php echo $_smarty_tpl->tpl_vars['data']->value['department'];?>
</p>
                    <p>department</p>
                <?php }?>
            </div>    
        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-up"></span></button>        
        <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
        <?php if ($_smarty_tpl->tpl_vars['data']->value['department'] == 'all') {?>
            <?php $_smarty_tpl->_subTemplateRender("file:../template/department/alldepartment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>        
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("file:../template/department/".((string)$_smarty_tpl->tpl_vars['data']->value['department']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/dbc30cce47.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/node_modules/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/node_modules/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/CSSPlugin.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/js/department.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://unpkg.com/swiper/js/swiper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/js/scroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/js/branch_swiper.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/js/header.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo URLROOT;?>
/js/backtotop.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/js/bootstrap.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
