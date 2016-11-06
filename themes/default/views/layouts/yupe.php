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
<script src="/themes/default/web/js/script.js"></script>
</body>
</html>
