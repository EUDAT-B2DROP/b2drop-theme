<!DOCTYPE html>
<!--[if lte IE 8]>
<html class="ng-csp ie ie8 lte9 lte8" data-placeholder-focus="false" lang="<?php p($_['language']); ?>"><![endif]-->
<!--[if IE 9]>
<html class="ng-csp ie ie9 lte9" data-placeholder-focus="false" lang="<?php p($_['language']); ?>"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="ng-csp" data-placeholder-focus="false" lang="<?php p($_['language']); ?>"><!--<![endif]-->
<head data-requesttoken="<?php p($_['requesttoken']); ?>">
    <meta charset="utf-8">
    <title>
        <?php p($theme->getTitle()); ?>
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?php print_unescaped(image_path('', 'favicon.png')); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php print_unescaped(image_path('', 'favicon-touch.png')); ?>">
    <?php foreach ($_['cssfiles'] as $cssfile): ?>
        <link rel="stylesheet" href="<?php print_unescaped($cssfile); ?>" media="screen">
    <?php endforeach; ?>
    <?php foreach ($_['jsfiles'] as $jsfile): ?>
        <script src="<?php print_unescaped($jsfile); ?>"></script>
    <?php endforeach; ?>
    <?php print_unescaped($_['headers']); ?>
    <!-- Custom css -->
    <link href="/themes/b2drop/core/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


</head>
<body id="body-public">
<?php include('layout.noscript.warning.php'); ?>

<div class="header">
    <div id="header-public">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <a href="/"><img width="232" height="128" src="/themes/b2drop/core/img/logo.png" alt=""/></a>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9">

                    <div id="gb_menu">
                        <ul>
                            <li><a target="_blank" href="https://eudat.eu/services/b2drop">WHAT IS B2DROP</a></li>
                            <li><a href="/pwm">REGISTER</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a target="_blank" href="https://eudat.eu/support-request?Service=B2DROP">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php print_unescaped($_['content']); ?>

</body>
</html>
