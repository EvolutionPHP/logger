<?php
error_reporting(-1);
ini_set('display_errors', 1);
include __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';
$config = array();
/*
| Error Logging Directory Path
|--------------------------------------------
| Use a full server path with trailing slash.
*/
$config['path'] = __DIR__.'/logs/';

/*
|--------------------------------------------
| Log File Extension
|--------------------------------------------
| The default filename extension for log files. The default 'php' allows for
| protecting the log files via basic scripting, when they are to be stored
| under a publicly accessible directory.
|
| Note: Leaving it blank will default to 'php'.
*/
$config['ext'] = 'php';

/*
|--------------------------------------------------------------------------
| Log File Permissions
|--------------------------------------------------------------------------
|
| The file system permissions to be applied on newly created log files.
|
| IMPORTANT: This MUST be an integer (no quotes) and you MUST use octal
|            integer notation (i.e. 0700, 0644, etc.)
*/
$config['file_permissions'] = 0644;
 /*
| Error Logging Level
|----------------------------------
| You can enable error logging by setting a level over zero. The
| level determines what gets logged. Threshold options are:
|
|	0 = Disables logging, Error logging TURNED OFF
|	1 = Error Messages (including PHP errors)
|	2 = Debug Messages
|	3 = Informational Messages
|	4 = All Messages
|
| You can also pass an array with different levels to show multiple error types
|
| 	array(2,3) = Debug Messages and Informational Messages, without Error Messages
|
| For a live site you'll usually only enable Errors (1) to be logged otherwise
| your log files will fill up very fast.
*/
$config['level'] = 1;

/*
|--------------------------------------------------------------------------
| Date Format for Logs
|--------------------------------------------------------------------------
|
| Each item that is logged has an associated date. You can use PHP date
| codes to set your own date formatting
|
*/
$config['date_format'] = 'Y-m-d H:i:s';


$logger = \EvolutionPHP\Logger\Log::init($config);

$logger->write_log('error','This is an error message.');
$logger->write_log('debug','This is a debug message.');
$logger->write_log('info','This is an info message.');