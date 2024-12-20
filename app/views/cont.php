<div class="container-fluid container-layout">
    <div class="row">
        <div class="col-12 my-3 my-lg-4">
            <div class="breadcrumbs">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                        <li class="breadcrumb-item" itemprop="itemListElement" itemtype="https://schema.org/ListItem" itemscope="">
                            <a href="https://tviykrok.com.ua" itemprop="item">
                                <span itemprop="name">Головна</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <span>
                                <span>Контакти</span>
                            </span>
                        </li>
                    </ol>
                </nav>

            </div>                    </div>
    </div>
    <?
    if(isset($id)){

        ?>
        <div>
            <h2> Дякуємо за ваше повідомлення - <? echo $id; ?></h2>
        </div>
        <?

    }

    ?>

    <article>
        <h1>Контакти</h1>
        <div class="grid mb-5">
            <div class="g-col-12 g-col-md-6">
                <div class="bg-gray100 py-3 px-4 border-radius contacts-form-section">
                    <div class="font-24 bold mb-3">Контактна інформація</div>
                    <div class="">
                        <div class="font-13 text-secondary mb-1">Контактний телефон:</div>
                        <div class="font-18 bolder mb-2">
                            <a href="tel:+380966451391" class="text-dark">(096) 676-13-91</a>
                        </div>
                        <div class="font-13 text-secondary mb-1">Email:</div>
                        <div class="font-18 bolder mb-2">
                            <a href="mailto:office@tviykrok.com.ua" class="text-dark">office@krok.com.ua</a>
                        </div>
                        <div class="font-13 text-secondary mb-1">Адреса:</div>
                        <div class="font-18 bolder mb-4">
                            м. Київ
                        </div>
                        <div class="font-13 text-secondary mb-2">Ми в соціальних мережах:</div>
                        <ul class="footer-social-links">
                            <li>
                                <a href="https://www.facebook.com">
                                    <img src="https://tviykrok.com.ua/storage/app/media/images/social/facebook.svg" width="36" height="36" alt="Facebook">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com">
                                    <img src="https://tviykrok.com.ua/storage/app/media/images/social/instagram.svg" width="36" height="36" alt="Instagram">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com">
                                    <img src="https://tviykrok.com.ua/storage/app/media/images/social/tiktiok.svg" width="36" height="36" alt="TikTok">
                                </a>
                            </li>

                            <li>
                                <a href="https://www.youtube.com">
                                    <img src="https://tviykrok.com.ua/storage/app/media/images/social/youtube.svg" width="36" height="36" alt="YouTube">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="g-col-12 g-col-md-6">
                <div class="bg-gray100 py-3 px-4 border-radius contacts-form-section" id="contactsFormSection">
                    <form method="POST" action="<?=Url::local("cont/add")?>" accept-charset="UTF-8" data-request="ProjectsSettings::onSendMessage" class="contacts-form" id="contactsForm" data-request-validate=""><input name="_session_key" type="hidden" value="omgY4uiEjutkzRZ5omAJSO4waAAyG4lZvyn5B72b"><input name="_token" type="hidden" value="ntQ57cppbYSDg19yueEbaI1zq3slZAszQR66jRzc">

                        <div class="contacts-form-inner">
                            <div class="font-24 bold mb-3">Напишіть нам</div>
                            <div class="project-donation-form-heading font-18 bold mb-1 mt-3 required">Ваше ім`я:</div>
                            <input name="name" class="form-control" type="text" placeholder="Вкажіть Ваше ім`я">
                            <div class="text-danger mt-2" data-validate-for="name"></div>

                            <div class="project-donation-form-heading font-18 bold mb-1 mt-3 required">Email:</div>
                            <input name="email" class="form-control" type="email" placeholder="Вкажіть Ваш email">
                            <div class="text-danger mt-2" data-validate-for="email"></div>

                            <div class="project-donation-form-heading font-18 bold mb-1 mt-3 required">Телефон:</div>
                            <input name="phone" class="form-control" type="text" placeholder="Вкажіть Ваш телефон">
                            <div class="text-danger mt-2" data-validate-for="phone"></div>

                            <div class="project-donation-form-heading font-18 bold mb-1 mt-3 required">Ваше звернення:</div>
                            <textarea name="mess" class="form-control" aria-label="Ваше звернення" rows="5"></textarea>
                            <div class="text-danger mt-2" data-validate-for="client_message"></div>

                            <input type="hidden" name="user_info" value="">

                            <div class="mt-3 mb-4">

                                <div class="text-center text-md-start">
                                    <button type="submit" class="btn btn-dark uppercase bolder">
                                        Надіслати повідомлення
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>            </div>
            </div>
        </div>
    </article>



</div>
