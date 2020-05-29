<?php

//load kelas
spl_autoload_register( function ($class) {
  require_once 'Classes/' . $class . '.php';
});