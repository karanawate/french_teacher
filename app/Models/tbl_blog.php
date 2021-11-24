<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class tbl_blog extends Model
{
    use HasFactory;
 

    function getBlogList(){

        $res = DB::table('tbl_blogs')->get();
        if(!$res->isEmpty()){
            return $res;
        }else{
            return $res;
        }

    }

    function getBlogListId($blogId){
        $res = DB::table('tbl_blogs')->where('blogId',$blogId)->get();
        if(!$res->isEmpty()){
            return $res;
        }else{
            return $res;
        }
    }
    
    function addBlogs($insertdata)
    {
        $blogsData = new tbl_blog;
        $blogsData->blogImage   = $insertdata['blogImage'];
        $blogsData->blogTitle   = $insertdata['blogTitle'];
        $blogsData->blogDate    = $insertdata['blogDate'];
        $blogsData->description = $insertdata['description'];
        $user = $blogsData->save();
        if($user==1){
            return 1;
        }else{
            return 0;
        }
    
    }

    function deleteblog($blogId){

        $res = DB::table('tbl_blogs')->where('blogId',$blogId)->delete();
        if($res==1){
            return 1;
        }else{
            return 0;
        }
    }

    
































}
