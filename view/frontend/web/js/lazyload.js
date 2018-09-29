define([
    'jquery',
    'Metagento_LazyLoad/js/jquery.lazyload'
], function ($) {

    return function () {
        $(function () {
            $("img.lazy").lazyload();
            $("img.lazy").one("appear", function () {
                var _this = $(this);
                setTimeout(function () {
                    _this.removeClass('swatch-option-loading')
                }, 100);
            });
        });
    };
});