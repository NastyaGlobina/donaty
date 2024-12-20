<?php
session_start();
class GethelpModel extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
    public function gethelp($id){
    $q="SELECT help.id, help.name,help.email,help.phone,help.obl,help.orgname,help.dopinf,help.date,help.img,help.header,
help.summa,help.status,help.des, sum(gethelp.ingrn) as a,help.summa-sum(gethelp.ingrn) as b FROM help left join gethelp on gethelp.idhelp=help.id
where help.id={$id} group by help.id, help.name,help.email,help.phone,help.obl,help.orgname,help.dopinf,help.date,help.img,help.header,
help.summa,help.status,help.des  ";

        $tmp=DatabaseModule::instance()->help->query($q );
        return $tmp;
    }
    public function gethelpemail($id){
        $q="select  * from gethelp where idhelp={$id}";

        $tmp=DatabaseModule::instance()->help->query($q );
        return $tmp;
    }
    public function getCat(){
       $tmp=DatabaseModule::instance()->categories->select();
       return $tmp;
    }
    public function getHelp3(){
        $tmp=DatabaseModule::instance()->help->query("Select * from help order by date desc limit 3");
        return $tmp;
    }
    public function add($land,$org,$summa,$email,$id,$currency){

        $date=date('y.m.d');
        $q="Select * from currency where id={$currency}";

        $ingrn=DatabaseModule::instance()->currency->query($q);
        $singrn=$ingrn[0]['kurs']*$summa;
      $cur=$ingrn[0]['name'];
        $id=DatabaseModule::instance()->gethelp->insert(
            ["idhelp"=>$id,
                "org"=>$org,
                "summa"=>$summa,
                "email"=>$email,
                "currency"=>$cur,
                "ingrn"=>$singrn,
"land"=>$land,
                "date"=>$date

            ]
        );
        return $id;    }
}