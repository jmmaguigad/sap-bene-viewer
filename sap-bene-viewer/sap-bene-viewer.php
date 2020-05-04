<?php
/**
 *
 * @link              https://fo2.dswd.gov.ph/
 * @since             1.0.0
 * @package           Sap_Beneficiary_Viewer
 *
 * Plugin Name:       SAP Beneficiary Viewer
 * Description:       A simple plugin dedicated for importing and showing details regarding
 *					  SAP Beneficiaries
 * Version:           1.0.0
 * Author:            FO2 ICTMS
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sap-beneficiary-viewer
 */

defined('ABSPATH') or die('Hey, what are you doing fishy!');

define('MY_PLUGIN_DIR',plugin_dir_path( __FILE__ ));

require_once MY_PLUGIN_DIR . 'includes/functions.php';

register_activation_hook( __FILE__, 'sap_benef_install' );
register_activation_hook( __FILE__, 'sap_benef_install_data' );
register_uninstall_hook( __FILE__, 'sap_benef_plugin_delete' );