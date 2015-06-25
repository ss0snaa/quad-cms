<?php

/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 16.06.2015
 * Time: 16:40
 */

class Model
{
    protected function dbConnect()
    {
        $connect = mysql_connect(DB_HOSTNAME, DB_USER, DB_PASSWORD) or die (mysql_error());
        mysql_select_db(DB_DATABASE);
    }
}