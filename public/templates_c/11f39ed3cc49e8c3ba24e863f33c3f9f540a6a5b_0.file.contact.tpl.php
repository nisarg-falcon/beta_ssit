<?php
/* Smarty version 3.1.33, created on 2021-02-21 15:26:35
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60326d9b43a697_03138554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11f39ed3cc49e8c3ba24e863f33c3f9f540a6a5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\contact.tpl',
      1 => 1602439721,
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
function content_60326d9b43a697_03138554 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo URLROOT;?>
/img/logo.png">    
    <title>SSIT | Contact us</title>
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
                                <!-- <video class="video1 container-fluid" loop muted autoplay>
                <source src="videos/video1.mp4" type="video/mp4">
                </video> -->
            </div>
  
    <!-- people starts -->
    <div>
                <!-- contact us form -->
        <div id="contact">
            <div class="container course__container">
                <div class="contact-container">
                    <h1>VISIT IN-PERSON</h1>
                    <p>
                        <cite>
                            Shree Swaminarayan Institute of Technology (SSIT)<br />
                            Near Agora Mall & Indira Bridge,<br />
                            Sardar patel Ring Road, Bhat Circle<br />
                            Ahmedabad Airport-Gandhinagar Highway,<br />
                            Bhat, Gandhinagar-382428<br />
                        </cite>
                            Email : <a href="mailto:info@ssit.co.in">info@ssit.co.in</a> | <a href="mailto:ssit.director@gmail.com">ssit.director@gmail.com</a><br />
                            Contact No : <a href="tel:+919408260607">+91 9408260607</a> | <a href="tel:+917043609281">+91 7043609281</a> | <a href="tel:+919099063433">+91 9099063433</a>
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
                            <input type="text" placeholder="Your Name" name="name">
                            <input type="email" placeholder="Your Email ID" name="email">
                            <input type="text" placeholder="Subject of Message" name="subject">
                            <textarea rows="2" placeholder="Your Answer" name="message"></textarea>                            
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
     
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=UA-179928256-1"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-179928256-1');
    <?php echo '</script'; ?>
>
    
</body>
</html><?php }
}
