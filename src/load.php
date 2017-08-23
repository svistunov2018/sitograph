<?php
// *** ./load.php
// *** DO NOT EDIT THIS FILE
// *** WILL BE OVERWRITTEN DURING UPDATE

session_start();

// include config file
// if config.php exists it will be included
// otherwise config-sample will be used and installation module will be started
if (file_exists("config.php")) {
	include("config.php");
	
	if (empty($_SESSION["msv_install_step"])) {
		define("MSV_INSTALED", true);
	} else {
		define("MSV_INSTALED", false);
	}
} elseif (file_exists("config-sample.php")) {
	include("config-sample.php");
	define("MSV_INSTALED", false);
} else {
	die("Can't load in configuration file");
}

if (!defined("ABS")) die(".");

if (defined("PHP_HIDE_ERRORS") && PHP_HIDE_ERRORS) {
	ini_set("display_errors", 0);
	error_reporting(0);
} else {
	ini_set("display_errors", 1);
	error_reporting(E_ALL & ~E_NOTICE);
}

if (defined("PHP_LOCALE")) {
	setlocale(LC_ALL, PHP_LOCALE); 
}

if (defined("PHP_TIMEZONE")) {
	date_default_timezone_set(PHP_TIMEZONE);
}

set_time_limit(1000);

$pathInclude = ABS."/include";
$pathIncludeLocal = "/include";

define("ABS_INCLUDE", $pathInclude);
define("ABS_MODULE", $pathInclude."/module");
define("ABS_CUSTOM", $pathInclude."/custom");
define("ABS_TEMPLATE", ABS."/templates");

define("LOCAL_INCLUDE", $pathIncludeLocal);
define("LOCAL_MODULE", $pathIncludeLocal."/module");
define("LOCAL_TEMPLATE", "templates");

include(ABS_INCLUDE."/class.module.php");
include(ABS_INCLUDE."/class.msv.php");


// create MSV Website instance
$website = new MSV_Website();

// start the instance
$website->start();


function msv_error_handler() {
    $error = error_get_last();

    if ($error['type'] !== E_NOTICE) {
        $message = $error["message"] . "<br>" . $error["file"]. ":".$error["line"];
        msv_error($message);
    }
}

@register_shutdown_function('msv_error_handler');