<?php
require_once dirname(__DIR__,3 ) .  "/php/lib/xsrf.php";
require_once dirname(__DIR__, 3) . "/php/lib/jwt.php";

use Edu\Cnm\CreepyOctoMeow;

$reply = new stdClass();
$reply->status = 200;
$reply->data = null;

try {

	//verify the HTTP method being used
	$method = array_key_exists("HTTP_X_HTTP_METHOD", $_SERVER) ? $_SERVER["HTTP_X_HTTP_METHOD"] : $_SERVER["REQUEST_METHOD"];

	// if the HTTP method is head check/start the PHP session and set the XSRF token
	if($method === "GET") {

		//verify the session, start if not active
		if(session_status() !== PHP_SESSION_ACTIVE) {
			session_start();
		}

		setXsrfCookie();
		$reply->message = "Your tea is ready!";
	} else {
		throw (new \InvalidArgumentException("Attempting to brew coffee with a teapot", 418));
	}

} catch(\Exception | \TypeError $exception) {
	$reply->status = $exception->getCode();
	$reply->message = $exception->getMessage();
}

echo json_encode($reply);