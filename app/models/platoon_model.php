<?php

/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 22.06.2015
 * Time: 7:02
 */
class platoon_Model extends Model
{
    public function get_data() // получаем все строки из таблицы
    {
        $query = "SELECT quad_users.username, quad_platoon.username, quad_platoon.class, quad_tech.type, quad_tech.icon FROM quad_users, quad_platoon, quad_tech WHERE (quad_users.username = quad_platoon.username AND quad_platoon.tech = quad_tech.id)";
        $this->dbConnect();

        $data = array();
        $result = mysql_query($query) or die(mysql_error());

        $i = 0;
        while ($array = mysql_fetch_array($result)) {
            $data[$i]['username'] = $array['username'];
            $data[$i]['class'] = $array['class'];
            $data[$i]['type_tech'] = $array['type'];
            $data[$i]['tech_icon'] = $array['icon'];
            $i++;
        }
        return $data;
    }
}