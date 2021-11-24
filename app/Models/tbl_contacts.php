<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class tbl_contacts extends Model
{
    use HasFactory;
 

    function getcontactList(){

        $res = DB::table('tbl_contacts')->get();
        if(!$res->isEmpty()){
            return $res;
        }else{
            return $res;
        }

    }
    
    function addcontactus($insertdata)
    {
        $blogsData = new tbl_contacts;
        $blogsData->name       = $insertdata['name'];
        $blogsData->email      = $insertdata['email'];
        $blogsData->subject    = $insertdata['subject'];
        $blogsData->message    = $insertdata['message'];
        $user                  = $blogsData->save();
        if($user==1){
            return 1;
        }else{
            return 0;
        }
    
    }

    function deletecontact($contId){

        $res = DB::table('tbl_contacts')->where('contId',$contId)->delete();
        if($res==1){
            return 1;
        }else{
            return 0;
        }
    }

    
































}
