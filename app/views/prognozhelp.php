<div class="container-fluid container-layout">
    <script src="../../codebase/webix.js" type="text/javascript"></script>
    <link rel="STYLESHEET" type="text/css" href="../../codebase/webix.css">
    <?php

    $json = json_encode($geth1);

    $json2 = json_encode($geth);
    ?>
    <script>
        var groupdata = <?= $json; ?>;

        var groupdata2 = <?= $json2; ?>;

    </script>
    <div class="row">
        <div class="col-12 my-3 my-lg-4">
            <h2>Потреби за місяцями</h2>
            <div id="chartDiv" style="width:600px;height:250px;margin:20px"></div>
            <div style="margin-left:20px">
                <input type="button" name="some_name" value="Group by"
                       onclick="window['group'+document.getElementById('groupby').value]()">
                <select name="groupby" id="groupby">
                    <option value="A">Категорії</option>
                    <option value="B" SELECTED>місяць (total донати)</option>
                    <option value="C">місяць (max донати)</option>
                    <option value="D">місяць (min донати)</option>
                    <option value="E">місяць (average донати)</option>
                </select>
            </div>

            <script>
                webix.ui({
                    view: "chart",
                    id: "mychart",
                    container: "chartDiv",
                    type: "bar",
                    value: "#sales#",
                    preset: "alpha",
                    xAxis: {
                        template: "#id#"
                    },
                    yAxis: {},
                    scheme: {
                        $sort: {
                            by: "id",
                            as: "string",
                            dir: "asc"
                        },
                        $group: {
                            by: "year",
                            map: {
                                sales: ["sales", "sum"]
                            }
                        }
                    },
                    data: groupdata
                });

                function groupA() {
                    $$("mychart").group({
                        by: "company",
                        map: {
                            sales: ["sales", "sum"]
                        }
                    });
                    $$("mychart").sort("id", "asc", "string");
                }

                function groupB() {
                    $$("mychart").group({
                        by: "year",
                        map: {
                            sales: ["sales", "sum"]
                        }
                    });
                    $$("mychart").sort("id", "asc", "string");
                }

                function groupC() {
                    $$("mychart").group({
                        by: "year",
                        map: {
                            sales: ["sales", "max"]
                        }
                    });
                    $$("mychart").sort("id", "asc", "string");
                }

                function groupD() {
                    $$("mychart").group({
                        by: "year",
                        map: {
                            sales: ["sales", "min"]
                        }
                    });
                }

                function getAverage(prop, data) {
                    if (!data.length) return 0;
                    var summ = 0;
                    for (var i = data.length - 1; i >= 0; i--) {
                        summ += prop(data[i]) * 1;
                    }
                    ;
                    return summ / data.length;
                }

                function groupE() {
                    $$("mychart").group({
                        by: "year",
                        map: {
                            sales: ["sales", getAverage]
                        }
                    });
                }

            </script>
        </div>
    </div>



    <link href="https://cdn.webdatarocks.com/latest/webdatarocks.min.css" rel="stylesheet" />
    <script src="https://cdn.webdatarocks.com/latest/webdatarocks.toolbar.min.js"></script>
    <script src="https://cdn.webdatarocks.com/latest/webdatarocks.js"></script>
    <script src="https://cdn.webdatarocks.com/latest/webdatarocks.googlecharts.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 18px;
            background: #EDEDED;
        }
        main {
            width: 1000px;
            margin: 10px auto;
            padding: 10px 20px 30px;
            background: #FFF;
            box-shadow: 0 3px 5px rgba(0,0,0,0.2);
        }
        p {
            margin-top: 2rem;
            font-size: 13px;
        }
        #combo-chart-container {
            width: 900px;
            height: 300px;
            position: relative;
        }

        #combo-chart-container::before {
            position: absolute;
            display: block;
            width: 900px;
            height: 300px;
            left: 200;
            top: 254px;
            background: #FAFAFA;
            box-shadow: 1px 1px 0 0 #DDD;
        }
        #pie-chart-container {
            width: 500px;
            height: 450px;
            position: relative;
        }
        #pie-chart-container::before {
            content: "";
            position: absolute;
            display: block;
            width: 120px;
            height: 115px;
            left: 315px;
            top: 0;
            background: #FAFAFA;
            box-shadow: 1px 1px 0 0 #DDD;
        }
        #pie-chart-container::after {
            content: "";
            position: absolute;
            display: block;
            left: 70px;
            width: 170px;
            height: 2px;
        }

        #wdr-component img {
            max-width: 100%;
            height: auto;
            height: initial;
            border: none;
        }

        img.centered {
            margin: auto !important;
            padding-bottom: 10px;
            color: transparent !important;
            width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            font-size: 12px;
            position: relative;
            bottom: 4px;
            left: 6px;
        }
    </style>
    <main>
        <h2 style="text-align:center; margin-bottom:2;">Analytics Dashboard</h2>
        <div id="wdr-component"></div>
        <h3 style="text-align:center; margin-bottom:20px;">Max Price by Category</h3>
        <div id="line-chart-container" style="width:900px;height:450; margin-left: 35px; margin-bottom:0;"></div>
        <h3 style="text-align:center;">Total donations in percentage by category</h3>
        <div id="pie-chart-container" style="width:900px;height:450; margin-left: 50px;"></div>
        <h3 style="text-align:center; margin-bottom:0;">Categories of benefactors</h3>
        <div id="bar-chart-container" style="width:900px;height:450; margin-left: 35px; margin-top:15px;"></div>
    </main>
    <script>
        var pivot = new WebDataRocks({
            container: "#wdr-component",
            toolbar: true,
            height: 550,
            width: 1000,
            customizeCell: customizeCellFunction,
            report: {
                dataSource: {
                    data: getJSONData()
                },
                slice: {
                    rows: [
                        {
                            uniqueName: "land"
                        }
                    ],
                    columns: [
                        {
                            uniqueName: "Measures"
                        },
                        {
                            uniqueName: "org"
                        },
                        {
                            uniqueName: "name"
                        }
                    ],
                    measures: [
                        {
                            uniqueName: "ingrn",
                            aggregation: "sum"
                        }
                    ]
                },
                formats: [
                    {
                        name: "currency",
                        thousandsSeparator: " ",
                        decimalSeparator: ".",
                        currencySymbol: "$",
                        currencySymbolAlign: "left",
                        nullValue: "",
                        textAlign: "right",
                        isPercent: false
                    }
                ],
                options: {
                    grid: {
                        showHeaders: false
                    }
                }
            },
            reportcomplete: function () {
                pivot.off("reportcomplete");
                pivotTableReportComplete = true;
                createLineChart();
                createPieChart();
                createBarChart();
            }
        });
        var pivotTableReportComplete = false;
        var googleChartsLoaded = false;

        google.charts.load("current", { packages: ["corechart", "bar"] });

        google.charts.setOnLoadCallback(onGoogleChartsLoaded);

        function onGoogleChartsLoaded() {
            googleChartsLoaded = true;
            if (pivotTableReportComplete) {
                createLineChart();
                createPieChart();
                createBarChart();
            }
        }

        function createLineChart() {
            if (googleChartsLoaded) {
                pivot.googlecharts.getData(
                    {
                        type: "line",
                        slice: {
                            rows: [
                                {
                                    uniqueName: "land"
                                }
                            ],
                            columns: [
                                {
                                    uniqueName: "Measures"
                                },


                            ],
                            measures: [
                                {
                                    uniqueName: "ingrn",
                                    aggregation: "avg"
                                },
                            ]
                        }
                    },
                    drawLineChart,
                    drawLineChart
                );
            }
        }

        function drawLineChart(_data) {
            var data = google.visualization.arrayToDataTable(_data.data);
            var formatter = new google.visualization.NumberFormat({
                fractionDigits: 2,
                prefix: "$"
            });
            formatter.format(data, 1);
            var options = {
                colors: ["#2A9D8F", "#E9C46A", "#E76F51"],
                bars: "horizontal"
            };
            var chart = new google.visualization.LineChart(
                document.getElementById("line-chart-container")
            );
            chart.draw(data, options);
        }

        function createPieChart() {
            if (googleChartsLoaded) {
                pivot.googlecharts.getData(
                    {
                        type: "pie",
                        slice: {
                            rows: [
                                {
                                    uniqueName: "land"
                                }
                            ],
                            columns: [
                                {
                                    uniqueName: "Measures"
                                }
                            ],
                            measures: [
                                {
                                    uniqueName: "ingrn",
                                    formula: 'sum("ingrn")',
                                    individual: true,
                                    caption: "Total Donats"
                                }
                            ]
                        }
                    },
                    drawPieChart,
                    drawPieChart
                );
            }
        }

        function drawPieChart(_data) {
            var data = google.visualization.arrayToDataTable(_data.data);
            var formatter = new google.visualization.NumberFormat({
                fractionDigits: 2,
                prefix: "$"
            });
            formatter.format(data, 1);
            var options = {
                legend: {
                    position: "bottom"
                },
                pieHole: 0.35,
                chartArea: { height: "85%" },
                pieSliceBorderColor: "none",
                colors: ["#A5D8DD", "#EA6A47", "#0091D5"]
            };
            var chart = new google.visualization.PieChart(
                document.getElementById("pie-chart-container")
            );
            chart.draw(data, options);
        }

        function createBarChart() {
            if (googleChartsLoaded) {
                pivot.googlecharts.getData(
                    {
                        type: "bar",
                        slice: {
                            rows: [
                                {
                                    uniqueName: "name"
                                }
                            ],
                            columns: [
                                {
                                    uniqueName: "Measures"
                                }
                            ],
                            measures: [
                                {
                                    uniqueName: "name",
                                    formula: 'sum("ingrn")',
                                    caption: "Total Number"
                                }
                            ]
                        }
                    },
                    drawBarChart,
                    drawBarChart
                );
            }
        }

        function drawBarChart(_data) {
            var data = google.visualization.arrayToDataTable(_data.data);
            var formatter = new google.visualization.NumberFormat({
                fractionDigits: 2,
                prefix: "$"
            });
            formatter.format(data, 1);
            var options = {
                colors: ["#2A9D8F"],
                bars: "horizontal"
            };
            var chart = new google.charts.Bar(
                document.getElementById("bar-chart-container")
            );
            chart.draw(data, options);
        }

        /* Insert icons to the cells */
        /*Icons made by Smashicons from www.flaticon.com */
        function customizeCellFunction(cell, data) {
            if (
                data.type == "value" &&
                !data.isDrillThrough &&
                data.isGrandTotalColumn &&
                !data.isTotalRow
            ) {
                if (data.value < 15000) {
                    cell.text =
                        "<img src='https://static.webdatarocks.com/uploads/2019/02/21213347/icons8-decline-64-1.png' class='centered'>";
                } else if (data.value >= 15000) {
                    cell.text =
                        "<img src='https://static.webdatarocks.com/uploads/2019/02/21213348/icons8-account-64.png' class='centered'>";
                }
            }
        }

        function getJSONData() {
let head= {
    Price: {
        type: "number"
    },
    Quantity: {
        type: "number"
    },

    ProductGroup: {
        type: "string"
    },
    Product: {
        type: "string"
    },

    Country: {
        type: "string"
    },

    Channel: {
        type: "string"
    }
};


            return groupdata2 ;

        }

    </script>
</div>