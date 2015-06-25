<?php

/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 20.06.2015
 * Time: 12:16
 */
class servers_Model extends Model
{
    public function get_data()
    {
        $query = "SELECT * FROM quad_servers";
        $this->dbConnect();
        $data = array();

        $result = mysql_query($query) or die(mysql_error());
        $i = 0;
        while($array = mysql_fetch_array($result)){
            $data[$i]['id'] = $array['id'];
            $data[$i]['server_name'] = $array['server_name'];
            $data[$i]['server_link'] = $array['server_link'];
            $i++;
        }
        return $data;
    }
}