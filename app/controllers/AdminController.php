<?php
session_start();
class AdminController extends Controller
{
    public function action_index(){
        $v=new View("admin");
        $v->title="Допомога";
        $c=new AdminController();

        $v->component = $c->getResponce();

        $v->user=Admin1Model::Instance()->getuser($this->post("login"),$this->post("pass"));
        if(count($v->user)>0){
            $v->viewTemplate('first');
            $this->redirect(Url::local("admin1"));
        }else{
            $v->res='';
            $v->viewTemplate('first');
            $this->responce($v);
        }

    }
    public function action_login(){
        $v=new View("admin");
        try{
            if($this->post("login"===NULL)||$this->post("pass")===NULL) throw Exception("no login or password");
            try{
                $vv=AuthModel::Instance()->login($this->post("login"),$this->post("pass"));

                if(isset($vv['login'])){
                    $pass=$vv['password'];

                    if (password_verify($this->post("pass"),$pass)) {

                            if($vv['adminYes']=='YES'){
                                if($vv['naSite']==0) {
                                    unset($_SESSION["id"]);
                                    unset($_SESSION["role"]);
                                    unset($_SESSION["user"]);
                                }
                                $dd = "Update db_users set naSite='{$_SERVER['REMOTE_ADDR']}' where id={$vv['id']}";

                                $v->b = MainModel::Instance()->quer($dd);
                                session_start();


                                $_SESSION["user"] = $this->post("login");

                                $_SESSION["id"] = $vv['id'];

                                // echo "Ви війшли в програму";
                                $this->redirect(Url::local("analit"));


                            }




                    } else {
                        $v->viewTemplate('first');
                        $v->admin="Не вірно ввели пароль";
                        $this->responce($v);
                    }
                }

            }catch (AuthException $e){

                $v->viewTemplate('first');
                $v->admin="Логін або пароль ввели не вірно";
                $this->responce($v);
            }
        }catch (Exception $e){
            $this->redirect(Url::local("main"));
        }
    }
    public function action_logaut(){
        $user=AdminModel::Instance()->logout();
        $this->redirect(Url::local("admin"));
    }


}