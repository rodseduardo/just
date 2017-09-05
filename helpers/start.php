<?php

function startApp()
{
  session_start();

  ob_start();

  ini_set('display_errors', 0);

  error_reporting(E_ALL);

  spl_autoload_register(function ($class)
  {
    if (file_exists('controller/' . ucfirst($class) . '.php'))
    {
      require_once 'controller/' . ucfirst($class) . '.php';
    }
    if (file_exists('model/' . ucfirst($class) . '.php'))
    {
      require_once 'model/' . ucfirst($class) . '.php';
     }
  });
}
