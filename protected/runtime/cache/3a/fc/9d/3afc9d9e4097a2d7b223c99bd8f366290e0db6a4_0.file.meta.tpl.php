<?php
/* Smarty version 3.1.32, created on 2019-11-11 11:10:20
  from '/home/b/burdilo/esayan/public_html/protected/themes/base/smarty/components/meta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dc9176cf15316_61635979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3afc9d9e4097a2d7b223c99bd8f366290e0db6a4' => 
    array (
      0 => '/home/b/burdilo/esayan/public_html/protected/themes/base/smarty/components/meta.tpl',
      1 => 1572955422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc9176cf15316_61635979 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html class="no-js" itemscope="itemscope" itemtype="http://schema.org/<?php if (!isset($_smarty_tpl->tpl_vars['uri']->value[1])) {?>WebPage<?php } else { ?>ItemPage<?php }?>" lang="<?php echo $_smarty_tpl->tpl_vars['_page']->value['lang'];?>
"><head><title itemprop="name"><?php echo $_smarty_tpl->tpl_vars['_meta']->value['title'];?>
</title><meta charset="utf-8"><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"><meta content="<?php echo $_smarty_tpl->tpl_vars['_meta']->value['robots'];?>
" name="robots"><meta content="<?php echo $_smarty_tpl->tpl_vars['_meta']->value['keywords'];?>
" name="keywords"><meta content="<?php echo $_smarty_tpl->tpl_vars['_meta']->value['description'];?>
" name="description" itemprop="description"><?php if (isset($_smarty_tpl->tpl_vars['pagination']->value['prev']) && $_smarty_tpl->tpl_vars['pagination']->value['prev'] !== '') {?><link rel="prev" href="?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['prev'];?>
"><?php }
if (isset($_smarty_tpl->tpl_vars['pagination']->value['next']) && $_smarty_tpl->tpl_vars['pagination']->value['next'] !== '') {?><link rel="next" href="?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next'];?>
"><?php }?><link rel="home" href="/"><!-- Fonts --><link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!-- CSS --><link type="text/css" rel="stylesheet" href="/fonts/phenomena/phenomena.css" ><link type="text/css" rel="stylesheet" href="/css/normalize.css" /><link type="text/css" rel="stylesheet" href="/slick/slick.css" /><link type="text/css" rel="stylesheet" href="/css/style.css" /><link type="text/css" rel="stylesheet" href="/css/style320.css"/><link type="text/css" rel="stylesheet" href="/css/style1600.css"/><?php echo '<script'; ?>
 src="/js/template7.min.js"><?php echo '</script'; ?>
></head><body class="page-<?php echo $_smarty_tpl->tpl_vars['_page']->value['system'];?>
"><?php }
}