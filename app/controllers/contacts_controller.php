<?php

/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 22.06.2015
 * Time: 14:59
 */
class contacts_Controller extends Controller
{
    public function __construct()
    {
        $this->view = new View();
    }

    public function index_action()
    {
        $title = 'Контакты. ' . SITENAME;

        $this->view->render('contacts', 'default', $data = null, $title);
    }
}