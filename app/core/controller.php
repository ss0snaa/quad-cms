<?php
/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 16.06.2015
 * Time: 16:34
 */

class Controller {
    protected $model;
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function index_action()
    {
    }
}