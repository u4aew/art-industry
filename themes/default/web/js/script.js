$(document).ready(function () {
    $(window).scroll(function () {
        var HeaderTop = $(".header-top").height();
        var HeaderLogo = $(".header-logo").height();
        var HeaderSliderMenu = $(".b-slider-menu").height();
        var HeightTop = HeaderTop + HeaderLogo + HeaderSliderMenu + 30;
        if ($(window).scrollTop() > HeightTop) {
            $(".b-slider-menu").addClass('js-b-slider-menu-hidden')
            $(".js-header-menu").addClass('js-header-menu-active')
        }
        else {
            $(".b-slider-menu").removeClass('js-b-slider-menu-hidden')
            $(".js-header-menu").removeClass('js-header-menu-active')
        }
    });
    $('.camera_wrap').camera({
        height: '30%',
        loader: 'bar',
        pagination: true
    });
    $(".fancybox").fancybox({
        helpers: {
            overlay: {
                locked: false
            }
        }
    });
    $(".video-youtube").click(function () {
        $.fancybox({
            'padding': 0,
            'autoScale': false,
            'transitionIn': 'none',
            'transitionOut': 'none',
            'title': this.title,
            'width': 640,
            'height': 385,
            'href': this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
            'helpers': {
                overlay: {
                    locked: false
                }
            },
            'type': 'swf',
            'swf': {
                'wmode': 'transparent',
                'allowfullscreen': 'true'
            }
        });
        return false;
    });
    $(function () {
        $(".local-video").fancybox({
            width: 840,
            height: 400,
            type: 'iframe'
        });
    });
    
    
})