<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class tbl_banner extends Model
{
    use HasFactory;


    function addbanner($insertdata){
        $bannerData = new tbl_banner;
        $bannerData->bannerImage = $insertdata['bannerImage'];
        $user = $bannerData->save();
        if($user==1){
            return 1;
        }else{
            return 0;
        }
    }

    function getBannerList(){
        $res = DB::table('tbl_banners')->get();
        if(!$res->isEmpty()){
            return $res;
        }else{
            return $res;
        }
    }
 
    function deleteBanner($banId){
        $res = DB::table('tbl_banners')->where('banId',$banId)->delete();
        if($res==1){
            return 1;
        }else{
            return 0;
        }
    }

    function getEditBannerList($banId){
        $res = DB::table('tbl_banners')->where('banId',$banId)->get();
        if(!$res->isEmpty()){
            return $res;
        }else{
            return $res;
        }
    }

    function updateBanner($updateData,$banId){
        $res = DB::table('tbl_banners')->where('banId',$banId)->update($updateData);
        if($res==1){
            return 1;
        }else{
            return 0;
        }
    }


















}
