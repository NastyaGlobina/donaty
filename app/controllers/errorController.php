<?php
class ErrorController extends Controller
{
public function action_index(){
    $v=new View("error");
    $v->title="mainpage";
    $c=new ErrorController();


    $v->viewTemplate('error');

   $this->responce($v);
}

}