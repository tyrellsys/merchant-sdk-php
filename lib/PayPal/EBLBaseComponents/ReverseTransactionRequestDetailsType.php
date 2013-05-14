<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
/**
 * Identifier of the transaction to reverse. Required Character
 * length and limitations: 17 single-byte alphanumeric
 * characters 
 */
class ReverseTransactionRequestDetailsType  
   extends PPXmlMessage{

	/**
	 * Identifier of the transaction to reverse. Required Character
	 * length and limitations: 17 single-byte alphanumeric
	 * characters 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\string	 
	 */ 
	public $TransactionID;


   
}