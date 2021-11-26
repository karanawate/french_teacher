<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Session;

class tbl_login extends Model
{
    use HasFactory;

    public $table = 'tbl_login';

    protected  $primaryKey   = 'logId';
    
    public $fillable = [
        'UserMobile',
        'UserEmail',
        'UserPassword',
        'createDT',
        'adminRole',
        'adminStatus',
        'UserName',
        'adminRole'
    ];

    public $dates = false;


    function getUser($insertdata)
    {

        $user = DB::table('tbl_login')->where('UserMobile',$insertdata['UserMobile'])
                                      ->where('UserPassword',$insertdata['UserPassword'])
                                      ->get();
        if(!$user->isEmpty()){
            Session::put('usersession', $user);
            return 1;
        }else{
            return 0;
        }

    }

    function updateUser($updateData,$logId)
    {
        $user = DB::table('tbl_login')->where('logId',$logId)->update($updateData);
        if($user==1){
            return 1;
        }else{
            return 0;
        }

    }

    function checkMobile($UserMobile){

        $user = DB::table('tbl_login')->where('UserMobile',$UserMobile)->get();
        if(!$user->isEmpty()){
            return 1;
        }else{
            return 0;
        }

    }

    function updatepass($updatedata,$UserMobile){

        $res = DB::table('tbl_login')->where('UserMobile',$UserMobile)->update($updatedata);
        if($res==1){
            return 1;
        }else{
            return 0;
        }
    }


}
