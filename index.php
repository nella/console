<?php

$message = 'THE DEVELOPMENT OF NELLA CONSOLE HAS BEEN ABANDONED';

if (PHP_SAPI === 'cli') {
	$message .= PHP_EOL . 'Please use stable version (v0.8.0) or kdyby/console' . PHP_EOL;
} else {
	$message .= PHP_EOL . '<br>' . PHP_EOL . 'Please use stable version (v0.8.0) or <a href="http://addons.nette.org/kdyby/console">kdyby/console</a>';
}

die($message);
