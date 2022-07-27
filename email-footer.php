<?php

/**
 * Email Footer
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-footer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

defined('ABSPATH') || exit;
?>
<?php
global $email;
$additional_content = $email->get_additional_content();

?>
<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
	<tbody>
		<tr>
			<td align="center">
				<?php
				/**
				 * Show user-defined additional content - this is set in each email's settings.
				 */
				if ($additional_content) {
					echo wp_kses_post(wpautop(wptexturize($additional_content)));
				}

				?>
			</td>
		</tr>
		<tr>
			<td style="padding:30px 40px 30px 40px" align="center">
				<table style="" width="100%" cellspacing="0" cellpadding="0" border="0">
					<tbody>
						<td>
						<td>



							<div class="footer" style="max-width: 482px; background: #FFF; color: #808284; font-size:12px; padding: 16px;">
								<span style="font-weight: 500; display: block; margin-bottom: 4px ">Returns</span>
								<span style="display:block; margin-bottom: 1em ">We accept returns within 60 days of purchase. Please ensure that items are unworn, unwashed, and
									undamaged. Note: All items must be returned with any original packaging, including any tags the item came with. Underwear outside of one return must be unopened with all seals intact. Bodysuits must have protective hygienic liner attached. Exclusions: Digital and physical gift cards cannot be returned. </span>
								<span style="display:block; margin-bottom: 1em ">If you would like to start a return please visit your account <a href="https://link.everlane.com/click/5df6d689e7b48900293055e7/aHR0cHM6Ly93d3cuZXZlcmxhbmUuY29tL2FjY291bnQvb3JkZXJzP3Byb2ZpbGU9NWRmNWE4YzQ3YWNlNWEwZTliN2EyY2E3/5df5a8c47ace5a0e9b7a2ca7C487d3f8e" style="color: #4C4C4B; text-decoration: none ">Orders & Returns</a> page.</span>
								<span style="font-weight: 500; display: block; margin-bottom: 4px ">Contact Us</span>
								<span style="display:block; ">
									If you have any questions feel free to contact us at
									<a href="mailto:support@everlane.com" style="color: #4C4C4B; text-decoration: none ">support@everlane.com</a>

									<!-- Help Center -->
									or visit our <a href="https://link.everlane.com/click/5df6d689e7b48900293055e7/aHR0cHM6Ly9zdXBwb3J0LmV2ZXJsYW5lLmNvbS9oYy9lbi11cz9wcm9maWxlPTVkZjVhOGM0N2FjZTVhMGU5YjdhMmNhNw/5df5a8c47ace5a0e9b7a2ca7B28b5dcb2" style="color: #4C4C4B; text-decoration: none">help center.</a>
								</span>
							</div>



						</td>
			</td>
	</tbody>
</table>
</td>
</tr>
</tbody>
</table>




<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#e73322">
	<tbody>
		<tr>
			<td style="padding:20px 40px 20px 40px" align="center">
				<table style="display:inline;width:364px" width="364" cellspacing="0" cellpadding="0" border="0" align="left">
					<tbody>
						<tr>
							<td align="left">
								<table style="display:inline;width:80px" width="80" cellspacing="0" cellpadding="0" border="0" align="left">
									<tbody>
										<tr>
											<td style="padding:5px 35px 0px 0px" valign="middle" align="center">
												<a href="#m_7866393457056888844_m_-2492978437468248781_m_3131581504716965371_" rel="noreferrer noopener"><img src="https://ci3.googleusercontent.com/proxy/D9dGDhdgZMEYAQM32FwyAmiAbpBCOzxaptMNJXtBpd5Fu8SHWb52vwGqFeNq3bLcYykLtTbVRtracbjAa1hOiFRuqH951w9xO9wHrGXc2NWNSCx2i93ylYwcfjISwNhT2-oPJiimZiVw2idGW_X4nv73ICi2Ckf9jOWoFNs9VTS4CzZq=s0-d-e1-ft#https://drh.img.digitalriver.com/DRHM/Storefront/Site/logib2c/pb/images/notifications2019/icon_question_white.png" alt="" style="display:block" width="45" border="0"></a>
											</td>
										</tr>
									</tbody>
								</table>
								<table style="display:inline;width:280px" width="280" cellspacing="0" cellpadding="0" border="0" align="left">
									<tbody>
										<tr>
											<td style="padding:12px 0px 0px 0px" align="left">
												<table style="display:inline" cellspacing="0" cellpadding="0" border="0" align="left">
													<tbody>
														<tr>
															<td style="font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;color:#ffffff;font-size:24px;line-height:28px;font-weight:bold;padding:0px 8px 0px 0px" align="left">
																Questions?
															</td>
														</tr>
													</tbody>
												</table>
												<table style="display:inline" cellspacing="0" cellpadding="0" border="0" align="left">
													<tbody>
														<tr>
															<td style="font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;color:#ffffff;font-size:16px;line-height:20px;padding:6px 0px 0px 0px" align="left">
																We&#39;re
																here
																to
																help
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				<table style="width:176px" width="176" cellspacing="0" cellpadding="0" border="0" align="right">
					<tbody>
						<tr>
							<td valign="top" align="right">
								<table cellspacing="0" cellpadding="0" border="0">
									<tbody>
										<tr>
											<td align="center">
												<a href="https://www.brandcart.co.uk/contact-us/" style="font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;padding:19px 32px;border:2px solid #ffffff;display:inline-block;font-size:13px;color:#ffffff;font-weight:bold;text-decoration:none;white-space:nowrap" rel="noreferrer noopener" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://www.astrogaming.com/support&amp;source=gmail&amp;ust=1607422678059000&amp;usg=AFQjCNHxQ_pD8wIORGdFKuAEqfM3_p32ow">SUPPORT</a>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>



