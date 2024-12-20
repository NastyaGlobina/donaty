<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="theme-color" content="#35bc7a"/> <!--meta charset="UTF-8" /-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Пожертвуйте захисникам України</title>

    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/theme.css" rel="stylesheet">
    <link href="../../css/font-avenir.css" rel="stylesheet">
    <link href="../../css/font-icomoon.css" rel="stylesheet">

    <style type="text/css"></style><style type="text/css">.pixelParallel-panel[data-v-dedc8274]{position:fixed;right:10px;bottom:10px;z-index:2147483647;width:375px;height:265px;transform:translate(0);background:#fff;transition:width .2s ease-out,height .2s ease-out;will-change:top,left,width,height,transform;opacity:0}.pixelParallel-panel-inner[data-v-dedc8274]{position:relative;overflow:hidden;height:100%;border:1px solid #dddedf;box-shadow:0 2px 10px rgba(0,0,0,.1);box-sizing:border-box}.pixelParallel-panel-handle[data-v-dedc8274]{position:absolute;top:-10px;right:-10px;z-index:3;width:20px;height:20px;background:red;transform:rotate(45deg);background:linear-gradient(0deg,transparent,transparent 50%,#ccc 0,#ccc);background-size:100% 2px;cursor:move}.pixelParallel-panel-isolator[data-v-dedc8274]{border:0;width:100%;height:100%;overflow:hidden;position:relative}.pixelParallel-panel-dragging .pixelParallel-panel-inner[data-v-dedc8274]{pointer-events:none}.pixelParallel-panel-minimized[data-v-dedc8274]{width:112px;height:50px;transition:width .2s ease-out .15s,height .2s ease-out .15s}@media (max-width:395px){.pixelParallel-panel[data-v-dedc8274]{right:0;bottom:0;width:320px}.pixelParallel-panel-minimized[data-v-dedc8274]{width:112px}}</style><style type="text/css">.pixelParallel-overlay{position:absolute;left:0;top:0;width:100%;text-align:center;white-space:nowrap;display:none}.pixelParallel-overlay-enabled{display:block}</style><style type="text/css">.pixelParallel-image-outer{visibility:hidden;position:absolute;top:0;left:0;width:100%;overflow:hidden;max-width:100vw;min-height:100vh}.pixelParallel-image-inner{position:absolute;z-index:2147483646;left:50%;top:0;cursor:move;transform:translateX(-50%);transition:opacity .15s}.pixelParallel-image-inner img{width:auto;height:auto;max-width:none;max-height:none;vertical-align:top;margin:0;padding:0;position:relative;transform-origin:50% 0;top:-1px;border:1px dashed #333}.pixelParallel-image-inner img:not([src]),.pixelParallel-image-inner img[src=""]{visibility:hidden}.pixelParallel-image-enabled{visibility:visible}.pixelParallel-image-difference{mix-blend-mode:difference}.pixelParallel-image-difference img{opacity:1!important}.pixelParallel-image-locked,.pixelParallel-image-no-image{pointer-events:none}.pixelParallel-image-locked .pixelParallel-image-inner img{top:0;border:0 none}</style><style type="text/css">.pixelParallel-grids{position:relative;z-index:2147483646;pointer-events:none}.pixelParallel-grid-horizontal,.pixelParallel-grid-vertical{position:fixed;z-index:1;pointer-events:none;visibility:hidden}.pixelParallel-grid-horizontal{top:50%;left:50%;display:table;width:100vw;height:200vh;opacity:.5;table-layout:fixed;border-spacing:30px;transform:translate(-50%,-50%)}.pixelParallel-grid-horizontal span{display:table-cell;background:red;height:200vh}.pixelParallel-grid-vertical{top:0;left:0;width:100%;height:100%;background:linear-gradient(180deg,transparent,transparent 90%,blue 0,blue);background-size:100% 10px;opacity:.5}.pixelParallel-grid-horizontal-enabled,.pixelParallel-grid-vertical-enabled{visibility:visible}</style><style type="text/css">.pixelParallel-rulers{position:relative;z-index:2147483646}.pixelParallel-ruler-x,.pixelParallel-ruler-y{display:none;position:fixed;top:0;left:0;z-index:2;background:cyan}.pixelParallel-ruler-x:after,.pixelParallel-ruler-y:after{content:"";position:absolute;top:-8px;left:-8px;right:0;bottom:0;padding:10px}.pixelParallel-ruler-x{right:0;height:1px;cursor:row-resize}.pixelParallel-ruler-y{bottom:0;width:1px;cursor:col-resize}.pixelParallel-rulers-enabled .pixelParallel-ruler-x,.pixelParallel-rulers-enabled .pixelParallel-ruler-y{display:block}</style><script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script></head>

</head>
<body >
<header>
    <div class="container-fluid container-layout">
        <div class="row">

            <div class="col-9 col-lg-9 ai-center jc-center jc-lg-center px-0">
                <div class="d-none d-lg-block">
                    <nav>
                        <ul class="mainmenu">
                            <li class="mainmenu-item">
                                <a href="<?=Url::local('main')?>" class=" mainmenu-link">
                                    ФОНД
                                </a>
                            </li>
                            <li class="mainmenu-item">
                                <a href="<?=Url::local('about')?>" class=" mainmenu-link">
                                    Про нас
                                </a>
                            </li>
                            <li class="mainmenu-item">
                                <a href="<?=Url::local('zv')?>" class=" mainmenu-link">
                                    Звітність
                                </a>
                            </li>
                            <li class="mainmenu-item">
                                <a href="<?=Url::local('main')?>" class=" mainmenu-link">
                                    Проєкти
                                </a>
                            </li>


                            <li class="mainmenu-item">
                                <a href="<?=Url::local('cont')?>" class=" mainmenu-link">
                                    Контакти
                                </a>
                            </li>
                            <li class="mainmenu-item">
                                <a href="<?=Url::local('admin')?>" class=" mainmenu-link">
                                   Авторизація
                                </a>
                            </li>
                        </ul>
                    </nav>            </div>
                <a href="<?=Url::local('donations')?>" class="btn-nav-donate btn btn-dark bolder uppercase d-flex d-sm-none ai-center font-15">
                    Підтримати
                </a>

            </div>

        </div>
</div>    </header>
<main>
<?=$content?>
    <div class="row">
        <div class="col-12 my-4 text-center">


            <div class="grid">
                <div class="g-col-12 g-col-md-6 g-col-lg-3 report-widget">
                    <div class="widget-icon mb-2">
                        <img src="../../media/img/img_dcba798dd3ac1ac0fe2f57d4de1835bf.webp" alt="Передано допомоги" width="76" height="76">
                    </div>
                    <div class="font-30 bolder"><? echo $dop[0]['sum(ingrn)'];?></div>
                    <div class="text-center">Передано допомоги</div>
                </div>
                <div class="g-col-12 g-col-md-6 g-col-lg-3 report-widget">
                    <div class="widget-icon mb-2">
                        <img src="../../media/img/img_d25afb4a69f03ddf159b7cbcc27959b6.webp" alt="Завершено та передано військовим" width="74" height="74">
                    </div>
                    <div class="font-30 bolder"><? echo $dop[0]['help'];?> зборів</div>
                    <div class="text-center">Завершено та передано військовим</div>
                </div>
                <div class="g-col-12 g-col-md-6 g-col-lg-3 report-widget">
                    <div class="widget-icon mb-2">
                        <img src="../../media/img/img_a22d7b4b0aed0ed7ce4273e6f40b6f6b.webp" alt="Допомогли військовим разом з нами" width="76" height="76">
                    </div>
                    <div class="font-30 bolder"><? echo $dop[0]['em'];?> людей</div>
                    <div class="text-center">Допомогли військовим разом з нами</div>
                </div>
                <div class="g-col-12 g-col-md-6 g-col-lg-3 report-widget">
                    <div class="widget-icon mb-2">
                        <img src="../../media/img/img_c6cc20aea1f29fe0b8ad6e705547ad8d.webp" alt="Допомоги передано до рук військових" width="76" height="76">
                    </div>
                    <div class="font-30 bolder">100%</div>
                    <div class="text-center">Допомоги передано до рук військових</div>
                </div>
            </div>                        <a href="<?=Url::local('customer')?>reports" class="btn btn-dark border-radius bolder uppercase mt-4 px-5">
                Детальніше
            </a>
        </div>
    </div>


    <div class="section-title mb-4">Поширені запитання</div>
    <div class="accordion" id="commonFaq" itemscope="" itemtype="donaty/FAQPage">
        <div class="accordion-item" itemscope="" itemprop="mainEntity" itemtype="donaty/Question">
            <div class="accordion-header" id="commonFaq-header1" itemprop="name">
                <div class="accordion-button collapsed bold" data-bs-toggle="collapse" data-bs-target="#commonFaq-body1" aria-expanded="true" aria-controls="commonFaq-body1" role="button">
                    Як я можу допомогти?
                </div>
            </div>
            <div id="commonFaq-body1" class="accordion-collapse collapse" aria-labelledby="commonFaq-header1" itemscope="" itemprop="acceptedAnswer" itemtype="donaty/Answer">
                <div class="accordion-body" itemprop="text">
                    <p>Кращим варіантом допомоги буде зробити внесок у наш благодійний фонд. Для цього потрібно перейти на сторінку ПІДТРИМАТИ та обрати зручний вам спосіб.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item" itemscope="" itemprop="mainEntity" itemtype="donaty/Question">
            <div class="accordion-header" id="commonFaq-header2" itemprop="name">
                <div class="accordion-button collapsed bold" data-bs-toggle="collapse" data-bs-target="#commonFaq-body2" aria-expanded="true" aria-controls="commonFaq-body2" role="button">
                    Чи є мінімальна сума, яку можна пожертвувати?
                </div>
            </div>
            <div id="commonFaq-body2" class="accordion-collapse collapse" aria-labelledby="commonFaq-header2" itemscope="" itemprop="acceptedAnswer" itemtype="donaty/Answer">
                <div class="accordion-body" itemprop="text">
                    <p>Ні, немає мінімальної суми пожертви. Кожен внесок, будь то один долар чи більше, може змінити ситуацію, і ми дуже вдячні за кожну пожертву.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item" itemscope="" itemprop="mainEntity" itemtype="donaty/Question">
            <div class="accordion-header" id="commonFaq-header3" itemprop="name">
                <div class="accordion-button collapsed bold" data-bs-toggle="collapse" data-bs-target="#commonFaq-body3" aria-expanded="true" aria-controls="commonFaq-body3" role="button">
                    Як буде використаний мій внесок?
                </div>
            </div>
            <div id="commonFaq-body3" class="accordion-collapse collapse" aria-labelledby="commonFaq-header3" itemscope="" itemprop="acceptedAnswer" itemtype="donaty/Answer">
                <div class="accordion-body" itemprop="text">
                    <p>Якщо ви зробите внесок на нашому сайті, ви зможете самостійно вибрати проект, який хочете підтримати. Якщо ви не оберете конкретний проект, ваші благодійні внески будуть спрямовані на підтримку основних напрямків діяльності Фонду "ТВІЙ КРОК":&nbsp;</p><ul><li>підтримка технічного оснащення сил оборони України;&nbsp;</li><li>закупівля спецтехніки та обладнання;&nbsp;</li><li>допомога Збройним Силам України та територіальній обороні.</li></ul><p>Ми зобов'язуємося використовувати всі пожертви з максимальною ефективністю.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item" itemscope="" itemprop="mainEntity" itemtype="donaty/Question">
            <div class="accordion-header" id="commonFaq-header4" itemprop="name">
                <div class="accordion-button collapsed bold" data-bs-toggle="collapse" data-bs-target="#commonFaq-body4" aria-expanded="true" aria-controls="commonFaq-body4" role="button">
                    Як стати партнером фонду ?
                </div>
            </div>
            <div id="commonFaq-body4" class="accordion-collapse collapse" aria-labelledby="commonFaq-header4" itemscope="" itemprop="acceptedAnswer" itemtype="donaty/Answer">
                <div class="accordion-body" itemprop="text">
                    <p>Якщо ви або ваша організація бажаєте стати партнером фонду , надішліть нам запит на співпрацю на <a href="mailto:office@tviykrok.com.ua"><strong>office@tviykrok.com.ua</strong></a></p>
                </div>
            </div>
        </div>
        <div class="accordion-item" itemscope="" itemprop="mainEntity" itemtype="donaty/Question">
            <div class="accordion-header" id="commonFaq-header5" itemprop="name">
                <div class="accordion-button collapsed bold" data-bs-toggle="collapse" data-bs-target="#commonFaq-body5" aria-expanded="true" aria-controls="commonFaq-body5" role="button">
                    Які запити фонд не обробляє?
                </div>
            </div>
            <div id="commonFaq-body5" class="accordion-collapse collapse" aria-labelledby="commonFaq-header5" itemscope="" itemprop="acceptedAnswer" itemtype="donaty/Answer">
                <div class="accordion-body" itemprop="text">
                    <ul><li>Основний акцент фонду складається на наданні допомоги підрозділам.</li><li>Фонд не приймає індивідуальні замовлення за благодійні внески.</li><li>Фонд не розглядає запити від волонтерів чи інших осіб, які не мають прямого запиту командування підрозділу до фонду.</li><li>Фонд не обробляє запити на доставку допомоги військовим.</li><li>Фонд не розглядає запити, які були проговорені на гарячу лінію, надіслані в особисті повідомлення команді фонду, залишені в коментарях чи повідомленнях фонду та його представників.</li></ul>
                </div>
            </div>
        </div>
        <div class="accordion-item" itemscope="" itemprop="mainEntity" itemtype="donaty/Question">
            <div class="accordion-header" id="commonFaq-header6" itemprop="name">
                <div class="accordion-button collapsed bold" data-bs-toggle="collapse" data-bs-target="#commonFaq-body6" aria-expanded="true" aria-controls="commonFaq-body6" role="button">
                    Як допомогти, якщо я не можу зробити внесок?
                </div>
            </div>
            <div id="commonFaq-body6" class="accordion-collapse collapse" aria-labelledby="commonFaq-header6" itemscope="" itemprop="acceptedAnswer" itemtype="donaty/Answer">
                <div class="accordion-body" itemprop="text">
                    <p>Ви можете допомогти Фонду онлайн. Якщо ви активний користувач соціальних мереж, ви можете:</p><ul><li>запросити своїх друзів підписатися на сторінку нашого Фонду;</li><li>поділитися нашими дописами та розповісти про проєкти Фонду.</li></ul><p>Ваша активність збільшує охоплення нашої сторінки та кількість людей, які поділяють наші цінності. Разом ми можемо зробити набагато більше.</p>
                </div>
            </div>
        </div>
    </div>
</main>



<footer class="pt-5">

    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-4 text-center text-lg-start">
                <div class="font-13 text-secondary mb-1">Контактний телефон:</div>
                <div class="font-18 text-white bolder mb-2">
                    <a href="tel:+380966451391" class="text-white">+38 (096) 645-13-91</a>
                </div>
                <div class="font-13 text-secondary mb-1">Email:</div>
                <div class="font-18 text-white bolder mb-2">
                    <a href="mailto:office@tviykrok.com.ua" class="text-white">office@ukr.ua</a>
                </div>
                <div class="font-13 text-secondary mb-1">Адреса:</div>
                <div class="font-18 text-white bolder mb-4">
                    м. Житомир
                </div>

            </div>
        </div>
    </div>

     </footer>
<link rel="stylesheet" property="stylesheet" href="../../css/framework-extras.css">
<script src="../../js/bootstrap.bundle.min.js.download" defer=""></script>
<script src="../../js/splide.min.js.download" defer=""></script>
<script src="../../js/theme.js.download" defer=""></script>
</body>
</html>