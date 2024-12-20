<?php
class PrognozModel extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}

    public function getdata(){
        $q="SELECT month(date) as year, sum(gethelp.ingrn) as sales, gethelp.land as company  
from gethelp where year(date) = year(CURRENT_DATE)group by month(date),gethelp.land";

        return DatabaseModule::instance()->help->query($q);
       }
    public function getdata2(){
        $q="select sum(help.summa) as s, categories.name,categories.color from help inner join cathelp on cathelp.idhelp=help.id inner JOIN categories
on categories.id=cathelp.idcat
GROUP BY categories.name,categories.color";

        return DatabaseModule::instance()->help->query($q);
    }
    public function getdata3(){
        $q="select sum(help.summa) as s, categories.name,categories.color from help inner join cathelp on cathelp.idhelp=help.id inner JOIN categories
on categories.id=cathelp.idcat
GROUP BY categories.name,categories.color";

        return DatabaseModule::instance()->help->query($q);
    }
    public function getminmax(){
        $q="select min(s) as min, max(s)as max from (SELECT month(date) as m, sum(gethelp.ingrn) as s  from gethelp where year(date) = year(CURRENT_DATE)group by month(date)) t";

        return DatabaseModule::instance()->help->query($q);
    }
}