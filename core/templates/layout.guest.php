<!DOCTYPE html>
<!--[if lte IE 8]><html class="ng-csp ie ie8 lte9 lte8" data-placeholder-focus="false" lang="<?php p($_['language']); ?>" ><![endif]-->
<!--[if IE 9]><html class="ng-csp ie ie9 lte9" data-placeholder-focus="false" lang="<?php p($_['language']); ?>" ><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="ng-csp" data-placeholder-focus="false" lang="<?php p($_['language']); ?>" ><!--<![endif]-->
    <head data-requesttoken="<?php p($_['requesttoken']); ?>">
        <meta charset="utf-8">
        <title>
        <?php p($theme->getTitle()); ?>
        </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="referrer" content="never">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-itunes-app" content="app-id=<?php p($theme->getiTunesAppId()); ?>">
        <meta name="theme-color" content="<?php p($theme->getMailHeaderColor()); ?>">
        <link rel="shortcut icon" type="image/png" href="<?php print_unescaped(image_path('', 'favicon.png')); ?>">
        <link rel="apple-touch-icon-precomposed" href="<?php print_unescaped(image_path('', 'favicon-touch.png')); ?>">
        <?php foreach($_['cssfiles'] as $cssfile): ?>
            <link rel="stylesheet" href="<?php print_unescaped($cssfile); ?>" media="screen">
        <?php endforeach; ?>
        <?php foreach($_['jsfiles'] as $jsfile): ?>
            <script src="<?php print_unescaped($jsfile); ?>"></script>
        <?php endforeach; ?>
        <?php print_unescaped($_['headers']); ?>
        <!-- Bootstrap -->
        <link href="./themes/b2drop/core/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Custom css -->
        <link href="./themes/b2drop/core/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="<?php p($_['bodyid']);?>">
        <?php if ($_['bodyid'] === 'body-login' ): ?>
        <div id="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <a href="https://eudat.eu">GO TO EUDAT WEBSITE</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <a href="./"><img width="232" height="128" src="./themes/b2drop/core/img/logo.png" alt=""/></a>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-9">

                        <nav class="navbar navbar-default">
                            <div class="container-fluid">

                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#gb_menu">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse" id="gb_menu">
                                    <ul id="menu" class="nav navbar-nav">
                                        <li><a target="_blank" href="https://eudat.eu/services/b2drop">WHAT IS B2DROP</a></li>
                                        <li><a href="/pwm">REGISTER</a></li>
                                        <li><a target="_blank" href="https://eudat.eu/services/userdoc/b2drop">USER GUIDE</a></li>
                                        <li><a href="./themes/b2drop/faq.html">FAQs</a></li>
                                        <li><a target="_blank" href="mailto:eudat-support@csc.fi">CONTACT</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div id="page">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-5">
                        <!-- BEGIN CONTENT LEFT -->
                        <div class="description-home hidden">
                            <h1>B2DROP</h1>

                            <p>B2DROP is a secure and trusted data exchange service for researchers and scientists to keep their
                                research data synchronized and up-to-date and to exchange with other researchers.</p>
                            <a class="btn btn-default" href="https://eudat.eu/services/b2drop">Read more</a>
                        </div>
                        <!-- END CONTENT LEFT -->
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 description-home">
                        <?php print_unescaped($_['content']); ?>
                        <p id="register_link">Not registered yet? <a href="/pwm">CLICK HERE</a></p>
                    </div>
                </div>
            </div>

        </div>
        <?php endif; ?>
        <footer role="contentinfo">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-1 col-md-1">
                        <img src="./themes/b2drop/core/img/flag-ce.jpg"/>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5">
                        EUDAT receives funding from the European Union’s Horizon 2020 research and innovation programme under grant agreement No. 654065.
                        <a href="#">Legal Notice</a>.
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                        <nav class="navbar navbar-footer">
                            <ul id="menu" class="nav navbar-nav navbar-right pull-right">
                                <li><a href="./themes/b2drop/terms-of-use.html">Terms of Use</a></li>
                                <li><a target="_blank" href="https://eudat.eu/what-eudat">About EUDAT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="./themes/b2drop/core/js/theme-fixes.js"></script>
        <script src="./themes/b2drop/core/js/bootstrap.min.js"></script>
    </body>
</html>
