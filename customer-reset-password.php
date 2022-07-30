<?php

/**
 * Customer Reset Password email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-reset-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 4.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>

<!-- <?php do_action('woocommerce_email_header', $email_heading, $email); ?> -->


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "https://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<head>
	<meta http-equiv=Content-Type content="text/html; charset=UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="https://www.brandcart.co.uk/wp-content/uploads/2022/07/Brand-Cart.png" type="image/x-icon">
	<title>BrandCart</title>


<body>
	<div class="bodycontainer">
		<div class="maincontent">
			<table width=100% cellpadding=0 cellspacing=0 border=0 class="message">
				<tr>

				<tr>
					<td colspan=2>
						<table width=100% cellpadding=12 cellspacing=0 border=0>
							<tr>
								<td>
									<div style="overflow: hidden;">
										<font size=-1>
											<div>
												<div id="m_7866393457056888844ydpf922b39dyahoo_quoted_7632959596">
													<div>
														<div>
															<div id="m_7866393457056888844ydpf922b39dyiv4660054999">
																<div>
																	<div>
																		<div>
																			<div dir="ltr">
																				<div>
																					<div style="margin:0px;padding:0px">
																						<table width="100%" cellspacing="0" cellpadding="0" border="0">
																							<tbody>
																								<tr>
																									<td width="100%" bgcolor="#F5F5F5" align="center">
																										<table style="width:640px;min-width:640px" width="640" cellspacing="0" cellpadding="0" border="0">
																											<tbody>
																												<tr>
																													<td style="width:640px;min-width:640px" width="640" align="center">
																														<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
																															<tbody>
																																<tr>
																																	<td style="font-size:1px;line-height:1px;color:#ffffff" align="left">
																																		YOUR
																																		ORDER
																																		HAS
																																		SHIPPED
																																	</td>
																																</tr>
																															</tbody>
																														</table>
																														<table width="100%" cellspacing="0" cellpadding="0" border="0">
																															<tbody>
																																<tr>
																																	<td style="padding:30px 40px 30px 40px" align="center">
																																		<table cellspacing="0" cellpadding="0" border="0" align="center">
																																			<tbody>
																																				<tr>
																																					<td valign="top" align="center">
																																						<a href="https://www.brandcart.co.uk/" rel="noreferrer noopener" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=https://www.astrogaming.com&amp;source=gmail&amp;ust=1607422678058000&amp;usg=AFQjCNFv7o7rLBNDVgrslGBSJxwkpCp0yg"><img src="https://www.brandcart.co.uk/wp-content/uploads/2022/07/Brand-Cart.png" alt="logo_Name" style="display:block;width:300px;max-width:300px" border="0"></a>
																																					</td>
																																				</tr>
																																			</tbody>
																																		</table>
																																	</td>
																																</tr>
																															</tbody>
																														</table>
																														<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
																															<tbody>
																																<tr>
																																	<td style="padding:40px 40px 40px 40px" align="left">
																																		<table width="100%" cellspacing="0" cellpadding="0" border="0">
																																			<tbody>
																																				<tr>
																																					<td style="font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;color:#2f3132;font-size:20px;line-height:40px;letter-spacing:-1px;font-weight:bold;padding:0px 0px 30px 0px" valign="top" align="center">
																																						RESET PASSWORD
																																					</td>
																																				</tr>
																																				<tr>
																																					<td style="font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;color:#2f3132;font-size:16px;line-height:20px" valign="top" align="center">
																																						<?php /* translators: %s: Customer username */ ?>
																																						<p><?php printf(esc_html__('Hi %s,', 'woocommerce'), esc_html($user_login)); ?></p>
																																						<?php /* translators: %s: Store name */ ?>
																																						<p><?php printf(esc_html__('Someone has requested a new password for the following account on %s:', 'woocommerce'), esc_html(wp_specialchars_decode(get_option('blogname'), ENT_QUOTES))); ?></p>
																																						<?php /* translators: %s: Customer username */ ?>
																																						<p><?php printf(esc_html__('Username: %s', 'woocommerce'), esc_html($user_login)); ?></p>
																																						<p><?php esc_html_e('If you didn\'t make this request, just ignore this email. If you\'d like to proceed:', 'woocommerce'); ?></p>
																																						<p>
																																							<a class="link" href="<?php echo esc_url(add_query_arg(array('key' => $reset_key, 'id' => $user_id), wc_get_endpoint_url('lost-password', '', wc_get_page_permalink('myaccount')))); ?>"><?php // phpcs:ignore 
																																																																																						?>
																																								<?php esc_html_e('Click here to reset your password', 'woocommerce'); ?>
																																							</a>
																																						</p>
																																					</td>
																																				</tr>
																																			</tbody>
																																		</table>
																																	</td>
																																</tr>
















																																<?php
																																// /**
																																//  * Show user-defined additional content - this is set in each email's settings.
																																//  */
																																// if ( $additional_content ) {
																																// 	echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
																																// }

																																do_action('woocommerce_email_footer', $email);
