<?php
/* Smarty version 3.1.32, created on 2019-11-14 12:43:17
  from 'G:\OpenServer\OSPanel\domains\esayan.local\protected\app\core\admin-template\view\dashboard\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dcd21b51ba456_49430725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9bee3d1031dc22221ab2d09e1ec00839b61ee8a' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\esayan.local\\protected\\app\\core\\admin-template\\view\\dashboard\\index\\index.tpl',
      1 => 1512138868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcd21b51ba456_49430725 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['permissions']->value) && !empty($_smarty_tpl->tpl_vars['permissions']->value)) {?><h4>Ошибки прав на папки:</h4><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permissions']->value, 'item', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['item']->value) {
?><div class="apply notice"><p><b><?php echo $_smarty_tpl->tpl_vars['item']->value['folder'];?>
</b> нет прав на редактирования, текущие права на папку <b><?php echo $_smarty_tpl->tpl_vars['item']->value['perms'];?>
</b></p><div class="button-container mb5 clearfix"><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/perm/edit/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="button button-green"><i class="zmdi zmdi-wrench"></i>Исправить</a></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><div class="fl"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/technology.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/widgets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php }
}
