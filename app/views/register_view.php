<h1 class="text-center topic">Регистрация</h1>
<?php
/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 22.06.2015
 * Time: 8:57
 */

if (!$_POST['first'] === 'no' or !isset($_POST['first'])) {
    getRegForm($data);
} elseif ($_POST['first'] === 'no') {
    getRegForm($data);
}


function getRegForm($data)
{
    for ($i = 0; $i < count($data); $i++) {
        echo '
            <div class="panel panel-danger">
                <div class="panel-heading">Во время регистрации были допущены слудующие ошибки:</div>
                <div class="panel-body">' . $data[$i] . '</div>
            </div>';
    }
    echo '
        <form role="form" method="post" action="/profile/register/">
            <div class="form-group">
                <label for="username">Логин:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="username" value="' . $_POST['username'] . '" autofocus required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="' . $_POST['email'] . '" required>
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль" value="' . $_POST['password'] . '" required>
            </div>
            <div class="form-group">
                <label for="re_password">Повторите пароль:</label>
                <input type="password" class="form-control" id="re_password" name="re_password" placeholder="Повторите пароль"
                       required>
            </div>
            <button type="submit" class="btn btn-success">РЕГИСТРАЦИЯ</button>
            <a href="/main/index/">
                <button type="button" class="btn btn-danger">ОТМЕНА</button>
            </a>
            <input type="hidden" id="first" name="first" value="no">
        </form>

    ';
}
?>