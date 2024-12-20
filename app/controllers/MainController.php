<?php
class MainController extends Controller
{
public function action_index(){
    $page=(int)Router::getUriParam("page");
    $count=MainModel::Instance()->getCountPage();


    if($page<1 || $page>$count) throw new RoutExeption("invalid page number",404);
    $v=new View("main");
    $v->title="mainpage";
   // $v->help=MainModel::Instance()->gethelp();
    $v->cat=NeedhelpModel::Instance()->getCat();
    if(!empty($this->post("id"))){
        $id=$this->post("id");
        $v->help=MainModel::Instance()->getHelpCat($id);
    }else{
        $v->help=MainModel::Instance()->getHelpPage($page);
        if(!empty($this->post("status"))){
            $status=$this->post("status");
            if($status==2){
                $status=0;
            }
            $v->help=MainModel::Instance()->getHelpStat($status);
        }else{
            $v->help=MainModel::Instance()->getHelpPage($page);
        }
    }

/*  print_r($_POST);
    print_r($v);die();*/
    $v->dop=MainModel::Instance()->getDop();
    $v->title="Допомога";
    $v->pagenation=HTMLhelper::pagenation($page,$count,Url::local("main"));
    $v->viewTemplate();

   $this->responce($v);
}

}