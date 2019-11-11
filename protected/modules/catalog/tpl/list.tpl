{if $catalog}
    <div class="catalog-wrapper">

        <div class="sideScroll">
            <div class="sideScroll-inner">
                <div class="catalog-title">
                    <div class="catalogTitle-title">
                        {* <a href="/katalog">Каталог</a> *}
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

                {foreach from=$catalog item=product name=proditem}
                <div class="product-item {if $smarty.foreach.proditem.iteration mod 2 == 0}flex-revers{/if}" id="product{$smarty.foreach.proditem.iteration}">
                    <div class="product-info">
                        <h2>{$product['title']}</h2>
                        <p>{$product['short_desc']}</p>
                    </div>
                    <div class="product-img">
                        {foreach from=$product['image_file'] item=img}

                            <img class="initial" src="{$img.bg.file}" title="{$img.title}" alt="{$img.title}"/>
{*                            <div class="initial bg" style="background-image: url('{$img.bg.file}')"></div>*}


                        {/foreach}
                        {foreach from=$product['hover_image_file'] item=hoverimg}
                            <img class="hover" src="{$hoverimg.bg.file}"/>
{*                            <div class="hover bg" style="background-image: url('{$hoverimg.bg.file}')"></div>*}
                        {/foreach}
                    </div>
                </div>
                {/foreach}
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
                {foreach from=$catalog item=product name=proditem}
                    <div class="catalogResponsive_item">
                        <div class="catalogList_responsive-img">
                            {foreach from=$product['image_file'] item=img}
                                <img src="{$img.bg.file}" title="{$img.title}" alt="{$img.title}"/>
                            {/foreach}
                        </div>
                        <div class="catalogList_responsive-title">
                            <h2>{$product['title']}</h2>
                        </div>
                        <div class="catalogList_responsive-desc">
                            <p>{$product['short_desc']}</p>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>
{/if}