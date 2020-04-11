<?php
/* Smarty version 3.1.33, created on 2019-10-03 17:36:20
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\auth\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d961574a97999_77477453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '491092f2009a16020d164cd176aceb417df2daaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\auth\\register.tpl',
      1 => 1570116900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d961574a97999_77477453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19966262625d961574a97098_85343450', 'register');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../template/auth/auth.tpl");
}
/* {block 'register'} */
class Block_19966262625d961574a97098_85343450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'register' => 
  array (
    0 => 'Block_19966262625d961574a97098_85343450',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="message__container"></div>
    <div class="form__container" id="register">
        <div class="form__header">
            <a>Create Your Account</a>
        </div>
        <hr/>
        <div class="form__contact">
            <form>
                <div class="form_field_name form_field_holder">
                    <label>Full Name</label>
                    <input type="text" name='name' placeholder="Ex: Nicole Wolf">
                </div>
                <div class="form_field_mail form_field_holder">
                    <label>Email ID</label>
                    <input type="email"  name='mailid' placeholder="Ex: example@gmail.com">
                </div>
            </form>
        </div>
        <div class="form__header">
            <a>Account Authentication</a>
        </div>
        <hr/>
        <div class="form__authenticate">
            <div class="form_field_username form_field_holder">
                <label>Username</label>
                <input type="text" name='username' placeholder="Ex: nicolewolf@89">
            </div>
            <div class="form_field_password form_field_holder">
                <label>Password</label>
                <input type="password"  name='password' placeholder="Ex: nicole@89">
            </div>
            <div class="form_field_conpassword form_field_holder">
                <label>Confirm Password</label>
                <input type="password"  name='conpass' placeholder="Retype Passsword">
            </div>
            <div class="form_field_pin  form_field_holder">
                <label>Pin</label>
                <input type="number"  name='pin' placeholder="Ex: 1234">
            </div>
            <div class="form_field_conpin form_field_holder">
                <label>Confirm Pin</label>
                <input type="number"  name='conpin' placeholder="Retype Pin">
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'register'} */
}
