<?php
/* Smarty version 3.1.32, created on 2019-11-14 15:23:15
  from 'G:\OpenServer\OSPanel\domains\esayan.local\protected\app\core\admin-template\fields\input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dcd47334fbe69_23478878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfa7c7b07e8296279f305f394b644af060d1a8ea' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\esayan.local\\protected\\app\\core\\admin-template\\fields\\input.tpl',
      1 => 1469786304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcd47334fbe69_23478878 (Smarty_Internal_Template $_smarty_tpl) {
?><input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php }
}