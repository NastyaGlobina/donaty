<?php
class HelpanController extends Controller
{
public function action_index(){




    $v=new View("helpan");
    $v->dop=MainModel::Instance()->getDop();
    $v->geth=AnalitModel::Instance()->getHelpan();
    $v->title="Допомога";
    $v->viewTemplate('admint');

   $this->responce($v);
}

}