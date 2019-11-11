<?php
/* Smarty version 3.1.32, created on 2019-11-05 15:39:03
  from 'G:\OpenServer\OSPanel\domains\esayan.local\protected\app\core\admin-template\system\editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dc16d679187a1_39752258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd240df4879a64f134d31783d97d4bc17a6b544f5' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\esayan.local\\protected\\app\\core\\admin-template\\system\\editor.tpl',
      1 => 1469786304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc16d679187a1_39752258 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['editor_type']->value)) {
$_smarty_tpl->_assignInScope('editor_type', "codemirror");
}
if (!isset($_smarty_tpl->tpl_vars['editor_hightlight']->value)) {
$_smarty_tpl->_assignInScope('editor_hightlight', "smarty");
}?><textarea name="<?php echo $_smarty_tpl->tpl_vars['editor_name']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['editor_id']->value;?>
" class="CodeMirror js-editor" data-editor="<?php echo $_smarty_tpl->tpl_vars['editor_type']->value;?>
" data-hightlight="<?php echo $_smarty_tpl->tpl_vars['editor_hightlight']->value;?>
" rows="5" cols="50"><?php echo $_smarty_tpl->tpl_vars['editor_cont']->value;?>
</textarea><?php }
}
