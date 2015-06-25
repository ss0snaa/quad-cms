<?php
/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 22.06.2015
 * Time: 14:14
 */

function getGravatarUrl($email, $size, $rating, $defImg)
{
    return "http://www.gravatar.com/avatar/" . md5(strtolower($email)) . "?s=" . $size . "&amp;r=" . $rating . "&amp;d=" . urlencode($defImg);
}

?>

<!--<img src='".getGravatarUrl('$email', 40, 'g', 'mm')."' alt=''>-->

<div class="container">
    <div class="row">
        <h1 class="text-center topic">Информация о пользователе <?= $data['username']; ?></h1>
    </div>
    <br>

    <div class="row">
        <div class="col-lg-1 col-lg-offset-2"><img src="<?= $data['gravatar']; ?>"></div>
        <div class="col-lg-5 col-lg-offset-1">
            <table class="table table-hover">
                <thead>
                </thead>
                <tbody>
                <tr>
                    <td>Никнейм:</td>
                    <td><b><?= $data['username']; ?></b></td>
                </tr>
                <tr>
                    <td>Группа на сайте:</td>
                    <td><b>
                            <?php
                            switch ($data['role']) {
                                case '1':
                                    echo 'Участник';
                                    break;
                                case '2';
                                    echo 'Администратор';
                                    break;
                                case '3':
                                    echo 'Модератор';
                                    break;
                            }
                            ?></b>
                    </td>
                </tr>
                <tr>
                    <td>Ссылка на Battlelog: <b><i><?= $data['username']; ?></i></b></td>
                    <td><a href="<?= $data['battlelog_link']; ?>" target="_blank">
                            <button class="btn btn-primary btn-xs">ПЕРЕЙТИ</button>
                        </a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>