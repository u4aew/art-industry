<!DOCTYPE html>
<html lang="<?= Yii::app()->language; ?>">
<head>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_START); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta http-equiv="Content-Language" content="ru-RU"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?= $this->title; ?></title>
    <meta name="yandex-verification" content="9e73d1b2ca2622d5" />
    <meta name="google-site-verification" content="n1rhMEQSsyPF_TmujeRu40cd1YGGJokcp-wXtuVg19g" />
    <meta name="description" content="<?= $this->description; ?>"/>
    <meta name="keywords" content="<?= $this->keywords; ?>"/>
    <?php if ($this->canonical): ?>
        <link rel="canonical" href="<?= $this->canonical ?>"/>
    <?php endif; ?>
    <link rel="stylesheet" href="/themes/default/web/css/camera.css">
    <link rel="stylesheet" href="/themes/default/web/css/jquery.fancybox.css">
    <link rel="stylesheet" href="/themes/default/web/css/jquery.fileupload.css">
    <link rel="stylesheet" href="/themes/default/web/css/style.css">
    <script type="text/javascript">
        var yupeTokenName = '<?= Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?= Yii::app()->getRequest()->getCsrfToken();?>';
    </script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://yandex.st/highlightjs/8.2/styles/github.min.css">
    <script src="http://yastatic.net/highlightjs/8.2/highlight.min.js"></script>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_END); ?>
</head>
<body>
<?= $content; ?>
<script src="/themes/default/web/js/jquery.easing.1.3.js"></script>
<script src="/themes/default/web/js/camera.js"></script>
<script src="/themes/default/web/js/jquery.fancybox.js"></script>
<script src="/themes/default/web/js/jquery.ui.widget.js"></script>
<script src="/themes/default/web/js/jquery.fileupload.js"></script>
<script src="/themes/default/web/js/script.js"></script>
<script>
    $(document).ready(function () {
        $("#formOrder").submit(function() {
            var FileName = $("#files").text();
            var FileHost = window.location + '/server/php/files/' + FileName
            $.ajax({
                type: "POST",
                url: "/mail.php",
                data: $(this).serialize()+"&fileName="+ FileHost
            }).done(function() {
                $("#myModalBox").attr("data-needSuccess",true).modal("hide");
                $('#SuccessModalBox').modal('show');
                setTimeout(function(){
                    $('#SuccessModalBox').modal('hide');
                }, 3000);
            });
            return false;
        });
    })
</script>


<script>
    /*jslint unparam: true */
    /*global window, $ */
    $(function () {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var url = window.location.hostname === 'blueimp.github.io' ?
            '//jquery-file-upload.appspot.com/' : '/server/php/';
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',
            done: function (e, data) {
                $.each(data.result.files, function (index, file) {
                    $('<p/>').text(file.name).appendTo('#files');
                });
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });
</script>
<script>
    $(document).ready(function () {
        function AlertMod() {
            if ($("#HeightProduct").val() >= 500 && $("#HeightProduct").val() <= 2000 && $("#WidthProduct").val() >= 500 && $("#WidthProduct").val() <= 3000) {
                $(".dimensions-title").removeClass('alert-dimensions-title');
            }
            else {
                $('.control-dimensions').val(500);
                $(".dimensions-title").addClass('alert-dimensions-title');
            }
        }
        $(".control-dimensions").focusout(function () {
            AlertMod()
        })
    })
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter40921504 = new Ya.Metrika({
                    id:40921504,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/40921504" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function(){ var widget_id = 'jz1aOqPK7S';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>
