<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libpy2php');
require_once('libpy2php.php');
$a = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
pyjslib_printnl(array_slice($a, null, 2));
pyjslib_printnl(array_slice($a, 2, null));
pyjslib_printnl(array_slice($a, 3, 5 - 3));

