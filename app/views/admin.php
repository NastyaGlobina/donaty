<div class="container">
    <section id="content">
        <form action="<?= Url::getAction('admin', 'login') ?>" method="post">
            <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Форма входу</font></font></h1>
            <div>
                <input type="text" name="login" placeholder="Ім'я користувача" required="" id="username">
            </div>
            <div>
                <input type="password" name="pass" placeholder="Пароль" required="" id="password">
            </div>
            <div>
                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="авторизація"></font></font>
            <!--    <a href="<?=Url::local('fpass')?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Забули пароль?</font></font></a>-->
            </div>
        </form><!-- form -->

    </section><!-- content -->
</div>

<link rel="stylesheet" href="../../css/styles.fb966e9386e8aa2eeaea.css?ts=<?=time()?> &quot;">

</div>
