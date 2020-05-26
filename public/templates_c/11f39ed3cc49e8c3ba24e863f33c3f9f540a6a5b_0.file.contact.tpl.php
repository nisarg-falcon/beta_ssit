<?php
/* Smarty version 3.1.33, created on 2020-05-25 21:12:42
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecc18aae00c08_71481455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11f39ed3cc49e8c3ba24e863f33c3f9f540a6a5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\contact.tpl',
      1 => 1589141366,
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
function content_5ecc18aae00c08_71481455 (Smarty_Internal_Template $_smarty_tpl) {
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
/css/contact.css">
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
        <div class="container-fluid media-container position-absolute">
            <img src="<?php echo URLROOT;?>
/img/img2.jpg" class="video1 container-fluid">
            <!-- <video class="video1 container-fluid" loop muted autoplay>
                <source src="videos/video1.mp4" type="video/mp4">
                </video> -->
        </div>
    </div>
  
    <!-- people starts -->
    <div>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-up"></span></button>
        <!-- contact us form -->
        <div id="contact">
            <div class="container course__container">
                <div class="contact-container">
                    <h1>VISIT IN-PERSON</h1>
                    <p>
                        <cite>
                            Shree Swaminarayan Institute of Technology (SSIT)<br />
                            Near Apollo Circle, Bhat,<br />
                            Gandhinagar, Gujarat,<br />
                            Email : ssit@gmail.com<br />
                            Contact No: 1234567890
                        </cite>
                    </p>
                </div>
                <div class="contact-container">
                    <h1>APPLY AT SSIT</h1>
                    <p>
                        <cite>
                            <a href="<?php echo URLROOT;?>
/pages/admission">Apply for BE</a><br />
                            <a href="<?php echo URLROOT;?>
/pages/admission">Apply for MCA</a>
                        </cite>
                    </p>
                </div>
                <div class="contact-container">
                    <h1>FEEDBACK & SUGGESTIONS</h1>
                        <form>
                            <input type="text" placeholder="Your Name" name="">
                            <input type="email" placeholder="Your Email ID" name="">
                            <textarea rows="2" placeholder="Your Answer" name=""></textarea>                            
                            <button type="submit">Submit</button>
                        </form>
                 </div>
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
