{strip}
{compress
    attr   = 'data-no-instant'
    mode   = 'js'
    source = [
        [ 'file' => '/js/vendor.min.js' ],
        [ 'file' => '/js/app.min.js' ]
    ]
}
  <script type="text/javascript" src="/js/jquery.min.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>
  <script type="text/javascript" src="/js/rellax.js"></script>
    <script>
        $(document).ready(function(){
            if (!(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
                setTimeout(function () {
                    let rellax = new Rellax('.rellax', {
                        center: true,
                        vertical: true,
                        horizontal: false,
                        callback: function (position) {

                            console.log(position);
                        }
                    });
                }, 1000)
            }

        })
    </script>
  <script src="/slick/slick.min.js"></script>
    {if $uri[0] == ''}
        <script src="/js/horizontal-scroll.js"></script>
    {/if}

    {literal}
    <!-- Шаблон для товаров у которых существует поле price1 и отсутствуют поля price2 и price -->
    <script id="template" type="text/template7">
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
    </script>

    <!-- Шаблон для товаров у которых присутсвуют поля price1 и price2 и отсутствует поле price -->
    <script id="template_1" type="text/template7">
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
    </script>

    <!-- Шаблон для товаров у которых присутствуют поля price1, price2, price -->
    <script id="template_2" type="text/template7">
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
    </script>
    <script type="text/javascript">

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

    </script>
    {/literal}
</body>
</html>
{/strip}