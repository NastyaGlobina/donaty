<div id="content" class="row unrow-xs unrow-sm">
    <script type="text/javascript">
        $(document).ready(function(){
            "use strict";
            //регулярное выражение для проверки email
            var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
            var mail = $('input[name=email]');

            mail.blur(function(){
                if(mail.val() != ''){
                    // Проверяем, если email соответствует регулярному выражению
                    if(mail.val().search(pattern) == 0){
                        // Убираем сообщение об ошибке
                        $('#valid_email_message').text('');
                        //Активируем кнопку отправки
                        $('input[type=submit]').attr('disabled', false);
                    }else{
                        //Выводим сообщение об ошибке
                        $('#valid_email_message').text('Не правильний Email');
                        // Дезактивируем кнопку отправки
                        $('input[type=submit]').attr('disabled', true);
                    }
                }else{
                    $('#valid_email_message').text('Введіть Ваш email');
                }
            });
        });
    </script>
       <?php
    //Проверяем, если пользователь не авторизован, то выводим форму регистрации,
    //иначе выводим сообщение о том, что он уже зарегистрирован
    if((!isset($_SESSION["email"]) && !isset($_SESSION["password"]))) {
        if(!isset($_GET["hidden_form"])){
            ?>

            <div class="center_block">

<style>
    #ot,.ot{

        color: #295b8e;
        background-color: #f9f8fa;
cursor: pointer;

        margin: 1px;
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid #357ebd;
        padding: .375rem .75rem;


        border-radius: .25rem;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
    }
    #ot:hover,.ot:hover, a:hover{
        background: #0c516c;
        color:white;
    }
    #m1,#m2{
        color: #495057;
        background: #fff;
        margin: 0px;
        width: 300px;
        border: 1px solid rgba(0,0,0,.15);
        border-radius: .25rem;
    }
</style>
                <!-- Абзац -->
                <p class="text_center mesage_error" id="valid_email_message"></p>
                <div class="login-page">
                    <div class="form" style="width: 600px;">
                        <div style="margin: 8px;
border: 1px solid #122b40; padding: 10px;box-sizing: border-box;">
                        <h3 style="color:grey;">Відновлення пароля</h3>
                            <span ><? echo $res;?></span>
                <form action="<?=Url::local('fpass');?>" method="post" name="form_request_email" >
                    <table>
                        <tr>
                            <td> <label style="font-size: 12px;display: block;
    width: 120px;text-align: left;color: #818181;">Введіть Ваш E-mail: </label></td>
                            <td>
                                <input type="email" id="m1" name="email" placeholder="" style="height: 31px;padding: 0;">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" class="text_center" >

                                <div style="display: flex; justify-content: flex-end; margin-top: 9px;">
                                <button type="submit" class="ot" name="send">Відновити</button>
                                <a style="text-decoration: none;font-size: 13px;" id='ot' href="<?=Url::local('main')?>">Відміна</a></div>
                            </td>
                        </tr>
                    </table>
                </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }//закрываем условие hidden_form

    }else{
        ?>
        <div id="authorized">
            <h2>Ви Вже авторизовані</h2>
        </div>
        <?php
    }

    ?>
</div>



