<?php
class OnenewsController extends Controller
{
public function action_index(){
    $v=new View("onenews");
    $id=(int)Router::getUriParam("id");
    $v->news=GalaryModel::Instance()->getonenews($id);
    $v->title="Наши услуги";
    $v->viewTemplate();
    $this->responce($v);
}
}