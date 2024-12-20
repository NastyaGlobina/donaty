<div class="container-fluid container-layout">
    <?
    if(isset($id1)){

        ?>
        <div>
            <h2> Дякуємо за вашу допомогу - <? echo $id1; ?></h2>
        </div>
        <?

    }

    ?>

    <div class="row flex-column-reverse flex-lg-row">
        <div class="col-12 col-lg-7 col-xl-8">
            <article>
                <h1 class="mb-2 d-none d-lg-block"><? echo $help[0]['header']; ?></h1>
                <div class="d-none d-lg-block">
                    <div class="project-info ai-center font-14 text-secondary mb-3">
                        <div class="project-info-published ai-center">
                            <div class="d-none d-md-block me-1">Опубліковано:</div> <? echo $help[0]['date']; ?>
                        </div>
                        <div class="project-info-views ms-3 ai-center">
                            <i class="icon icon-eye me-1"></i>
                            <div class="d-none d-md-block me-1">Переглядів:</div>
                            1162
                        </div>
                        <div class="project-status ms-auto ai-center">
                            <div class="me-3 uppercase"><? echo $help[0]['id']; ?></div>
                            <div class="d-none d-md-block me-1">Статус:</div>
                            <div class="project-status-indicator bg-success mx-2"></div>
                            <?
                            if ($help[0]['status'] == 1) {
                                echo "Активний";
                            } else {
                                echo "Пасивний";
                            }
                            ?>
                        </div>
                    </div>

                    <div class="project-preview-image mb-3">
                        <picture>

                            <img src="../../media/img/<? echo $help[0]['img']; ?>"
                                 class="project-main-image border-radius img-fluid" width="1272" height="500"
                                 title="<? echo $help[0]['header']; ?>"
                                 alt="<? echo $help[0]['header']; ?>и">
                        </picture>
                    </div>

                    <div class="mb-4">
                    </div>

                </div>

                <ul class="nav nav-pills mb-3 project-info-nav" id="projectInfoTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link w-100 font-14 active" id="projectInfoTabDescription"
                                data-bs-toggle="pill" data-bs-target="#projectDescription" type="button" role="tab"
                                aria-controls="projectDescription" aria-selected="true">
                            Опис
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link w-100 font-14" id="projectInfoTabDonations" data-bs-toggle="pill"
                                data-bs-target="#projectDonations" type="button" role="tab"
                                aria-controls="projectDonations" aria-selected="false" tabindex="-1">
                            Надходження
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="projectInfoTab">
                    <div class="tab-pane fade show active" id="projectDescription" role="tabpanel"
                         aria-labelledby="projectInfoTab" tabindex="1">
                        <div class="project-content mb-4">
                            <p><strong><? echo $help[0]['header'];?></strong> <? echo $help[0]['des'];?></p>
                            <p><br></p>


                            <p><? echo $help[0]['dopinf'];?></p>
                            <p><strong>Зроби свій крок до ПЕРЕМОГИ!</strong></p>
                            <p><br></p>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="projectDonations" role="tabpanel" aria-labelledby="projectInfoTab"
                         tabindex="2">
                        <div class="project-content mb-4" id="projectReportsTable">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-gray100">
                                    <tr>
                                        <th scope="col">Дата</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Сума</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?
                                    foreach ($helpemail as $value):
                                    ?>
                                        <tr>
                                            <td class="w-25 font-14 text-nowrap"><? echo $value['date'];?></td>
                                            <td class="w-50 font-14 text-nowrap"><? echo $value['email'];?></td>
                                            <td class="w-25 font-14 text-nowrap"><? echo $value['ingrn'];?> UAH</td>
                                        </tr>
                                    <?
                                    endforeach;
                                    ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </article>
        </div>
        <div class="col-12 col-lg-5 col-xl-4">

            <div class="d-block d-lg-none">
                <h1 class="mb-2">Мобільні майстерні Locker для підрозділів Сил спеціальних операцій Збройних сил
                    України</h1>

                <div class="project-info ai-center font-14 text-secondary mb-3">
                    <div class="project-info-published ai-center">
                        <div class="d-none d-md-block me-1">Опубліковано:</div>
                        <? echo $help[0]['date'];?>
                    </div>
                    <div class="project-info-views ms-3 ai-center">
                        <i class="icon icon-eye me-1"></i>
                        <div class="d-none d-md-block me-1">Переглядів:</div>
                        1162
                    </div>
                    <div class="project-status ms-auto ai-center">
                        <div class="d-none d-md-block me-1">Статус:</div>
                        <div class="project-status-indicator bg-success mx-2"></div>
                        Активний
                    </div>
                </div>

                <div class="project-preview-image mb-3">
                    <picture>

                        <img src="../../media/img/<? echo $help[0]['img']; ?>"
                             class="project-main-image border-radius img-fluid" width="1272" height="500"
                             title="<? echo $help[0]['header']; ?>"
                             alt="<? echo $help[0]['header']; ?>">
                    </picture>
                </div>

                <div class="mb-4">
                </div>

            </div>

            <div class="mb-4" id="projectDonationFormHeading">
                <aside>
                    <div class="section-title mb-3">Підтримати</div>
                    <div class="donataion-form" id="projectDonationForm">


                        <div class="project-donation border-radius p-3 p-md-4">
                            <div class="project-donation-progress-percent">
                                <div class="project-donation-progress-percent-bar" style="width: 0%">
                                    <div class="project-donation-progress-percent-label">
                                        <?

                                        echo $help[0]['a'];?>
                                    </div>
                                </div>
                            </div>
                            <div class="progress project-donation-progress mt-2">
                                <div class="progress-bar project-donation-progress-bar" role="progressbar"
                                     aria-label="Donation Progress" style="width: 0%" aria-valuenow="0"
                                     aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <div class="ai-center jc-between mt-2">
                                <div class="project-card-progress-caption font-13 text-secondary">Зібрано</div>
                                <div class="project-card-progress-caption font-13 text-secondary">Залишилось</div>
                            </div>
                            <div class="ai-center jc-between mt-1 mb-3">
                                <div class="project-card-collected-amount bolder font-20">
                                    <?

                                    echo $help[0]['a'];?>  грн
                                </div>
                                <div class="project-card-remaining-amount bolder font-20">
                                    <? echo $help[0]['b'];?>  грн
                                </div>
                            </div>


                            <form method="POST" action="<?=Url::local("gethelp/add")?>"
                                  accept-charset="UTF-8" data-request="ProjectsSettings::onSendNewDonate"
                                  class="project-donation-form" data-request-data="&quot;project_id&quot;:239"
                                  data-request-validate=""><input name="_session_key" type="hidden"
                                                                  value="MfIaRCxWDBxxr1CO3YhTPsfKE5m2xlyApGTeOgtq"><input
                                        name="_token" type="hidden" value="0JSyjxMG3OKzojoxLpePjAmYhyVdz9XbiDcLp9J7">

                                <input type="hidden" name="id" value="<? echo $help[0]['id'];?>">




                                <div class="project-donation-form-heading font-18 bold mb-1">Валюта внеску</div>
                                <div class="project-donation-form-section grid mb-3" style="--bs-gap: 10px;">
                                    <div class="project-donation-radio g-col-4">
                                        <input id="currencyUAH" name="currency" value="1" type="radio" checked="">
                                        <label for="currencyUAH">UAH</label>
                                    </div>
                                    <div class="project-donation-radio g-col-4">
                                        <input id="currencyEUR" name="currency" value="2" type="radio">
                                        <label for="currencyEUR">EUR</label>
                                    </div>
                                    <div class="project-donation-radio g-col-4">
                                        <input id="currencyUSD" name="currency" value="3" type="radio">
                                        <label for="currencyUSD">USD</label>
                                    </div>
                                    <div class="g-col-12">
                                        <div class="text-danger mt-2" data-validate-for="currency"></div>
                                    </div>
                                </div>

                                <div class="project-donation-form-heading font-18 bold mb-1">Сума внеску</div>
                                <div id="amountGroup" class="project-donation-form-section grid mb-3"
                                     style="--bs-gap: 10px;">
                                    <div class="project-donation-radio g-col-3">
                                        <input id="amount250" name="amount" value="250" type="radio" checked="">
                                        <label class="donation-amount" for="amount250">250</label>
                                    </div>
                                    <div class="project-donation-radio g-col-3">
                                        <input id="amount500" name="amount" value="500" type="radio">
                                        <label class="donation-amount" for="amount500">500</label>
                                    </div>
                                    <div class="project-donation-radio g-col-3">
                                        <input id="amount950" name="amount" value="950" type="radio">
                                        <label class="donation-amount" for="amount950">950</label>
                                    </div>
                                    <div class="project-donation-radio g-col-3">
                                        <input id="amountOther" name="amount" value="other" type="radio">
                                        <label class="donation-amount font-12 px-3" for="amountOther">Інша сума</label>
                                    </div>
                                    <div class="g-col-12">
                                        <div class="text-danger mt-2" data-validate-for="amount"></div>
                                    </div>
                                </div>
                                <div id="amountOtherInput" class="project-donation-other-amount d-none">
                                    <input name="amount" id="otherAmountInput"
                                           class="form-control project-donation-input border-rounded" type="text"
                                           placeholder="Вкажіть суму внеску">
                                    <div class="text-danger mt-2" data-validate-for="amount"></div>
                                </div>

                                <div class="project-donation-form-heading font-18 bold mb-1 mt-3 ">Email</div>
                                <input name="email" class="form-control project-donation-input border-rounded"
                                       type="email" placeholder="Вкажіть Ваш email">
                                <div class="text-danger mt-2" data-validate-for="email"></div>

                                <div class="project-donation-form-heading font-18 bold mb-1 mt-3 ">Країна</div>
                                <input name="land" class="form-control project-donation-input border-rounded"
                                       type="text" placeholder="Країна">
                                <div class="text-danger mt-2" data-validate-for="email"></div>

                                <div class="input-wrap">
                                    <label class="form-label mb-3">Ви...? <span class="input-req">*</span></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="user-occupation" value="found" id="checkbox-found">
                                        <label class="form-check-label" for="checkbox-found">Фонд</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="user-occupation" value="volunteer" id="checkbox-volunteer" checked="">
                                        <label class="form-check-label" for="checkbox-volunteer">Волонтер</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="user-occupation" value="business" id="checkbox-business">
                                        <label class="form-check-label" for="checkbox-business">Бізнес</label>
                                    </div>
                                </div>


                                <input type="hidden" name="user_lang" value="ua">
                                <input type="hidden" name="user_info" value="">

                                <div class="text-center mt-4 jc-center">
                                    <button type="submit"
                                            class="btn btn-dark uppercase bolder donation-payment-button border-rounded">
                                        Підтримати проєкт
                                    </button>
                                </div>

                            </form>
                      


                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-8">

            <div class="section-title mb-3">Інші проєкти</div>

            <div class="row mb-2 latest-projects">
                <?
