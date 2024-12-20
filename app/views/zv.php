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
                                <span>Фінансова звітність (Надходження)</span>
                            </span>
                        </li>
                    </ol>
                </nav>

            </div>                </div>
    </div>
    <?php
    $id1 = $cn;
    $json = json_encode($id1);
?>
    <script>
        var id1 = <?= $json; ?>;
            console.log(id1);
    </script>
    <script src="../../codebase/webix.js" type="text/javascript"></script>
    <link rel="STYLESHEET" type="text/css" href="../../codebase/webix.css">

    <div id="chartDiv" style="width:900px;height:250px;margin:20px"></div>
    <script>
        var multiple_dataset = id1;
        webix.ui({
            container:"chartDiv",
            view:"chart",
            type:"bar",
            barWidth:60,
            radius:2,
            gradient:"rising",
            xAxis:{
                template:"'#mn#"
            },
            yAxis:{
                start:0,
                step:50000,
                end:500000
            },
            legend:{
                values:[{text:"Польща",color:"#2a3d3b"},{text:"Франція",color:"#6f4560"},{text:"Україна",color:"#a5984d"}
                    ,{text:"Німеччина",color:"#db3b20"},{text:"США",color:"#067f03"},{text:"Англія",color:"#1712e7"}],
                valign:"middle",
                align:"right",
                width:90,
                layout:"y"
            },
            series:[
                {
                    value:"#Польща#",
                    color: "#162a5f",
                    tooltip:{
                        template:"#Польща#"
                    }
                },
                {
                    value:"#Франція#",
                    color: "#6f4560",
                    tooltip:{
                        template:"#Франція#"
                    }
                },
                {
                    value:"#Україна#",
                    color: "#a5984d",
                    tooltip:{
                        template:"#Україна#"
                    }
                },
                {
                    value:"#Німеччина#",
                    color: "#db3b20",
                    tooltip:{
                        template:"#Німеччина#"
                    }
                },
                {
                    value:"#США#",
                    color: "#067f03",
                    tooltip:{
                        template:"#США#"
                    }
                },
                {
                    value:"#Англія#",
                    color: "#1712e7",
                    tooltip:{
                        template:"#Англія#"
                    }
                }

            ],

            data:multiple_dataset
        });
    </script>

    <div class="row mb-5 flex-column flex-md-row">
        <div class="col-12">
            <article>
                <h1>Фінансова звітність (Надходження)</h1>
                <div class="page-content">


                    <div class="container-fluid mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="home-about-section text-center mb-4">
                                    Інформація про цільове використання благодійних внесків надається в порядку, визначеному чинним законодавством України
                                </div>

                                <div class="col-12 mb-4">
                                    <ul class="category-menu">
                                        <li class="category-menu-item">
                                                    <span class="category-menu-link active">
                                Надходження
                            </span>
                                        </li>

                                    </ul>
                                </div>



                                <div id="tableReports" class="table-reports-outer">
                                    <div class="font-18 bolder mb-3 d-none"></div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-reports">
                                            <thead class="table-light">
                                            <tr>
                                                <th>Дата</th>
                                                <th>Сума</th>
                                                <th>Назва проєкту</th>
                                                <th>Email</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?
                                            foreach ($zv as $value):
                                            ?>
                                                <tr>
                                                    <td class="align-middle text-nowrap"><? echo $value['date'];?></td>
                                                    <td class="align-middle text-nowrap"><? echo $value['ingrn'];?> UAH</td>
                                                    <td class="align-middle table-reports-name"><? echo $value['header'];?></td>
                                                    <td class="align-middle text-nowrap"><? echo $value['email'];?></td>
                                                </tr>
                                            <?
                                            endforeach;
                                            ?>


                                            </tbody>
                                        </table>
                                    </div>            </div>
                            </div>
                            <div class="col-12">
                                <div id="tableReportsPagination" class="reports-pagination-outer">
                                    <div class="text-center mb-3"><? echo $pagenation; ?></div>

                                </div>
                            </div>
                        </div>
                    </div>                        </div>
            </article>
        </div>
    </div>




</div>
