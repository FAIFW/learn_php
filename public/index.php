<?php
/*      all directories         */
define("ROOT", dirname(__DIR__));
define("PUBLIC", ROOT . '/public');
define("CORE", ROOT . '/core');
define("APP", ROOT . '/app');
define("CONTROLLERS", APP . '/controllers');
define("VIEWS", APP . '/views');
define("INCS", VIEWS . '/incs');

/*             files             */
require CORE . '/funcs.php';


/*вторым аргументом передается нежелательный символ:*/
$uri = trim($_SERVER['REQUEST_URI'], '/');

if ($uri === '') {
    require CONTROLLERS . '/index.php';
} elseif ($uri == 'about.php') {
    require CONTROLLERS . '/about.php';
} else {
    abort();
}

?>