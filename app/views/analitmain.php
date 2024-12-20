<link href="../../css/webdatarocks.css" rel="stylesheet" />
<script src="../../js/webdatarocks.toolbar.js"></script>
<script src="../../js/webdatarocks.js"></script>
<div class="container">
    <div id="wdr-component"></div>
    <?php
    $id1 = $geth;
    $json = json_encode($id1);
    ?>
    <script>
        var id1 = <?= $json; ?>;
        console.log(id1);
    </script>
    <script>

        const jsonData = [
            {
                "Product": "Apple",
                "Price": 2.50

            },
            {
                "Product": "Cherry",
                "Price": 5.25
            }
        ];
        var pivot = new WebDataRocks({
            container: "#wdr-component",
            toolbar: true,
            report: {
                dataSource: {
                    data: id1
                }
            }
        });
    </script>

</div>
