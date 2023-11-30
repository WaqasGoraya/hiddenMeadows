<?php
// Template Name: Login
if (is_user_logged_in()) {
    $url = site_url() . '/my-account';
    echo ("<script>location.href = '" . $url . "'</script>");
} else {
    get_header();
}
?>
<?php get_footer(); ?>