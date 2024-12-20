<?php
class AboutController extends Controller
{
public function action_index(){




    $v=new View("about");
    $v->dop=MainModel::Instance()->getDop();
    $v->title="Допомога";
    $v->viewTemplate();

   $this->responce($v);
}

}