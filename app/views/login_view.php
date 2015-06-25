<h1 class="text-center topic">Авторизация</h1>
<?php
/**
 * Created by PhpStorm.
 * User: ss0sna
 * Date: 21.06.2015
 * Time: 17:40
 */

echo $data['error'];
echo '
<form role="form" method="post" action="/profile/login/">
    <div class="form-group">
        <label for="username">Логин:</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="username" value="' . $_POST['username'] . '" autofocus required>
    </div>
    <div class="form-group">
        <label for="password">Пароль:</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="password" value="' . $_POST['password'] . '" required>
    </div>
    <button type="submit" class="btn btn-success">ВОЙТИ</button>
    <a href="/main/index/">
        <button type="button" class="btn btn-danger">ОТМЕНА</button>
    </a>
    <input type="hidden" id="first" name="first" value="no">
</form>
';


?>
