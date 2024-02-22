<head <?php if ($_['user_uid']) { ?> data-user="<?php p($_['user_uid']); ?>"
		data-user-displayname="<?php p($_['user_displayname']); ?>" <?php } ?>
	data-requesttoken="<?php p($_['requesttoken']); ?>">
	<meta charset="utf-8">
	<title>
		<?php p($theme->getTitle()); ?>
	</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<?php if ($theme->getiTunesAppId() !== '') { ?>
		<meta name="apple-itunes-app" content="app-id=<?php p($theme->getiTunesAppId()); ?>">
	<?php } ?>
	<meta name="theme-color" content="<?php p($theme->getColorPrimary()); ?>">
	<link rel="icon" href="<?php print_unescaped(image_path('', 'favicon.ico')); /* IE11+ supports png */ ?>">
	<link rel="apple-touch-icon" href="<?php print_unescaped(image_path('', 'favicon-touch.png')); ?>">
	<link rel="mask-icon" sizes="any" href="<?php print_unescaped(image_path('', 'favicon-mask.svg')); ?>"
		color="<?php p($theme->getColorPrimary()); ?>">
	<link rel="manifest" href="<?php print_unescaped(image_path('', 'manifest.json')); ?>">
	<?php emit_css_loading_tags($_); ?>
	<?php emit_script_loading_tags($_); ?>
	<link rel="stylesheet" href="/themes/b2drop/core/css/server.css" type="text/css" />
	<?php foreach ($_['printcssfiles'] as $cssfile): ?>
		<link rel="stylesheet" href="<?php print_unescaped($cssfile); ?>" media="print">
	<?php endforeach; ?>
	<?php if (isset($_['inline_ocjs'])): ?>
		<script nonce="<?php p(\OC::$server->getContentSecurityPolicyNonceManager()->getNonce()) ?>" type="text/javascript">
			<?php print_unescaped($_['inline_ocjs']); ?>
		</script>
	<?php endif; ?>
	<?php foreach ($_['jsfiles'] as $jsfile): ?>
		<script nonce="<?php p(\OC::$server->getContentSecurityPolicyNonceManager()->getNonce()) ?>"
			src="<?php print_unescaped($jsfile); ?>"></script>
	<?php endforeach; ?>
	<?php print_unescaped($_['headers']); ?>
</head>