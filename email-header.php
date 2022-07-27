<?php

/**
 * Email Header
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-header.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 4.0.0
 */
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

// Call the global WC_Email object
global $email;
// Get an instance of the WC_Order object
$order = $email->object; 

$name='Dear '.$order->get_billing_first_name().',<br>';

$email_heading=$name.' '.$email_heading;

?>
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
																																						<?php echo $email_heading; ?>
																																					</td>
																																				</tr>