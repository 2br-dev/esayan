<?php
/* Smarty version 3.1.32, created on 2019-11-11 14:06:37
  from 'G:\OpenServer\OSPanel\domains\esayan.local\protected\modules\mainCatalog\tpl\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dc940bd17bc22_96367765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '277342f746d5b3b99d7e4e00fe44c32cd11a2c54' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\esayan.local\\protected\\modules\\mainCatalog\\tpl\\list.tpl',
      1 => 1573469970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc940bd17bc22_96367765 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalog']->value, 'category', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['category']->value) {
?>

        <?php if ($_smarty_tpl->tpl_vars['index']->value == 'medoviki') {?><p class="categoryItem-title" id="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><a name="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"></a>Медовики</p><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['index']->value == 'honeyballs') {?><p class="categoryItem-title" id="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><a name="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"></a>Медовые шарики</p><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['index']->value == 'honeyslices') {?><p class="categoryItem-title" id="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><a name="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"></a>Медовые ломтики</p><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['index']->value == 'loppi') {?><p class="categoryItem-title" id="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><a name="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"></a>Медовые ломтики "ЛОППИ"</p><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['index']->value == 'minicakes') {?><p class="categoryItem-title" id="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><a name="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"></a>Пирожные</p><?php }?>

    <?php if ($_smarty_tpl->tpl_vars['index']->value != 'cakes') {?>
    <div class="categoryItem flex-content">
    <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'product', false, NULL, 'prod', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_prod']->value['iteration']++;
?>
            <div class="product <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_prod']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_prod']->value['iteration'] : null) % 2 == 0) {?>big-padding-top<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['index']->value == 'cakes') {?><p class="categoryItem-title" style="padding-left: 0;">Торты</p><?php }?>
                <div class="product-image">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['preview_file'], 'preview');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['preview']->value) {
?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['preview']->value['original']['file'];?>
">
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="product-title">
                    <h2><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</h2>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['index']->value != 'honeyballs') {?>
        <?php if ($_smarty_tpl->tpl_vars['index']->value == 'cakes') {?>
            <div class="product slogan big-padding-top">
                <p>“Мы гарантируем качество
                    и превосходный вкус каждого
                    торта и пирожного, испеченного
                    нами...”</p>
                <p>Г. Б. Есаян</p>
            </div>
        <?php }?>
    </div>
    <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div class="productItem">

</div><?php }
}
