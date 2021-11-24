<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class tbl_testimonials extends Model
{
    use HasFactory;

    function getTestimonialList(){

        $res = DB::table('tbl_testimonials')->get();
        if(!$res->isEmpty()){
            return $res;
        }else{
            return $res;
        }

    }

    function addtestimonial($insertdata){
        $testData = new tbl_testimonials;
        $testData->testRate    = $insertdata['testRate'];
        $testData->testiImage  = $insertdata['testiImage'];
        $testData->testDate    = $insertdata['testDate'];
        $testData->testDesc    = $insertdata['testDesc'];
        $testData->parentName  = $insertdata['parentName'];
        $user = $testData->save();
        if($user==1){
            return 1;
        }else{
            return 0;
        }

    }

    function deletetestimonial($testId){

        $res = DB::table('tbl_testimonials')->where('testId',$testId)->delete();
        if($res==1){
            return 1;
        }else{
            return 0;
        }
    }




}
