<div class="container-fluid container-layout">



    <div class="container-fluid mb-4">
        <div class="row jc-center"><?
            if(isset($id)){

                ?>
                <div>
                    <h2> Ваша заявка збережена за номером - <? echo $id; ?></h2>
                </div>
                <?

            }else{

            ?>
            <div class="col-12 col-md-8 px-0 text-center">
                <div class="donation-heading bolder uppercase">
                    <h1>Як отримати допомогу від нашого фонду?</h1>
                </div>
            </div>
        </div>
        <div class="row jc-center">
            <div class="col-12 col-md-8 px-0">
                <div class="bg-gray100 p-4 border-radius help-section">
                   <p>Фонд заснований під час відкритого вторгнення російської арміі та створений для допомоги українським збройним силам.</p><p><strong>Якщо Ваш підрозділ потребує допомоги нашого фонду вам потрібно:</strong></p><ol><li>Завантажити бланк заявки з нашого сайту.</li><li>Заповнити бланк заявки.</li><li>Відправити бланк на нашу електронну пошту <a href="mailto:office@ukr.ua"><strong>office@ukr.ua</strong></a> aбо через форму нижче.</li></ol>
                    <div class="text-center mt-4">
                        <a href="../../media/zayavka-na-dopomogu.docx" class="btn btn-dark bolder uppercase">
                            Скачати бланк заявки
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5">
        <div class="row jc-center mb-3">
            <div class="col-12 col-md-8 px-0">
                <div class="bg-gray100 p-4 border-radius help-section" id="helpFormSection">
                    <form method="POST" action="<?=Url::local("needhelp/add")?>" accept-charset="UTF-8"  class="contacts-form"
                          enctype="multipart/form-data" data-request-validate="">

                        <div class="contacts-form-inner">

                            <div class="project-donation-form-heading font-18 bold mb-1 mt-3 required">Ваші П.І.Б:</div>
                            <input name="name" class="form-control" type="text" placeholder="Вкажіть Ваші П.І.Б" required>
                            <div class="text-danger mt-2" data-validate-for="name"></div>

                            <div class="project-donation-form-heading font-18 bold mb-1 mt-3 required">Email:</div>
                            <input name="email" class="form-control" type="email" placeholder="Вкажіть Ваш email">
                            <div class="text-danger mt-2" data-validate-for="email"></div>

                            <div class="project-donation-form-heading font-18 bold mb-1 mt-3 required">Телефон:</div>
                            <input name="phone" class="form-control" type="text" placeholder="Вкажіть Ваш телефон" required>
                            <div class="text-danger mt-2" data-validate-for="phone"></div>

                            <div class="project-donation-form-heading font-18 bold mb-1 mt-3 required">Область:</div>
                            <fieldset class="input-wrap" data-require="select">

                                <select name="obl" id="user-region" class="form-select">
                                    <option hidden="">Область</option>
                                    <?
                                    foreach ($obl as $value):
                                    echo "<option value='{$value['id']}'>{$value['name']}</option>";
                                    endforeach;

                                    ?>



                                </select>

                            </fieldset>
                            <div class="text-danger mt-2" data-validate-for="obl"></div>

                            <div class="project-donation-form-heading font-18 bold mb-1 mt-3 required">Організація:</div>
                            <input name="orgname" class="form-control" type="text" placeholder="Вкажіть організацію">
                            <div class="text-danger mt-2" data-validate-for="orgname"></div>

                            <div class="project-donation-form-heading font-18 bold mb-1 mt-3 required">Сумма:</div>
                            <input name="summa" class="form-control" type="text" placeholder="вкажіть суму в грн">
                            <div class="text-danger mt-2" data-validate-for="summa"></div>

                            <div class="project-donation-form-heading font-18 bold mb-1 mt-3 required" data-require="check">
                                Категорія </div>

                                <?

                                foreach($cat as $value):
                                    echo " <div class='form-check'>
                                <input class='form-check-input' type='checkbox' name='cat[]' value='{$value['id']}' id='ch{$value['id']}'>
                                <label class='form-check-label' for='ch{$value['id']}'>{$value['name']}</label>
                            </div>";
                                endforeach;
                                ?>


                            </div>


                            <div class="project-donation-form-heading font-18 bold mb-1 mt-3 required">Завантажити файли:</div>

                                <input name="file"  type="file"
                                      accept="image">

                        <div class="project-donation-form-heading font-18 bold mb-1 mt-3 required">Заголовок вашого звернення:</div>
                        <input name="header" class="form-control" type="text" placeholder="Заголовок">
                        <div class="text-danger mt-2" data-validate-for="header"></div>

                            <div class="project-donation-form-heading font-18 bold mb-1 mt-3">Опешіть ситуацію:</div>
                            <textarea name="dopinf" class="form-control" rows="5"></textarea>
                            <div class="text-danger mt-2" data-validate-for="dopinf"></div>

                            <input type="hidden" name="help_user_info" value="">




                            <div class="mt-4 text-center">
                                <button type="submit" class="btn btn-dark uppercase bolder">
                                    Надіслати запит
                                </button>
                            </div>
                        </div>

                    </form>            </div>
            </div>
        </div>
    </div>
<?php
}
?>

</div>