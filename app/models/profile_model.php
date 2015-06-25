<?php

/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 21.06.2015
 * Time: 17:37
 */
class profile_Model extends Model
{
    public function addUser($username, $password, $email) // добавляем пользователя
    {
        $this->dbConnect();
        $query = "INSERT INTO quad_users (username, password, email, role) VALUES ('" . $username . "', '" . sha1($password) . SALT . "', '" . $email . "', '1')";
        mysql_query($query);
    }

    public function loginUser($username, $password) // логиним пользователя
    {
        $query = "SELECT * FROM quad_users WHERE(username, password) = ('$username', '" . sha1($password) . SALT . "')";
        $this->dbConnect();
        $data = array();
        $result = mysql_query($query);
        $data = mysql_fetch_assoc($result);
        return $data;
    }

    public function get_full_data($username) // получаем полные данные профиля
    {
        $query = "SELECT * FROM quad_users WHERE username = '$username'";
        $this->dbConnect();
        $data = array();
        $result = mysql_query($query);
        $data = mysql_fetch_assoc($result);
        return $data;
    }
}