<?php

/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 18.06.2015
 * Time: 13:41
 */
class about_Controller extends Controller
{
    public function index_action()
    {
        $title = 'О нас. '.SITENAME;
        $this->view->render('about', 'default', $data=null, $title);
    }
}