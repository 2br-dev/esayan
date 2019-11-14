<?php
/* Smarty version 3.1.32, created on 2019-11-14 15:13:47
  from 'G:\OpenServer\OSPanel\domains\esayan.local\protected\modules\contactsPage\tpl\block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dcd44fb778cc2_60913795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f831ec48d72afc465418f7166af4b83d692796c' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\esayan.local\\protected\\modules\\contactsPage\\tpl\\block.tpl',
      1 => 1573044397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcd44fb778cc2_60913795 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['contact']->value) {?>
    <div class="contacts-wrapper">
        <div class="contacts">
            <p class='contacts-slogan'>Мы всегда рады сотрудничеству</p>
            <div class="contacts-item">
                <p class="contacts-title">Адрес</p>
                <div class="contact-info">
                    <?php echo $_smarty_tpl->tpl_vars['contact']->value['address'];?>

                </div>
            </div>
            <div class="contacts-item">
                <p class="contacts-title">Адрес приозводства</p>
                <div class="contact-info">
                    <?php echo $_smarty_tpl->tpl_vars['contact']->value['production'];?>

                </div>
            </div>
            <div class="contacts-item">
                <p class="contacts-title">E-mail</p>
                <div class="contact-info">
                    <p><?php echo $_smarty_tpl->tpl_vars['contact']->value['email'];?>
</p>
                </div>
            </div>
            <div class="contacts-item">
                <p class="contacts-title">Телефон</p>
                <div class="contact-info">
                    <?php echo $_smarty_tpl->tpl_vars['contact']->value['phone'];?>

                </div>
            </div>
        </div>
        <div class="map-wrapper">
            <div class="map">
                <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af2bb0db90823c5e4bcb8fa65bbbd061a271ca92de49c3f41131eabcb704deafd&amp;width=100%25&amp;height=700&amp;lang=ru_RU&amp;scroll=true"><?php echo '</script'; ?>
>
            </div>
            <div class="map-responsive">
                <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af2bb0db90823c5e4bcb8fa65bbbd061a271ca92de49c3f41131eabcb704deafd&amp;width=100%25&amp;height=320&amp;lang=ru_RU&amp;scroll=true"><?php echo '</script'; ?>
>
            </div>
        </div>
    </div>
<?php }
}
}
