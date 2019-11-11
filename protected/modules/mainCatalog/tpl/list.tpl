{foreach $catalog as $index => $category}

        {if $index == 'medoviki'}<p class="categoryItem-title" id="{$index}"><a name="{$index}"></a>Медовики</p>{/if}
        {if $index == 'honeyballs'}<p class="categoryItem-title" id="{$index}"><a name="{$index}"></a>Медовые шарики</p>{/if}
        {if $index == 'honeyslices'}<p class="categoryItem-title" id="{$index}"><a name="{$index}"></a>Медовые ломтики</p>{/if}
        {if $index == 'loppi'}<p class="categoryItem-title" id="{$index}"><a name="{$index}"></a>Медовые ломтики "ЛОППИ"</p>{/if}
        {if $index == 'minicakes'}<p class="categoryItem-title" id="{$index}"><a name="{$index}"></a>Пирожные</p>{/if}

    {if $index != 'cakes'}
    <div class="categoryItem flex-content">
    {/if}
        {foreach from=$category item=product name=prod}
            <div class="product {if $smarty.foreach.prod.iteration mod 2 == 0}big-padding-top{/if}" data-id="{$product['id']}" data-category="{$index}">
                {if $index == 'cakes'}<p class="categoryItem-title" style="padding-left: 0;">Торты</p>{/if}
                <div class="product-image">
                    {foreach $product['preview_file'] as $preview}
                        <img src="{$preview.original.file}">
                    {/foreach}
                </div>
                <div class="product-title">
                    <h2>{$product.title}</h2>
                </div>
            </div>
        {/foreach}
    {if $index != 'honeyballs'}
        {if $index == 'cakes'}
            <div class="product slogan big-padding-top">
                <p>“Мы гарантируем качество
                    и превосходный вкус каждого
                    торта и пирожного, испеченного
                    нами...”</p>
                <p>Г. Б. Есаян</p>
            </div>
        {/if}
    </div>
    {/if}
{/foreach}
<div class="productItem">
{*    <div class="productItem-close">*}
{*        <a>*}
{*            <i class="material-icons">*}
{*                close*}
{*            </i>*}
{*        </a>*}
{*    </div>*}
{*    <div class="productItem-image">*}
{*        <img src="/img/1.png"/>*}
{*    </div>*}
{*    <div class="productItem-desc">*}
{*        <div class="productItem-info">*}
{*            <div class="productItem-title">*}
{*                <p>Медовик "Классический"</p>*}
{*            </div>*}
{*            <div class="productItem-text">*}
{*                <div class="productItem-sostav">*}
{*                    <p>Состав продукта: мука пшеничная в/с; сахар; вода питьевая; яйцо куриное; молоко сгущённое с сахаром; грецкий орех дробленый;*}
{*                        масло сливочное; маргарин; мёд натуральный; патока; сода пищевая.</p>*}
{*                </div>*}
{*                <div class="productItem-cennost">*}
{*                    <p>Пищевая ценность на 100 г. продукта: белки – 5,5 г., жиры – 24 г., углеводы – 58,0 г. Энергетическая ценность (калорийность) –*}
{*                        470 ккал/1968 кДж.</p>*}
{*                </div>*}
{*                <div class="productItem-price">*}
{*                    <div class="price-container">*}
{*                        <p class="price">3 мес</p>*}
{*                        <p class="price-comment">Срок хранения</p>*}
{*                    </div>*}
{*                    <div class="price-container">*}
{*                        <p class="price">75 р/320 г</p>*}
{*                        <p class="price-comment">12 упаковок в коробке 72 коробки в паллете</p>*}
{*                    </div>*}
{*                    <div class="price-container">*}
{*                        <p class="price">124 р/650 г</p>*}
{*                        <p class="price-comment">9 упаковок в коробке 60 коробок в паллете</p>*}
{*                    </div>*}
{*                </div>*}
{*            </div>*}
{*        </div>*}
{*        <div class="productItem-ingredients">*}
{*            <div class="ico-container">*}
{*                <img src="/img/ico1.png"/>*}
{*                <p>сгущёное молоко</p>*}
{*            </div>*}
{*            <div class="ico-container">*}
{*                <img src="/img/ico2.png"/>*}
{*                <p>грецкий орех</p>*}
{*            </div>*}
{*            <div class="ico-container">*}
{*                <img src="/img/ico3.png"/>*}
{*                <p>натуральный мёд</p>*}
{*            </div>*}
{*        </div>*}

{*    </div>*}
</div>