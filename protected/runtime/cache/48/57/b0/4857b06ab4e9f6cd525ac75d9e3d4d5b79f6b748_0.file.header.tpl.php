<?php
/* Smarty version 3.1.32, created on 2019-11-11 14:06:37
  from 'G:\OpenServer\OSPanel\domains\esayan.local\protected\themes\base\smarty\components\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dc940bd52f2b1_68566309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4857b06ab4e9f6cd525ac75d9e3d4d5b79f6b748' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\esayan.local\\protected\\themes\\base\\smarty\\components\\header.tpl',
      1 => 1573470369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc940bd52f2b1_68566309 (Smarty_Internal_Template $_smarty_tpl) {
?><header <?php if ($_smarty_tpl->tpl_vars['uri']->value[0] == '') {?>class="mainPage-header"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['uri']->value[0] == '') {?>
    <div class="header__top">
        <div class="flex-content">
            <div class="header__logo">
                <a href="/"><img src="/img/logo.png" alt="Логотип Есаянъ"></a>
            </div>
            <div class="header__menu">
                <ul class="flex-content">
                    <li><a href="/katalog">Продукция</a></li>
                    <li><a href="/kontakty">Контакты</a></li>
                    <li><a>О нас</a></li>
                    <li><a>Оформить заказ</a></li>
                    <li><a><strong>Скачать каталог</strong></a></li>
                </ul>
            </div>
            <div class="headerMenu-responsive">
                <p></p>
            </div>
        </div>
    </div>
    <div class="header__text">
        <p>По старинному<br>
            семейному рецепту</p>
        <p>Мы с любовью выпекаем наши торты с 2005 года, строго придерживаясь<br>
            рецептов нашей семьи.</p>
    </div>
    <?php } else { ?>
        <div class="header__top">
            <div class="flex-content">
                <div class="header__logo">
                    <a href="/"><img src="/img/logo.png" alt="Логотип Есаянъ"></a>
                </div>
                <div class="header__menu">
                    <ul class="flex-content">
                        <li><a href="/katalog">Продукция</a></li>
                        <li><a href="/kontakty">Контакты</a></li>
                        <li><a>О нас</a></li>
                        <li><a>Оформить заказ</a></li>
                        <li><a><strong>Скачать каталог</strong></a></li>
                    </ul>
                </div>
                <div class="headerMenu-responsive">
                    <p></p>
                </div>
            </div>
        </div>
    <?php }?>
</header>
<div class="headerMenu-responsive-content">
    <div class="responsiveMenu-header">
        <div class="logo">
            <img src="/img/logo.png"/>
        </div>
        <a class="close"><i class="material-icons">close</i></a>
    </div>
    <ul class="flex-content">
        <li><a href="/katalog">Продукция</a></li>
        <li><a href="/kontakty">Контакты</a></li>
        <li><a>О нас</a></li>
        <li><a>Оформить заказ</a></li>
        <li><a><strong>Скачать каталог</strong></a></li>
    </ul>
</div>
<?php }
}
