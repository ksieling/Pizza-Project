<?php
// sets the time zone to Eastern Standard
  date_default_timezone_set('America/Detroit');
  // @turns off errors
  // sets the display of errors to off in the local ini file
  @ini_set('display_errors','Off');
  // turns on error logging in the local ini file
  @ini_set('log_errors','On');
  // sets a maximum execution time of 300 seconds to prevent timeouts
  @ini_set('max_execution_time', 300);
  // sets error reporting specifics
  error_reporting(E_ALL & ~E_STRICT);

  // sets the slash type depending on environment
  if( PATH_SEPARATOR  == ';' )
    define('SLASH','\\');
  else
    define('SLASH','/'); 

  // sets the app path a constant
  define('APP_PATH', realpath(dirname(__FILE__)));
  
  // sets the include path, where to look for the include file
  set_include_path('.'.PATH_SEPARATOR.implode(PATH_SEPARATOR, array(
    realpath(APP_PATH . SLASH . 'library' . SLASH . 'lib')
  )));
  ?>