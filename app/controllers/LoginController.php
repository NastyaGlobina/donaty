<?php
class LoginController extends Controller
{
    public function action_index(){
        $v= new View("login");
        $v->title="Авторизация";
        $v->viewTemplate();
     $v->auth=AuthModel::instance()->isAuth();
        $v->viewTemplate();
        $this->responce($v);
    }
public function action_login(){

            if($this->post("login"===NULL)||$this->post("pass")===NULL) throw Exception("no login or password");

            $r=AuthModel::Instance()->login($this->post("login"),$this->post("pass"));
            if($r==1) {
                session_start();
                $_SESSION["user"] = $this->post("login");
                $this->redirect(Url::local("admin"));
            }
            else{
                echo "пароль не совпадает";die;
            }



}
    public function action_logout(){
    session_start();
    unset($_SESSION["user"]);
    session_destroy();
        $this->redirect(Url::local("main/"));
    }
}