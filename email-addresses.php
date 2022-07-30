<?php

/**
 * Email Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-addresses.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.9.0
 */

if (!defined('ABSPATH')) {
	exit;
}

$text_align = is_rtl() ? 'right' : 'left';
$address    = $order->get_formatted_billing_address();
$shipping   = $order->get_formatted_shipping_address();

?>




<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
	<tbody>
		<tr>
			<td style="padding:30px 40px 30px 40px" align="center">
				<table style="" width="100%" cellspacing="0" cellpadding="0" border="0">
					<tbody>
						<td>
						<td>



							<div style="max-width: 482px; background: #FFF; padding: 0px 16px; margin-bottom:8px ">
								<div style="padding: 16px 0px; border-bottom: 1px solid #DFE0E1 ">
									<span style="display: block; color: #000000; font-weight: bold; font-size: 14px; ">Shipping Address</span>
								</div>
								<span style="padding: 16px 0px; display: block; font-size: 14px; color: #808284; ">
									<?php if (!wc_ship_to_billing_address_only() && $order->needs_shipping_address() && $shipping) : ?>



										<address>
											<?php echo wp_kses_post($shipping); ?>
										</address>

									<?php else : ?>
										<address>
											<?php echo wp_kses_post($address ? $address : esc_html__('N/A', 'woocommerce')); ?>
											<?php if ($order->get_billing_phone()) : ?>
												<br /><?php echo wc_make_phone_clickable($order->get_billing_phone()); ?>
											<?php endif; ?>
											<?php if ($order->get_billing_email()) : ?>
												<br /><?php echo esc_html($order->get_billing_email()); ?>
											<?php endif; ?>
										</address>
									<?php endif; ?>


								</span>
							</div>

							<div style="max-width: 482px; background: #FFF; padding: 0px 16px; margin-bottom:8px ">
								<div style="padding: 16px 0px; border-bottom: 1px solid #DFE0E1 ">
									<span style="display: block; color: #000000; font-weight: bold; font-size: 14px; "> Note </span>
								</div>
								<span style="padding: 16px 0px; display: block; font-size: 14px; color: #808284;"><span style="color: #4c4c4b "></span>
									<?php if ($order->get_customer_note()) : ?>
										<?php echo wp_kses_post(nl2br(wptexturize($order->get_customer_note()))); ?>

									<?php endif; ?>

								</span>
							</div>

							<div style="max-width: 482px; background: #FFF; padding: 0px 16px; margin-bottom:8px ">
								<div style="padding: 16px 0px; border-bottom: 1px solid #DFE0E1 ">
									<span style="display: block; color: #000000; font-weight: bold; font-size: 14px; "> Shipping Method</span>
								</div>
								<span style="padding: 16px 0px; display: block; font-size: 14px; color: #808284;"><span style="color: #4c4c4b "></span> <?php echo $order->get_shipping_method(); ?></span>
							</div>

							<!-- summary / payment method -->
							<div style="max-width: 482px; background: #FFF; padding: 0px 16px; margin-bottom:8px ">
								<div style="padding: 16px 0px; border-bottom: 1px solid #DFE0E1 ">
									<span style="display: block; color: #000000; font-weight: bold; font-size: 14px; ">Payment Summary</span>
								</div>
								<div style="padding: 16px 0px; border-bottom: 1px solid #DFE0E1 ">

									<!-- Store credit only -->

									<!-- START Payment Method: Credit Card  -->

									<!-- Billed To -->
									<span style="display: block; font-size: 14px; color: #4c4c4b; margin-bottom:8px"> Brand Cart</span>

									<!-- CC Logo / Number -->
									<div style="font-size: 14px; color: #808284; ">
										<!-- <img alt="visa" src="https://everlane.s3.amazonaws.com/static/payment_method_icons/visa.png" style="height: 20px; margin-top: -4px; margin-right: 1px; vertical-align: middle;" />

										
										(••••)  -->
										<?php echo $order->get_payment_method_title(); ?>
									</div>

									<!-- Payment Method: PayPal -->

									<!-- Payment Method: Cash -->

									<!-- Payment Method: Afterpay -->

									<!-- Payment Method: Alipay -->

									<!-- Payment Method: Stripe -->

									<!-- END Payment Method: Credit Card -->
								</div>


								<!-- adjustments credit_card -->
								<div style="padding: 8px 0px; border-bottom: 1px solid #DFE0E1 ">
									<table border="0 " cellspacing="0 " cellpadding="0 " width="100% " style="width: 100%!important; ">
										<tbody>


											<?php
											$item_totals = $order->get_order_item_totals();

											if ($item_totals) {
												$i = 0;
												foreach ($item_totals as $total) {
													$i++;
											?>
													<?php if ($i === 2) : ?>
														<tr>
															<td style="padding: 4px 0px; font-family: 'Avenir Medium', arial, helvetica, sans-serif; color: #808284; font-size: 14px; ">Shipping Cost</td>
															<td style="padding: 4px 0px; font-family: 'Avenir Medium', arial, helvetica, sans-serif; color: #4C4C4B; font-size: 14px; text-align: right; "><?php echo "£" . $order->get_shipping_total(); ?></td>
														</tr>
													<?php endif; ?>

													<tr>
														<td style="padding: 4px 0px; font-family: 'Avenir Medium', arial, helvetica, sans-serif; color: #808284; font-size: 14px; "><?php echo wp_kses_post($total['label']); ?></td>
														<td style="padding: 4px 0px; font-family: 'Avenir Medium', arial, helvetica, sans-serif; color: #4C4C4B; font-size: 14px; text-align: right; "><?php echo wp_kses_post($total['value']); ?></td>
													</tr>

											<?php
												}
											}

											?>



										</tbody>
									</table>
								</div>

							</div>

						</td>
			</td>
	</tbody>
</table>
</td>
</tr>
</tbody>
</table>