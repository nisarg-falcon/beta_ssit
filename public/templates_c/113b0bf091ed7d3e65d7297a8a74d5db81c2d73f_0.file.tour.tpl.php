<?php
/* Smarty version 3.1.33, created on 2020-05-25 21:27:55
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\tour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecc1c3be53e86_07987539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '113b0bf091ed7d3e65d7297a8a74d5db81c2d73f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\tour.tpl',
      1 => 1590434874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/includes/header.tpl' => 1,
    'file:../template/includes/header2.tpl' => 1,
    'file:../template/includes/footer.tpl' => 1,
  ),
),false)) {
function content_5ecc1c3be53e86_07987539 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo URLROOT;?>
/img/logo.png">    
    <title>Contact us</title>
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/header.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/tour.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/footer.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
   <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <div class="header-section position-relative">
        <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>           
    </div>

    <!-- tour -->
    <h1 class="h1">Virtual Campus Tour</h1>
    <div class="tour">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1590432769765!6m8!1m7!1sCAoSK0FGMVFpcE5SdU16dGRmTHNJcWd4NTJzUVVnSUpYSjZ1UFpYMDNjV3NTbms.!2m2!1d23.11541420479152!2d72.63023034527203!3f0!4f10!5f0.7820865974627469" width="80%" height="90%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    
    <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
 type="module"  src="<?php echo URLROOT;?>
/node_modules/gsap/all.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="module" src="<?php echo URLROOT;?>
/js/scroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo URLROOT;?>
/js/backtotop.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/js/bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/dbc30cce47.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/js/header.js"><?php echo '</script'; ?>
>   
</body>
</html><?php }
}
