<?php

/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined('ABSPATH') || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
do_action('woocommerce_account_navigation'); ?>

<style>
	.woocommerce {
		display: flex;
		margin: 50px 0px;
	}

	.woocommerce-MyAccount-navigation {
		background-color: #1D1D1D;
		width: 20%;
	}

	.woocommerce-MyAccount-navigation ul {
		margin-bottom: 0px;
	}

	.woocommerce-MyAccount-navigation li {
		padding: 10px;
		border-bottom: 2px solid #fff;
		text-align: center;
		background: #212121;
	}

	.woocommerce-MyAccount-navigation li.is-active {
		background-color: #631a1c;
	}

	.woocommerce-MyAccount-navigation li:hover {
		background-color: #631a1c;

	}

	.woocommerce-MyAccount-navigation li a {
		color: #fff;
		text-decoration: none;
	}

	.woocommerce-MyAccount-content {
		padding-left: 40px;
		width: 80%;
	}

	.woocommerce-MyAccount-content a {
		color: #0d6efd !important;
		text-decoration: none;
	}

	.woocommerce-MyAccount-content a.woocommerce-Button.button {
		color: #fff !important;
		text-decoration: none;
	}

	.wc-block-components-notice-banner.is-info {
		border-color: #631a1c !important;
	}

	.wc-block-components-notice-banner.is-info>svg {
		background: #631a1c !important;
	}

	.woocommerce a.button {
		background-color: #000;
		color: #fff !important;
	}

	.woocommerce a.button:hover {
		background-color: #BE0B31;
		color: #fff !important;
	}

	.woocommerce-info {
		border-top-color: #BE0B31;
	}

	.woocommerce-info::before {

		color: #BE0B31;
	}

	.woocommerce h3 {
		font-size: 20px;
		color: #000000;
		font-weight: 700;
		font-family: "Exo";
		padding: 10px 0px;
		margin-bottom: 10px;
		line-height: normal !important;
		text-transform: capitalize;
	}

	.woocommerce-MyAccount-content header {
		margin-bottom: 20px;
	}

	.woocommerce-MyAccount-content p {
		margin-bottom: 16px;
	}

	.woocommerce-MyAccount-content form .woocommerce-Input {
		display: block;
		width: 100%;
		height: calc(1.5em + 0.75rem + 2px);
		padding: 0.375rem 0.75rem;
		font-size: 1rem;
		font-weight: 400;
		line-height: 1.5;
		color: #495057;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid #ced4da;
		border-radius: 0.25rem;
		-webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
		transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
		-o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
	}

	.woocommerce-form-row {
		flex-direction: column;
	}

	.woocommerce-Button {
		background-color: #631a1c !important;
		color: #fff !important;
		margin-top: 15px;
		border: none;
		outline: none;
		padding: 10px;
		border-radius: 5px;
		width: 155px;
		text-align: center;
	}

	/* .woocommerce-Button:hover {
		background-color: #631a1c !important;
	} */

	.woocommerce-MyAccount-navigation .woocommerce-MyAccount-navigation-link--downloads,
	.woocommerce-MyAccount-navigation .woocommerce-MyAccount-navigation-link--edit-address {
		display: none !important;
	}

	@media (max-width:767px) {

		.woocommerce {
			display: flex;
			margin: 50px 0px;
			flex-direction: column;
		}

		.woocommerce-MyAccount-navigation ul {
			margin-bottom: 0px;
			display: flex;
			margin-right: 10px;
			flex-wrap: wrap;
		}

		.woocommerce-MyAccount-navigation {
			background-color: #1D1D1D;
			width: 100%;
		}

		.woocommerce-MyAccount-navigation li a {
			font-size: 12px;
			color: #fff;
		}

		.woocommerce-MyAccount-navigation {
			background-color: transparent;
			width: 100%;
		}

		.woocommerce-MyAccount-navigation li {
			padding: 10px;
			border-bottom: 2px solid #fff;
			text-align: center;
			background: #000;
		}

		.woocommerce-MyAccount-content {
			padding-left: 0px;
			width: 100%;
			margin-top: 30px;
		}

		.woocommerce-MyAccount-content {
			padding-left: 0px;
			width: 90%;
			margin-top: 30px;
			object-fit: contain;
		}
	}
</style>


<div class="woocommerce-MyAccount-content">
	<?php
	/**
	 * My Account content.
	 *
	 * @since 2.6.0
	 */
	do_action('woocommerce_account_content');
	?>
</div>