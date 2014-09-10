<?php
/*
	Plugin Name: Заказ звонка
	Plugin URI: http://osc-cms.com/store/plugins/simple-callback
	Version: 1.1
	Description: Плагин Заказ обратного звонка
	Author: CartET
	Author URI: http://osc-cms.com
	Plugin Group: Boxes
*/

add_action('page', 'simple_callback_actions');
add_action('page', 'simple_callback_form');

function simple_callback_form()
{
	global $osTemplate;
	$osTemplate->assign('linkAction', _HTTP.'index.php?page=simple_callback_actions');
	$osTemplate->display(dirname(__FILE__).'/simple_callback.html');
}

function simple_callback_actions()
{
	include(dirname(__FILE__).'/simple_callback_actions.php');
}