$(document).ready(function(){
    let block = $('.sideScroll').offset().top; // положение прокручиваемого блока
    let offsetx = 0;
    let scrollPos = 0;
    let width = 0;
    let windowWidth = $(window).innerWidth();

    $('.product-item').each(function(){
        width = width + $(this).innerWidth();
    });
    width = width + $('.catalog-title').innerWidth() + 50;
    let generalOffset = width - windowWidth;
    console.log(generalOffset)
    $(window).scroll(function(){
        let st = $(this).scrollTop();
        if (st > scrollPos){
            if(scrollPos >= block && offsetx < generalOffset) {
                offsetx = offsetx + 100;
                //console.log(offsetx)
                $(window).scrollTop(block);
                $('.sideScroll-inner').css('transform', 'translate3d(-' + offsetx + 'px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)')
            }
        } else {
            if(scrollPos <= block && offsetx != 0){
                offsetx = offsetx - 100;
                $(window).scrollTop(block);
                $('.sideScroll-inner').css('transform', 'translate3d(-' + offsetx + 'px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)')
            }
        }
        scrollPos = st;
    });
});
