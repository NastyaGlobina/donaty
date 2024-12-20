<?php
class AnalitmainController extends Controller
{
public function action_index(){




    $v=new View("analitmain");
    $v->dop=MainModel::Instance()->getDop();
    $v->geth=AnalitModel::Instance()->getHelpan1();
    $v->title="Допомога";
    $v->viewTemplate('admint');

   $this->responce($v);
}

}