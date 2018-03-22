<?php

$path_to_phpcsfixer = "htdocs/includes/friendsofphp/php-cs-fixer/php-cs-fixer";
$options = "--verbose --show-progress=dots --diff --stop-on-violation";
$paths_to_fix = array("htdocs/", "test/", "dev/", "/scripts");

foreach ($paths_to_fix as $path) {
  echo exec("php ".$path_to_phpcsfixer." fix ".$path." ".$options);
}

exit();
