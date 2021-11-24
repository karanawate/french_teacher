<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class tbl_comments extends Model
{
    use HasFactory;


    function getComments($id){
        
        $res = DB::table('tbl_comments')->where('blogid',$id)->get();
        if(!$res->isEmpty()){
            return $res;
        }else{
            return $res;
        }

    }

    function count($id){
        $res = DB::table('tbl_comments')->where('blogid',$id)->get();
        if(!$res->isEmpty()){
            return $res->count();
        }else{
            return $res;
        }

    }


    function addcomments($insertdata){

        $blogsData = new tbl_comments;
        $blogsData->commentMsg   = $insertdata['commentMsg'];
        $blogsData->blogid       = $insertdata['blogid'];
        $blogsData->userName     = $insertdata['userName'];
        $user = $blogsData->save();
        if($user==1){
            return 1;
        }else{
            return 0;
        }
    }


    
}
