<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class banner extends Model
{
    use HasFactory;

    
    function addbanner($insertdata){


        $bannerData = new banner;
        $bannerData->bannerImage = $insertdata['bannerImage'];
        $user = $bannerData->save();
        if($user==1){
            return 1;
        }else{
            return 0;
        }
				

    }

    function getBannerList(){

        $res = DB::table('tbl_banner')->get();
        if(!$res->isEmpty()){
            return $res;
        }else{
            return $res;
        }


    }





}
