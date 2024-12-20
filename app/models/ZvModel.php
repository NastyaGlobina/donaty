<?php
class ZvModel extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
    const COUNT_PER_PAGE = 8;
    public function getzv($pagenum){
        $cpc=self::COUNT_PER_PAGE;
        $offset = ($pagenum-1)*self::COUNT_PER_PAGE;
    $q="SELECT gethelp.*,help.header FROM `gethelp` inner join help on help.id=gethelp.idhelp ORDER BY `id` desc LIMIT {$cpc} OFFSET {$offset}";
        $tmp=DatabaseModule::instance()->gethelp->query($q);
             return $tmp;
    }
    public function getCountPage(){
        $count=DatabaseModule::instance()->gethelp->getCount();
        return ceil($count/self::COUNT_PER_PAGE);
    }
    public function getzvgr(){
        $cn=DatabaseModule::instance()->gethelp->query("select month(t.date) as mn, 
       sum(IF(land = 'Польща', t.ingrn, null)) as 'Польща',
       sum(IF(land = 'Англія', t.ingrn, null)) as 'Англія',
       sum(IF(land = 'США', t.ingrn, null)) as 'США',
       sum(IF(land = 'Франція', t.ingrn, null)) as 'Франція',
       sum(IF(land = 'Нідерланди', t.ingrn, null)) as 'Нідерланди',
       sum(IF(land = 'Україна', t.ingrn, null)) as 'Україна',
       sum(IF(land = 'Німеччина', t.ingrn, null)) as 'Німеччина'
              
from gethelp t
group by month(t.date)");
        return $cn;
    }
}