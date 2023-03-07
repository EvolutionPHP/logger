# Simple PHP Logger

Simple PHP logger, save logs in files.

## Installation

Use [Composer](http://getcomposer.org) to install Logger into your project:
```bash
composer require evolutionphp/logger
```


## Configuration

1. Logging Directory Path: directory where log files will be saved.
```php
$config['path'] = __DIR__.'/logs/';
```
2. File Extension: set the extension of your log files. Leaving it blank will default to 'php'.
```php
$config['ext'] = 'php';
```
3. Log File Permissions: The file system permissions to be applied on newly created log files.   
This MUST be an integer (no quotes) and you MUST use octal integer notation (i.e. 0700, 0644, etc.)
```php
   $config['file_permissions'] = 0644;
```
4. Logging Level: You can enable error logging by setting a level over zero. The level determines what gets logged. Threshold options are:  
0 = Disables logging, Error logging TURNED OFF  
1 = Error Messages (including PHP errors)  
2 = Debug Messages  
3 = Informational Messages  
4 = All Messages
```php
$config['level'] = 1;
//OR Debug Messages and Informational Messages, without Error Messages
$config['level'] = array(2,3);
```
5. Date Format: Each item that is logged has an associated date. You can use PHP date codes to set your own date formatting 
```php
$config['date_format'] = 'Y-m-d H:i:s';
```

**Initialize**
```php
$logger = new \EvolutionPHP\Logger\Log($config);
//Write logs
$logger->write_log('error','This is an error message.');
$logger->write_log('debug','This is a debug message.');
$logger->write_log('info','This is an info message.');
```
If you already initialize the class, you can call an instance without rewriting the configuration
```php
function log_message($level, $message){
    $logger = \EvolutionPHP\Logger\Log::instance();
    $logger->write_log($level, $message);
}
log_mesage('error','This is a second error.');
```

## Authors

This library was primarily developed by [CodeIgniter 3](https://codeigniter.com/) and modified by [Andres M](https://twitter.com/EvolutionPHP).
