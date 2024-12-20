<?php
session_start();
class NeedhelpController extends Controller
{
public function action_index(){
    $v=new View("needhelp");
    $v->title="Потребую допомоги";
    $v->cat=NeedhelpModel::Instance()->getCat();
    $v->obl=NeedhelpModel::Instance()->getObl();
    $v->viewTemplate();
    $v->dop=MainModel::Instance()->getDop();
    $this->responce($v);
}
    public function action_add(){
        $uploaddir = 'D:\OSPanel\domains\Donaty\media/img/';
        $uploadfile = $uploaddir . basename($_FILES['file']['name']);

        if (!is_uploaded_file($_FILES['file']['tmp_name'])) {
            echo "Файл не завантажено";
            die(); //or throw exception...
        }
//Проверка что это картинка
        if (!getimagesize($_FILES["file"]["tmp_name"])) {
            echo "Це не зображення";
            die(); //or throw exception...
        }
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
            echo "Ок.\n";
        } else {
            echo "Возможная атака с помощью файловой загрузки!\n";
        }
        if(!$this->post("name")) throw new RoutExeption("404 param not valid",404);
        $id=NeedhelpModel::Instance()->add($this->apostr($this->post("name")),$this->post("email"),
            $this->post("phone"),$this->apostr($this->post("obl")), $this->post("summa"), $_FILES['file']['name'],
            $this->post("orgname"),$this->post("dopinf"),$this->post("cat"),$this->apostr($this->post("header"))
        );
        $v=new View("needhelp");
        $v->title="Потребую допомоги";
        $v->id=$id;
        $v->dop=MainModel::Instance()->getDop();
        $v->viewTemplate();
        $this->responce($v);
    }
}
