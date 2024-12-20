<?php
session_start();
class GethelpController extends Controller
{
public function action_index(){
    $v=new View("gethelp");
    $v->title="Надаю допомогу";
    $v->id=$this->post("id");
      $v->help=GethelpModel::Instance()->gethelp($this->post("id"));
    $v->helpemail=GethelpModel::Instance()->gethelpemail($this->post("id"));
    $v->cat=GethelpModel::Instance()->getCat();
    $v->help3=GethelpModel::Instance()->getHelp3();
    $v->dop=MainModel::Instance()->getDop();
    $v->viewTemplate();

    $this->responce($v);

}
    public function action_add(){
$idhelp=$this->post("id");
        if(!$this->post("amount")) throw new RoutExeption("404 param not valid",404);
        $id=GethelpModel::Instance()->add($this->apostr($this->post("land")),$this->apostr($this->post("user-occupation")),
            $this->post("amount"),$this->apostr($this->post("email")),$this->post("id"),$this->post("currency")
        );

        $v=new View("gethelp");
        $v->title="Надаю допомогу";
        $v->id1=$id;
        $v->viewTemplate();
        $v->dop=MainModel::Instance()->getDop();
        $v->help=GethelpModel::Instance()->gethelp($idhelp);
        $v->helpemail=GethelpModel::Instance()->gethelpemail($this->post("id"));
        $v->cat=GethelpModel::Instance()->getCat();
        $v->help3=GethelpModel::Instance()->getHelp3();
        $this->responce($v);
    }
}
