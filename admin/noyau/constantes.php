<?php
/*
  ./noyau/constantes.php
  Constantes du framework
 */

 $url = explode('index.php', $_SERVER['SCRIPT_NAME']);
 define('BASE_URL_ADMIN', 'http://' . $_SERVER['HTTP_HOST'] . $url[0]);

 define('BASE_URL_PUBLIC', str_replace('admin', 'public', BASE_URL_ADMIN));
