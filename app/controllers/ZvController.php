<?php
class ZvController extends Controller
{
public function action_index(){
    $page=(int)Router::getUriParam("page");
    $count=ZvModel::Instance()->getCountPage();


    if($page<1 || $page>$count) throw new RoutExeption("invalid page number",404);



    $v=new View("zv");

    $v->title="Допомога";
    $v->viewTemplate();
    $v->pagenation=HTMLhelper::pagenation($page,$count,Url::local("zv"));
    $v->zv=ZvModel::Instance()->getzv($page);
    $v->cn=ZvModel::Instance()->getzvgr();
    $v->dop=MainModel::Instance()->getDop();
   $this->responce($v);
}

}