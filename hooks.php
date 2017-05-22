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
 * Print module styles.
 */
add_hook( 'AdminAreaViewTicketPage', 1, function( $vars ) {

  $css  = "<style>";
  $css .= "  #replymessage, #replynote { direction: rtl; }";
  $css .= "  #ticketreplies .rightcol .msgwrap { padding-top: 15px; }";
  $css .= "  .rightcol .message.markdown-content { direction: rtl; }";
  $css .= "</style>";

  return $css;

} );
