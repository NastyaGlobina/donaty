<?php
session_start();
class MainModel extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
    const COUNT_PER_PAGE = 8;

    public function getHelpPage($pagenum){
        $cpc=self::COUNT_PER_PAGE;
        $offset = ($pagenum-1)*self::COUNT_PER_PAGE;
        return DatabaseModule::instance()->help->query("SELECT help.id, help.name,help.email,help.phone,help.obl,help.orgname,help.dopinf,help.date,help.img,help.header,
help.summa,help.status,help.des, sum(gethelp.ingrn) as a,help.summa-sum(gethelp.ingrn) as b FROM help left join gethelp on gethelp.idhelp=help.id
group by help.id, help.name,help.email,help.phone,help.obl,help.orgname,help.dopinf,help.date,help.img,help.header,
help.summa,help.status,help.des ORDER BY `id` ASC LIMIT {$cpc} OFFSET {$offset}");
    }
    public function getHelpCat($id){
$q="SELECT help.id, help.name,help.email,help.phone,help.obl,help.orgname,help.dopinf,help.date,help.img,help.header,
help.summa,help.status,help.des, sum(gethelp.ingrn) as a,help.summa-sum(gethelp.ingrn) as b FROM help left join gethelp on gethelp.idhelp=help.id
inner join cathelp on cathelp.idhelp=help.id where idcat={$id} group by help.id, help.name,help.email,help.phone,help.obl,help.orgname,help.dopinf,help.date,help.img,help.header,
help.summa,help.status,help.des   ";

        return DatabaseModule::instance()->help->query($q);
    }
    public function getHelpStat($stat){

        $q="SELECT help.id, help.name,help.email,help.phone,help.obl,help.orgname,help.dopinf,help.date,help.img,help.header,
help.summa,help.status,help.des, sum(gethelp.ingrn) as a,help.summa-sum(gethelp.ingrn) as b FROM help left join gethelp on gethelp.idhelp=help.id
where status={$stat} group by help.id, help.name,help.email,help.phone,help.obl,help.orgname,help.dopinf,help.date,help.img,help.header,
help.summa,help.status,help.des ORDER BY `id` ASC  ";

        return DatabaseModule::instance()->help->query($q);
    }
    public function getCountPage(){
        $count=DatabaseModule::instance()->help->getCount();
        return ceil($count/self::COUNT_PER_PAGE);
    }
    public function getDop(){
        $count=DatabaseModule::instance()->help->query("select count(DISTINCT email) as em, sum(ingrn),(select count(*) from help where status=0) as help from gethelp");

        return $count;
    }
    public function quer($ss){
        $tmp=DatabaseModule::instance()->db_users->exec($ss);
        return 1;
    }
    public function gethelp(){
       $tmp=DatabaseModule::instance()->help->query("SELECT help.id, help.name,help.email,help.phone,help.obl,help.orgname,help.dopinf,help.date,help.img,help.header,
help.summa,help.status,help.des, sum(gethelp.ingrn) as a,help.summa-sum(gethelp.ingrn) as b FROM help left join gethelp on gethelp.idhelp=help.id
group by help.id, help.name,help.email,help.phone,help.obl,help.orgname,help.dopinf,help.date,help.img,help.header,
help.summa,help.status,help.des order by date desc limit 6" );
       return $tmp;
    }

}