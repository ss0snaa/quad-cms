<?php

/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 18.06.2015
 * Time: 14:57
 */
class profile_Controller extends Controller
{
    public function __construct()
    {
        $this->model = new profile_Model();
        $this->view = new View();
    }

    public function login_action() //экшн логина
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = $this->clean($username);
        $password = $this->clean($password);

        // логиним пользователя
        if (!empty($username) && !empty($password) && !preg_match("~'~", $username) && !preg_match("~'~", $password)) {
            $data = $this->model->loginUser($username, $password);
            if (!empty($data)) {
                $_SESSION['logged'] = '1';
                $_SESSION['id'] = $data['id'];
                $_SESSION['username'] = $data['username'];
                if ($data['role'] == '2') {
                    $_SESSION['admin'] = 'admin';
                }
                header('Location: /main/index/'); // и перекидываем на главную
            } else $data['error'] = 'Введены некоректные данные.';
        } elseif (!empty($username) && !empty($password)) $data['error'] = 'Введены некоректные данные.';

        $title = 'Авторизация. ' . SITENAME;
        $this->view->render('login', 'default', $data, $title);
    }

    private function clean($value) // функция очистки от мусора
    {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
        return $value;
    }

    public function logout_action() // разлогинивание
    {
        $_SESSION = array();
        session_destroy();
        header('Location: /main/index/');
    }

    public function register_action() // регистрация
    {
        $i = 0;

        if ($_POST) {
            if (empty($_POST['username'])) {
                $error[$i] = 'Логин не может быть пустым!<br>';
                $i++;
            }
            if (empty($_POST['password'])) {
                $error[$i] = 'Пароль не может быть пустым!<br>';
                $i++;
            }
            if (empty($_POST['email'])) {
                $error[$i] = 'Email не может быть пустым!<br>';
                $i++;
            }
            if ($_POST['password'] != $_POST['re_password']) {
                $error[$i] = 'Пароли не совпадают!<br>';
                $i++;
            }
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $error[$i] = 'Email не валиден!';
                $i++;
            }
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];
        $email = $_POST['email'];

        if (count($error) == null && $_POST['first'] == 'no') {
            $username = $this->clean($username);
            $password = $this->clean($password);

            // добавляем в базу
            $this->model->addUser($username, $password, $email);
            header('Location: /main/index/');
            // и логиним на месте
            $_SESSION['logged'] = '1';
            $_SESSION['username'] = $username;

        } else {
            $data = $error;
        }
        $title = 'Регистрация. ' . SITENAME;
        $this->view->render('register', 'default', $data, $title);
    }

    public function details_action() // просмотр своего профиля
    {
        $title = 'Подробная информация профиля. ' . SITENAME;

        if (!empty($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $data = $this->model->get_full_data($username);

            $data['gravatar'] = $this->getGravatarUrl($data['email'], 150, 'pg', 'wavatar');

            $this->view->render('details_profile', 'default', $data, $title);
        } else {
            header('Location: /main/index/');
        }
    }

    private function getGravatarUrl($email, $size, $rating, $defImg) // функция берет аватарку gravatar
    {
        return "http://www.gravatar.com/avatar/" . md5(strtolower($email)) . "?s=" . $size . "&amp;r=" . $rating . "&amp;d=" . urlencode($defImg);
    }

    public function show_user_action($username) // просмотр профиля другого пользователя
    {
        $title = 'Информация о пользователе ' . $username;
        $data = $this->model->get_full_data($username);
        $data['gravatar'] = $this->getGravatarUrl($data['email'], 150, 'pg', 'wavatar');
        $this->view->render('show_user', 'default', $data, $title);
    }
}