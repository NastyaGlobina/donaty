<?php
session_start();
class CustomerController extends Controller
{
public function action_index(){
    session_start();
       $v=new View("customer");
    $v->customer=needhelpModel::Instance()->getcustomer();
    $v->title="Customer";
      $v->viewTemplate();
    $this->responce($v);
}
}
