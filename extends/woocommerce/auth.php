<?php

/**

 * Lost password shortcode

 */

function custom_lost_password_form($atts)

{
    return wc_get_template('myaccount/form-lost-password.php', array('form' => 'lost_password'));
}

add_shortcode('woocommerce_lost_password', 'custom_lost_password_form');


/**

 * Reset password shortcode

 */

function custom_reset_password_form($atts)

{
    return wc_get_template('myaccount/form-reset-password.php', array('form' => 'form-reset-password'));
}

add_shortcode('woocommerce_custom_my_account', 'custom_my_account');

/**

 * Reset password confirmation shortcode

 */

function custom_my_account($atts)

{
    return wc_get_template('myaccount/my-account.php', array('form' => 'my-account'));
}

add_shortcode('woocommerce_lost_password_confirmation', 'custom_lost_password_confirmation');
/**

 * Reset password confirmation shortcode

 */

function custom_lost_password_confirmation($atts)

{
    return wc_get_template('myaccount/lost-password-confirmation.php', array('form' => 'lost-password-confirmation'));
}

add_shortcode('woocommerce_lost_password_confirmation', 'custom_lost_password_confirmation');

// Add the code below to your theme's functions.php file to add a confirm password field on the register form under My Accounts.
add_filter('woocommerce_registration_errors', 'registration_errors_validation', 10, 3);
function registration_errors_validation($reg_errors, $sanitized_user_login, $user_email)
{
    global $woocommerce;
    extract($_POST);
    if (strcmp($password, $password2) !== 0) {
        return new WP_Error('registration-error', __('Passwords and Confirm Password not match.', 'woocommerce'));
    }
    return $reg_errors;
}
add_action('woocommerce_register_form', 'wc_register_form_password_repeat');
function wc_register_form_password_repeat()
{
?>
    <p class="form-row form-row-wide input-group">
        <!-- <label for="reg_password2"><?php _e('Confirm Password ', 'woocommerce'); ?> <span class="required">*</span></label> -->
        <input type="password" class="input-text form-control show_pass1" name="password2" id="reg_password2" value="<?php if (!empty($_POST['password2'])) echo esc_attr($_POST['password2']); ?>" placeholder="Confirm Password" />
        <span class="input-group-text toggle-password1">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/icon_eye.png" alt="icon" class="img-fluid">
        </span>
    </p>
<?php
}

/**

 * User Registration shortcode

 */
add_shortcode('wc_reg_form_bbloomer', 'bbloomer_separate_registration_form');

function bbloomer_separate_registration_form()
{
    if (is_user_logged_in()) return '<p>You are already registered</p>';
    ob_start();
    do_action('woocommerce_before_customer_login_form');
    $html = wc_get_template_html('myaccount/form-login.php');
    $dom = new DOMDocument();
    $dom->encoding = 'utf-8';
    $dom->loadHTML(utf8_decode($html));
    $xpath = new DOMXPath($dom);
    $form = $xpath->query('//form[contains(@class,"register")]');
    $form = $form->item(0);
    echo $dom->saveXML($form);
    return ob_get_clean();
}
/**

 * User Login shortcode

 */
add_shortcode('wc_login_form_bbloomer', 'bbloomer_separate_login_form');

function bbloomer_separate_login_form()
{
    if (is_user_logged_in()) return '<p>You are already logged in</p>';
    ob_start();
    do_action('woocommerce_before_customer_login_form');
    woocommerce_login_form(array('redirect' => wc_get_page_permalink('myaccount')));
    return ob_get_clean();
}

add_action('template_redirect', 'redirect_if_user_not_logged_in');



function redirect_if_user_not_logged_in()

{



    $acc_url = home_url() . '/my-account';

    // if (is_page('my-account') && !is_user_logged_in()) { //example can be is_page(23) where 23 is page ID

    if ($_SERVER['REQUEST_URI'] == '/hidden_meadows/my-account/' && !is_user_logged_in()) {

        $login_url = home_url() . '/login';

        wp_redirect($login_url);



        exit; // never forget this exit since its very important for the wp_redirect() to have the exit / die



    }
}

function wc_redirect()
{

    if (

        !is_user_logged_in()

        && (is_checkout())

    ) {

        // feel free to customize the following line to suit your needs

        wp_redirect(home_url() . '/login');

        exit;
    }
}

add_action('template_redirect', 'wc_redirect');

add_action('wp_logout', 'auto_redirect_after_logout');



function auto_redirect_after_logout()

{
    wp_redirect(home_url());
    exit();
}

add_filter('woocommerce_cart_item_removed_notice_type', '__return_null');