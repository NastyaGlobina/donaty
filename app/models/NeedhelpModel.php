<?php
session_start();
class NeedhelpModel extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
    public function getCat(){
       $tmp=DatabaseModule::instance()->categories->select();
       return $tmp;
    }
    public function getObl(){
        $tmp=DatabaseModule::instance()->obl->select();
        return $tmp;
    }
    public function add($name,$email,$phone,$obl,$summa,$file,$orgname,$dopinf,$cat,$header){
$des=mb_substr($dopinf,0,100);

        $date=date('y.m.d');
        $id=DatabaseModule::instance()->help->insert(
            ["name"=>$name,
                "email"=>$email,
                "phone"=>$phone,
                "obl"=>$obl,
                "summa"=>$summa,
                "img"=>$file,
                "orgname"=>$orgname,
                "dopinf"=>$dopinf,
                "date"=>$date,
                "header"=>$header,
                "status"=>1,
                "des"=>$des

            ]
        );
        foreach ($cat as $value):
          DatabaseModule::instance()->cathelp->insert(
            ["idcat"=>$value,
                "idhelp"=>$id
                            ]
        );
        endforeach;
        return $id;
    }
}