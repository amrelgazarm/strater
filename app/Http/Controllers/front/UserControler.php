<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class UserControler extends Controller
{
    //
  public function showAdminName()
    {
        return "Amro Elgazar";

    }

    public function getindex(){

//      $data=[];
//      $data['id']=5;
//      $data['namedata']='ahemd';

$data=['nameo'=> 'ahmed', 'ago'=>100];
      $obj=new \stdClass();
      $obj->name ='amro';
        $obj->gender ='male';
        $obj->age ='33';
      return view('welcome',compact('data'))->with('obj',$obj);
    }
}
