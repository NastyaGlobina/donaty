<?php
class BotController extends Controller
{
public function action_index(){
    header('refresh: 2');
    $v=new View("bot");
    $v->title="mainpage";
    $c=new BotController();
    $v->news=BotModel::Instance()->bot();

    $v->viewTemplate();

   $this->responce($v);
}

}