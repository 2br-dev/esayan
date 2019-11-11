<header {if $uri[0] == ''}class="mainPage-header"{/if}>
    {if $uri[0] == ''}
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
    {else}
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
    {/if}
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
