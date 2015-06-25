<?php
/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 16.06.2015
 * Time: 15:44
 */

require_once 'router.php';
require_once 'config.php';
require_once 'core/controller.php';
require_once 'core/view.php';
require_once 'core/model.php';

// стартуем сеесию
session_start();
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['ua'] = $_SERVER['HTTP_USER_AGENT'];

// стартуем роутер
Router::start();