<?php
class AnalitController extends Controller
{
public function action_index(){




    $v=new View("analit");
    $v->dop=MainModel::Instance()->getDop();
    $v->geth=AnalitModel::Instance()->getHelp();
    $v->title="Допомога";
    $v->viewTemplate('admint');

   $this->responce($v);
}

}