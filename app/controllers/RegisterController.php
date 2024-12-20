<?php
class RegisterController extends Controller
{
    public function action_index(){
        $v= new View("register");
        $v->title="Авторизация";

        $v->viewTemplate();

        $this->responce($v);
    }
    public function action_reg(){
        $v= new View("register");
        $v->title="Авторизация";
$res=AuthModel::Instance()->reg($this->post('login'),$this->post('pass'),$this->post('email'));
$v->res=$res;
        $v->viewTemplate();
         $this->responce($v);
    }
    public function action_act(){
        session_start();
        $v=new View("register");
        if (isset($_GET['login'])) {
            $login =$_GET['login']; }
        else {
            $v->res9="Помилка! Мабуть якісь дані були втрачені при передачі їх на сервер. Втрачено інформацію: ЛОГІН. Нам шкода про це :( ";
        }
        if (isset($_GET['secret_key'])){
            $code= $_GET['secret_key'];

        }
        else {
            $v->res="Помилка! Мабуть якісь дані були втрачені при передачі їх на сервер. Втрачено інформацію: СЕКРЕТНИЙ КЛЮЧ. Нам шкода про це :( ";
        }


       $email=AuthModel::Instance()->getEmail($_GET['login']);





        $codekeygen= SHA1($email.$login);


        if ($codekeygen == $code) {
            $ok= "YES";
            AuthModel::Instance()->verEmail($ok,$login);
              $v->res='Ваш Е-mail підтвержений! Можете війти в систему.';

        }
        else{
            $v->res="Іноді, так буває! Невизначена помилка, але запевняємо Вас, що ми зробимо все можливе, щоб би попередити це відверте неподобство!";
        }

        $v->title="Програма реєстрації хворих на COVID 19";
        $c=new RegisterController();

        $v->viewTemplate();
        $this->responce($v);

    }
}