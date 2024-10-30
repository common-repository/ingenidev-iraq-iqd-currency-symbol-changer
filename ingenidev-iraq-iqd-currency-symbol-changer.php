<?php

/**
 * Plugin Name: ingenidev, Iraq - IQD Currency Symbol Changer
 * Plugin URI: https://ingenidev.com/iraq-iqd-currency-symbol-changer-for-woocommerce/
 * Author: ingenidev
 * Author URI: https://ingenidev.com
 * Description: By default, WooCommerce uses the currency symbol for the Iraqi Dinar (IQD) as "د.ع". This ingenidev plugin changes it to "IQD".
 * Version: 1.0.0
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */
defined('ABSPATH') or die('Direct access not permitted');

add_filter('woocommerce_currency_symbol', 'ingenidev_irqcsc_change_irq_currency_symbol', 10, 2);

function ingenidev_irqcsc_change_irq_currency_symbol($currency_symbol, $currency)
{
    switch ($currency) {
        case 'IQD':
            $currency_symbol = 'IQD';
            break;
    }
    return $currency_symbol;
}
