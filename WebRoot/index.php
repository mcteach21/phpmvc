<?php
define("WEBROOT",dirname(__FILE__));
define("ROOT",dirname(WEBROOT));
define("DS",DIRECTORY_SEPARATOR);
define("CORE",ROOT.DS."Core");
define("BASE_URL",dirname(dirname($_SERVER['SCRIPT_NAME'])));


/*echo BASE_URL;

echo "<br/>".$_SERVER['PATH_INFO'];
echo "<br/>".$_SERVER['SCRIPT_NAME'].' '.dirname($_SERVER['SCRIPT_NAME']);
*/


require CORE.DS."includes.php";
new Dispatcher();
