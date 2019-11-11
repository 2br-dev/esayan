<?php
/* Smarty version 3.1.32, created on 2019-11-06 15:35:59
  from '/home/b/burdilo/esayan/public_html/protected/app/core/admin-template/fields/textarea.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dc2be2fc90613_48076120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef795eae85411a94afe5cefacd8d688f56201c35' => 
    array (
      0 => '/home/b/burdilo/esayan/public_html/protected/app/core/admin-template/fields/textarea.tpl',
      1 => 1469786304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc2be2fc90613_48076120 (Smarty_Internal_Template $_smarty_tpl) {
?><textarea name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea><?php }
}
