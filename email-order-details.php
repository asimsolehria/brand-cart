<?php

/**
 * Order details table shown in emails.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-order-details.php.
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
<!-- <?php do_action('woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text, $email); ?> -->

<?php
if ($sent_to_admin) {
	$before = '<a class="link" href="' . esc_url($order->get_edit_order_url()) . '">';
	$after  = '</a>';
} else {
	$before = '';
	$after  = '';
}


?>

<tr>
	<td style="padding:0px 40px 0px 40px" align="center">
		<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#C3C6C8">
			<tbody>
				<tr>
					<td style="font-size:1px;line-height:1px" height="1">
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
<tr>
	<?php
	if (class_exists("WC_Shipment_Tracking_Actions")) {
		$object = WC_Shipment_Tracking_Actions::get_instance();
	}


	$tracking_items = $object->get_tracking_items($order->get_id(), true);

	if ($tracking_items) {
		foreach ($tracking_items as $tracking_item) {
			$tracking_number = $tracking_item['tracking_number'];
			$povider = $tracking_item['formatted_tracking_provider'];
			$link = $tracking_item['formatted_tracking_link'];
		}
	}

	?>
	<td style="padding:30px 40px 30px 40px" align="center">
		<table style="display:inline" cellspacing="0" cellpadding="0" border="0" align="left">
			<tbody>
				<tr>
					<td style="font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;color:#2f3132;font-size:13px;line-height:15px;font-weight:normal;padding:0px 0px 6px 0px" align="left">
						<span style="font-weight:bold">Purchase
							date:</span>
						(<time datetime="<?php echo $order->get_date_created()->format('c') ?>"><?php echo wc_format_datetime($order->get_date_created(), "d M Y"); ?></time>)
					</td>
				</tr>
				<tr>
					<td style="font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;color:#2f3132;font-size:13px;line-height:15px;font-weight:normal;padding:0px 0px 6px 0px" align="left">
						<span style="font-weight:bold">Order
							#</span>
						<?php echo $before . $order->get_order_number() . $after; ?>
					</td>
				</tr>
				<?php if ("customer_completed_order" === $email->id) : ?>
					<tr>
						<td style="font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;color:#2f3132;font-size:13px;line-height:15px;font-weight:normal;padding:0px 0px 6px 0px" align="left">
							<span style="font-weight:bold">Tracking
								Number
								#</span>
							<?php echo $tracking_number; ?>
							(<?php echo $povider; ?>)
						</td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php if ("customer_completed_order" === $email->id) : ?>
			<table style="display:inline" cellspacing="0" cellpadding="0" border="0" align="right">
				<tbody>
					<tr>
						<td align="center">
							<table cellspacing="0" cellpadding="0" border="0">
								<tbody>
									<tr>
										<td bgcolor="#e73322" align="center">
											<a href="<?php echo $link; ?>" style="font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;padding:19px 36px;border:2px solid #e73322;color:#ffffff;display:inline-block;font-size:13px;font-weight:bold;text-decoration:none" rel="noreferrer noopener" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=https://astrogaming.narvar.com/astrogaming/tracking/15?tracking_numbers%3D941357036264%26service%3DUG%26ozip%3D11706%26dzip%3D11706%26order_number%3D165156092239&amp;source=gmail&amp;ust=1607422678058000&amp;usg=AFQjCNENpN_d129MlfaG-_8fJnxBg5GCrg">TRACK
												YOUR
												ORDER</a>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		<?php endif; ?>

	</td>
</tr>
<tr>
	<td style="padding:0px 40px 0px 40px" align="center">
		<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#C3C6C8">
			<tbody>
				<tr>
					<td style="font-size:1px;line-height:1px" height="1">
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
<?php
$title = $email->id === "customer_processing_order" ? "Purchased" : "Shipped";

?>

<tr>
	<td style="padding:15px 40px 10px 40px;font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif" align="center">
		<p style="font-size:12px;font-weight:bold;text-align:left;padding-bottom:5px">
			Recently
			<?php echo $title; ?>
			Items
			:
		</p>
		<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#C3C6C8">
			<tbody>
				<tr>
					<td style="font-size:1px;line-height:1px" height="1">
					</td>
				</tr>
			</tbody>
		</table>
		<table width="100%" cellspacing="0" cellpadding="5" bgcolor="#FFFFFF">
			<tbody>
				<?php
				echo wc_get_email_order_items( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					$order,
					array(
						'show_sku'      => $sent_to_admin,
						'show_image'    => true,
						'image_size'    => array(100, 100),
						'plain_text'    => $plain_text,
						'sent_to_admin' => $sent_to_admin,
					)
				);
				?>
			</tbody>
		</table>
	</td>
</tr>



</tbody>
</table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
	<tbody>
		<tr>
			<td style="padding:0px 40px 0px 40px" align="center">
				<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#C3C6C8">
					<tbody>
						<tr>
							<td style="font-size:1px;line-height:1px" height="1">
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
<?php do_action('woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text, $email); ?>