<?php 
require_once __DIR__ . '/../vendor/autoload.php' ; // Chargement automatique des fichiers à l'aide de Composer autoload 
use HelloWorld\SayHello;
echo SayHello::monde();