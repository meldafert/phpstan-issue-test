<?php

spl_autoload_register(function ($class_name) {
	if (strpos($class_name, '\\') !== false) {
		$filename = __DIR__.'/'.str_replace('\\', \DIRECTORY_SEPARATOR,$class_name.'.php');
		if (is_file($filename)) {
			require_once($filename);
			return;
		}
	}
});

