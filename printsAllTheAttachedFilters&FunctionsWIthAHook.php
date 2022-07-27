<?php
																																						global $wp_filter;
																																						echo '<pre>';
																																						var_dump($wp_filter['woocommerce_email_before_order_table']);
																																						echo '</pre>';


																																						// This function does the same job as above but prints as array in a more readable manner
																																						function print_filters_for($hook = '')
																																						{
																																							global $wp_filter;
																																							if (empty($hook) || !isset($wp_filter[$hook])) return;

																																							$ret = '';
																																							foreach ($wp_filter[$hook] as $priority => $realhook) {
																																								foreach ($realhook as $hook_k => $hook_v) {
																																									$hook_echo = (is_array($hook_v['function']) ? get_class($hook_v['function'][0]) . ':' . $hook_v['function'][1] : $hook_v['function']);
																																									$ret .=  "\n $hook_echo $priority";
																																								}
																																							}
																																							return $ret;
																																						}

																																						print_r(print_filters_for('woocommerce_email_before_order_table')) ;

																																						?>