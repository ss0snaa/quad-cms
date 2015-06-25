<?php

/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 22.06.2015
 * Time: 7:01
 */
class platoon_Controller extends Controller
{
    public function __construct()
    {
        $this->model = new platoon_Model();
        $this->view = new View();
    }

    public function index_action()
    {
        $title = 'Участники сообщества. ' . SITENAME;
        $data = $this->model->get_data();
        $this->view->render('platoon', 'default', $this->getClassSoldier($data), $title);
    }

    private function getClassSoldier($data) // переводит класс бойца в нормальночитаемый
    {
        for ($i = 0; $i < count($data); $i++) {
            switch ($data[$i]['class']) {
                case '1':
                    $data[$i]['class'] = '<img src="../../img/class/1.png" width="15"  title="Штурмовик">';
                    break;
                case '2':
                    $data[$i]['class'] = '<img src="../../img/class/2.png" width="15"   title="Инженер">';
                    break;
                case '3':
                    $data[$i]['class'] = '<img src="../../img/class/3.png" width="15"   title="Поддержка">';
                    break;
                case '4':
                    $data[$i]['class'] = '<img src="../../img/class/4.png" width="15" title="Разведчик">';
                    break;
            }
        }
        return $data;
    }
}