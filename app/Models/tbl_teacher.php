<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class tbl_teacher extends Model
{
    use HasFactory;


    function getTeacherList(){

        $res = DB::table('tbl_teachers')->get();
        if(!$res->isEmpty()){
            return $res;
        }else{
            return $res;
        }

    }

    function addteacher($insertdata){
            
        $testData = new tbl_teacher;
        $testData->testRate     = $insertdata['testRate'];
        $testData->teacherImage = $insertdata['teacherImage'];
        $testData->testDesc     = $insertdata['testDesc'];
        $testData->teacherHead  = $insertdata['teacherHead'];
        $user = $testData->save();
        if($user==1){
            return 1;
        }else{
            return 0;
        }

    }

    function deleteteacherId($teachId)
    {
        $res = DB::table('tbl_teachers')->where('teachId',$teachId)->delete();
        if($res==1){
            return 1;
        }else{
            return 0;
        }
    }









}
