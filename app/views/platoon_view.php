<?php
/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 22.06.2015
 * Time: 7:12
 */

//var_dump($data);
?>

<h1 class="text-center topic">Участнки взвода</h1>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-2">
            <table class="table table-stripped table-hover table-condensed">
                <thead>
                </thead>
                <tbody>
                <?php
                for ($i = 0; $i < count($data); $i++) {
                    echo '
                            <tr>
                                <td>' . ($i + 1) . '.<td>
                                <td><b>' . $data[$i]['username'] . '</b></td>
                                <td>' . $data[$i]['class'] . '</td>
                                <td title="' . $data[$i]['type_tech'] . '">' . $data[$i]['tech_icon'] . '</td>
                                <td><a href="/profile/show_user/' . $data[$i]['username'] . '"><button type="button" class="btn btn-primary btn-xs">ПОДРОБНЕЕ</button></a></td>
                            </tr>
                        ';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>