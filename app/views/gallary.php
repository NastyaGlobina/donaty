<div class="motopress-wrapper content-holder clearfix">
    <div class="container">
        <div class="row">
            <div class="span12" data-motopress-wrapper-file="page-fullwidth.php" data-motopress-wrapper-type="content">
                <div class="row">
                    <div class="span12" data-motopress-type="static"
                         data-motopress-static-file="static/static-title.php">
                        <section class="title-section1"></section>
                        <section class="title-section"><h1 class="title-header"> Услуги</h1> <!-- BEGIN BREADCRUMBS-->
                            <ul class="breadcrumb breadcrumb__t">
                                <li><a href="<?=Url::local("");?>">Главная</a></li>
                                <li class="divider"></li>
                                <li class="active">Услуги</li>
                            </ul> <!-- END BREADCRUMBS --></section><!-- .title-section --></div>
                </div>
                <div class="row">
                    <div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
                        <div id="post-9" class="page post-9 type-page status-publish hentry"><p></p>
                                                  <style>
                                                      .content_box .posts-grid li .featured-thumbnail img{
                                                       width: 350px;
                                                          height: 300px;
                                                      }
                                                  </style>
                                                   <?

                                                   foreach($images as $id=>$url):
                                                       ?>
                            <div class="content_box " style="background-image:url()"><br>
                                <h2 class="text-center"><?=$url;?></h2> <p></p>
                                <ul class="posts-grid row-fluid unstyled custom_class">
                                                  <?
$id1=$id;
$ttt=GalaryModel::Instance()->gettovar($id1);

                                                     foreach($ttt as $value){

                                                   echo "
                                                   <li class=\"span6\">
                                        <figure class=\"featured-thumbnail thumbnail\"><img
                                                    src=\"../../wp-content/uploads/2015/07/{$value['img']}\"
                                                    alt=\"{$value['title']}\" width='250px'></figure>
                                        <figure class=\"featured-thumbnail thumbnail\" style=\"display:none;\"><img
                                                    src=\"../../wp-content/uploads/2015/07/{$value['img']}\"
                                                    alt=\"{$value['title']}\" width='250px'></figure>
                                        <div class=\"clear\"></div>
                                        <h3><a href='";
                                                  echo Url::local("tovar/{$value['id']}");
                                                   echo "' title=\"{$value['title']}\">{$value['title']}</a>
                                        </h3>
                                                                              <a href='";
                                                         echo Url::local("tovar/{$value['id']}");
                                                         echo "'
                                                class=\"btn btn-primary\" title=\"{$value['title']}\">Подробнее</a></li>
                                                   ";

                                                       }
                                                       ?>

                            </ul><!-- .posts-grid (end) --><br></div>
                        <br>

                        <? endforeach;?>
                            <br>
                            <div class="content_box " style="background-image:url()"><p></p>
                                <h2 class="text-center">О типографии</h2>
                                <p>Полиграфия "Друк" - крупнейшее в восточной Украине предприятие, осуществляющее
                                    производство книг, газет, журналов, рекламной продукции и канцелярских товаров.
                                    Производственный потенциал предприятия позволяет типографии выпускать за год более
                                    100 млн. журналов, 300 млн. газет и 50 млн. книг. По статистике это значит, что
                                    каждая десятая газета и каждая третья книга выпускаются на типографии "Фактор-Друк".
                                    За более чем 20&nbsp;лет работы на рынке книгопечатания и полиграфической продукции
                                    Украины мы неоднократно завоевывали награды и дипломы на многочисленных
                                    специализированных конкурсах, фестивалях и выставках. Наши клиенты, в число которых
                                    уже многие годы входят ведущие отечественные и зарубежные издательства,
                                    медиахолдинги и рекламные агентства, высоко ценят услуги типографии
                                    «Фактор-Друк».</p>
                                <h2 class="text-center">Производственные возможности типографии</h2>
                                <p>Парк оборудования полиграфии "Друк" превышает 55 единиц современной
                                    высокотехнологичной техники украинского и зарубежного производства. Его
                                    производственная мощность позволяет в течение 2-х часов выпускать полноцветную
                                    газету 100 000 тиражом. Условно производство поделено на 3 этапа: допечатное
                                    оборудование, печатное и послепечатное. Таким образом, возможности типографии
                                    позволяют осуществлять полный цикл изготовления газетно-журнальной, книжной и
                                    канцелярской продукции.<br> <b>Допечатные процессы</b> производятся с использованием
                                    современного цветопробного оборудования и CtP-устройств. Это позволяет сокращать
                                    время технологического цикла и обеспечивает высокое качество изображения.<br> <b>Печатное
                                        оборудование</b> позволяет осуществлять ролевую и листовую печать на самых
                                    современных моделях ролевых (в т.ч. MAN Roland «Uniset 75», «Newsline S-30») и
                                    листовых машин (в т.ч. «Speedmaster», «Man Roland 204»).<br> <b>Послепечатное
                                        оборудование</b> выполняет финальную обработку продукции: ламинирование,
                                    тиснение и высечку, листоподборку, бесшвейное скрепление, шитье металлической
                                    скобой, перфорацию под пружину, вставку книжных блоков, шитье нитками,
                                    УФ-лакирование и упаковку в термоусадочную пленку.</p>
                                <h3>Выпускаемая продукция</h3>
                                <p>Практически безграничные возможности нашего оборудования позволяют нам предоставлять
                                    клиентам многовекторные услуги типографии:</p>
                                <ul>
                                    <li>производство периодических изданий (газет, журналов форматов от А2 до А4 и от А3
                                        до А6 соответственно);
                                    </li>
                                    <li>выпуск книжной продукции с разными типами переплета (переплет на пластиковую и
                                        металлическую пружину, шитье металлической скобой, термоклеевое бесшвейное
                                        скрепление,твердый переплет, интегральный переплет);
                                    </li>
                                    <li>создание канцелярских товаров и рекламной продукции (блокноты, записные книжки,
                                        ежедневники, альбомы, календари, каталоги, буклеты, планинги и многое другое).
                                    </li>
                                </ul>
                                <p></p></div>
                            <p></p>
                            <div class="clear"></div> <!--.pagination--></div><!--post--></div>
                </div>
            </div>
        </div>
    </div>
</div>