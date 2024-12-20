<div class="container-fluid container-layout">


    <div class="g-col-12 mt-4">
        <div class="home-about-section text-center">
    <span class="home-help-link">
        Як отримати допомогу від нашого фонду?
    </span>
            <div class="mb-4">
                Умови та інструкції щодо отримання допомоги від нашого фонду
            </div>
            <a href="<?= Url::local('needhelp') ?>" class="btn btn-dark uppercase bolder">
                Отримати допомогу
            </a>
        </div>
    </div>
    <div class="g-col-12">
        <div class="section-title mb-4">Наші проєкти</div>
        <div class="cetegory-menu-outer mb-4">
            <div class="row flex-row-reverse justify-content-between justify-content-lg-start mx-0">

                <div class="col-12 px-0 d-none d-lg-flex">
                    <ul class="category-menu">
                        <?
                        foreach ($cat as $value):
                            ?>
                            <li class="category-menu-item">
                                <form method="post" action="<?= Url::local('main') ?>">
                                    <input type="hidden" name="id" value=" <? echo $value['id']; ?>">
                                    <button type="submit" class="category-menu-link" href="">
                                        <img class="category-menu-icon me-3"
                                             src="../../media/img/<? echo $value['icon']; ?>" width="36" height="36"
                                             alt="...">
                                        <? echo $value['name']; ?>
                                    </button>
                                </form>

                            </li>
                        <?
                        endforeach;

                        ?>


                    </ul>
                </div>

                <div class="col-10 col-lg-12 px-0">
                    <div class="mt-0 mt-lg-4 d-inline-flex">
                        <form method="post" action="<?= Url::local('main') ?>">
                            <input type="hidden" name="status" value="1">
                            <button style="border: none; background: transparent;" type="submit" class="category-menu-link" href="">
                                <span class="btn btn-dark border-rounded uppercase ps-3 pe-4 me-3 mb-3 mb-xs-0 font-12">
                            <div class="project-status-indicator bg-success me-2"></div>
                            Активні
                        </span>
                            </button>

                        </form>

                        <form method="post" action="<?= Url::local('main') ?>">
                            <input type="hidden" name="status" value="2">
                            <button style="border: none; background: transparent;" type="submit" class="category-menu-link" href="">
                                <span class="btn btn-dark border-rounded uppercase ps-3 pe-4 me-3 mb-3 mb-xs-0 font-12">
                            <div class="project-status-indicator bg-success me-2"></div>
                           Завершені
                        </span>
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="projects-list" id="projectsListActive">
            <div class="row">
                <?
                foreach($help as $value):
                ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-3 mb-4">
                        <div class="project-card border-radius p-3">
                            <a class="project-card-link"
                               href="https://tviykrok.com.ua/projects/maysterni/locker-ngu-hartiya/">
                                <picture class="project-info-preview-picture img-fluid">

                                    <img class="border-radius img-fluid project-preview-image lazy"
                                         src="../../media/img/<? echo $value['img']?>"
                                         title="<? echo $value['des']?>"
                                         alt="<? echo $value['des']?>"
                                         width="320" height="200">
                                </picture>
                                <div class="my-2 project-card-title">
                                    <b><? echo $value['header']?></b>
                                </div>
                                <div class="project-card-intro font-14 mb-3">
                                    <? echo $value['des']?>
                                </div>

                                <div class="project-status ms-auto ai-center jc-between font-13">
                                    <div class="ai-center">
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
                                    <div class="uppercase"><? echo $value['id']?></div>
                                </div>

                                <div class="progress project-card-progress mt-2">
                                    <div class="progress-bar project-card-progress-bar" role="progressbar"
                                         aria-label="Basic example" style="width: 7%" aria-valuenow="7" aria-valuemin="0"
                                         aria-valuemax="100">
                                    </div>
                                </div>
                                <div class="ai-center jc-between mt-1">
                                    <div class="project-card-progress-caption font-13 text-secondary">Зібрано</div>
                                    <div class="project-card-progress-caption font-13 text-secondary">Залишилось</div>
                                </div>
                                <div class="ai-center jc-between mt-1 mb-3">
                                    <div class="project-card-collected-amount bolder">
                                        <? echo $value['a'];?> грн
                                    </div>
                                    <div class="project-card-remaining-amount bolder">
                                        <? echo $value['b'];?> грн
                                    </div>
                                </div>
                            </a>
                            <form method="post" action="<?= Url::local('gethelp') ?>">
                                <div class="project-card-donate">
                                    <input type="hidden" name="id" value="<? echo $value['id']; ?>">
                                    <button type="submit"
                                       class="project-card-donate-button btn btn-dark w-100 uppercase bolder">
                                        Підтримати проєкт
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                <?
                endforeach;
                ?>


            </div>
        </div>

        <div class="row">
            <div class="col-12" id="projectsLoadMoreActive">
                <div class="text-center mb-2"><? echo $pagenation; ?></div>
                <div class="loadmore-pagination jc-center mb-4">
                    <a class="btn btn-dark blog-loadmore-button" style="width: 280px;" id="projectsLoadMoreButton" href="<?= Url::local('main') ?>"
                            data-request="Projects::onGetActiveProjects" data-request-data="<?= Url::local('main') ?>">
                        Показати ще
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="g-col-12">
        <div class="home-about-section">
            <h1 class="home-h1">Наша мета – максимальне сприяння технічному оснащенню сил оборони України.</h1>
            <p>Обумовлена війною екстремально складна техногенна ситуація в Україні потребує нових принципів та підходів
                в експлуатації та обслуговуванні машин, механізмі та обладнання. Швидкість, автономність, високий рівень
                технічного оснащення спеціалістів вказаної галузі виходить на передній план.&nbsp;</p>
            <p>Благодійний фонд закуповує спецтехніку та обладнання, створені за принципом «мобільних технологій», які
                дозволяють рятувати та ремонтувати пошкоджену ворогом техніку, зберігаючи тим самим здоров’я та життя
                наших захисників.</p>
        </div>
    </div>
</div>


</div>






