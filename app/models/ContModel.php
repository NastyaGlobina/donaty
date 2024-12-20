<?php
class ContModel extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}

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