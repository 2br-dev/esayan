<?php
/* Smarty version 3.1.32, created on 2019-11-14 15:23:15
  from 'G:\OpenServer\OSPanel\domains\esayan.local\protected\app\core\admin-template\fields\checkbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dcd4733a1e6b3_38798414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cbf7726f7a8799abc47ced1265f9f8220777e5a' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\esayan.local\\protected\\app\\core\\admin-template\\fields\\checkbox.tpl',
      1 => 1516036330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/controll.tpl' => 1,
  ),
),false)) {
function content_5dcd4733a1e6b3_38798414 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['list']->value) && !empty($_smarty_tpl->tpl_vars['list']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->_assignInScope('checked', "false");
if ((is_array($_smarty_tpl->tpl_vars['value']->value) && in_array($_smarty_tpl->tpl_vars['e']->value['value'],$_smarty_tpl->tpl_vars['value']->value)) || (isset($_smarty_tpl->tpl_vars['e']->value['checked']) && $_smarty_tpl->tpl_vars['e']->value['checked'] == 1) || (!$_smarty_tpl->tpl_vars['value']->value && $_smarty_tpl->tpl_vars['e']->value['default'] == 1)) {
$_smarty_tpl->_assignInScope('checked', true);
}
$_smarty_tpl->_subTemplateRender("file:system/controll.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"checkbox",'name'=>((($_smarty_tpl->tpl_vars['name']->value).("[")).($_smarty_tpl->tpl_vars['e']->value['value'])).("]"),'value'=>$_smarty_tpl->tpl_vars['e']->value['value'],'text'=>$_smarty_tpl->tpl_vars['e']->value['var']), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
