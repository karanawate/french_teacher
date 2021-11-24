<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;
class tbl_otplogs extends Model
{
    use HasFactory;

    function insertlogs($insertdata){

        $blogsData = new tbl_otplogs;
        $blogsData->userMobile       = $insertdata['UserMobile'];
        $blogsData->otpNumber        = $insertdata['otpNumber'];
        $blogsData->user_OTP_Status  = $insertdata['user_OTP_Status'];
        $user = $blogsData->save();
        if($user==1){
            return 1;
        }else{
            return 0;
        }
        
    }

    function otpnumbercheck($otpnumber){
        $res = DB::table('tbl_otplogs')->where('otpnumber',$otpnumber)->get();
        if(!$res->isEmpty()){
            return "1";
        }else{
            return "0";
        }
    }

}
