<div class="row">
    <div class="span12">
        <div class="row">
            <div class="span12">
                <section class="title-section1"></section>
                <section class="title-section"><h1 class="title-header"> Газеты</h1> <!-- BEGIN BREADCRUMBS-->
                    <ul class="breadcrumb breadcrumb__t">
                        <li><a href="<?=Url::local("");?>">Главная</a></li>
                        <li class="divider"></li>
                        <li><a href="<?=Url::local("customer");?>">customer</a></li>
                        <li class="divider"></li>
                        <li class="active"><?
                          echo $customer[0]['title'];
                            ?></li>
                    </ul> <!-- END BREADCRUMBS --></section><!-- .title-section --></div>
        </div>
        <?php
        var_dump($customer);
        ?>

    </div>
</div>