<?php
class ContController extends Controller
{
public function action_index(){




    $v=new View("cont");

    $v->title="Допомога";
    $v->viewTemplate();
    $v->dop=MainModel::Instance()->getDop();
   $this->responce($v);
}
    public function action_add(){

        if(!$this->post("name")) throw new RoutExeption("404 param not valid",404);
        $id=ContModel::Instance()->add($this->apostr($this->post("name")),$this->apostr($this->post("email")),
            $this->post("phone"),$this->apostr($this->post("mess"))
        );

        $v=new View("cont");
        $v->title="Надаю допомогу";
        $v->id=$id;
        $v->dop=MainModel::Instance()->getDop();
        $v->viewTemplate();
        $this->responce($v);
    }
}