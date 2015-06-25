<?php
/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 16.06.2015
 * Time: 16:50
 */

class main_Controller extends Controller
{
    public function index_action()
    {
        $title = 'Главная. '.SITENAME;
        $this->view->render('main', 'default', $data = null, $title);
    }
}