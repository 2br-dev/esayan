<?php
/* Smarty version 3.1.32, created on 2019-11-14 15:23:15
  from 'G:\OpenServer\OSPanel\domains\esayan.local\protected\app\core\admin-template\fields\textarea.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dcd47337c02d7_95300582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bac9fcd7235914b5e9252e35f0b7d8eccc48bc18' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\esayan.local\\protected\\app\\core\\admin-template\\fields\\textarea.tpl',
      1 => 1469786304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcd47337c02d7_95300582 (Smarty_Internal_Template $_smarty_tpl) {
?><textarea name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea><?php }
}
