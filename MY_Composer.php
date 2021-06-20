<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Composer 
{
     function __construct() 
     {
         // COMPSER VENDOR DIRECTORY
         include(APPPATH.'vendor/autoload.php');
		 $client = new \Shopee\Client([
			'secret' => SHOPEE_SECRET,
			'partner_id' => SHOPEE_PARTNER_ID,
			'shopid' => SHOPEE_SHOP_ID,
		]);
     }
}