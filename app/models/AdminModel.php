<?php

class AdminModel extends Model
{
    private function __construct(){

    }
    private static $instance=NULL;
    public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
    /********************/
    private static $_signupUrl = "https://www.google.com/recaptcha/admin";
    private static $_siteVerifyUrl =
        "https://www.google.com/recaptcha/api/siteverify?";
    private $_secret;
    public $success;
    public $errorCodes;

    private static $_version = "php_1.0";
    /**********************/
    public function getuser1(){
        $tmp=DatabaseModule::instance()->db_users->select('id>0 order by dat desc');
        return $tmp;
    }


    public function quer($ss){
        $tmp=DatabaseModule::instance()->db_users->exec($ss);
        return 1;
    }
    public function getenter(){
        $tmp=DatabaseModule::instance()->const->select("name like 'Enter'");

        return $tmp;
    }



    public function getuser($user,$pass){


        $tmp=DatabaseModule::instance()->db_users->select("`login`='{$user}' and `password`='{$pass}'");

        if($tmp != null){

            session_start();
            $_SESSION['user']=$user;
            $_SESSION['id_z']=$tmp[0]['id_z'];
            $_SESSION['id']=$tmp[0]['id'];
            $_SESSION['role']=$tmp[0]['role'];

            return $tmp;
        }else{

            $a=0;
            return $user;
        }
    }
    public function logout(){
        session_start();
        unset($_SESSION['user']);
        $dd = "Update db_users set naSite='0' where id={$_SESSION['id']}";
        unset($_SESSION['role']);
        unset($_SESSION['id']);
        unset($_SESSION['id_z']);


        $b = MainModel::Instance()->quer($dd);
        session_destroy();
    }
    /**************************/
    function ReCaptcha($secret)
    {
        if ($secret == null || $secret == "") {
            die("To use reCAPTCHA you must get an API key from <a href='"
                . self::$_signupUrl . "'>" . self::$_signupUrl . "</a>");
        }
        $this->_secret=$secret;
    }

    private function _encodeQS($data)
    {
        $req = "";
        foreach ($data as $key => $value) {
            $req .= $key . '=' . urlencode(stripslashes($value)) . '&';
        }
        // Cut the last '&'
        $req=substr($req, 0, strlen($req)-1);
        return $req;
    }

    private function _submitHTTPGet($path, $data)
    {
        $req = $this->_encodeQS($data);
        $response = file_get_contents($path . $req);
        return $response;
    }

    public function verifyResponse($remoteIp, $response)
    {
        // Discard empty solution submissions
        if ($response == null || strlen($response) == 0) {

            $success = false;
            $errorCodes = 'missing-input';

            return $success;
        }
        $getResponse = $this->_submitHttpGet(
            self::$_siteVerifyUrl,
            array (
                'secret' => $this->_secret,
                'remoteip' => $remoteIp,
                'v' => self::$_version,
                'response' => $response
            )
        );
        $answers = json_decode($getResponse, true);
        //$recaptchaResponse = new ReCaptchaResponse();
        if (trim($answers ['success']) == true) {
            $success = true;
        } else {
            $success = false;
            // $recaptchaResponse->errorCodes = $answers [error-codes];
        }
        return $success;
    }


    /**********************/
    public function getuser3($email,$kapcha){

        //секретный ключ
        $secret = "6Lel6ekUAAAAAP7GgRXMz_OOnyB2bvVrY4_M1r-m";
//ответ
        $response = null;
//проверка секретного ключа
        $reCaptcha = $this->ReCaptcha($secret);
        if ($kapcha) {

            $response = $this->verifyResponse(
                $_SERVER["REMOTE_ADDR"],
                $kapcha
            );

        }


        if($response != null && $response){
            echo "sddsda";die();
        }else{

            echo "noooo";die();
            return $user;
        }
    }


}

