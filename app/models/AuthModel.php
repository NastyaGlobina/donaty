<?php
class AuthModel extends Model
{
    private function __construct(){

    }

    const SESSION_COOKIE_NAME = "SESID";
    private $user=NULL;
    private static $instance=NULL;
    public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
    public function isAuth(){
        if(empty($_COOKIE[self::SESSION_COOKIE_NAME])) return false;
        $ip=$_SERVER["REMOTE_ADDR"];
        $agent = md5($_SERVER["HTTP_USER_AGENT"]);
        $token = DatabaseModule::instance()->tokens->selectOne("`token`=? AND `user_id`=? AND `user_agent`=?",[$_COOKIE[self::SESSION_COOKIE_NAME],$ip,$agent]);
        if(!$token) return false;
        if(!$this->sessionTimeTest($token)) return false;
        $this->user = DatabaseModule::instance()->getById($token["user_id"]);
        if(!$this->user){return false;
            $dd="Update table db_users set naSite=1 where id={$token['user_id']}";

            DatabaseModule::instance()->query($dd);
        }else{
            return true;}
    }
    public function getUser(){
        return $this->user;
    }
    public function getKlinik($id){
        $tmp=DatabaseModule::instance()->klinika->select("id={$id}");
        $name=$tmp[0]['name'];
        return$name;
    }
    public function logout($all=false){
        if(!$this->isAuth())return;
        if($all){
            DatabaseModule::instance()->tokens->deleteWhere("`user_id`=?",[(int)$this->user["id"]]);
        }else{

            DatabaseModule::instance()->tokens->deleteWhere("`token`=?",[$_COOKIE[self::SESSION_COOKIE_NAME]]);
            setcookie(self::SESSION_COOKIE_NAME, "",time()-1,URLROOT."/");
        }
    }

    public function login($login,$pass){

        $user = DatabaseModule::instance()->db_users->selectAdmin("`login`='{$login}' ");
        if(!$user) throw new AuthException("user not exist");
        return $user;
        //if(!$this->testPass($pass,$user["pass"])) throw new AuthException("invalid password");

    }
}