<?php
// No direct access
defined('_JEXEC') or die;
// get the helper file where class is stored which has function to execute code required
require_once dirname(__FILE__) . '/helper.php';

// Helper class method is called as object is created

//$hello = modHelloWorldHelper::getHello($params); -- direct from database comparing language code

$language = $params->get('lang', '1');	// getting parameter value from user selection
$hello    = modHelloWorldHelper::getHello( $language );	//passing value to helper file


// template path defined to call the view

require JModuleHelper::getLayoutPath('mod_helloworld');


 ?>
