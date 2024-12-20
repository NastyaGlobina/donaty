<?php
class PrognozhelpController extends Controller
{
public function action_index(){




    $v=new View("prognozhelp");
    $v->geth1=AnalitModel::Instance()->getHelpan4();
    $v->geth=AnalitModel::Instance()->getHelpan3();
    $v->title="Допомога";
    $v->viewTemplate("admint");

   $this->responce($v);
}

}