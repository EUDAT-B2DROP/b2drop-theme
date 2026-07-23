<!DOCTYPE html>
<html class="ng-csp" data-placeholder-focus="false" lang="<?php p($_['language']); ?>"
	data-locale="<?php p($_['locale']); ?>">

<?php include 'components/head.php'; ?>

<body id="<?php p($_['bodyid']); ?>">
	<?php if ($_['bodyid'] === 'body-login'): ?>
		<?php include \OC::$SERVERROOT . '/core/templates/layout.noscript.warning.php'; ?>
		<?php include \OC::$SERVERROOT . '/core/templates/layout.initial-state.php'; ?>
		<?php include 'components/header.html'; ?>
		<div id="page">
			<?php $show_share = strpos($_SERVER['REQUEST_URI'], 'showshare') !== false; ?>
			
			<div class="container" id="b2access-login">
				<div class="description-home">
					<?php if ($show_share): ?>
					<?php print_unescaped($_['content']); ?>
					<?php else: ?>
						<div id="oidc-select-user-back-end">
							<h1>Anmeldeoptionen:</h1>
							<div class="login-option">
								<a href="/apps/user_oidc/login/1?redirectUrl=">B2ACCESS</a>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php include 'components/footer.html'; ?>
</body>

</html>