<?php
/* Smarty version 3.1.33, created on 2020-04-24 14:34:36
  from 'C:\xampp\htdocs\ssit\app\views\template\includes\header3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea2dcdced2512_80238994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '578f54eec851a8a7c263624a774907489b088a20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit\\app\\views\\template\\includes\\header3.tpl',
      1 => 1587731548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea2dcdced2512_80238994 (Smarty_Internal_Template $_smarty_tpl) {
?><header id="upper-header3">
        <nav class="navbar navbar-expand-lg navbar-light py-md-4 py-lg-0">
            <div class="container d-flex outer-nav">
            <button type="button" class="navbar-toggler navbar-dark flex-row p-md-2 p-lg-2 " data-toggle="collapse" data-target="#navbarSupportContent2" aria-controls="navbarSupportContent" aria-expanded="false">
                <span class="navbar-toggler-text">SKIP TO SECTION</span>&nbsp;    
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse inner-nav navbar-collapse " id="navbarSupportContent2">
            <?php if ($_smarty_tpl->tpl_vars['data']->value['navitems'] != null) {?>
                <ul class="navbar-nav nav3 nav nav-fill">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['navitems'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <li class="nav-item nav3-item">
                        <a class="nav-link h6 my-0" href="#<?php echo $_smarty_tpl->tpl_vars['item']->value[key($_smarty_tpl->tpl_vars['item']->value)];?>
"><?php echo key($_smarty_tpl->tpl_vars['item']->value);?>
</a>
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            <?php }?>
                
                
            </div>
            </div>
        </nav>
</header><?php }
}
