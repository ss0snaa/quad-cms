<?php
/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 18.06.2015
 * Time: 8:58
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Bootstrap -->
    <link href="../../../app/core/libs/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../../../app/core/libs/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../../style/style.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../../app/core/libs/jquery/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../app/core/libs/bootstrap/js/bootstrap.js"></script>

</head>
<body role="application">

<!-- navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header" style="margin-top: -10px">
            <a class="navbar-brand" href="/main/index/"><img alt="" src="/img/logo.png" width="110"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                <span class="sr-only">Открыть навигацию</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/main/index/"><i class="fa fa-home"></i>&nbsp; Главная</a></li>
                <li><a href="/about/"><i class="fa fa-info"></i>&nbsp; О нас</a></li>
                <li><a href="/servers/"><i class="fa fa-server"></i>&nbsp; Наши сервера</a></li>
                <li><a href="/platoon/"><i class="fa fa-users"></i>&nbsp; Участники</a></li>
                <li><a href="/contacts/"><i class="fa fa-pencil-square-o"></i>&nbsp; Контакты</a></li>
                <li class="dropdown">
                    <?php
                    if ($_SESSION['logged'] === '0' or empty($_SESSION['username'])) echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp; Вход/регистрация<span class="caret"></span> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="/profile/login/"><i class="fa fa-user"></i>&nbsp; Вход</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/profile/register/"><i class="fa fa-user"></i>&nbsp; Регистрация</a></li>
                                </ul>
								';
                    elseif ($_SESSION['logged'] === '1' && !empty($_SESSION['username'])) {
                        echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp; ' . $_SESSION['username'] . '<span class="caret"></span> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="/profile/details/"><i class="fa fa-user"></i>&nbsp; Профиль: ' . $_SESSION['username'] . '</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/profile/logout/">Выход</a></li>
                                </ul>
                        ';
                    }
                    ?>
                </li>
                <li>
                    <?php
                    if ($_SESSION['logged'] === '1' && $_SESSION['admin'] === 'admin' && !empty($_SESSION['username'])) echo '<li><a href="/dashboard/"><i class="fa fa-tachometer"></i>&nbsp; Панель упраления</a>'; ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- navbar end -->
<br><br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2">
            <?php require_once VIEW_PATH . 'left_sidebar.php'; ?>
        </div>
        <div class="col-lg-10">
            <!--            --><?php //require_once VIEW_PATH . $content . '/' . $content . '_view.php'; ?>
            <?php require_once VIEW_PATH . $content . '_view.php'; ?>
        </div>
    </div>
</div>




</body>
<!-- footer-->
<div class="container">
    <div class="panel-footer">
        <a href="http://vk.com/ss0snaa">&copy; ss0snaa</a>. <?=date("Y");?> г.
        <a class="pull-right">All rights reserved.</a>
    </div>
</div>
<!-- footer end -->


<script src="../../../js/scripts.js"></script>
</body>
</html>