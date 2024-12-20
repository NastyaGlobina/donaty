<?php
class NewsController extends Controller
{
public function action_index(){
    $page=(int)Router::getUriParam("page");
    $count=NewsModel::Instance()->getCountPage();
    if($page<1 || $page>$count) throw new RoutExeption("invalid page number",404);
    $v=new View("news");
    $v->news=NewsModel::Instance()->getNewsPage($page);
    $v->title="Наши новости";
    $v->pagenation=HTMLhelper::pagenation($page,$count,Url::local("news"));
    $v->viewTemplate();
  //  $v->auth=AuthModule::instance()->isAuth();
    $this->responce($v);
}
}