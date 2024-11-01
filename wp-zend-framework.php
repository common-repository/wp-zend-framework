<?php
/*
Plugin Name: wp-zend-framework
Plugin URI: http://www.webplay.pro/cms/wordpress/plugins/wp-zend-framework.html
Description: Simply make Zend Framework libraries available on a Wordpress instance.
Version: 1.0
Author: webplay.pro
Author URI: http://webplay.pro/
*/

function zend_framework_init()
{
	set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) );

	define('WP_ZEND_FRAMEWORK_1_11_11', true);

	zend_framework_register_autoload();
}

function zend_framework_register_autoload()
{
	require_once 'Zend/Loader/Autoloader.php';
	$autoloader = Zend_Loader_Autoloader::getInstance();
}

add_action('plugins_loaded', 'zend_framework_init');
?>