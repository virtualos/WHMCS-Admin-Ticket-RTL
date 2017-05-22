<?php
/**
 * Admin Ticket RTL module for WHMCS.
 *
 * @package WHMCS
 * @subpackage Admin_Ticket_RTL
 * @author Dor Zuberi <webmaster@dorzki.co.il>
 * @link https://www.dorzki.co.il
 * @version 1.0
 */

// Exit if accessed directly.
if ( ! defined( 'WHMCS' ) ) {
	die( 'This file cannot be accessed directly' );
}


/**
 * Register module details and configuration fields.
 *
 * @return array module details and fields.
 */
function admin_ticket_rtl_config() {

  return [
    'name' => 'Admin Ticket RTL',
    'description' => 'Change the ticket box from LTR to RTL.',
    'version' => '1.0.0',
    'author' => 'dorzki',
    'fields' => [],
  ];

}
