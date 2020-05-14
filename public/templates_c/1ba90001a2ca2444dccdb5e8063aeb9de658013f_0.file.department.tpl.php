<?php
/* Smarty version 3.1.33, created on 2020-05-13 13:58:30
  from 'C:\xampp\htdocs\ssit\app\views\template\department.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ebbe0e6222527_23305514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ba90001a2ca2444dccdb5e8063aeb9de658013f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit\\app\\views\\template\\department.tpl',
      1 => 1589371107,
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
function content_5ebbe0e6222527_23305514 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="icon" href="<?php echo URLROOT;?>
/img/logo.png">
    <title>SSIT | Departments</title>
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
/img/img2.jpg" class="video1 container-fluid">
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
 src="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/js/bootstrap.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
