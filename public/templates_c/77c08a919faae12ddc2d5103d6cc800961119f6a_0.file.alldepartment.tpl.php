<?php
/* Smarty version 3.1.33, created on 2019-10-11 13:57:48
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\department\alldepartment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da06e3ca95143_78409640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77c08a919faae12ddc2d5103d6cc800961119f6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\department\\alldepartment.tpl',
      1 => 1570794904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da06e3ca95143_78409640 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17384857325da06e3ca92855_03064019', "all");
}
/* {block "all"} */
class Block_17384857325da06e3ca92855_03064019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'all' => 
  array (
    0 => 'Block_17384857325da06e3ca92855_03064019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="all-department" id="all">
<div class="loader"></div>
    <div class="dept-container">
        <div class="dept-comp dept">
            <div class="dept-img-container">
                <img src="<?php echo URLROOT;?>
/img/img2.jpg" class="dept-img"> 
            </div>
            <div class="dept-text-container">
    
                    <a>Computer Engineering</a>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur suscipit obcaecati vitae ratione, voluptas magnam provident deserunt! Veniam doloremque at repudiandae, dolorem atque placeat nobis dicta impedit fuga commodi necessitatibus!</p>

                </div>
            </div>
            <div class="dept-elec dept">
                    <div class="dept-img-container">
                        <img src="<?php echo URLROOT;?>
/img/img2.jpg" class="dept-img"> 
                    </div>
                    <div class="dept-text-container">
                            <a>Civil Engineering</a>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur suscipit obcaecati vitae ratione, voluptas magnam provident deserunt! Veniam doloremque at repudiandae, dolorem atque placeat nobis dicta impedit fuga commodi necessitatibus!</p>
                            
                        </div>
            </div>
            <div class="dept-mech dept">
                    <div class="dept-img-container">
                            <img src="<?php echo URLROOT;?>
/img/img2.jpg" class="dept-img"> 
                        </div>
                        <div class="dept-text-container">
                            <a>Electronics and communication Engineering</a>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur suscipit obcaecati vitae ratione, voluptas magnam provident deserunt! Veniam doloremque at repudiandae, dolorem atque placeat nobis dicta impedit fuga commodi necessitatibus!</p>
                            
                        </div>
            </div>
            <div class="dept-civil dept">
                    <div class="dept-img-container">
                            <img src="<?php echo URLROOT;?>
/img/img2.jpg" class="dept-img"> 
                        </div>
                        <div class="dept-text-container">
                            <a>Mechanical Engineering</a>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur suscipit obcaecati vitae ratione, voluptas magnam provident deserunt! Veniam doloremque at repudiandae, dolorem atque placeat nobis dicta impedit fuga commodi necessitatibus!</p>
                            
                        </div>
            </div>
            <div class="dept-ec dept">
                    <div class="dept-img-container">
                            <img src="<?php echo URLROOT;?>
/img/img2.jpg" class="dept-img"> 
                        </div>
                        <div class="dept-text-container">
                            <a>M.C.A</a>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur suscipit obcaecati vitae ratione, voluptas magnam provident deserunt! Veniam doloremque at repudiandae, dolorem atque placeat nobis dicta impedit fuga commodi necessitatibus!</p>
                        </div>
                    </div>
                    <div class="dept-mca dept">
                        <div class="dept-img-container">
                            <img src="<?php echo URLROOT;?>
/img/img2.jpg" class="dept-img"> 
                        </div>
                        <div class="dept-text-container">
                                <a>Electronics and communication</a>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur suscipit obcaecati vitae ratione, voluptas magnam provident deserunt! Veniam doloremque at repudiandae, dolorem atque placeat nobis dicta impedit fuga commodi necessitatibus!</p>
                            
                        </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "all"} */
}
