<?php

/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 25.06.2015
 * Time: 10:00
 */
class im_Model extends Model
{
    // проверяем непрочитанные сообщения
    public function get_unread()
    {
        $this->dbConnect();
        $query = "SELECT unread FROM quad_im WHERE (to_id = '" . $_SESSION['id'] . "' AND unread = '1')";
        $result = mysql_query($query);
        $data = mysql_num_rows($result);
        return $data;
    }
}