<?php

/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 20.06.2015
 * Time: 08:57
 */
class servers_Controller extends Controller
{
    public function __construct()
    {
        $this->model = new servers_Model();
        $this->view = new View();
    }

    public function index_action()
    {
        $data = $this->model->get_data();
        $title = 'Наши сервера.' . SITENAME;

        $this->view->render('servers', 'test', $data, $title);

    }
}