<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr>
			<td style="font-size:1px;line-height:1px" height="16">
			</td>
		</tr>
	</tbody>
</table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
	<tbody>
		<tr>
			<td style="padding:25px 40px 25px 40px" valign="middle" align="center">
				<table style="width:345px" width="345" cellspacing="0" cellpadding="0" border="0">
					<tbody>
						<tr>
							<td valign="middle" align="center">
								<table width="100%" cellspacing="0" cellpadding="0" border="0">
									<tbody>
										<tr>
											<td width="20%" valign="middle" align="center">
												<a href="https://www.facebook.com/Brand-Cart-103075295141787" rel="noreferrer noopener" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://astrogaming.com/facebook&amp;source=gmail&amp;ust=1607422678059000&amp;usg=AFQjCNHTj3GijvpdqGMLYLXeO4iHeH0p-Q"><img src="https://ci3.googleusercontent.com/proxy/T5YYryKwextGzddWBMN7W8XBEclFOX8KG-M3TszlWMZu4eSwalzHdzhiwu-xk4g7AjyKYa0zw9hLUR4x3SlvTUSiGgiDuBXu49vySpRTmDzKTCHHbS1uUh3FJ2MIgrVVWWLaC6B_9lq-jCmIqk4EB38TdmbjDXLfNcg=s0-d-e1-ft#https://drh.img.digitalriver.com/DRHM/Storefront/Site/logib2c/pb/images/notifications2019/fb_icon_b.png" alt="Facebook" style="display:block" width="12" border="0"></a>
											</td>
											<td width="20%" valign="middle" align="center">
												<a href="https://www.instagram.com/brandcartretail/" rel="noreferrer noopener" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://astrogaming.com/instagram&amp;source=gmail&amp;ust=1607422678059000&amp;usg=AFQjCNHK1rgaQ_3XpwTrVe_GpzyxpH_Gxw"><img src="https://ci6.googleusercontent.com/proxy/i2Dom3tPsvbG60-8HKJtZSQRKWXMR2FzE2TC4pDV5KaNRMkiP_Gh3QkRDYX-7P6w5nVD947oOLMfL6BGNOYDis16LHAg4_8XUMg_j8AvrEwA5iAzwOCVLjNjZMwLlD63s3Ph0prFygigW-Abz6Y43h5t6fJMoEVGaGs=s0-d-e1-ft#https://drh.img.digitalriver.com/DRHM/Storefront/Site/logib2c/pb/images/notifications2019/ig_icon_b.png" alt="Instagram" style="display:block" width="26" border="0"></a>
											</td>
											<td width="20%" valign="middle" align="center">
												<a href="https://twitter.com/BrandCartRetail" rel="noreferrer noopener" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://astrogaming.com/twitter&amp;source=gmail&amp;ust=1607422678059000&amp;usg=AFQjCNFa8zQHnHEWVP28m0e5aGQUkwBbIw"><img src="https://ci6.googleusercontent.com/proxy/1oRkwQzGcPtvlWO1h4di_xpNDgOe3jbGANebzEReeLXPxf3kwuAqc-JBdWvQRqNfYhjPZeHIKBKWA7jyFgNj60kdCWJeoZTcZKkwhG-oD68KMCp-h5kGVxJDC732tXngO53IFLTvxd25PaXa7xiLkDXG_CG9bQavmMI=s0-d-e1-ft#https://drh.img.digitalriver.com/DRHM/Storefront/Site/logib2c/pb/images/notifications2019/tw_icon_b.png" alt="Twitter" style="display:block" width="25" border="0"></a>
											</td>
											<!-- <td width="20%" valign="middle" align="center">
												<a href="http://astrogaming.com/youtube" rel="noreferrer noopener" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://astrogaming.com/youtube&amp;source=gmail&amp;ust=1607422678059000&amp;usg=AFQjCNF3MweWsERKCGydK5WE2JXqJCJJpw"><img src="https://ci3.googleusercontent.com/proxy/CQUCTPBuBFtWhcIlwFQTIU4lvA0zxB99ShT2FkpG8vBu14kI2tiO1hHKIJzq4FxFmPPegsm7LvOTnOaD7NrURilwDs6HXBj-f3Ad0WtGhBVVc00SQO9PUl2dda0QV11DUSdh_iHF9KHEvPaABuguab4Q2sDr0pJKtW0=s0-d-e1-ft#https://drh.img.digitalriver.com/DRHM/Storefront/Site/logib2c/pb/images/notifications2019/yt_icon_b.png" alt="YouTube" style="display:block" width="25" border="0"></a>
											</td> -->
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr>
			<td style="padding:25px 30px 12px 30px" valign="middle" align="left">
				<table cellspacing="0" cellpadding="0" border="0" align="center">
					<tbody>
						<tr>
							<td align="center">
							<table cellspacing="0" cellpadding="0" border="0" align="left">
									<tbody>
										<tr>
											<td style="padding:0px 10px 0px 10px;font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;font-size:14px;color:#2f3132;line-height:18px;font-weight:bold;border-right:2px solid #2f3132;white-space:nowrap" valign="middle" align="center">
												<a href="https://www.brandcart.co.uk/contact-us/" style="color:#2f3132;text-decoration:none" rel="noreferrer noopener" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://www.astrogaming.com/contact&amp;source=gmail&amp;ust=1607422678059000&amp;usg=AFQjCNH47i0u6IEIDsacC1Iztriu37Hq8g">Contact Us</a>
											</td>
										</tr>
									</tbody>
								</table>
								<table cellspacing="0" cellpadding="0" border="0" align="left">
									<tbody>
										<tr>
											<td style="padding:0px 10px 0px 0px;font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;font-size:14px;color:#2f3132;line-height:18px;font-weight:bold;border-right:2px solid #2f3132;white-space:nowrap" valign="middle" align="center">
												<a href="https://www.brandcart.co.uk/privacy-policy/" style="color:#2f3132;text-decoration:none" rel="noreferrer noopener" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://www.astrogaming.com/privacy&amp;source=gmail&amp;ust=1607422678059000&amp;usg=AFQjCNGJ5AfOqNoOCPcZpFc6CrC42suPLg">
													Privacy Policy</a>
											</td>
										</tr>
									</tbody>
								</table>
								
								<table cellspacing="0" cellpadding="0" border="0" align="left">
									<tbody>
										<tr>
											<td style="padding:0px 0px 0px 10px;font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;font-size:14px;color:#2f3132;line-height:18px;font-weight:bold;white-space:nowrap" valign="middle" align="center">
												<a href="https://www.brandcart.co.uk/privacy-policy/terms" style="color:#2f3132;text-decoration:none" rel="noreferrer noopener" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://www.astrogaming.com/terms&amp;source=gmail&amp;ust=1607422678059000&amp;usg=AFQjCNFdXGoB0PhnHaDVb93gWeWWwQCZ9g">Terms & Conditions
													
													</a>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr>
			<td style="padding:0px 40px 30px 40px" align="left">
				<table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tbody>
						<tr>
							<td style="font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;font-size:12px;color:#2f3132;line-height:16px" valign="top" align="center">

								Copyright © 2022 Brand Cart Limited. All Rights Reserved.
								<!-- The
								Logitech
								logo
								and
								other
								Logitech
								marks
								are
								owned
								by
								Logitech
								and
								may
								be
								registered.<br><br>
								Logitech
								Americas
								Headquarters<br>
								<a style="color:#2f3132;text-decoration:none" rel="noreferrer noopener">7700
									Gateway
									Blvd.
									Newark,
									CA
									94560
									USA</a><br><br> -->
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</font>
</div>
</table>
</table>
</div>
</div>
</body>