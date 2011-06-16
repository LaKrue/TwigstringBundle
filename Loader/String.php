<?php
/*
 * (c) LaKrue <symfony@lakrue.com>
 */

namespace LK\TwigstringBundle\Loader;

class String extends \Twig_Loader_String
{
	public function load($name) {
		return new $name;
	}

}
