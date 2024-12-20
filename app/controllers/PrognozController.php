<?php
class PrognozController extends Controller
{
public function action_index(){




    $v=new View("prognoz");
    $v->dop=PrognozModel::Instance()->getdata();
    $v->d2=PrognozModel::Instance()->getdata2();
    $v->minmax=PrognozModel::Instance()->getminmax();
    $v->geth=AnalitModel::Instance()->getHelpan2();
    $v->title="Допомога";
    $v->viewTemplate("admint");

   $this->responce($v);
}

}