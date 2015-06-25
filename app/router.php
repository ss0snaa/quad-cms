<?php
/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 16.06.2015
 * Time: 15:45
 */

class Router
{
    static function start()
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        $controller_name = CONTROLLER_NAME;
        $action_name = ACTION_NAME;

        // получаем контроллер по умолчанию
        if (!empty($routes[1])) $controller_name = $routes[1];

        // получаем экшн по умолчанию
        if (!empty($routes[2])) $action_name = $routes[2];

        // получаем параметры из url
        if (!empty($routes[3])) $params = $routes[3];

        // добавляем постфиксы к модели, контроллера, экшна
        $model_name = $controller_name.'_Model';
        $controller_name = $controller_name.'_Controller';
        $action_name = $action_name.'_action';

        // Подключаем файл модели
        $model_file = strtolower(strip_tags(htmlspecialchars($model_name))).'.php';
        $model_path = MODEL_PATH.$model_file;
        if (file_exists($model_path)) require_once $model_path;

        // Подключаем файл контроллера
        $controller_file = strtolower(strip_tags(htmlspecialchars($controller_name))).'.php';
        $controller_path = CONTROLLER_PATH.$controller_file;
        if (file_exists($controller_path))
        {
            require_once $controller_path;
        }
        else
        {
            echo 'no controllers!';//todo
        }

        // создаем контроллер
        $controller = new $controller_name;
        $action = $action_name;

        if (method_exists($controller, $action))
        {
            if (!empty($params)) {
                $controller->$action($params);
            } elseif (empty($params) && method_exists($controller, $action)) {
                $controller->$action();
            }
        }
        else
        {
            echo 'no action!<br>';//todo
            echo $action;
        }
    }
}