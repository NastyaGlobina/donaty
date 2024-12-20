<?php
if(isset($res)){
    echo $res;
}
    ?>
    <form action="<?= Url::getAction('register', 'reg') ?>" method="post" role="form" enctype="multipart/form-data">
        <dl>
            <dt>Логин</dt>
            <dd><input type="text" name="login" class="form-control"></dd>
            <dt>Пароль</dt>
            <dd><input type="password" name="pass" class="form-control"></dd>
            <dt>Email</dt>
            <dd><input type="email" name="email" class="form-control"></dd>
            <input type="file" name="img">
            <dt><input type="submit" value="регистрация" role="form"></dt>
        </dl>
    </form>

