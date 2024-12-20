<?php
class GallaryController extends Controller
{
public function action_index(){
    $v=new View("gallary");
    $v->images=GalaryModel::Instance()->getImages();
    $v->title="Наши услуги";
    $v->viewTemplate();
   // $v->auth=AuthModule::instance()->isAuth();
    $this->responce($v);
}
}