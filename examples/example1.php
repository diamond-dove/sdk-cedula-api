<?php

require_once 'vendor/autoload.php';

echo 'This cedula "2324" is ' . (Cedula\Validator\Validator::make()->isValid('2324') ? 'Valid' : 'Invalid');
