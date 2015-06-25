<?php

/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 25.06.2015
 * Time: 9:49
 */
class im_Controller extends Controller
{
    public function __construct()
    {
        $this->view = new View();
        $this->model = new im_Model();
    }

    public function index_action()
    {
        $title = 'Личные сообщения. ' . SITENAME;
//        $data['unread'] = $this->model->get_unread();

        $this->view->render('im_all_view', 'default', $data = null, $title);
    }
}