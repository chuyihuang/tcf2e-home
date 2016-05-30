function initPortfolio () {
    var portfolio = $('#portfolio');
    var items = $('.items', portfolio);
    var filters = $('.filters li a', portfolio);

    items.imagesLoaded(function() {
        items.isotope({
            itemSelector: '.item',
            layoutMode: 'fitRows',
            transitionDuration: '0.7s'
        });
    });

    filters.click(function(){
        var el = $(this);
        filters.removeClass('active');
        el.addClass('active');
        var selector = el.attr('data-filter');
        items.isotope({ filter: selector });
        return false;
    });
}

function initAnimations() {
    $('.animated').appear(function () {
        var el = $(this);
        var animation = el.data('animation');
        var delay = el.data('delay');
        if (delay) {
            setTimeout(function () {
                el.addClass(animation);
                el.addClass('showing');
                el.removeClass('hiding');
            }, delay);
        } else {
            el.addClass(animation);
            el.addClass('showing');
            el.removeClass('hiding');
        }
    }, {
        accY: -60
    });

    // Service hover animation
    $('.service').hover(function(){
        $('i', this).addClass('animated tada');
    },function(){
        $('i', this).removeClass('animated tada');
    });
}

$(document).ready(function () {
    $(document).pjax('a:not(a[target="_blank"])', 'body');

    $(document).on('pjax:start', function() {
        NProgress.start();
    });

    $(document).on('pjax:end', function() {
        initPortfolio();
        initAnimations();
        NProgress.done();
    });

    $(document).on('pjax:complete', function() {
        NProgress.done();
    })

    initPortfolio();
    initAnimations();
});
