<?php
/* Smarty version 3.1.32, created on 2019-11-11 11:10:20
  from '/home/b/burdilo/esayan/public_html/protected/themes/base/smarty/components/scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dc9176cf29e34_36917475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba92af6958b887eef9621cb65d1f192cdfb1a358' => 
    array (
      0 => '/home/b/burdilo/esayan/public_html/protected/themes/base/smarty/components/scripts.tpl',
      1 => 1573134724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc9176cf29e34_36917475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/b/burdilo/esayan/public_html/protected/app/libs/smarty.plugins/function.compress.php','function'=>'smarty_function_compress',),));
echo smarty_function_compress(array('attr'=>'data-no-instant','mode'=>'js','source'=>array(array('file'=>'/js/vendor.min.js'),array('file'=>'/js/app.min.js'))),$_smarty_tpl);
echo '<script'; ?>
 type="text/javascript" src="/js/jquery.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="/slick/slick.min.js"><?php echo '</script'; ?>
><?php if ($_smarty_tpl->tpl_vars['uri']->value[0] == '') {
echo '<script'; ?>
 src="/js/horizontal-scroll.js"><?php echo '</script'; ?>
><?php }?>
    <!-- Шаблон для товаров у которых существует поле price1 и отсутствуют поля price2 и price -->
    <?php echo '<script'; ?>
 id="template" type="text/template7">
        <div class="productItem-close">
            <a>
                <i class="material-icons">
                    close
                </i>
            </a>
        </div>
        <div class="productItem-image" id="all">
            {{#each product.image_file}}
            <img src="{{original.file}}"/>
            {{/each}}
        </div>
        <div class="productItem-desc">
            <div class="productItem-info">
                <div class="productItem-title">
                    <p>{{product.title}}</p>
                </div>
                <div class="productItem-text">
                    <div class="productItem-sostav">
                        <p><strong>Состав продукта:</strong> {{product.sostav}}</p>
                    </div>
                    <div class="productItem-cennost">
                        <p><strong>Пищевая ценность на 100 г. продукта:</strong> {{product.nutritionals}}</p>
                    </div>
                    <div class="productItem-price">
                        <div class="price-container">
                            <p class="price">{{product.period}}</p>
                            <p class="price-comment">Срок хранения</p>
                        </div>
                        {{#if product.price1.length}}
                        <div class="price-container">
                            <p class="price">{{product.price1}}</p>
                            <p class="price-comment">{{product.comment_price1}}</p>
                        </div>
                        {{/if}}
                    </div>
                </div>
            </div>
            <div class="productItem-ingredients">
                {{#each product.ico}}
                <div class="ico-container">
                    {{#each this.ico_file}}
                    <img src="{{original.file}}"/>
                    {{/each}}
                    <p>{{title}}</p>
                </div>
                {{/each}}
            </div>
        </div>
    <?php echo '</script'; ?>
>

    <!-- Шаблон для товаров у которых присутсвуют поля price1 и price2 и отсутствует поле price -->
    <?php echo '<script'; ?>
 id="template_1" type="text/template7">
        <div class="productItem-close">
            <a>
                <i class="material-icons">
                    close
                </i>
            </a>
        </div>
        <div class="productItem-image" id="all">
            {{#each product.image_file}}
            <img src="{{original.file}}"/>
            {{/each}}
        </div>
        <div class="productItem-desc">
            <div class="productItem-info">
                <div class="productItem-title">
                    <p>{{product.title}}</p>
                </div>
                <div class="productItem-text">
                    <div class="productItem-sostav">
                        <p><strong>Состав продукта:</strong> {{product.sostav}}</p>
                    </div>
                    <div class="productItem-cennost">
                        <p><strong>Пищевая ценность на 100 г. продукта:</strong> {{product.nutritionals}}</p>
                    </div>
                    <div class="productItem-price">
                        <div class="price-container">
                            <p class="price">{{product.period}}</p>
                            <p class="price-comment">Срок хранения</p>
                        </div>
                        {{#if product.price1.length}}
                        <div class="price-container">
                            <p class="price">{{product.price1}}</p>
                            <p class="price-comment">{{product.comment_price1}}</p>
                        </div>
                        {{/if}}
                        {{#if product.price2.length}}
                        <div class="price-container">
                            <p class="price">{{product.price2}}</p>
                            <p class="price-comment">{{product.comment_price2}}</p>
                        </div>
                        {{/if}}
                    </div>
                </div>
            </div>
            <div class="productItem-ingredients">
                {{#each product.ico}}
                <div class="ico-container">
                    {{#each this.ico_file}}
                    <img src="{{original.file}}"/>
                    {{/each}}
                    <p>{{title}}</p>
                </div>
                {{/each}}
            </div>
        </div>
    <?php echo '</script'; ?>
>

    <!-- Шаблон для товаров у которых присутствуют поля price1, price2, price -->
    <?php echo '<script'; ?>
 id="template_2" type="text/template7">
        <div class="productItem-close">
            <a>
                <i class="material-icons">
                    close
                </i>
            </a>
        </div>
        <div class="productItem-image">
            {{#each product.image_file}}
            <img src="{{original.file}}"/>
            {{/each}}
        </div>
        <div class="productItem-desc">
            <div class="productItem-info">
                <div class="productItem-title">
                    <p>{{product.title}}</p>
                </div>
                <div class="productItem-text">
                    <div class="productItem-sostav">
                        <p><strong>Состав продукта:</strong> {{product.sostav}}</p>
                    </div>
                    <div class="productItem-cennost">
                        <p><strong>Пищевая ценность на 100 г. продукта:</strong> {{product.nutritionals}}</p>
                    </div>
                    <div class="productItem-price">
                        <div class="price-container">
                            <p class="price">{{product.period}}</p>
                            <p class="price-comment">Срок хранения</p>
                        </div>
                        {{#if product.price1.length}}
                        <div class="price-container">
                            <p class="price">{{product.price1}}</p>
                            <p class="price-comment">{{product.comment_price1}}</p>
                        </div>
                        {{/if}}
                        {{#if product.price2.length}}
                        <div class="price-container">
                            <p class="price">{{product.price2}}</p>
                            <p class="price-comment">{{product.comment_price2}}</p>
                        </div>
                        {{/if}}
                        {{#if product.price.length}}
                        <div class="price-container">
                            <p class="price">{{product.price}}</p>
                            <p class="price-comment">{{product.comment_price}}</p>
                        </div>
                        {{/if}}
                    </div>
                </div>
            </div>
            <div class="productItem-ingredients">
                {{#each product.ico}}
                <div class="ico-container">
                    {{#each this.ico_file}}
                    <img src="{{original.file}}"/>
                    {{/each}}
                    <p>{{title}}</p>
                </div>
                {{/each}}
            </div>
        </div>
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">

        // Initialize the plugin with no custom options
        $(document).ready(function() {
            let vh = window.innerHeight * 0.01;

            // Затем устанавливаем значение свойства --vh
            // для корневого элемента
            document.documentElement.style.setProperty('--vh', `${vh}px`);
            window.addEventListener('resize', () => {
                // получаем текущее значение высоты
                let vh = window.innerHeight * 0.01;
                document.documentElement.style.setProperty('--vh', `${vh}px`);
            });


            $('.catalogList_responsive').slick({
                dots: true
            });
            $('.product-img').mouseover(function(){
                $(this).addClass('activated');
            })
            $('.product-img').mouseout(function(){
                $(this).removeClass('activated');
            })
            $('.product h2, .product img').click(function(){
                const product = $(this).parent().parent();
                let id = product.data('id');
                let category = product.data('category')
                $.ajax({
                    type: "POST",
                    url: "/ajax/getProduct",
                    data: {
                        id: id,
                        category: category
                    },
                    success: function(res) {
                        let template = $('#template').html();
                        if('price2' in res){
                            template = $('#template_1').html();

                        }
                        if('price' in res){
                            template = $('#template_2').html();
                        }


                        // compile it with Template7
                        var compiledTemplate = Template7.compile(template);
                        // Now we may render our compiled template by passing required context
                        var context = {
                            product: res
                        };
                        var html = compiledTemplate(context);
                        $('body').css('overflow', 'hidden');
                        $('.productItem').empty().removeAttr('id').attr('id', 'prodBack'+res['background']).append(html).addClass('showProductItem');

                    },
                    error: function(err){},
                    dataType: "JSON"
                });
            })
            $('body').on('click', '.productItem-close', function(){
                $('.productItem').removeClass('showProductItem');
                setTimeout(function () {
                    $('body').css('overflow', 'auto');
                }, 300);

            });
            $('.headerMenu-responsive').click(function(){
                $('.headerMenu-responsive-content').addClass('show');
                $('body').css('overflow', 'hidden');
            });
            $('.headerMenu-responsive-content .close').click(function(){
                $('.headerMenu-responsive-content').removeClass('show');
                $('body').css('overflow', 'auto');
            });


            // $(window).bind('mousewheel DOMMouseScroll MozMousePixelScroll', function(event) {
            //     delta = parseInt(event.originalEvent.wheelDelta || -event.originalEvent.detail);
            //     if (delta >= 0) {
            //         console.log('delta', delta)
            //         $(window).scroll(function() {
            //             let scrollTop = $(window).scrollTop();
            //             console.log('scrollTopUp', scrollTop);
            //             if (scrollTop <= block && offsetx != 0) {
            //                 $(window).scrollTop(block);
            //                 //offsetx = offsetx - 9;
            //                 //console.log('offsetUp', offsetx);
            //                 $('.sideScroll-inner').css('transform', 'translate3d(-' + offsetx + 'vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)')
            //             }
            //             else if(scrollTop <= block && offsetx == 0){
            //                 $('.sideScroll-inner').css('transform', 'translate3d(-' + offsetx + 'vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)')
            //             }
            //         });
            //         if(offsetx != 0 && offsetx > 0){
            //             offsetx = offsetx - 9;
            //             //console.log('offsetUp', offsetx);
            //         }
            //
            //     } else {
            //         console.log('delta', delta)
            //         if(offsetx < 99){
            //             offsetx = offsetx + 9;
            //             //console.log('offsetDown', offsetx);
            //         }
            //
            //         $(window).scroll(function (e) {
            //             let scrollDown = $(window).scrollTop();
            //             console.log('scrollDown', scrollDown);
            //             if (scrollTop >= block && offsetx < 99) {
            //                 $(window).scrollTop(block);
            //
            //                 $('.sideScroll-inner').css('transform', 'translate3d(-' + offsetx + 'vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)')
            //             }
            //         });
            //     }
            // });
        });

    <?php echo '</script'; ?>
>
    </body></html><?php }
}
