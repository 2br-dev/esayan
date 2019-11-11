<?php
/* Smarty version 3.1.32, created on 2019-11-05 22:54:38
  from 'G:\OpenServer\OSPanel\domains\esayan.local\protected\modules\catalog\tpl\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dc1d37eb7d544_04665202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96c9cb64ec306d4056bf7678b4bd0c66c648f51c' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\esayan.local\\protected\\modules\\catalog\\tpl\\list.tpl',
      1 => 1572957103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc1d37eb7d544_04665202 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['catalog']->value) {?>
    <div class="catalog-wrapper">

        <div class="sideScroll">
            <div class="sideScroll-inner">
                <div class="catalog-title">
                    <div class="catalogTitle-title">
                        <p>Каталог</p>
                    </div>
                    <div class="catalogTitle-desc">
                        <p>
                            Попробуйте<br>
                            наши вкусные<br>
                            торты
                        </p>
                    </div>
                </div>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalog']->value, 'product', false, NULL, 'proditem', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_proditem']->value['iteration']++;
?>
                <div class="product-item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_proditem']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_proditem']->value['iteration'] : null) % 2 == 0) {?>flex-revers<?php }?>" id="product<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_proditem']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_proditem']->value['iteration'] : null);?>
">
                    <div class="product-info">
                        <h2><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</h2>
                        <p><?php echo $_smarty_tpl->tpl_vars['product']->value['short_desc'];?>
</p>
                    </div>
                    <div class="product-img">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['image_file'], 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>

                            <img class="initial" src="<?php echo $_smarty_tpl->tpl_vars['img']->value['bg']['file'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['img']->value['title'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['img']->value['title'];?>
"/>


                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['hover_image_file'], 'hoverimg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoverimg']->value) {
?>
                            <img class="hover" src="<?php echo $_smarty_tpl->tpl_vars['hoverimg']->value['bg']['file'];?>
"/>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <div class="catalog-responsive-prev">
            <div class="catalog-title">
                <div class="catalogTitle-title">
                    <p>Каталог</p>
                </div>
                <div class="catalogTitle-desc">
                    <p>
                        Попробуйте<br>
                        наши вкусные<br>
                        торты
                    </p>
                </div>

            </div>
        </div>
            <div class="catalogList_responsive">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalog']->value, 'product', false, NULL, 'proditem', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_proditem']->value['iteration']++;
?>
                    <div class="catalogResponsive_item">
                        <div class="catalogList_responsive-img">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['image_file'], 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['bg']['file'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['img']->value['title'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['img']->value['title'];?>
"/>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="catalogList_responsive-title">
                            <h2><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</h2>
                        </div>
                        <div class="catalogList_responsive-desc">
                            <p><?php echo $_smarty_tpl->tpl_vars['product']->value['short_desc'];?>
</p>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
<?php }
}
}
