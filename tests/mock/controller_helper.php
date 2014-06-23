<?php
/**
*
* Advanced BBCode Box 3.1
*
* @copyright (c) 2014 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace vse\abbc3\tests\mock;

/**
* Controller helper Mock
* Credit to nickvergessen for desigining this mock class.
*/
class controller_helper extends \phpbb\controller\helper
{
	public function __construct()
	{
	}

	public function route($route, array $params = array(), $is_amp = true, $session_id = false)
	{
		return $route . '#' . serialize($params);
	}

	public function error($message, $code = 500)
	{
		return new \Symfony\Component\HttpFoundation\Response($message, $code);
	}

	public function render($template_file, $page_title = '', $status_code = 200, $display_online_list = false)
	{
		return new \Symfony\Component\HttpFoundation\Response($template_file, $status_code);
	}
}