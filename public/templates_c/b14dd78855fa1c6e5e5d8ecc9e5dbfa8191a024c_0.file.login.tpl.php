<?php
/* Smarty version 3.1.33, created on 2019-10-03 16:14:57
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\auth\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d960261d7aa90_32512360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b14dd78855fa1c6e5e5d8ecc9e5dbfa8191a024c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\auth\\login.tpl',
      1 => 1570111942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d960261d7aa90_32512360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17896725845d960261d716d9_47810232', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9879811705d960261d72da2_38189304', "login");
?>


<!-- <form action="<?php echo URLROOT;?>
/auth/login" method="POST">
    <input type="text"  name="username" id="">
    <input type="number" name="pin" id="">
    <input type="submit">
</form> --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../template/auth/auth.tpl");
}
/* {block "title"} */
class Block_17896725845d960261d716d9_47810232 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17896725845d960261d716d9_47810232',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block "title"} */
/* {block "login"} */
class Block_9879811705d960261d72da2_38189304 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login' => 
  array (
    0 => 'Block_9879811705d960261d72da2_38189304',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="message__container"></div>
    <div class="form__container">

    </div>
<?php
}
}
/* {/block "login"} */
}
