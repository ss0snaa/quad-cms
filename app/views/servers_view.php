<?php
/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 20.06.2015
 * Time: 09:00
 */
?>

<h1 class="text-center topic">Наши сервера</h1>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-5 col-lg-offset-2">
            <table class="table table-stripped table-hover table-condensed">
                <thead>
                <tr>
                    <td><b>#</b></td>
                    <td><b>ИМЯ СЕРВЕРА</b></td>
                </tr>
                </thead>
                <tbody>
                <?php
                for ($i = 0; $i < count($data); $i ++)
                {
                    echo '
                <tr><td>'.$data[$i]['id'].'</td><td>'.$data[$i]['server_name'].'</td><td><a class="btn btn-primary btn-xs" href="'.$data[$i]['server_link'].'" target="_blank">ПЕРЕЙТИ</a></td></tr>
            ';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>