<?php
class GalaryModel extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}

    public function gettovar($id){
        $tmp=DatabaseModule::instance()->kat_tov->select("id_k={$id}");
             return $tmp;
    }

}