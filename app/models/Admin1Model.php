<?php
class Admin1Model extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
    public function getUser($login){
        $tmp=DatabaseModule::instance()->db_users->select("login='{$login}'");
        return $tmp;
    }




}