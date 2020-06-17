<?php
/* Smarty version 3.1.33, created on 2020-06-17 15:41:04
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\team.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eea1d701c74e1_57102028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfd7894fd742271bc8b6f3453b31b0998121dfb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\team.tpl',
      1 => 1592401261,
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
function content_5eea1d701c74e1_57102028 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo URLROOT;?>
/img/logo.png">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/header.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/footer.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/team.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/css/bootstrap.css">    
    <title>SSIT | Team</title>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <div class="header-section position-relative">
        <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>                        
    </div>
    <div>
        <!-- <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-up"></span></button> -->
        <h1>Falcon Developers</h1>   
        <div class="team">
            <div class="card">
                <img src="<?php echo URLROOT;?>
/img/team/pritesh_barot.jpg" alt="John" style="width:100%; object-fit: fill;">
                <h1>Pritesh Brahmbhatt</h1>
                <p class="title">Team Leader</p>
                <div style="margin: 10px 0;">
                    <a href="https://www.facebook.com/pritesh.barot.3762/"><i class="fa fa-facebook"></i></a> 
                    <a href="https://www.instagram.com/pritesh_barot/"><i class="fa fa-instagram"></i></a> 
                    <a href="https://twitter.com/iampriteshbarot"><i class="fa fa-twitter"></i></a>  
                    <a href="https://www.linkedin.com/in/pritesh-barot-a5bb60179/"><i class="fa fa-linkedin"></i></a>  
                </div>
                <a href="mailto:priteshbarot1896@gmail.com"><h5>priteshbarot1896@gmail.com</h5></a>
            </div>
            <div class="card">
                <img src="<?php echo URLROOT;?>
/img/team/nisarg.jpeg" alt="John" style="width:100%">
                <h1>Nisarg Saple</h1>
                <p class="title">Full Stack Web Developer</p>
                <div style="margin: 10px 0;">
                    <a href="https://www.facebook.com/nisarg.saple"><i class="fa fa-facebook"></i></a> 
                    <a href="https://www.instagram.com/nisarg_saple/"><i class="fa fa-instagram"></i></a> 
                    <a href="https://twitter.com/nisarg_saple"><i class="fa fa-twitter"></i></a>  
                    <a href="https://www.linkedin.com/in/nisarg-s-383389111/"><i class="fa fa-linkedin"></i></a>  
                </div>
                <a href="mailto:nisarg.sachin.saple@gmail.com"><h5>nisarg.sachin.saple@gmail.com</h5></a>
            </div>
            <div class="card">
                <img src="<?php echo URLROOT;?>
/img/team/krunal.jpg" alt="John" style="width:100%">
                <h1>Krunal Shrimali</h1>
                <p class="title">Back-End Developer</p>
                <div style="margin: 10px 0;">
                    <a href="https://www.facebook.com/kvshrimali1702"><i class="fa fa-facebook"></i></a> 
                    <a href="https://www.instagram.com/kvshrimali1702/"><i class="fa fa-instagram"></i></a> 
                    <a href="https://twitter.com/kvshrimali1702"><i class="fa fa-twitter"></i></a>  
                    <a href="https://www.linkedin.com/in/krunal-shrimali-682481154/"><i class="fa fa-linkedin"></i></a>  
                </div>
                <a href="mailto:kvshrimali1702@gmail.com"><h5>kvshrimali1702@gmail.com</h5></a>
            </div>        
        </div>
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
    <!-- <?php echo '<script'; ?>
 type="module" src="<?php echo URLROOT;?>
/js/scroll.js"><?php echo '</script'; ?>
> -->
    <!-- <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo URLROOT;?>
/js/backtotop.js"><?php echo '</script'; ?>
> -->
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
