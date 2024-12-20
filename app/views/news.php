<div class="content_box " style="background-image:url()">
    <style>

    </style>
<div style="display: flex">
    <?
       foreach($news as $value):
           echo "<figure><summary>{$value['id']} {$value['name']}</summary><span>{$value['date']}</span>
<p>{$value['desc1']}</p></figure>";
    ?>

   <?
    endforeach;
    ?></div>
    <div class="pagination pagination__posts">
        <? echo $pagenation; ?>

    </div>
</div>
<?
$cc=NewsModel::Instance()->getCountPage();
var_dump($cc);