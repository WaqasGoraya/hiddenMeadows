<?php

/**
 * Login form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     7.0.1
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

if (is_user_logged_in()) {
	return;
}

?>
<form class="woocommerce-form woocommerce-form-login login" method="post" <?php echo ($hidden) ? 'style="display:none;"' : ''; ?>>

	<?php do_action('woocommerce_login_form_start'); ?>

	<?php echo ($message) ? wpautop(wptexturize($message)) : ''; // @codingStandardsIgnoreLine 
	?>

	<p class="form-row form-row-first">
		<!-- <label for="username"><?php esc_html_e('Username or email', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label> -->
		<input type="text" class="input-text form-control" name="username" id="username" autocomplete="username" placeholder="Email" />
	</p>
	<p class="form-row form-row-last input-group">
		<!-- <label for="password"><?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label> -->
		<input class="input-text woocommerce-Input form-control show_pass" type="password" name="password" id="password" autocomplete="current-password" placeholder="Password" />
		<span class="input-group-text toggle-password">
			<img src="<?= get_template_directory_uri(); ?>/assets/images/icon_eye.png" alt="icon" class="img-fluid">
		</span>
	</p>
	<div class="clear"></div>

	<?php do_action('woocommerce_login_form'); ?>

	<p class="form-row">
		<!-- <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme"> -->
			<!-- <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e('Remember me', 'woocommerce'); ?></span> -->
		</label>
		<a href="<?= site_url(); ?>/forgot-password" class="forget-link">Forgot your password?</a>
		<?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
		<input type="hidden" name="redirect" value="<?php echo esc_url($redirect); ?>" />
		<button type="submit" class="woocommerce-button button woocommerce-form-login__submit<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?> btn btn-submit" name="login" value="<?php esc_attr_e('Login', 'woocommerce'); ?>"><?php esc_html_e('Login', 'woocommerce'); ?></button>
	</p>
	<p class="lost_password">
	<p class="reg-link">No account? <a href="<?= site_url(); ?>/register">Create one here</a></p>
	</p>

	<div class="clear"></div>

	<?php do_action('woocommerce_login_form_end'); ?>

</form>