foreach ($help3 as $value):
    ?>
    <div class="col-12 mb-3">
        <a class="latest-projects-link d-flex flex-grow-1 pb-3"
           href="">
            <picture class="d-none d-md-flex">
                <source srcset="../../media/img/<? echo $value['img'];?>">
                <img class="border-radius"
                     src="../../media/img/<? echo $value['img'];?>"
                     title="<? echo $value['header'];?>"
                     alt="<? echo $value['header'];?>"
                     width="200" height="140">
            </picture>
            <div class="latest-projects-info flex-grow-1  ps-0 ps-md-3">
                <div class="font-18 bold"><? echo $value['header'];?>
                </div>

                <div class="project-info ai-center font-13 text-secondary mb-3">
                    <div class="project-info-published ai-center">
                        <div class="d-none d-md-block me-1">Опубліковано:</div>
                        <? echo $value['date'];?>
                    </div>
                    <div class="project-info-views ai-center ms-3">
                        <i class="icon icon-eye me-1"></i>
                        <div class="d-none d-md-block me-1">Переглядів:</div>
                        36
                    </div>
                    <div class="project-status ms-auto ai-center">
                        <div class="d-none d-md-block me-1">Статус:</div>
                        <div class="project-status-indicator bg-success mx-2"></div>
                        <?
                        if($value['status']==1){
                            echo "Активний";
                        }else{
                            echo "Завершено";
                        }
                        ?>
                    </div>
                </div>

                <div class="project-card-intro-latest font-14">
                    <? echo $value['des'];?>
                </div>
            </div>
        </a>
    </div>
                <?
                endforeach;

                ?>


            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 mb-5">
            <div class="home-about-section text-center">
    <span class="home-help-link">
        Як отримати допомогу від нашого фонду?
    </span>
                <div class="mb-4">
                    Умови та інструкції щодо отримання допомоги від нашого фонду
                </div>
                <a href="<?= Url::local('needhelp'); ?>" class="btn btn-dark uppercase bolder">
                    Отримати допомогу
                </a>
            </div>
        </div>
    </div>


</div>