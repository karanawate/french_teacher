<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class tbl_services extends Model
{
    use HasFactory;

 function getServicesList(){
    $res = DB::table('tbl_services')->get();
    if(!$res->isEmpty()){
        return $res;
    }else{
        return $res;
    }
 }

 function addservices($insertdata){
    $blogsData = new tbl_services;
    $blogsData->servicesImage   = $insertdata['servicesImage'];
    $blogsData->servicesTitle   = $insertdata['servicesTitle'];
    $blogsData->servicesDesc    = $insertdata['servicesDesc'];
    $user = $blogsData->save();
    if($user==1){
        return 1;
    }else{
        return 0;
    }
 }

 function deleteServices($serviceId){
    $res = DB::table('tbl_services')->where('serviceId',$serviceId)->delete();
    if($res==1){
        return 1;
    }else{
        return 0;
    }
 }



}
