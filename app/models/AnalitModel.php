<?php
class AnalitModel extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
    public function gethelp(){
        $q="select gethelp.*,help.header from gethelp INNER join help on help.id=gethelp.idhelp";

        $tmp=DatabaseModule::instance()->gethelp->query($q );
        return $tmp;
    }
    public function gethelpan(){
        $q="SELECT help.id, help.name,help.email,help.phone,help.obl,help.orgname,help.dopinf,help.date,help.img,help.header,
help.summa,help.status,help.des, sum(gethelp.ingrn) as a,help.summa-sum(gethelp.ingrn) as b FROM help left join gethelp on gethelp.idhelp=help.id
group by help.id, help.name,help.email,help.phone,help.obl,help.orgname,help.dopinf,help.date,help.img,help.header,
help.summa,help.status,help.des";

        $tmp=DatabaseModule::instance()->gethelp->query($q );
        return $tmp;
    }
    public function gethelpan1(){
        $q="SELECT gethelp.ingrn as a,categories.name,help.header, gethelp.land, help.obl,help.orgname,help.date,
 gethelp.summa as b  FROM help left join gethelp on gethelp.idhelp=help.id inner join cathelp on cathelp.idhelp=help.id
inner join categories on categories.id=cathelp.idcat";

        $tmp=DatabaseModule::instance()->gethelp->query($q );
        return $tmp;
    }
    public function gethelpan2(){
        $q="SELECT  gethelp.land, gethelp.org,categories.name,gethelp.ingrn, help.header, 
categories.color FROM help 
 left join gethelp on gethelp.idhelp=help.id 
inner join cathelp on cathelp.idhelp=help.id inner join categories on categories.id=cathelp.idcat";

        $tmp=DatabaseModule::instance()->gethelp->query($q );
        return $tmp;
    }
    public function gethelpan3(){
        $q="SELECT categories.name as land,summa as 'ingrn',obl.name FROM  help 
 inner join cathelp on cathelp.idhelp=help.id inner join categories on categories.id=cathelp.idcat
 inner join obl on obl.id=help.obl";

        $tmp=DatabaseModule::instance()->gethelp->query($q );
        return $tmp;
    }
    public function gethelpan4(){
        $q="SELECT categories.name,sum(summa) as sales, month(date) as year FROM  help 
 inner join cathelp on cathelp.idhelp=help.id inner join categories on categories.id=cathelp.idcat
 group by month(date), categories.name";

        $tmp=DatabaseModule::instance()->gethelp->query($q );
        return $tmp;
    }
    public function add($name,$email,$phone,$mess){

        $date=date('y.m.d');



        $id=DatabaseModule::instance()->mess->insert(
            [
                "name"=>$name,
                "phone"=>$phone,
                "email"=>$email,
                "mes"=>$mess,
                           ]
        );
        return $id;    }
}