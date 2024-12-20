<link rel="stylesheet" href="../../css/bootstrap.css" />
<link rel="stylesheet" href="../../css/bdtStyle.css" />
<link rel="stylesheet" href="../../css/bdt.css" />
<script src="../../js/jquery-1.7.min.js"></script>
<script src="../../js/bootstrap.js"></script>
<script src="../../js/sortelement.js"></script>
<script src="../../js/bdtJs.js"></script>

<script>
    $(document).ready( function () {
        $('#bootstrap-table').bdt();
    });
</script>
<style>
    .table{
        font-size: 12px;
        font-weight: bold;
    }
    #r th{
    font-size: 16px;
    }

    .bdt > tbody > tr > td, .bdt > tbody > tr > th, .bdt > tfoot > tr > td, .bdt > tfoot > tr > th, .bdt > thead > tr > td, .bdt > thead > tr > th{
        padding: 3px 5px 3px 0px;
    }
</style>
<br>
<br>

<div class="container">
    <table class="table table-hover" id="bootstrap-table">
        <thead>
        <tr class="bg-warning " id="r">
            <th>Ід</th>
            <th>Проект</th>
            <th>Пошта</th>
            <th>Сума</th>
            <th>Країна</th>
            <th>Дата</th>
            <th>Організація</th>
            <th>Валюта</th>
            <th>В грн</th>
        </tr>
        </thead>
        <tbody>
        <?
foreach ($geth as $value):
        echo "<tr><td>{$value['id']}</td>
<td>{$value['header']}</td>
<td>{$value['email']}</td>
<td>{$value['summa']}</td>
<td>{$value['land']}</td>
<td>{$value['date']}</td>
<td>{$value['org']}</td>
<td>{$value['currency']}</td>
<td>{$value['ingrn']}</td></tr>";
        endforeach;
        ?>
        </tbody>
    </table>

</div>
<br><br><br>