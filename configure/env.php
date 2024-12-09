<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

// Function to make the log file path clickable in VS Code and other terminals
function getClickableFilePath($path) 
{
    return "\e]8;;file://$path\e\\$path\e]8;;\e\\";
}



putenv('STONEWOOD_SERVER=https://app.stonewood.com.do');

echo 'STONEWOOD_SERVER: '.getenv('STONEWOOD_SERVER');

$stonewoodAuthToken = null;

if (!$stonewoodAuthToken)
{
    throw new Exception('Please set the `$stonewoodAuthToken` variable in the `env.php` file.');
}

putenv('STONEWOOD_AUTH_TOKEN='.$stonewoodAuthToken);
