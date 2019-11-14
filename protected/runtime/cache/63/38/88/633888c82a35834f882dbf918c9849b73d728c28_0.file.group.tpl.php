<?php
/* Smarty version 3.1.32, created on 2019-11-14 15:23:15
  from 'G:\OpenServer\OSPanel\domains\esayan.local\protected\app\core\admin-template\system\group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dcd4733a8ff66_98843089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '633888c82a35834f882dbf918c9849b73d728c28' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\esayan.local\\protected\\app\\core\\admin-template\\system\\group.tpl',
      1 => 1469786304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcd4733a8ff66_98843089 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->_assignInScope('type', 'radio');
}?><div class="group"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'controll');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['controll']->value) {
?><label class="group__item"><input type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="group__item__rb" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['controll']->value['value'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['check']->value) && ($_smarty_tpl->tpl_vars['check']->value == $_smarty_tpl->tpl_vars['controll']->value['value']) || (is_array($_smarty_tpl->tpl_vars['check']->value) && in_array($_smarty_tpl->tpl_vars['controll']->value['value'],$_smarty_tpl->tpl_vars['check']->value))) || (!isset($_smarty_tpl->tpl_vars['check']->value) && ($_smarty_tpl->tpl_vars['controll']->value['default'] == true || $_smarty_tpl->tpl_vars['controll']->value['default'] == 1)) || ($_smarty_tpl->tpl_vars['controll']->value['checked'] == true)) {?> checked<?php }?>><span class="group__item__style"></span><span class="group__item__text"><?php echo $_smarty_tpl->tpl_vars['controll']->value['text'];?>
</span></label><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
}
