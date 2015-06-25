<?php
/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 19.06.2015
 * Time: 21:09
 */
?>
<br><br>
<ul class="nav nav-pills nav-stacked">
    <?php
    if ($_SESSION['logged'] === '1') echo '<li class="sidebar"><a href="/im/"><i class="fa fa-envelope"></i>&nbsp; Сообщения<span class="badge pull-right">' . $data['unread'] . '</span></a></li> ';
    if ($_SESSION['logged'] === '1') echo '<li class="sidebar"><a href="/news/"><i class="fa fa-newspaper-o"></i>&nbsp; Новости<span class="badge pull-right">28</span></a></li> ';
    if ($_SESSION['logged'] === '1') echo '<li class="sidebar"><a href="/friends/"><i class="fa fa-users"></i>&nbsp; Друзья<span class="badge pull-right">28</span><span class="badge pull-right alert-success">12</span> </a></li> ';
    if ($_SESSION['logged'] != '1') echo '<li class="sidebar"><a href="/news/"><i class="fa fa-newspaper-o"></i>&nbsp; Новости</a></li>';
    echo '<li class="sidebar"><a href="/forum/"><i class="fa fa-comment"></i>&nbsp; Форум</a></li>';
    echo '<li class="sidebar"><a href="/media/video/"><i class="fa fa-youtube-play"></i>&nbsp; Видео</a></li>';
    ?>
</ul>