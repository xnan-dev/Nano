<?php

namespace xnan\Trurl\Nano\Url;
use xnan\Trurl;

class Url {
	function param($key,$default="") {
		if (array_key_exists($key,$_GET)) return $_GET[$key];
		return $default;
	}	
}


?>