<!DOCTYPE html>
<html lang="<?= Yii::app()->language; ?>">
<head>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_START); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta http-equiv="Content-Language" content="ru-RU"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?= $this->title; ?></title>
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
            SendOrder();
            return false;
        });
        function SendOrder() {
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
        }
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
</body>
</html>
